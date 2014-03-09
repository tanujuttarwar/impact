<?php
	class C_permission extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('permission','mb');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required[permission.role._id]');
			$this->form_validation->set_rules('module_id', 'Module Id', 'required[permission.module_id]');
			
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->module_id = $_POST['module_id'];

				$this->mb->save();
				
				$data['message'] = 'Permission created successfully';
			}
			
			$this->load->model('role','mb1');
			$data['roles']=$this->mb1->find_all();
            $this->load->model('module','mb2');
			$data['modules']=$this->mb2->find_all();
			if(!empty($data['roles']) and !empty($data['modules']))
			   {
			    $this->load->view('core/permission/add',$data);
			   }
            elseif(empty($data['roles']))
			{
			   $data['message'] = 'No roles exits. Create roles to create permission.';
			   $this->load->view('core/roles/add',$data);
			}
			else
			{
			   $data['message'] = 'No modules exits. Create modules to create permission.';
			   $this->load->view('core/module/add',$data);
			}
		}
		
		/*function edit($id){
			$this->load->model('branch','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('branch_name', 'Branch Name', 'required|is_unique[branch.branch_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->branch_id = $_POST['branch_id'];
					$this->mb->branch_name = $_POST['branch_name'];
					$this->mb->save();
					
					$data['message'] = 'Branch updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/branch/edit',$data);
			}
			else{
				$data['message'] = 'No such branch exists. Create it!';	
				$this->load->view('core/branch/add',$data);
			}
			
		}*/
		
		function viewall(){
			$this->load->model('permission','mb');
			$this->load->model('role','mb1');
            $this->load->model('module','mb2');
			$data['model_role'] = $this->mb1;
			$data['model_permission'] = $this->mb;
			$data['model_module'] = $this->mb2;
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/permission/viewall',$data);
			}
			else{
				$data['message'] = 'No Permission exists. Create one!';	
				
			$this->load->model('role','mb1');
			$data['roles']=$this->mb1->find_all();
            $this->load->model('module','mb2');
			$data['modules']=$this->mb2->find_all();
			if(!empty($data['roles']) and !empty($data['modules']))
			   {
			    redirect('core/c_permission/add',$data);
			   }
            elseif(empty($data['roles']))
			{
			   $data['message'] = 'No roles exits. Create roles to create permission.';
			   redirect('core/c_roles/add',$data);
			}
			else
			{
			   $data['message'] = 'No modules exits. Create modules to create permission.';
			   redirect('core/module/add',$data);
			}
			
				
				
			}
		}
		
		function delete($id){
			$this->load->model('permission','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_permission/viewall');
		}
		
	}
	