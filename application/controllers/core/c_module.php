<?php
	class C_module extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('module','mb');
			$this->form_validation->set_rules('module_id', 'Module Id', 'required[module.module_id]');
			
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){

				$this->mb->module_name = $_POST['module_name'];

				$this->mb->save();
				
				$data['message'] = 'Module created successfully';
			}
			

			$this->load->view('core/module/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('module','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('module_name', 'Module Name', 'required|is_unique[module.module_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->module_id = $_POST['module_id'];
					$this->mb->module_name = $_POST['module_name'];
					$this->mb->save();
					
					$data['message'] = 'Module updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/module/edit',$data);
			}
			else{
				$data['message'] = 'No such module exists. Create it!';	
				$this->load->view('core/module/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('module','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/module/viewall',$data);
			}
			else{
				$data['message'] = 'No Module exists. Create one!';	
				$this->load->view('core/module/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('module','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_module/viewall');
		}
		
	}
	