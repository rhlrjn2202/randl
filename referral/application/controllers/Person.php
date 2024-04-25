<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Person extends BaseController {

	public function __construct()
	{
         parent::__construct();
        $this->load->model('user_model');
		$this->isLoggedIn();  
		$this->load->model('person_model','person');
	}

	public function Electrician()
	{
		$this->load->helper('url');
       $this->global['pageTitle'] = 'CodeInsect : Electrician';
		$this->loadViews('person_view', $this->global, NULL , NULL);
   
	}

	public function ajax_list()
	{
		$this->load->helper('url');

		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			if($person->pic)
				$row[] = '<a href="'.base_url('upload/'.$person->pic).'" target="_blank"><img src="'.base_url('upload/'.$person->pic).'" style="width:75PX;height:75px;border-radius:50%;" class="img-responsive" /></a>';
			else
				$row[] = '(No photo)';
			$row[] = $person->sl;
			$row[] = $person->name;
			$row[] = $person->email;
			$row[] = $person->phone;
			$row[] = $person->location;
			$row[] = $person->designation;
			$row[] = $person->emp_id;
			$row[] = $person->join_date;
			$row[] = $person->level;
			$row[] = $person->jobs_done;
			$row[] = $person->age;
			
			$row[] = $person->expected_amount;
			$row[] = $person->service_status;
			$row[] = $person->sub_cat;
			

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->electrician_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->electrician_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($electrician_id)
	{
		$data = $this->person->get_by_id($electrician_id);
		$data->join_date = ($data->join_date == '0000-00-00') ? '' : $data->join_date; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}
	
	public function ajax_edit1($electrician_id)
	{
		$data = $this->person->get_by_id1($electrician_id);
		$data->jobs_done = ($data->jobs_done == '0000-00-00') ? '' : $data->jobs_done; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}


	public function ajax_add()
	{
		$this->_validate();
		
		$data = array(
				'sl' => $this->input->post('sl'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'location' => $this->input->post('location'),
				'designation' => $this->input->post('designation'),
				'emp_id' => $this->input->post('emp_id'),
				'join_date' => $this->input->post('join_date'),
				'level' => $this->input->post('level'),
				'jobs_done' => $this->input->post('jobs_done'),
				'age' => $this->input->post('age'),
				'description' => $this->input->post('description'),
				'expected_amount' => $this->input->post('expected_amount'),
				'service_status' => $this->input->post('service_status'),
				'sub_cat' => $this->input->post('sub_cat'),
			);

		if(!empty($_FILES['pic']['name']))
		{
			$upload = $this->_do_upload();
			$data['pic'] = $upload;
		}

		$insert = $this->person->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'sl' => $this->input->post('sl'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'location' => $this->input->post('location'),
				'designation' => $this->input->post('designation'),
				'emp_id' => $this->input->post('emp_id'),
				'join_date' => $this->input->post('join_date'),
				'level' => $this->input->post('level'),
				'jobs_done' => $this->input->post('jobs_done'),
				'age' => $this->input->post('age'),
				'description' => $this->input->post('description'),
				'expected_amount' => $this->input->post('expected_amount'),
				'service_status' => $this->input->post('service_status'),
				'sub_cat' => $this->input->post('sub_cat'),
			);

		if($this->input->post('remove_photo')) // if remove photo checked
		{
			if(file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('upload/'.$this->input->post('remove_photo'));
			$data['pic'] = '';
		}

		if(!empty($_FILES['pic']['name']))
		{
			$upload = $this->_do_upload();
			
			//delete file
			$person = $this->person->get_by_id($this->input->post('electrician_id'));
			if(file_exists('upload/'.$person->pic) && $person->pic)
				unlink('upload/'.$person->pic);

			$data['pic'] = $upload;
		}

		$this->person->update(array('electrician_id' => $this->input->post('electrician_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($electrician_id)
	{
		//delete file
		$person = $this->person->get_by_id($electrician_id);
		if(file_exists('upload/'.$person->pic) && $person->pic)
			unlink('upload/'.$person->pic);
		
		$this->person->delete_by_id($electrician_id);
		echo json_encode(array("status" => TRUE));
	}

	private function _do_upload()
	{
		$config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 500; //set max size allowed in Kilobyte
        $config['max_width']            = 1920; // set max width image allowed
        $config['max_height']           = 1200; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('pic')) //upload and validate
        {
            $data['inputerror'][] = 'pic';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('sl') == '')
		{
			$data['inputerror'][] = 'sl';
			$data['error_string'][] = 'SL is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('name') == '')
		{
			$data['inputerror'][] = 'name';
			$data['error_string'][] = 'Name is required';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('email') == '')
		{
			$data['inputerror'][] = 'email';
			$data['error_string'][] = 'Email is required';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('phone') == '')
		{
			$data['inputerror'][] = 'phone';
			$data['error_string'][] = 'Phone Number is required';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('location') == '')
		{
			$data['inputerror'][] = 'location';
			$data['error_string'][] = 'Location is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('designation') == '')
		{
			$data['inputerror'][] = 'designation';
			$data['error_string'][] = 'Designation is required';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('emp_id') == '')
		{
			$data['inputerror'][] = 'emp_id';
			$data['error_string'][] = 'Employe Id is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('join_date') == '')
		{
			$data['inputerror'][] = 'join_date';
			$data['error_string'][] = 'Join Date is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('level') == '')
		{
			$data['inputerror'][] = 'level';
			$data['error_string'][] = 'Please select level';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('jobs_done') == '')
		{
			$data['inputerror'][] = 'jobs_done';
			$data['error_string'][] = 'Jobs Done is required';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('description') == '')
		{
			$data['inputerror'][] = 'description';
			$data['error_string'][] = 'Please select Description';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('expected_amount') == '')
		{
			$data['inputerror'][] = 'expected_amount';
			$data['error_string'][] = 'Jobs Done is Expected Amount';
			$data['status'] = FALSE;
		}


		if($this->input->post('service_status') == '')
		{
			$data['inputerror'][] = 'service_status';
			$data['error_string'][] = 'Service Status is required';
			$data['status'] = FALSE;
		}
		
		if($this->input->post('sub_cat') == '')
		{
			$data['inputerror'][] = 'sub_cat';
			$data['error_string'][] = 'Sub Catagory is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
