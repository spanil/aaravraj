<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\PostRepositoryInterface;
Use App\Models\Post;
use App\Http\Requests\Admin\Post\DeleteRequest;
use App\Http\Requests\Admin\Post\ListRequest;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;

class PostController extends Controller
{
    private $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = $this->repository->all();
        return view('admin/posts.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {       
        
         return view('admin/posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {        
        $this->repository->create($request->validated());
        return redirect()->route('admin.posts.index')->with('success',  __('messages.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/posts.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
       
        return view('admin/posts.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.posts.index')->with('success', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.posts.index')->with('success', __('messages.deleted'));
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
