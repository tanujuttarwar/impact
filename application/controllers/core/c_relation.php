<?php
	class C_Relation extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('relation','mb');
			$this->form_validation->set_rules('relation_name', 'Relation Name', 'required|is_unique[relation.relation_name]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->relation_name = $_POST['relation_name'];
				$this->mb->save();
				
				$data['message'] = 'Relation created successfully';
			}
			
			$this->load->view('core/relation/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('relation','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('relation_name', 'Relation Name', 'required|is_unique[relation.relation_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->relation_id = $_POST['relation_id'];
					$this->mb->relation_name = $_POST['relation_name'];
					$this->mb->save();
					
					$data['message'] = 'Relation updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/relation/edit',$data);
			}
			else{
				$data['message'] = 'No such relation exists. Create it!';	
				$this->load->view('core/relation/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('relation','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/relation/viewall',$data);
			}
			else{
				$data['message'] = 'No relation exists. Create one!';	
				$this->load->view('core/relation/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('relation','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_relation/viewall');
		}
		
	}