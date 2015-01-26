<?php

class DB_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Вставка данных
     */
    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    /**
     * Изменение данных
     */
    public function update($table, $data, $where = array())
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

    /**
     * Удаление данных
     */
    public function delete($table, $where = array())
    {
        $this->db->delete($table, $where);
        return $this->db->affected_rows();
    }

    /**
     * Получение количества элементов
     */
    public function get_count($table, $where)
    {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->order_by("id DESC");
        return $this->db->count_all_results($table);
    }

    /**
     * Рассчитывание количества страниц
     */
    public function get_count_of_pages($table = "", $where = array(), $per_page = 10)
    {
        if ($where)
            $this->db->where($where);
        $count = $this->get_count($table, $where);
        return ceil($count / $per_page);
    }
}