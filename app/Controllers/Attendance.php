<?php

namespace App\Controllers;

use App\Models\MAcara;
use App\Models\MGuest;
use App\Models\MMempelai;
use App\Models\MPengaturan;

class Attendance extends Core
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new MGuest();
        $this->setting = new MPengaturan();
        $this->mempelai = new MMempelai();
        $this->acara = new MAcara();
        helper('text');
        helper('array');
    }

    public function open($id, $code)
    {
        $this->data['data'] = $this->model->attend($id, $code);
        if ($this->data['data'] != null) {
            $this->data['data']['event'] = explode('#', $this->data['data']['event']);
            $param['id'] = $id;
            $this->data['mempelai'] = $this->mempelai->getmempelai($param);
            $this->data['setting'] = $this->setting->getSetting($param);
            $this->data['acara'] = $this->acara->getAcara($param);
            $this->data['acara'] = json_decode($this->data['acara']['acara'], true)[0];
            // dd($this->data['data']['event']);
            return view('themes/tealflower', $this->data);
        } else {
            echo 'Link tidak valid';
        }
    }
}
