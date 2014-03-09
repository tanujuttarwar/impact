<?php
	class C_Position extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('position','mb');
			$this->form_validation->set_rules('position_name', 'Position Name', 'required|is_unique[position.position_name]');
			$this->form_validation->set_rules('position_description', 'Position Name', 'required|is_unique[position.position_description]');
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->position_name = $_POST['position_name'];
				$this->mb->position_description = $_POST['position_description'];

				$this->mb->save();
				
				$data['message'] = 'position created successfully';
			}
			
			$this->load->view('core/position/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('position','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('position_name', 'Position Name', 'required');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->position_id = $_POST['position_id'];
					$this->mb->position_name = $_POST['position_name'];
					$this->mb->position_description = $_POST['position_description'];
					$this->mb->save();
					
					$data['message'] = 'position updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/position/edit',$data);
			}
			else{
				$data['message'] = 'No such position exists. Create it!';	
				$this->load->view('core/position/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('position','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/position/viewall',$data);
			}
			else{
				$data['message'] = 'No position exists. Create one!';	
				$this->load->view('core/position/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('position','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_position/viewall');
		}
		
	}