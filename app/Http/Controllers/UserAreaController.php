<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $id = Auth::id();
        $mixtapes = $this->mixtapeRepository->getMixtapesWithOrder(10, $id);
        return view('member.user_mixtape', compact('mixtapes'));
    }

    public function editprofile()
    {
        return view('exchange.editprofile');
    }

    public function browse()
    {
        $id = Auth::id();
        $mixtapes = $this->mixtapeRepository->getMixtapesWithOrder(10, $id);
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
        // $file = $request->file('hex')->store('hex');
        // $hex_string = Storage::get($file);
        // Storage::delete([$file]);
        // $hex_string = getHexFromPaste($request->hex_string);

        $this->mixtapeRepository->store($request->all(), $request->user()->id);
        return redirect('/member');
    }


    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mixtape = $this->mixtapeRepository->getById($id);
        return view('exchange.edit', compact('mixtape'));
    }

}
