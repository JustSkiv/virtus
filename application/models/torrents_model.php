<?php
/**
 * Created by: Nikolay Tuzov
 * Date: 07.07.11
 * Time: 0:21
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class torrents_model extends Crud
{
  function Torrents_model()
  {
    parent::__construct();
    $this->table = 'torrents';
    $this->table_genres = 'genres';
  }

  function getGenres()
  {
    $query = $this->db->get($this->table_genres);
    return $query->result_array();
  }

  function getTorrents()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->join($this->table_genres, 'genres.id = torrents.id');

    $query = $this->db->get();

    return $query->result_array();

  }

  function addTorrent()
  {
    $this->load->library('translit');

    $user = $this->ion_auth->get_user_array();
    $this->fb->dump("user", $user);
    if ($user['group_id'] > 2)
      show_error("У вас недостаточно прав для просмотра данной страницы.", 404, "Ошибка доступа");

    $slug = $this->translit->rus2lat($this->input->post('title'));

    //TODO: доделать обработку size
    $size = $this->input->post('size');

    $data = array
    (
      'title' => $this->input->post('title'),
      'text' => $this->input->post('text'),
      'slug' => $slug,
      'genre' => $this->input->post('genre'),
      'files_count' => $this->input->post('files_count'),
      'size' => $size,
      'created_by' => $user['username'],
      'created_at' => now(),
      'updated_at' => now(),
    );
    $this->db->insert($this->table, $data);
  }
}

/* End of file torrents_model.php */
/* Location: ./application/controllers/torrents_model.php */
