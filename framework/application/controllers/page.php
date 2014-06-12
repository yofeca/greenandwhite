<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('My_PHPMailer');
    }

    public function index() {
        $this->home();
    }

    public function home() {
        $info['pageTitle'] = "Home";
		$info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/home');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function yearbook_registration() {
        $info['pageTitle'] = "Yearbook Registration";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/yearbook-registration');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function photo_packages() {
        $info['pageTitle'] = "Photo Packages";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/photo-packages');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function pictorial_scheduling() {
        $info['pageTitle'] = "Pictorial Scheduling";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/pictorial-scheduling');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function online_verification() {
        $info['pageTitle'] = "On-line Verification";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/online-verification');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function photo_yearbook_distribution() {
        $info['pageTitle'] = "Photo & Yearbook Distribution";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/photo-yearbook-distribution');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function about_us() {
        $info['pageTitle'] = "About Us";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/about-us');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function faq() {
        $info['pageTitle'] = "FAQ";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/faq');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

    public function sponsors() {
        $info['pageTitle'] = "Sponsors";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/sponsors');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }

	public function search_page_result()
	{
		$info['pageTitle'] = "Search Page Result";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/search-page-result');
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
	}
	public function send_mail() {
	
		$name = $this->input->post('contact-name');
		$idno = $this->input->post('contact-id-number');
		$email = $this->input->post('contact-email-add');
		$message = $this->input->post('contact-message');
			
		$mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
		
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "greenandwhite.com.ph";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "admin@greenandwhite.com.ph";  // user email address
        $mail->Password   = "12#45";      
		
        $mail->SetFrom($email,$name . " - " . $idno);  //Who is sending the email
        $mail->AddReplyTo($email,$name);  //email address that receives the response
		
        $mail->Subject    = "Contact us message from " . $name . " - " . $idno . ".";
        $mail->Body      = $message;
		
        $destino = "greenandwhite.dlsu@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "greenandwhite");

        if(!$mail->Send()) {
            $sendmail['message'] = "<h4>Hi! ".$name."</h4><br />
									<p>An error was encountered sending your message.</p><br />
									<h5>Error details</h5>" . "<p>" . $mail->ErrorInfo . "</p>";
        } else {
            $sendmail['message'] = "<h4>Hi! ".$name."</h4><br /><p>Your message was sent successfully</p>";
        }
		
		$info['pageTitle'] = "Send Mail";
        $info['title'] = "Green&White";
        $data['header'] = $this->load->view('header', $info);
        $data['content'] = $this->load->view('pages/sent_mail',$sendmail);
        $data['footer'] = $this->load->view('footer');

        $this->load->view('index', $data);
    }
}