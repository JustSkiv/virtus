<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 06.06.11
 * Time: 15:44
 */

class Main extends CI_Controller
{
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
    $this->templates->display('index.tpl');
  }
}