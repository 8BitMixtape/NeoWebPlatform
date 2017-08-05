<?php

namespace App\Http\Controllers;

use App\Repositories\MixtapeRepository;
use App\Http\Middleware\IsAjax;
use App\Http\Requests\MixtapeCreateRequest;

use Illuminate\Support\Facades\Auth;

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
    }

    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mixtapes = $this->mixtapeRepository->getActiveWithUserOrderByDate(10);
        return view('exchange.index', compact('mixtapes'));
    }

    public function gethex($id)
    {
        return $this->mixtapeRepository->getById($id)->hex;
    }

    public function list()
    {
        $id = Auth::id();
        $mixtapes = $this->mixtapeRepository->getActiveWithUserOrderByDate(10);

        // print_r($mixtapes);
        return view('exchange.index', compact('mixtapes'));
    }


    public function create()
    {
        return view('exchange.upload');
    }

    public function editprofile()
    {
        return view('exchange.editprofile');
    }


    /**
     * Store a newly created post in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MixtapeCreateRequest $request)
    {
        $this->mixtapeRepository->store($request->all(), $request->user()->id);
        return redirect('/exchange');
    }


    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = $this->blogRepository->getByIdWithTags($id);
        // $this->authorize('change', $post);
        // return view('back.blog.edit', $this->blogRepository->getPostWithTags($post));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \App\Http\Requests\PostUpdateRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        // $post = $this->blogRepository->getById($id);
        // $this->authorize('change', $post);
        // $this->blogRepository->update($request->all(), $post);
        // return redirect('blog')->with('ok', trans('back/blog.updated'));
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $post = $this->blogRepository->getById($id);
        // $this->authorize('change', $post);
        // $this->blogRepository->destroy($post);
        // return redirect('blog')->with('ok', trans('back/blog.destroyed'));
    }


}
