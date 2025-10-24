<?php

namespace App\Controllers;

use App\Models\MAcara;
use App\Models\MGuest;
use App\Models\MMempelai;
use App\Models\MPengaturan;
use App\Models\MUcapan;
use DateTime;

class Attendance extends BaseController
{
    protected $setting;
    protected $mempelai;
    protected $acara;
    protected $ucapan;
    protected $data;

    public function __construct()
    {
        $this->model = new MGuest();
        $this->setting = new MPengaturan();
        $this->mempelai = new MMempelai();
        $this->acara = new MAcara();
        $this->ucapan = new MUcapan();
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
            // dd($this->data['acara']);
            $this->data['acara'] = json_decode($this->data['acara']['acara'], true);
            foreach($this->data['acara'] as $key => $value){
                if ($value['tanggal']) {
                    $this->data['acara'][$key]['tanggal'] = $this->convertDateToIndonesian($value['tanggal']);
                }
            }
            /* foreach ($this->data['acara']['aqad'] as $key => &$value) {
                if ($key == 'tanggal') {
                    $value = $this->convertDateToIndonesian($value);
                    break;
                }
            }
            foreach ($this->data['acara']['resepsi'] as $key => &$value2) {
                if ($key == 'tanggal') {
                    $value2 = $this->convertDateToIndonesian($value2);
                    break;
                }
            }
            foreach ($this->data['acara']['walimah'] as $key => &$value3) {
                if ($key == 'tanggal') {
                    $value3 = $this->convertDateToIndonesian($value3);
                    break;
                }
            } */
            $this->data['response'] = $this->ucapan->getUcapan($param);
            $param['name'] = $this->data['data']['name'];
            $this->data['ucapan'] = $this->ucapan->getUcapan($param);
            $this->data['ucapan'] = empty($this->data['ucapan']) ? null : $this->data['ucapan'][0];
            // dd($this->data['acara']);
            // dd($this->data['data']['event']);
            return view('themes/tealflower', $this->data);
        } else {
            echo 'Link tidak valid';
        }
    }

    private function convertDateToIndonesian($date_string)
    {
        // Create a date object
        $date = new DateTime($date_string);

        // Format the date using Indonesian format
        $formatted_date = $date->format('l d F Y');

        // Replace English day names with Indonesian
        $indonesian_days = [
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
            'Sunday' => 'Minggu'
        ];
        $formatted_date = strtr($formatted_date, $indonesian_days);

        return $formatted_date;
    }
}
