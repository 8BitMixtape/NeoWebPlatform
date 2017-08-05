<?php

namespace App\Http\Controllers;

use App\Repositories\MixtapeRepository;
use App\Http\Middleware\IsAjax;

class ExchangeController extends Controller
{

    /**
     * The MixtapeRepository instance.
     *
     * @var \App\Repositories\MixtapeRepository
     */
    protected $mixtapeRepository;

    /**
     * Create a new ExchangeController instance.
     *
     * @return void
     */
    public function __construct(MixtapeRepository $mixtape)
    {
        $this->mixtapeRepository = $mixtape;
        //$this->middleware('ajax')->only('gethex');

    }

    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mixtapes = $this->mixtapeRepository->getActiveWithUserOrderByDate(4);
        return view('exchange.index', compact('mixtapes'));
    }

    public function gethex($id)
    {
        return $this->mixtapeRepository->getById($id)->hex;
    }

    public function upload()
    {
        return view('exchange.upload');
    }

    public function editprofile()
    {
        return view('exchange.editprofile');
    }

}
