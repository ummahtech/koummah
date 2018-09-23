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
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}  

	public function visi_misi()
	{
		$this->load->view('header');
		$this->load->view('visi_misi');
		$this->load->view('footer');
	} 

	public function definisi()
	{
		$this->load->view('header');
		$this->load->view('definisi');
		$this->load->view('footer');
	}

	public function mengenai_kami()
	{
		$this->load->view('header');
		$this->load->view('mengenai_kami');
		$this->load->view('footer');
	}

	public function pentadbiran()
	{
		$this->load->view('header');
		$this->load->view('pentadbiran');
		$this->load->view('footer');
	}

	public function sijil()
	{
		$this->load->view('header');
		$this->load->view('sijil');
		$this->load->view('footer');
	}

	public function ummah_mineral()
	{
		$this->load->view('header');
		$this->load->view('ummah_mineral');
		$this->load->view('footer');
	}

	public function ummah_gold()
	{
		$this->load->view('header');
		$this->load->view('ummah_gold');
		$this->load->view('footer');
	}

	public function ummah_ads()
	{
		$this->load->view('header');
		$this->load->view('ummah_ads');
		$this->load->view('footer');
	}

	public function ummah_ucs()
	{
		$this->load->view('header');
		$this->load->view('ummah_ucs');
		$this->load->view('footer');
	}
    
    public function ummah_ufc()
	{
		$this->load->view('header');
		$this->load->view('ummah_ufc');
		$this->load->view('footer');
	}

	public function ummah_shop()
	{
		$this->load->view('header');
		$this->load->view('ummah_shop');
		$this->load->view('footer');
	}

	public function ummah_auto()
	{
		$this->load->view('header');
		$this->load->view('ummah_auto');
		$this->load->view('footer');
	}

	public function ummah_properties()
	{
		$this->load->view('header');
		$this->load->view('ummah_properties');
		$this->load->view('footer');
	}

	public function kelebihan()
	{
		$this->load->view('header');
		$this->load->view('kelebihan');
		$this->load->view('footer');
	}

	public function syarat()
	{
		$this->load->view('header');
		$this->load->view('syarat');
		$this->load->view('footer');
	}

	public function borang()
	{
		$this->load->view('header');
		$this->load->view('borang');
		$this->load->view('footer');
	}

	public function syarat_anggota()
	{
		$this->load->view('header');
		$this->load->view('syarat_anggota');
		$this->load->view('footer');
	}

	public function kelebihan_anggota()
	{
		$this->load->view('header');
		$this->load->view('kelebihan_anggota');
		$this->load->view('footer');
	}

	public function kebajikan_anggota()
	{
		$this->load->view('header');
		$this->load->view('kebajikan_anggota');
		$this->load->view('footer');
	}
    
    public function buletin()
	{
		$this->load->view('header');
		$this->load->view('buletin');
		$this->load->view('footer');
	}
    
	public function muatTurun()
	{
		$this->load->view('header');
		$this->load->view('muatTurun');
		$this->load->view('footer');
	}
}
