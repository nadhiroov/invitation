<?php

namespace App\Controllers;

use App\Models\MUcapan;

class Ucapan extends Core
{
    protected $model;
    public function __construct()
    {
        parent::__construct();
        $this->model = new MUcapan();
    }

    public function index()
    {
        return view('ucapan/index');
    }

    public function getData()
    {
        $output['data'] = $this->model->select('jt.*')->join("json_table(ucapan, '$[*]' COLUMNS (
            idRecord for ordinality,
            name VARCHAR(255) PATH '$.name',
            komen TEXT PATH '$.komen',
            resp TEXT PATH '$.resp',
            date TIMESTAMP PATH '$.date')) as jt", '1=1')->where('id_user', session()->id)->findAll();
        return json_encode($output);
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

    public function reply($idRecord)
    {
        $where = ['id_user' => session()->id, 'idRecord' => $idRecord];
        $data = $this->model->select('jt.*')->join("json_table(ucapan, '$[*]' COLUMNS (
            idRecord for ordinality,
            komen TEXT PATH '$.komen',
            resp TEXT PATH '$.resp')) as jt", '1=1')->where($where)->first();
        return json_encode($data);
    }

    public function processReply()
    {
        $form = $this->request->getPost('form');
        $index = intval($form['idRecord']) - 1;
        $data = $this->model->select("json_replace(ucapan, '$[$index].resp', '$form[balasan]') as ucapan")->where('id_user', session()->id)->first();
        try {
            $this->model->set('ucapan', $data['ucapan'])->where('id_user', session()->id)->update();
            $ret = [
                'code'       => 1,
                'message'    => 'Berhasil menyimpan data!',
                'title'      => 'Success'
            ];
        } catch (\Exception $er) {
            $ret = [
                'code'         => 0,
                'title'        => 'Error',
                'message'    => $er->getMessage(),
            ];
        }
        echo json_encode($ret);
    }
}
