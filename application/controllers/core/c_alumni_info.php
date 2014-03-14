<?php
	class C_Alumni_Info extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('alumni_info','mb');
			$this->load->model('degree','deg');
			$this->load->model('branch','branch');
			$data['model_degree'] = $this->deg;
			$data['model_branch'] = $this->branch;
			//$this->form_validation->set_rules('alumni_id', 'Alumni ID', 'required|is_unique[alumni_info.alumni_id]');
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('degree_id', 'Degree ID', 'required');
			$this->form_validation->set_rules('branch_id', 'Branch ID', 'required');
			$this->form_validation->set_rules('email_1', 'Email ID', 'required');
			
			$this->form_validation->set_rules('mobile_1', 'Mobile Number', 'required');
			
			$this->form_validation->set_rules('year_of_passing', 'Year Of Passing', 'required');
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
			//	$this->mb->alumni_id = $_POST['alumni_id'];
				$this->mb->fname = $_POST['fname'];
				$this->mb->mname = $_POST['mname'];
				$this->mb->lname = $_POST['lname'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->degree_id = $_POST['degree_id'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->mar_status = $_POST['mar_status'];
				$this->mb->mar_anniversary = $_POST['mar_anniversary'];
				$this->mb->photo = $_POST['photo'];
				$this->mb->p_house_no = $_POST['p_house_no'];
				$this->mb->p_street_name = $_POST['p_street_name'];
				$this->mb->p_area = $_POST['p_area'];
				$this->mb->p_city = $_POST['p_city'];
				$this->mb->p_state = $_POST['p_state'];
				$this->mb->p_country = $_POST['p_country'];
				$this->mb->p_postal_code = $_POST['p_postal_code'];
				$this->mb->c_house_no = $_POST['c_house_no'];
				$this->mb->c_street_name = $_POST['c_street_name'];
				$this->mb->c_area = $_POST['c_area'];
				$this->mb->c_city = $_POST['c_city'];
				$this->mb->c_state = $_POST['c_state'];
				$this->mb->c_country = $_POST['c_country'];
				$this->mb->c_postal_code = $_POST['c_postal_code'];
				$this->mb->email_1 = $_POST['email_1'];
				$this->mb->email_2 = $_POST['email_2'];
				$this->mb->mobile_1 = $_POST['mobile_1'];
				$this->mb->mobile_2 = $_POST['mobile_2'];
				$this->mb->home_phone = $_POST['home_phone'];
				$this->mb->work_phone = $_POST['work_phone'];
				$this->mb->year_of_passing = $_POST['year_of_passing'];
				$this->mb->save();
				
				$data['message'] = 'Alumni Information created successfully';
			}
			
			$this->load->view('core/alumni_info/add',$data);
			
		}
		
		function edit($alumni_id){
			$this->load->model('alumni_info','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($alumni_id);
			
			if($data['object']){
				
			//$this->form_validation->set_rules('alumni_id', 'Alumni ID', 'required|is_unique[alumni_info.alumni_id]');
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('degree_id', 'Degree ID', 'required');
			$this->form_validation->set_rules('branch_id', 'Branch ID', 'required');
			$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
			$this->form_validation->set_rules('email_1', 'Email ID', 'required');
			
			$this->form_validation->set_rules('mobile_1', 'Mobile Number', 'required');
			$this->form_validation->set_rules('year_of_passing', 'Year Of Passing', 'required');
				
				if ($this->form_validation->run() == TRUE){
				$this->mb->alumni_id = $_POST['alumni_id'];
				$this->mb->fname = $_POST['fname'];
				$this->mb->mname = $_POST['mname'];
				$this->mb->lname = $_POST['lname'];
				$this->mb->lname = $_POST['gender'];
				$this->mb->degree_id = $_POST['degree_id'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->lname = $_POST['dob'];
				$this->mb->lname = $_POST['mar_status'];
				$this->mb->lname = $_POST['mar_anniversary'];
				$this->mb->lname = $_POST['photo'];
				$this->mb->lname = $_POST['p_house_no'];
				$this->mb->lname = $_POST['p_street_name'];
				$this->mb->lname = $_POST['p_area'];
				$this->mb->lname = $_POST['p_city'];
				$this->mb->lname = $_POST['p_state'];
				$this->mb->lname = $_POST['p_country'];
				$this->mb->lname = $_POST['p_postal_code'];
				$this->mb->lname = $_POST['c_house_no'];
				$this->mb->lname = $_POST['c_street_name'];
				$this->mb->lname = $_POST['c_area'];
				$this->mb->lname = $_POST['c_city'];
				$this->mb->lname = $_POST['c_state'];
				$this->mb->lname = $_POST['c_country'];
				$this->mb->lname = $_POST['c_postal_code'];
				$this->mb->email_1 = $_POST['email_1'];
				$this->mb->lname = $_POST['email_2'];
				$this->mb->mobile_1 = $_POST['mobile_1'];
				$this->mb->lname = $_POST['mobile_2'];
				$this->mb->home_phone = $_POST['home_phone'];
				$this->mb->lname = $_POST['work_phone'];
				$this->mb->year_of_passing = $_POST['year_of_passing'];
				$this->mb->save();
				
				$data['message'] = 'Alumni Information Updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/alumni_info/edit',$data);
			}
			else{
				$data['message'] = 'No such Alumni exists. Create it!';	
				$this->load->view('core/alumni_info/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('alumni_info','mb');
			$this->load->model('degree','deg');
			$this->load->model('branch','branch');
			$data['model_degree'] = $this->deg;
			$data['model_branch'] = $this->branch;
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/alumni_info/viewall',$data);
			}
			else{
				$data['message'] = 'No Alumni exists. Create one!';	
				$this->load->view('core/alumni_info/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('alumni-info','mb');
			$this->mb = $this->mb->find_by_id($alumni_id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_alumni_info/viewall');
		}
		
	}