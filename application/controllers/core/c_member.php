<?php
	class C_member extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($eid){
		
		     $this->load->model('event','cm');
			$data['event'] = $this->cm->find_by_id($eid);
			
			//$this->load->model('event','ev');
			//$data['event'] = $this->ev->find_by_id($mid);
			
			//$this->load->model('position','ps');
			//$data['position'] = $this->ps->find_by_id($mid);
			
			//$this->load->model('role','rl');
			//$data['role'] = $this->rl->find_by_id($mid);
			
			//$this->load->model('degree','dr');
			//$data['degree'] = $this->dr->find_by_id($mid);
			
			if(!$data['event'])
				redirect('core/c_event/viewall');
			//elseif(!$data['branch'])
				//redirect('core/c_branch/viewall');
			//elseif(!$data['position'])
				//redirect('core/c_position/viewall');
			//elseif(!$data['committee'])
				//redirect('core/c_commitee/viewall');
			//elseif(!$data['role'])
				//redirect('core/c_role/viewall');
			
			
			$this->load->model('member','mb');
			$this->form_validation->set_rules('college_id', 'College Id', 'required');
			$this->form_validation->set_rules('member_name', 'Member name', 'required');
			$this->form_validation->set_rules('branch_id', 'Branch Id', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required|numeric');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			//$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
			//$this->form_validation->set_rules('photo', 'Photo', 'required');
			$this->form_validation->set_rules('committee_id', 'Committee Id', 'required');
			$this->form_validation->set_rules('position_id', 'Position Id', 'required');
			//$this->form_validation->set_rules('committee_id', 'Committee Id', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required');
		//	$this->form_validation->set_rules('status', 'Status', 'required|alpha[member.status]');
			//$this->form_validation->set_rules('degree_id', 'Degree Id', 'required');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->college_id = $_POST['college_id'];
				$this->mb->member_name = $_POST['member_name'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->year = $_POST['year'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->contact_no = $_POST['contact_no'];
				$this->mb->email = $_POST['email'];
				$this->mb->photo = @$_POST['photo'];
				$this->mb->event_id = $eid;
				$this->mb->position_id = $_POST['position_id'];
				$this->mb->committee_id = $_POST['committee_id'];
				$this->mb->password = $_POST['password'];
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->status = $_POST['status'];
				$this->mb->degree_id = $_POST['degree_id'];
				
				
				$this->mb->save();
				
				$data['message'] = 'Member created successfully';
			}
			
			$this->load->view('core/member/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('member','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				 
				$this->form_validation->set_rules('college_id', 'College Id', 'required');
			$this->form_validation->set_rules('member_name', 'Member name', 'alpha[member.member_name]');
			$this->form_validation->set_rules('branch_id', 'Branch Id', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required|numeric[member.year]');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|numeric[member.contact_no]');
			$this->form_validation->set_rules('email', 'Email id', 'required|valid_email[member.email]');
			//$this->form_validation->set_rules('photo', 'Photo', 'required');
			//$this->form_validation->set_rules('event_id', 'Event Id', 'required');
			$this->form_validation->set_rules('position_id', 'Position Id', 'required');
			$this->form_validation->set_rules('committee_id', 'Committee Id', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role_id', 'Role Id', 'required');
			//$this->form_validation->set_rules('status', 'Status', ' ');
			$this->form_validation->set_rules('degree_id', 'Degree Id', 'required');
			
				
				
				if ($this->form_validation->run() == TRUE){
					 
					
			    $this->mb->college_id = $_POST['college_id'];
				$this->mb->member_name = $_POST['member_name'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->year = $_POST['year'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->contact_no = $_POST['contact_no'];
				$this->mb->email = $_POST['email'];
				$this->mb->photo = $_POST['photo'];
				$this->mb->event_id = $data['object']->event_id;
				$this->mb->position_id = $_POST['position_id'];
				$this->mb->committee_id = $_POST['committee_id'];
				$this->mb->password = $_POST['password'];
				$this->mb->role_id = $_POST['role_id'];
				$this->mb->status = $_POST['status'];
				$this->mb->degree_id = $_POST['degree_id'];
					
					$this->mb->save();
					
					$data['message'] = 'Members updated successfully updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/member/edit',$data);
			}
			else{
				$data['message'] = 'No such member exists. Create it!';	
				$this->load->view('core/member/add',$data);
			}
			
		}
		
		function viewall($eid){
		 $this->load->model('event','cm');
			$data['event'] = $this->cm->find_by_id($eid);
			if(!$data['event'])
				redirect('core/c_event/viewall');
			$this->load->model('member','mb');
			$data['objects'] = $this->mb->find_all_by_event_id($eid);
			if(!empty($data['objects']))
			{
				$this->load->view('core/member/viewall',$data);
			}
			else{
				redirect('core/c_event/viewall');
			}
		}
		
		function delete($id){
			$this->load->model('member','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_member/viewall');
		}
		
	}