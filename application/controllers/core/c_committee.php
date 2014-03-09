<?php
	class C_Committee extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('committee','mb');
			$this->form_validation->set_rules('committee_name', 'Committee Name', 'required|is_unique[committee.committee_name]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->committee_name = $_POST['committee_name'];
				$this->mb->save();
				
				$data['message'] = 'committee created successfully';
			}
			
			$this->load->view('core/committee/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('committee','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('committee_name', 'Committee Name', 'required|is_unique[committee.committee_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->committee_id = $_POST['committee_id'];
					$this->mb->committee_name = $_POST['committee_name'];
					$this->mb->save();
					
					$data['message'] = 'Committee updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/committee/edit',$data);
			}
			else{
				$data['message'] = 'No such committee exists. Create it!';	
				$this->load->view('core/committee/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('committee','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/committee/viewall',$data);
			}
			else{
				$data['message'] = 'No committee exists. Create one!';	
				$this->load->view('core/committee/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('committee','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_committee/viewall');
		}
		
	}