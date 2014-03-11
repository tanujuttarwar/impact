<?php
	class C_Event_registration extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($aid=-1 , $eid=-1){
			$this->load->model('alumni_info','av');
			$data['alumni_info'] = $this->av->find_by_id($aid);
			
			$this->load->model('event','ev');
			$data['event'] = $this->ev->find_by_id($eid);
			
			if(!$data['alumni_info'])
				redirect('core/c_event/viewall');
			if(!$data['event'])
				redirect('core/c_event/viewall');
			
			$this->load->model('event_registration','mb');
			$this->form_validation->set_rules('status', 'Status', 'required');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->event_id = $eid;
				$this->mb->alumni_id = $aid;
				$this->mb->status = $_POST['status'];
				$this->mb->accomodation = $_POST['accomodation'];
				$this->mb->family_member = $_POST['family_member'];
				$this->mb->arrival_travel = $_POST['arrival_travel'];
				$this->mb->arrival_datetime = $_POST['arrival_datetime'];
				$this->mb->arrival_detail = $_POST['arrival_detail'];
				$this->mb->dept_datetime = $_POST['dept_datetime'];
				$this->mb->save();
				
				$data['message'] = 'Registered successfully';
			}
			
			$this->load->view('core/event_registration/add',$data);
			
		
		}
		
		function edit($id){
			   
			$this->load->model('event_registration','mb');
			$data['message'] = '';
			$data['event_registration'] = $this->mb->find_by_id($id);
			if($data['event_registration']){
				
				$this->form_validation->set_rules('status', 'Status', 'required[event_registration.status]');
				
				if ($this->form_validation->run() == TRUE){
					
					$this->mb->eventreg_id = $id;
					$this->mb->event_id = $data[event_registration]->event_id;
					$this->mb->alumni_id = $data[alumni_info]->alumni_id;
					$this->mb->status = $_POST['status'];
					$this->mb->accomodation = $_POST['accomodation'];
					$this->mb->family_member = $_POST['family_member'];
					$this->mb->arrival_travel = $_POST['arrival_travel'];
					$this->mb->arrival_datetime = $_POST['arrival_datetime'];
					$this->mb->arrival_detail = $_POST['arrival_detail'];
					$this->mb->dept_datetime = $_POST['dept_datetime'];
					$this->mb->save();
					$data['message'] = 'Hotel information edited successfully';
					$data['event_registration'] = $this->mb;
					
				}
				$this->load->view('core/event_registration/edit',$data);
			}
			else{
				$data['message'] = 'No such hotel available. Register it!';	
				$this->load->view('core/event_registration/add',$data);
			}
			
		}
		
		function viewall($aid, $eid){
			$this->load->model('alumni_info','av');
			$data['alumni_info'] = $this->av->find_by_id($aid);
		
			$this->load->model('event','ev');
			$data['event'] = $this->ev->find_by_id($eid);
			if(!$data['alumni_info'] && !$data['event'])
				redirect('core/c_event/viewall');
				
			$this->load->model('event_registration','mb');
			$data['objects'] = $this->mb->find_all_by_alumni_event($aid, $eid);
			if(!empty($data['objects']))
			{
				$this->load->view('core/event_registration/viewall',$data);
			}
			else{
				redirect('core/c_event/viewall');
			}
		}
		
		function delete($id){
			$this->load->model('event_registration','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/event_registration/viewall');
		}
		
	}