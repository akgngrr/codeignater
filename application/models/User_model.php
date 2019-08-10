<?php

class User_model extends CI_Model {

    public function insert($data = array())
    {
        $insert = $this->db->insert('users', $data);

        return $insert;
    }

    public function get($where = array())
    {
        $row = $this->db->where($where)->get('user')->row();

        return $row;
    }


    public function update($where = array(), $data = array())
    {
        $update = $this->db->where($where)->update($data);

        return $update;
    }
}
