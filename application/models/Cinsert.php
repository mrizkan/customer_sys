<?php

class Cinsert extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert($data2)
    {

        $this->db->insert('customer', $data2);

    }

    function fetch_udata($user,$pass)
    {




        $query = $this->db->query("select username, password from user where username = '$user' AND password = '$pass'")->result();


        return $query;
    }

    public function cupdate($date2)
    {
        $query=$this->db->replace('customer',$date2);

        return $query;
    }



}

?>