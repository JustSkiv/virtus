<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 06.06.11
 * Time: 16:56
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Torrents extends CI_Controller
{

  function Torrents()
  {
    parent::__construct();
    $this->load->model('torrents_model');
  }

  public function index()
  {
    $this->load->library('templates');
    $this->load->model('menu_model');
    $this->load->model('news_model');

    $resource_dir = $this->config->item('resource_dir');
    $date_format = "%d.%m.%y";
    $this->templates->assign(
      array(
           'menu' => $this->menu_model->getAll(),
           'torrents' => $this->torrents_model->getTorrents(),
           'resource_dir' => $resource_dir,
           'date_format' => $date_format,
           'page_name' => 'Торренты'
      )
    );
    $this->templates->display('torrents.tpl');
  }

  function detail($slug)
  {
    $torrent = $this->torrents_model->getTorrentBySlug($slug);
    $this->templates->assign(
      array(
           'torrent' => $torrent,
           'page_name' => "$torrent[title]",
      )
    );
    $this->templates->display('torrents_detail.tpl');
  }

  function create()
  {
    $this->load->library('form_validation');

    $this->data['title'] = "Добавлям торрент...";
    $validation_errors = '';

    //TODO: if admin
    if (!$this->ion_auth->logged_in()) {
      show_error('Извините, у вас недостаточно прав для данного действия');
    }
    //validate form input
    $this->form_validation->set_rules(
      array(
           'title', 'Заголовок' => 'required|max_length[255]|xss_clean',
           'text', 'Текст', 'required|xss_clean',
           'genre', 'Жанр', 'required|max_length[2]|xss_clean',
           'size', 'Размер', 'required|max_length[10]|numeric|xss_clean',
           'size_unit', 'Единица измерения размера', 'required|max_length[2]|is_natural|xss_clean',
           'genre', 'Жанр', 'required|xss_clean'
      )
    );

    if ($this->form_validation->run() == true) {
      $title = strtolower($this->input->post('title'));
      $teaser = $this->input->post('teaser');
      $text = $this->input->post('text');
    } else {
      $validation_errors = validation_errors();
    }
    if ($this->form_validation->run() == true && $this->torrents_model->addTorrent()) {
      $this->session->set_flashdata('message', "Новость добавлена");
      redirect($this->config->item('base_url'), 'refresh');
    }
    else
    { //display the create user form
      //set the flash data error message if there is one

      $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors()
          ? $this->ion_auth->errors() : $this->session->flashdata('message')));

      $date_format = "%d.%m.%y";
      $this->templates->assign(
        array(
             'torrents' => $this->torrents_model->getAll(),
             'date_format' => $date_format,
             'page_name' => 'Добавление новости',
             'action' => site_url("news/create"),
             'validation_errors' => $validation_errors,
             'date_format' => $date_format,
             'page_name' => 'Регистрация',
             'genres' => $this->torrents_model->getGenres()
        )
      );
      $this->templates->display('new_torrent.tpl');
    }
  }
}

/* End of file torrents.php */
/* Location: ./application/controllers/torrents.php */