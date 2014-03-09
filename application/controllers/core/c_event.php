<?php
	class C_Event extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('event','mb');
			$this->form_validation->set_rules('event_name', 'Event Name', 'required');
			$this->form_validation->set_rules('event_datetime', 'Event Datetime', 'required');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->event_name = $_POST['event_name'];
				$this->mb->event_description = $_POST['event_description'];
				$this->mb->event_datetime = $_POST['event_datetime'];


				$this->mb->save();
				
				$data['message'] = 'event created successfully';
			}
			
			$this->load->view('core/event/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('event','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('event_name', 'Event Name', 'required');
				$this->form_validation->set_rules('event_datetime', 'Event Datetime', 'required');

				if ($this->form_validation->run() == TRUE){
					$this->mb->event_id = $_POST['event_id'];
					$this->mb->event_name = $_POST['event_name'];
					$this->mb->event_description = $_POST['event_description'];
					$this->mb->event_datetime = $_POST['event_datetime'];

					$this->mb->save();
					
					$data['message'] = 'event updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/event/edit',$data);
			}
			else{
				$data['message'] = 'No such event exists. Create it!';	
				$this->load->view('core/event/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('event','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/event/viewall',$data);
			}
			else{
				$data['message'] = 'No event exists. Create one!';	
				$this->load->view('core/event/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('event','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_event/viewall');
		}
		
	}