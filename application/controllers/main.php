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
    $this->load->model('news_model');


    $this->templates->assign(
      array(
           'menu' => $this->menu->getMenuNames(),
           'news' => $this->news_model->getNews(),
           'page_name' => 'Новости',
      )
    );
    $this->templates->display('index.tpl');
  }
}