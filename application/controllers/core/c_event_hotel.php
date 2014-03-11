<?php
	class C_Event_hotel extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add($eid=-1){
			$this->load->model('event','ev');
			$data['event'] = $this->ev->find_by_id($eid);
			if(!$data['event'])
				redirect('core/c_event/viewall');
			
			$this->load->model('event_hotel','mb');
			$this->form_validation->set_rules('hotel_name', 'Hotel Name', 'required[event_hotel.hotel_name]');
			$this->form_validation->set_rules('hotel_address', 'Hotel Address', 'required[event_hotel.hotel_address]');
			$this->form_validation->set_rules('rooms_available', 'Rooms Available', 'required[event_hotel.rooms_available]');
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->event_id = $eid;
				$this->mb->hotel_name = $_POST['hotel_name'];
				$this->mb->hotel_address = $_POST['hotel_address'];
				$this->mb->rooms_available = $_POST['rooms_available'];
				$this->mb->save();
				
				$data['message'] = 'Hotel added successfully';
			}
			
			$this->load->view('core/event_hotel/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('event_hotel','mb');
			$data['event_hotel'] = $this->mb->find_by_id($id);
			$data['message'] = '';
			if($data['event_hotel']){
				
				$this->form_validation->set_rules('hotel_name', 'Hotel Name', 'required');
				$this->form_validation->set_rules('hotel_address', 'Hotel Address', 'required');
				$this->form_validation->set_rules('rooms_available', 'Rooms Available', 'required[event_hotel.rooms_available]');
			
				
				if ($this->form_validation->run() == TRUE){
					
					$this->mb->eventhotel_id = $id;
					$this->mb->hotel_name = $_POST['hotel_name'];
					$this->mb->hotel_address = $_POST['hotel_address'];
					$this->mb->event_id = $data['event_hotel']->event_id;
					$this->mb->rooms_available = $_POST['rooms_available'];
					$this->mb->save();
					$data['message'] = 'Hotel information edited successfully';
					$data['event_hotel'] = $this->mb;
				}
				$this->load->view('core/event_hotel/edit',$data);
			}
			else{
				$data['message'] = 'No such hotel available. Register it!';	
				$this->load->view('core/event_hotel/add',$data);
			}
			
		}
		
		function viewall($eid){
		$this->load->model('event','ev');
			$data['event'] = $this->ev->find_by_id($eid);
			if(!$data['event'])
				redirect('core/c_event/viewall');
				
			$this->load->model('event_hotel','mb');
			$data['objects'] = $this->mb->find_all_by_event($eid);
			if(!empty($data['objects']))
			{
				$this->load->view('core/event_hotel/viewall',$data);
			}
			else{
				redirect('core/c_event/viewall');
			}
		}
		
		function delete($id){
			$this->load->model('event_hotel','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/event_hotel/viewall');
		}
		
	}