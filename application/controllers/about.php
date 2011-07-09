<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 06.06.11
 * Time: 16:56
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
    $this->load->library('templates');
    $this->load->model('menu_model');

    $resource_dir = $this->config->item('resource_dir');
    $date_format = "%d.%m.%y";
    $this->templates->assign(
      array(
           'resource_dir' => $resource_dir,
           'date_format' => $date_format,
           'page_name' => 'О нас'
      )
    );
    $this->templates->display('about.tpl');
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */