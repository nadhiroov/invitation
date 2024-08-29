<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MGuest;
use App\Models\MUcapan;

class Dashboard extends Core
{
	protected $ucapan;
	protected $guest;

	public function __construct()
	{
		parent::__construct();
		$this->guest = new MGuest();
		$this->ucapan = new MUcapan();
		// $this->setting = new MPengaturan();
		helper('text');
		helper('array');
	}
	public function index()
	{
		$this->view->setData(['menu_dashboard' => 'active']);
		$this->data['totalGuest'] = count((array)$this->guest->getList()['data']);
		$this->data['totalComment'] = @$this->ucapan->select('json_length(ucapan) as total')->where('id_user', session()->id)->first()['total'];
		$this->data['lastComment'] = $this->ucapan
			->select('jt.*, DATE_FORMAT(jt.date, "%Y-%c-%d")')
			->join("json_table(ucapan, '$[*]' COLUMNS (
        idRecord for ordinality,
        name VARCHAR(255) PATH '$.name',
        komen TEXT PATH '$.komen',
        resp TEXT PATH '$.resp',
        date TIMESTAMP PATH '$.date')) as jt", '1=1')
			->where('id_user', session()->id)
			->orderBy('jt.date', 'DESC')  // Order by date in descending order
			->limit(5)  // Limit the result to the last 5 records
			->findAll();
		$this->data['todayComment'] = $this->ucapan
			->select('count(jt.idRecord) as total')
			->join("json_table(ucapan, '$[*]' COLUMNS (
        idRecord for ordinality,
        name VARCHAR(255) PATH '$.name',
        komen TEXT PATH '$.komen',
        resp TEXT PATH '$.resp',
        date TIMESTAMP PATH '$.date')) as jt", '1=1')
			->where('id_user', session()->id)
			->where('DATE_FORMAT(jt.date, "%Y-%c-%d")', date('Y-n-d'))
			->orderBy('jt.date', 'DESC')  // Order by date in descending order
			->limit(5)  // Limit the result to the last 5 records
			->findAll();

		// dd($this->data['totalComment']);
		return view('dashboard', $this->data);
	}
}
