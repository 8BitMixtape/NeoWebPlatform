<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Repositories\MixtapeRepository;
use App\Http\Middleware\IsAjax;
use App\Http\Requests\MixtapeCreateRequest;


class UserAreaController extends Controller
{
    //

    /**
     * The MixtapeRepository instance.
     *
     * @var \App\Repositories\MixtapeRepository
     */
    protected $mixtapeRepository;

    /**
     * Create a new UserAreaController instance.
     *
     * @return void
     */
    public function __construct(MixtapeRepository $mixtape)
    {
        $this->mixtapeRepository = $mixtape;
    }

    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mixtapes = $this->mixtapeRepository->getActiveWithUserOrderByDate(10);
        return view('member.index', compact('mixtapes'));
    }

    public function editprofile()
    {
        return view('exchange.editprofile');
    }

    public function list()
    {
        $id = Auth::id();
        $mixtapes = $this->mixtapeRepository->getActiveWithUserOrderByDate(10);

        // print_r($mixtapes);
        return view('member.user_mixtape', compact('mixtapes'));
    }


    public function create()
    {
        return view('exchange.upload');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \App\Http\Requests\MixtapeCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MixtapeCreateRequest $request)
    {
        $this->mixtapeRepository->store($request->all(), $request->user()->id);
        return redirect('/exchange');
    }

}
