<?php

  /**
   *
   */
  class M_login extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }

    public function login_now($data)
    {
      $this->db->where('username', $data['username']);
      $this->db->where('password', $data['password']);

      return $this->db->get('tb_user')->row();
    }

    function __destruct()
    {
      $this->db->close();
    }
  }


?>
