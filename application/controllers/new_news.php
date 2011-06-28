<?php
/**
 * @author Nikolay Tuzov
 * Date: 27.06.11
 * Time: 17:03
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_news extends CI_Controller {

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
           'page_name' => 'Новости'
      )
    );
    $this->fb->info($this->news->getNews());
    $this->templates->display('new_news.tpl');
	}
}

/* End of file new_news.php */
/* Location: ./application/controllers/new_news.php */