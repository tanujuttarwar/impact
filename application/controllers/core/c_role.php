<?php
	class C_Role extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('role','mb');
			$this->form_validation->set_rules('role_name', 'Role Name', 'required|is_unique[role.role_name]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->role_name = $_POST['role_name'];
				$this->mb->role_desc = $_POST['role_desc'];
				$this->mb->save();
				
				$data['message'] = 'Role created successfully';
			}
			
			$this->load->view('core/role/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('role','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('role_name', 'Role Name', 'required|is_unique[role.role_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->role_id = $_POST['role_id'];
					$this->mb->role_name = $_POST['role_name'];
					$this->mb->role_desc = $_POST['role_desc'];
					$this->mb->save();
					
					$data['message'] = 'Relation updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/role/edit',$data);
			}
			else{
				$data['message'] = 'No such role exists. Create it!';	
				$this->load->view('core/role/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('role','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/role/viewall',$data);
			}
			else{
				$data['message'] = 'No role exists. Create one!';	
				$this->load->view('core/role/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('role','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_role/viewall');
		}
		
	}