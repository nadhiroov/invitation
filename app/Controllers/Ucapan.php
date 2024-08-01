<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MUcapan;

class Ucapan extends Core
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new MUcapan();
    }

    public function index()
    {
        return view('ucapan/index');
    }

    public function getData() {
        
    }

    public function add_komen()
    {
        $nama = $this->request->getPost('nama');
        $komentar = $this->request->getPost('komentar');
        $id = $this->request->getPost('id');
        $param['id'] = $id;
        $data = $this->model->getUcapan($param);
        $dataKomen = [
            'name'  => $nama,
            'komen' => $komentar,
            'resp'  => null,
            'date'  => date('Y-m-d H:i:s')
        ];
        if ($data != null) {
            array_push($data, $dataKomen);
            $data = json_encode(array_values($data));
            $return = $this->model->process($id, 'ucapan', $data);
        } else {
            $data = json_encode(array_values([$dataKomen]));
            $return = $this->model->process($id, 'ucapan', $data, 'insert');
        }
        echo json_encode($return);
    }
}
