<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function testimoni()
	{
		$this->load->view('testimonials');
	}
	public function contact()
	{
		$this->load->library('session');
		$this->load->view('contact');
	}

	public function userdtlsmail()
	{
		$this->load->library('email');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->form_validation->set_rules("FirstName", "First Name", 'required');
		$this->form_validation->set_rules("LastName", "Last Name", 'required');
		$this->form_validation->set_rules("ContactNumber", "Contact Number", 'required');
		$this->form_validation->set_rules("InputEmail", "Email ID", 'required');
		$this->form_validation->set_rules("urmsg", "Your Message", 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata( 'success_msg', 'Sorry !! Something goes wrong.');
			$this->contact();
		}
		else
		{
			$data = array(
				'FirstName'			=>$this->input->post('FirstName'),
				'LastName'			=>$this->input->post('LastName'),
				'ContactNumber'	=>$this->input->post('ContactNumber'),
				'InputEmail'		=>$this->input->post('InputEmail'),
				'urmsg'					=>$this->input->post('urmsg')
			);
			$this->session->set_userdata($data);
			$this->email->set_mailtype("html");
			$this->email->from('support@oxyzonetherapy.com', 'Oxyzonetherapy.com');
			$this->email->to($data['InputEmail']);
			$this->email->reply_to('office@teamwaterhouse.com', 'Oxyzonetherapy.com');
			$this->email->cc('office@teamwaterhouse.com');
			$this->email->bcc('a09051985@gmail.com');

			$this->email->subject('Oxyzonetherapy Updates');
			$pingme = "<p>Hi <strong>".$data['FirstName']."&nbsp;".$data['LastName'].",</strong><br />
			We feel great to get connected with you<br />
			Thanks for inquiry to Team Waterhouse<br /><br />
			This is what you wrote to us - ".$data['urmsg']."<br /><br />
			We'll get back to you by <strong>Phone - ".$data['ContactNumber']."</strong><br />
			Or through your <strong>E-mail - ".$data['InputEmail']."</strong> ASAP<br />
			-----------------------------<br />
			Have a great day & take care!	<br />
			<a href='https://oxyzonetherapy.com'>
			<img src='https://ozonepedia.com/wp-content/themes/ozonepedia/images/logo.png' alt='Oxyzonetherapy.com' title='Oxyzonetherapy'
			style='width:150px;height:auto;margin:10px auto;background-color: #43464B;padding: 5px 15px;border-radius: 3px;' /><br />
			</a>";

				$this->email->message($pingme);

				$this->email->send();

				$this->session->set_flashdata( 'success_msg', 'Thank you. Please check your mailbox.');
				$this->contact();
			}
	}
	public function faqpage()
	{
		$this->load->view('faqpage');
	}
	public function foodozone()
	{
		$this->load->view('foodozone');
	}
	public function medozone()
	{
		$this->load->view('medozone');
	}
	public function otherapps()
	{
		$this->load->view('othersapps');
	}
	public function zeonmed()
	{
		$this->load->view('zeonmed');
	}
	public function nisap()
	{
		$this->load->view('nisap');
	}
	public function gwpone()
	{
		$this->load->view('gwpone');
	}
	public function gwptwo()
	{
		$this->load->view('gwptwo');
	}
	public function sendmail()
	{
		$this->load->library('email');

		$this->email->from('support@oxyzonetherapy.com', 'Oxyzonetherapy');
		$this->email->to('m06081984@gmail.com');
		$this->email->cc('a09051985@gmail.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
	}
}
