<?php
	class C_Degree extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('degree','mb');
			$this->form_validation->set_rules('degree_name', 'Branch Name', 'required|is_unique[degree.degree_name]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->degree_name = $_POST['degree_name'];
				$this->mb->save();
				
				$data['message'] = 'Degree created successfully';
			}
			
			$this->load->view('core/degree/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('degree','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('degree_name', 'Degree Name', 'required|is_unique[degree.degree_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->degree_id = $_POST['degree_id'];
					$this->mb->degree_name = $_POST['degree_name'];
					$this->mb->save();
					
					$data['message'] = 'Degree updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/degree/edit',$data);
			}
			else{
				$data['message'] = 'No such degree exists. Create it!';	
				$this->load->view('core/degree/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('degree','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/degree/viewall',$data);
			}
			else{
				$data['message'] = 'No degree exists. Create one!';	
				$this->load->view('core/degree/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('degree','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_degree/viewall');
		}
		
	}