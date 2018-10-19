<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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

    function __construct()
    {
        parent::__construct();
        $this->load->model('Cinsert');


    }


    public function index()
	{
        $this->session->unset_userdata('username');
		$this->load->view('index');
	}

	public function testview(){
        $data['email'] = 'example@yahoo.com';
        $message = $this->load->view('testView', $data, true);
        echo $message;
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');

           $data["fetch_data"] = $this->Cinsert->fetch_udata($username, $password);

            if( count($data["fetch_data"])>0)
            {
//                $this->load->view('Customer/insertview()');
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
//                print_r($this->session->userdata->username);exit;

                redirect(base_url().'Customer/insertview');
                /*$this->insertview();*/
            }
            else
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                $this->index();
        }
    }





    public function insertview()
    {

        $this->load->view('insert');
    }



	public function cinsert()
    {
        $this->form_validation->set_rules('cname', 'cname', 'required');


        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('Customer/insertview');

        }
        else
        {


            $data2 = array(
                'cname' => $this->input->post('cname'),
                'rnum' => $this->input->post('rnum'),
                'date' => $this->input->post('date'),
                'address' => $this->input->post('address'),
                'age' => $this->input->post('age'),
                'mobile' => $this->input->post('mobile'),
                'remark' => $this->input->post('remark'),
                'history' => $this->input->post('history'),
                'uva1' => $this->input->post('uva1'),
                'ph1' => $this->input->post('ph1'),
                'uva2' => $this->input->post('uva2'),
                'ph2' => $this->input->post('ph2'),
                'm6m1' => $this->input->post('m6m1'),
                'm6m2' => $this->input->post('m6m2'),
                'npc' => $this->input->post('npc'),
                'version' => $this->input->post('version'),
                'hbrx1' => $this->input->post('hbrx1'),
                'hbrx2' => $this->input->post('hbrx2'),
                'hbrx3' => $this->input->post('hbrx3'),
                'r1' => $this->input->post('r1'),
                'sph1' => $this->input->post('sph1'),
                'cyl1' => $this->input->post('cyl1'),
                'axis1' => $this->input->post('axis1'),
                'sph2' => $this->input->post('sph2'),
                'cyl2' => $this->input->post('cyl2'),
                'axis2' => $this->input->post('axis2'),
                'l1' => $this->input->post('l1'),
                'r2' => $this->input->post('r2'),
                'sph3' => $this->input->post('sph3'),
                'cyl3' => $this->input->post('cyl3'),
                'axis3' => $this->input->post('axis3'),
                'sph4' => $this->input->post('sph4'),
                'cyl4' => $this->input->post('cyl4'),
                'axis4' => $this->input->post('axis4'),
                'l2' => $this->input->post('l2'),
                'cornea1' => $this->input->post('cornea1'),
                'cornea2' => $this->input->post('cornea2'),
                'iris1' => $this->input->post('iris1'),
                'iris2' => $this->input->post('iris2'),
                'media1' => $this->input->post('media1'),
                'media2' => $this->input->post('media2'),
                'fundus1' => $this->input->post('fundus1'),
                'fundus2' => $this->input->post('fundus2'),
                'ac1' => $this->input->post('ac1'),
                'ac2' => $this->input->post('ac2'),
                'pc1' => $this->input->post('pc1'),
                'pc2' => $this->input->post('pc2'),
                'iop1' => $this->input->post('iop1'),
                'iop2' => $this->input->post('iop2'),
                'diagnosis' => $this->input->post('diagnosis'),
                'lense' => $this->input->post('lense'),
                'total' => $this->input->post('total'),

            );

            $this->Cinsert->insert($data2);
            $this->session->set_flashdata('msg', 'Customer Inserted Successfully');
            $this->session->flashdata('msg');
            redirect("Customer/insertview");


        }
    }


    public function cupdate()
    {
        $this->form_validation->set_rules('cname', 'cname', 'required');


        if ($this->form_validation->run() == FALSE)
        {

            $this->load->view('Customer/insertview');

        }
        else
        {


            $data2 = array(
                'cname' => $this->input->post('cname'),
                'cid' => $this->input->post('cid'),
                'rnum' => $this->input->post('rnum'),
                'date' => $this->input->post('date'),
                'address' => $this->input->post('address'),
                'age' => $this->input->post('age'),
                'mobile' => $this->input->post('mobile'),
                'remark' => $this->input->post('remark'),
                'history' => $this->input->post('history'),
                'uva1' => $this->input->post('uva1'),
                'ph1' => $this->input->post('ph1'),
                'uva2' => $this->input->post('uva2'),
                'ph2' => $this->input->post('ph2'),
                'm6m1' => $this->input->post('m6m1'),
                'm6m2' => $this->input->post('m6m2'),
                'npc' => $this->input->post('npc'),
                'version' => $this->input->post('version'),
                'hbrx1' => $this->input->post('hbrx1'),
                'hbrx2' => $this->input->post('hbrx2'),
                'hbrx3' => $this->input->post('hbrx3'),
                'r1' => $this->input->post('r1'),
                'sph1' => $this->input->post('sph1'),
                'cyl1' => $this->input->post('cyl1'),
                'axis1' => $this->input->post('axis1'),
                'sph2' => $this->input->post('sph2'),
                'cyl2' => $this->input->post('cyl2'),
                'axis2' => $this->input->post('axis2'),
                'l1' => $this->input->post('l1'),
                'r2' => $this->input->post('r2'),
                'sph3' => $this->input->post('sph3'),
                'cyl3' => $this->input->post('cyl3'),
                'axis3' => $this->input->post('axis3'),
                'sph4' => $this->input->post('sph4'),
                'cyl4' => $this->input->post('cyl4'),
                'axis4' => $this->input->post('axis4'),
                'l2' => $this->input->post('l2'),
                'cornea1' => $this->input->post('cornea1'),
                'cornea2' => $this->input->post('cornea2'),
                'iris1' => $this->input->post('iris1'),
                'iris2' => $this->input->post('iris2'),
                'media1' => $this->input->post('media1'),
                'media2' => $this->input->post('media2'),
                'fundus1' => $this->input->post('fundus1'),
                'fundus2' => $this->input->post('fundus2'),
                'ac1' => $this->input->post('ac1'),
                'ac2' => $this->input->post('ac2'),
                'pc1' => $this->input->post('pc1'),
                'pc2' => $this->input->post('pc2'),
                'iop1' => $this->input->post('iop1'),
                'iop2' => $this->input->post('iop2'),
                'diagnosis' => $this->input->post('diagnosis'),
                'lense' => $this->input->post('lense'),
                'total' => $this->input->post('total'),

            );
            $id = $this->input->post('cid');
            $this->Cinsert->cupdate($data2);
            $this->session->set_flashdata('msg', 'Customer Updated Successfully');
            $this->session->flashdata('msg');
            redirect("Vcustomer/view");


        }
    }


}
