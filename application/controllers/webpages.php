<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Webpages extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

function _remap()
{		
	$segment_1 = $this->uri->segment(1);

	switch ($segment_1) {
		case null:
		case false:
		case '':
			$this->index();
		break;

		case 'about':
			$this->about();
		break;
		
		case 'blog':
			$this->blog($this->uri->segment(2));
		break;			
	
	default:
		//This is just an example to show 
		//the 404 page if the page doesn't exist
		$this->db->where('url_title',$segment_1);
		$db_result = $this->db->get('webpages');
		
		if($db_result->num_rows() == 1)
		{
			$this->view($segment_1);
		}
		else
		{
			show_404();
		}
	break;
	}
}	

	function index()
	{

	}

	function about()
	{

	}

	function blog($url_title = '')
	{

	}

	function view($url_title = '')
	{

	}	
	
}
