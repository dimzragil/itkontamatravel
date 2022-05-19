<?php
defined('BASEPATH') or exit('No direct script access allowed');

class form_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function tambah($formulir)
    {
        $this->db->insert('formulir', $formulir);
        return TRUE;
    }
}
