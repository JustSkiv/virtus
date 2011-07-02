<?php
/**
 * @author Nikolay Tuzov
 * Date: 27.06.11
 * Time: 17:03
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class New_news extends CI_Controller
{

  public function index()
  {
    $this->load->library('templates');
    $this->load->model('menu');
    $this->load->model('news');

    $date_format = "%d.%m.%y";
    $this->templates->assign(
      array(
           'menu' => $this->menu->getMenuNames(),
           'news' => $this->news->getNews(),
           'date_format' => $date_format,
           'page_name' => 'Добавление новости',
           'action' => site_url("new_news/create")
      )
    );
    $this->templates->display('new_news.tpl');
  }

  function detail()
  {
    
  }
  function create()
  {
    $this->load->library('form_validation');
    $this->load->model('news');
    $this->data['title'] = "Добавлям новость...";
    $validation_errors = '';

    if (!$this->ion_auth->logged_in()) {
      show_error('Извините, у вас недостаточно прав для данного действия');
    }

    //validate form input
    $this->form_validation->set_rules('title', 'Заголовок', 'required|xss_clean');
    $this->form_validation->set_rules('teaser', 'Кратко о новости', 'required|xss_clean');
    $this->form_validation->set_rules('text', 'Текст', 'required|xss_clean');

    if ($this->form_validation->run() == true) {
      $title = strtolower($this->input->post('title'));
      $teaser = $this->input->post('teaser');
      $slug = $this->translit->rus2lat($title);
      $text = $this->input->post('text');
    } else {
      $validation_errors = validation_errors();
    }
    if ($this->form_validation->run() == true && $this->news->addNews($slug)) {
      $this->session->set_flashdata('message', "Новость добавлена");
      redirect($this->config->item('base_url'), 'refresh');
    }
    else
    { //display the create user form
      //set the flash data error message if there is one

      $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors()
          ? $this->ion_auth->errors() : $this->session->flashdata('message')));

      $this->data['first_name'] = array('name' => 'first_name',
                                        'id' => 'first_name',
                                        'type' => 'text',
                                        'value' => $this->form_validation->set_value('first_name'),
      );
      $this->data['email'] = array('name' => 'email',
                                   'id' => 'email',
                                   'type' => 'text',
                                   'value' => $this->form_validation->set_value('email'),
      );
      $this->data['password'] = array('name' => 'password',
                                      'id' => 'password',
                                      'type' => 'password',
                                      'value' => $this->form_validation->set_value('password'),
      );
      $this->data['password_confirm'] = array('name' => 'password_confirm',
                                              'id' => 'password_confirm',
                                              'type' => 'password',
                                              'value' => $this->form_validation->set_value('password_confirm'),
      );

      $resource_dir = $this->config->item('resource_dir');
      $date_format = "%d.%m.%y";
      $this->templates->assign(
        array(
             'menu' => $this->menu->getMenuNames(),
             'resource_dir' => $resource_dir,
             'date_format' => $date_format,
             'page_name' => 'Регистрация'
        )
      );
      $this->templates->assign('validation_errors', validation_errors());
      $this->templates->assign(
        array(
             'menu' => $this->menu->getMenuNames(),
             'news' => $this->news->getNews(),
             'date_format' => $date_format,
             'page_name' => 'Добавление новости',
             'action' => site_url("new_news/create"),
             'validation_errors' => $validation_errors
        )
      );
      $this->templates->display('new_news.tpl');
    }
  }
}

/* End of file new_news.php */
/* Location: ./application/controllers/new_news.php */