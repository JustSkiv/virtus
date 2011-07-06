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
    $this->load->model('menu_model');
    $this->load->model('news_model');

    $this->templates->assign(
      array(
           'menu' => $this->menu_model->getAll(),
           'news' => $this->news_model->getLatest(),
           'page_name' => 'Новости',
      )
    );
    $this->templates->display('index.tpl');
  }
}