<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
    //cant send email if sender use yahoo mail
    public 	$sendEmailTo 		= 	'koummahkelantan@gmail.com'; //change this!
	//public 	$sendEmailTo 		= 	'rasyiqah.ummah@gmail.com';
	public	$subjectLine 		= 	""; // actually set on line 58.
	
	// views
	public 	$formView			= 	'contact_1';
	//public	$successView		= 	'contact_success';
	//public	$errorView			= 	'contact_error'; //used when the mail failed.
	public  $displayEmailWhenError = FALSE; // if $errorView is shown, should we reveal $sendEmailTo?
	public 	$headerView 		= 	''; //null to disable
	public 	$footerView 		= 	'footer'; //null to disable
	// spam protection
	public	$spam_protection	= 	TRUE; // true or false
	public 	$spam_question		=	'What color is a red snake';
	public	$spam_answer		= 	'red';
	// other
	public 	$data 				= 	array(); // used for the views
    
	public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('email');
	}
    
	public function index()
	{
        $titleU['tu'] = 'Contact Us';
        $this->load->view('header', $titleU);
        
        $this->subjectLine = "Contact form response from " . $_SERVER['HTTP_HOST'];
		$this->set_validation_rules();
		$this->set_view_captcha_data();
		if($this->form_validation->run() == FALSE) {
			// show the form
			$this->show_view($this->formView);
		} else {
			// success! email it, assume it sent, then show contact success view.
			if ($this->send_mail()) {
                $this->show_view($this->successView);
			}
			else {
				log_message("error","Contact form - Error sending email. Debug message: " . $this->email->print_debugger() . " from: {$this->input->post('email')}. Message: {$this->input->post('message')}");
				$this->show_view($this->errorView);
			}
			// load the view
			// if $this->headerView/footerView is set it will load their views
		}
	}
    
    /* HELPER FUNCTIONS */
	// load the form view
	public function show_view($view) {
			if ($this->headerView) { $this->load->view($this->headerView,$this->data); }
			$this->load->view($view,$this->data);
			if ($this->footerView) { $this->load->view($this->footerView,$this->data); }
	}
	public function send_mail() {
	    //echo $this->input->post('email');exit;
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to($this->sendEmailTo);
			//$this->email->subject("Contact form response from " . $_SERVER['HTTP_HOST']);
			$this->email->subject($this->input->post('subject'));
			$this->email->message($this->input->post('message'));
			//echo $this->input->post('message');exit;
			
			if ($this->email->send()) {
                echo "Success";
				//echo $this->email->print_debugger();exit;
                echo '<meta http-equiv="refresh" content="0; url=https://koummah.com/v2/contact" />';
			}
		
	}
	// set the $this->data variables (which is sent to the view)
	// for the question/answer for spam protection.
	public function set_view_captcha_data() {
		$this->data['show_spam_protection'] = $this->spam_protection; // used in the view
		$this->data['spam_question'] = $this->spam_question; // used in the view
		if ($this->displayEmailWhenError == TRUE) {
			$this->data['displayEmailWhenError'] = TRUE;
			$this->data['sendEmailTo'] = $this->sendEmailTo;
		}
		else {
			$this->data['displayEmailWhenError'] = FALSE;
		}
	}
	public function set_validation_rules() {
		$this->form_validation->set_rules('name', 'Your name', 'trim|required');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		if ($this->spam_protection) {
			$this->form_validation->set_rules('spam_protection', 'Spam Protection', 'callback__spam_protection');
		}
	}
	// the callback for checking the spam protection. Only one question/one answer, very basic.
	public function _spam_protection($str)
	{
		// we will assume the user is lazy with their caps lock
		if (strtolower(trim($str)) == strtolower(trim($this->spam_answer))) {
			return true;
		}
		else {
			$this->form_validation->set_message('_spam_protection', 'The %s field did not match the correct answer');
			return false;
		}
	}
}