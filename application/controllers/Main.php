<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Main extends CI_Controller{
		function index(){
            $this->load->model('Cust_model');
            $clients= $this->Cust_model->all();
            $data= array();
            $data['clients']=$clients;
            $this->load->view('list',$data);
        }

		function create(){
            $this->load->model('Cust_model');  
            if($this->input->post('submit')) {
	            $formArray = array();
	            $formArray['cust_name'] = $this->input->post('cust_name');
	            $formArray['mob'] = $this->input->post('mob');
	            $formArray['flat_no'] = $this->input->post('flat_no');
	            $formArray['flat_type'] = $this->input->post('flat_type');
	            $formArray['area'] = $this->input->post('area');
	            $formArray['rate'] = $this->input->post('rate');
	            $formArray['carpet_area'] = $this->input->post('car_area');
	            $formArray['agr_cost'] = $formArray['area'] * $formArray['rate'];
	            $formArray['mseb'] = 60000;
	            $formArray['society_form'] = 30000;
	            $formArray['club_house_charges'] = 65000;
	            $formArray['total_amt'] = $formArray['agr_cost'] + $formArray['mseb'] + $formArray['society_form'] + $formArray['club_house_charges'];
	            $formArray['stamp_duty'] = (($formArray['total_amt'] * 8) / 100);
	            $formArray['maintainance'] = 50000;
	            $formArray['registration'] = 30000;
	            $formArray['gst'] = (($formArray['agr_cost'] * 12) / 100) + (($formArray['maintainance'] * 18) / 100);
	            $formArray['total'] = $formArray['total_amt'] + $formArray['stamp_duty'] + $formArray['maintainance'] + $formArray['registration'] + $formArray['gst'];

	            $this->Cust_model->create($formArray);
	            redirect(base_url().'index.php/Main/index');
            }
            else{
            	$this->load->view('Create');
            }
        }
        function report($id){
        	$this->load->model('Cust_model');
        	$clients = $this->Cust_model->getclient($id);
            $data = array();
            $data['clients']= $clients;
         	$this->load->view('Report.php',$data);

         	$html = $this->output->get_output();
         	$this->load->library('pdf');
         	$this->dompdf->loadHtml($html);
         	$this->dompdf->setPaper('A4','portrait');
         	$this->dompdf->render();

         	$this->dompdf->stream('Estimate.pdf',array('Attachment'=>1));
        }
	}
?>