<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

	function __construct()
	{
			parent::__construct();
			$this->load->model('Asset_model');    
	}
	
	public function index()
	{
			$data['assets'] = $this->Asset_model->all();
			$this->template->build('assets/index', $data);
	}

	public function create()
	{
			$this->template->build('assets/create');
	}

	public function store()
	{
	    $data['nik'] = $this->input->post('nik');
	    $data['employee_name'] = $this->input->post('employee_name');
	    $data['location'] = $this->input->post('location');
	    $data['device'] = $this->input->post('device');
	    $data['brand'] = $this->input->post('brand');
	    $data['type'] = $this->input->post('type');
	    $data['no_asset'] = $this->input->post('no_asset');

			$this->form_validation->set_rules('nik', 'nik', 'trim|required|is_unique[asset.nik]');
			$this->form_validation->set_rules('employee_name', 'employee_name', 'trim|required');
			$this->form_validation->set_rules('location', 'location', 'trim|required');
			$this->form_validation->set_rules('device', 'device', 'trim|required');
			$this->form_validation->set_rules('brand', 'brand', 'trim|required');
			$this->form_validation->set_rules('type', 'type', 'trim|required');
			$this->form_validation->set_rules('no_asset', 'no_asset', 'trim|required');	    

	    if ($this->form_validation->run() == FALSE) {
	    	$this->template->build('assets/create');
	    } else {
	    	$this->Asset_model->create($data);
	    	return redirect('/');
	    }
	}

	public function edit($nik)
	{
			// echo $nik;
			$data['asset'] = $this->Asset_model->find($nik);
			// var_dump($data);
			$this->template->build('assets/edit', $data);
	}

	public function update($nik)
	{
		// var_dump($_POST);
	    // $nik = $this->input->post('nik');
	    $data['employee_name'] = $this->input->post('employee_name');
	    $data['location'] = $this->input->post('location');
	    $data['device'] = $this->input->post('device');
	    $data['brand'] = $this->input->post('brand');
	    $data['type'] = $this->input->post('type');
	    $data['no_asset'] = $this->input->post('no_asset');

			// $this->form_validation->set_rules('nik', 'nik', 'trim|required|is_unique[asset.nik]');
			$this->form_validation->set_rules('employee_name', 'employee_name', 'trim|required');
			$this->form_validation->set_rules('location', 'location', 'trim|required');
			$this->form_validation->set_rules('device', 'device', 'trim|required');
			$this->form_validation->set_rules('brand', 'brand', 'trim|required');
			$this->form_validation->set_rules('type', 'type', 'trim|required');
			$this->form_validation->set_rules('no_asset', 'no_asset', 'trim|required');

	    if ($this->form_validation->run() == FALSE) {
				$data['asset'] = $this->Asset_model->find($nik);
	    	$this->template->build('assets/edit', $data);
	    } else {
		    $this->Asset_model->update($data, $nik);
		    return redirect('/');
	    }				
	}

	public function delete($nik)
	{
	    $this->Asset_model->delete($nik);
	    return redirect('/');
	}
}
