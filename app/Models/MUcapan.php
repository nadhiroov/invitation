<?php

namespace App\Models;

use CodeIgniter\Model;

class MUcapan extends Model
{
    protected $table            = 'ucapan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'ucapan'];

    // Dates


    public function getUcapan($param = '')
    {
        if (!empty($param)) {
            $id = $param['id'];
        } else {
            $id = $_SESSION['id'];
        }
        $res = $this->where('id_user', $id)->findAll();
        $return = [];
        if (isset($param['name']) && $res != null) {
            $data = json_decode($res[0]['ucapan'], true);
            foreach ($data as $row) {
                if ($row['name'] == $param['name']) {
                    $return[] = $row;
                }
            }
        } elseif ($res != null) {
            $return = json_decode($res[0]['ucapan'], true);
        }
        return $return;
    }

    public function process($id, $kolom, $data, $update = '')
    {
        if ($update == '') {
            $this->set($kolom, $data);
            $this->where('id_user', $id);
            try {
                $this->update();
                $return = [
                    'status'    => 'success',
                    'title'     => 'Success',
                    'message'   => 'Data saved !'
                ];
            } catch (\Throwable $th) {
                $return = [
                    'status'    => 'error',
                    'title'     => 'Error',
                    'message'   => $th->getMessage()
                ];
            }
        } else {
            $array = [
                'id_user' => $id,
                'ucapan'  => $data
            ];
            try {
                $this->insert($array);
                $return = [
                    'status'    => 'success',
                    'title'     => 'Success',
                    'message'   => 'Data saved !'
                ];
            } catch (\Throwable $th) {
                $return = [
                    'status'    => 'error',
                    'title'     => 'Error',
                    'code'      => $th->getCode(),
                    'message'   => $th->getMessage()
                ];
            }
        }
        return $return;
    }

    public function getUcapanV2($param = '') {
        if (!empty($param)) {
            $id_user = $param['id'];
        } else {
            $id_user = $_SESSION['id'];
        }

        $sql = "
            SELECT jt.*
            FROM ucapan
            JOIN JSON_TABLE(ucapan, '$[*]' COLUMNS (
              id FOR ORDINALITY,
              name VARCHAR(10) PATH '$.name',
              komentar VARCHAR(10) PATH '$.komen',
              response VARCHAR(10) PATH '$.resp',
              tanggal DATETIME PATH '$.date'
            )) AS jt
            WHERE ucapan.id_user = ?";

        $query = $this->db->query($sql, [$id_user]);
        return $query->getResultArray();
    }
}
