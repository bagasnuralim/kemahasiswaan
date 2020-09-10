<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmhs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo "<p>tambah<p>";
		$data ['title'] = "Direktorat - Kmhs";
		$this->load->view('list_kmhs',$data);
	}
	public function about(){
		$data ['title'] = "About Us";
		$status ['status'] = "active";
		$this->load->view('list_about',$data,$status);
	}
	public function calendar(){
		$data ['title'] = "contoh calender";
		$status ['status'] = "active";
		$this->load->view('calendar/index',$data,$status);
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('calendar_model');
	}
	function load()
	{
		$event_data = $this->fullcalendar_model->fetch_all_event();
		foreach($event_data->result_array() as $row)
		{
			$data[] = array(
				'id'	=>	$row['id'],
				'title'	=>	$row['title'],
				'start'	=>	$row['start_event'],
				'end'	=>	$row['end_event']
			);
		}
		echo json_encode($data);
	}

	function insert()
	{
		if($this->input->post('title'))
		{
			$data = array(
				'title'		=>	$this->input->post('title'),
				'start_event'=>	$this->input->post('start'),
				'end_event'	=>	$this->input->post('end')
			);
			$this->fullcalendar_model->insert_event($data);
		}
	}

	function update()
	{
		if($this->input->post('id'))
		{
			$data = array(
				'title'			=>	$this->input->post('title'),
				'start_event'	=>	$this->input->post('start'),
				'end_event'		=>	$this->input->post('end')
			);

			$this->fullcalendar_model->update_event($data, $this->input->post('id'));
		}
	}

	function delete()
	{
		if($this->input->post('id'))
		{
			$this->fullcalendar_model->delete_event($this->input->post('id'));
		}
	}
}
