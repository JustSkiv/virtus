<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 06.06.11
 * Time: 16:56
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Torrents extends CI_Controller {

	public function index()
	{
    $this->load->library('templates');
    $this->load->model('menu');
    $this->load->model('news');

    $resource_dir = $this->config->item('resource_dir');
    $date_format = "%d.%m.%y";
    $this->templates->assign(
      array(
           'menu' => $this->menu->getMenuNames(),
           'news' => $this->news->getNews(),
           'resource_dir' => $resource_dir,
           'date_format' => $date_format,
           'page_name' => 'Торренты'
      )
    );
    $this->fb->info($this->news->getNews());
    $this->templates->display('torrents.tpl');
	}
}

/* End of file torrents.php */
/* Location: ./application/controllers/torrents.php */