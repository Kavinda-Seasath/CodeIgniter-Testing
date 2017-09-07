<?php



class pages extends CI_Controller{

	function view( $page = 'home'){

		$this->load->helper('url');

		if (! file_exists('application/views/pages/'.$page.'.php')){

			show_404(); 

		}

		$data['title'] = $page;

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');

	}

}

?>