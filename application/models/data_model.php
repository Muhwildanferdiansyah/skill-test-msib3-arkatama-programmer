<?php
class data_model extends ci_model
{
    function data()
    {
        $this->db->order_by('id', 'DESC');
        return $query = $this->db->get('test');
    }
}
