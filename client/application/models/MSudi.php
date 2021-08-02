<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function CallAPI($method, $url, $data = null, $token)
    {
        // Initialize curl
        $curl = curl_init();

        // Checking the method request
        switch ($method) {
                // POST request
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));
                break;
                // PUT request
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // Options
        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: ' . $token));

        // Execute the process
        $result = curl_exec($curl);
        if (!$result) {
            die("Connection Failure");
        }
        curl_close($curl);

        // Returning the output
        return json_decode($result, true);
    }
    function AddData($tabel, $data = array())
    {
        $this->db->insert($tabel, $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }
    function cek_user($username)
    {
        $sql = $this->db->query("SELECT username FROM tb_admin where username='$username'");
        return $sql->result();
    }
    function UpdateData($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }

    function DeleteData($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query = $this->db->get($tabel);
        return $query->result();
    }
    function GetDataWithDistinct($tabel)
    {
        // $this->db->distinct();

        // $this->db->select('accessid');
        $query = $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel, $id, $nilai)
    {
        $this->db->where($id, $nilai);
        $query = $this->db->get($tabel);
        return $query;
    }
    function GetDataWhereDouble($tabel, $id, $nilai, $id2, $nilai2)
    {
        $this->db->where($id, $nilai);
        $this->db->where($id2, $nilai2);
        $query = $this->db->get($tabel);
        return $query;
    }
    function GetDataWhere1($tabel, $id, $nilai, $field, $value)
    {
        $this->db->where($id, $nilai);
        $this->db->order_by($field, $value);
        $query = $this->db->get($tabel);
        return $query;
    }
    function GetDataWhere2($tabel, $id, $nilai, $id1, $nilai1, $field, $value)
    {
        $this->db->where($id, $nilai);
        $this->db->where($id1, $nilai1);
        $this->db->order_by($field, $value);
        $query = $this->db->get($tabel);
        return $query;
    }
    function GetDataJoin($tbl1, $tbl2, $param)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->join($tbl2, $param);
        $query = $this->db->get();
        return $query;
    }
    function GetDataJoinWhere($tbl1, $tbl2, $param, $where, $id)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->join($tbl2, $param);
        $this->db->where($where, $id);
        $query = $this->db->get();
        return $query;
    }
    function GetData2Join($tbl1, $tbl2, $tbl3, $param)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->from($tbl2);
        $this->db->join($tbl3, $param);
        // $this->db->order_by("kd_setting_pembayaran_ta", "asc");
        $query = $this->db->get();
        return $query;
    }
    function GetData3Join($tbl1, $tbl2, $tbl3, $tbl4, $param)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->from($tbl2);
        $this->db->from($tbl3);
        $this->db->join($tbl4, $param);
        $query = $this->db->get();
        return $query;
    }
    function GetData4Join($tbl1, $tbl2, $tbl3, $tbl4, $tbl5, $param)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->from($tbl2);
        $this->db->from($tbl3);
        $this->db->from($tbl4);
        $this->db->join($tbl5, $param);
        $query = $this->db->get();
        return $query;
    }
    function GetData2JoinWhere($tbl1, $tbl2, $tbl3, $param, $id, $data)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->from($tbl2);
        $this->db->join($tbl3, $param);
        $this->db->where($id, $data);
        $query = $this->db->get();
        return $query;
    }
    function GetData2Join2Where($tbl1, $tbl2, $tbl3, $param, $id, $id2, $data, $data2)
    {
        $this->db->select('*');
        $this->db->from($tbl1);
        $this->db->from($tbl2);
        $this->db->join($tbl3, $param);
        $this->db->where($id, $data);
        $this->db->where($id2, $data2);
        $query = $this->db->get();
        return $query->result();
    }
    function GetDataLike($table, $id, $nilai)
    {
        $this->db->like($id, $nilai);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_cuti');
        $this->db->like('tgl_request', $keyword);
        $this->db->or_like('requester', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get()->result();
    }
}