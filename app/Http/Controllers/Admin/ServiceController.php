<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ServiceRepositoryInterface;
Use App\Models\Service;
use App\Http\Requests\Admin\Service\DeleteRequest;
use App\Http\Requests\Admin\Service\ListRequest;
use App\Http\Requests\Admin\Service\StoreRequest;
use App\Http\Requests\Admin\Service\UpdateRequest;

class ServiceController extends Controller
{
    private $repository;

    public function __construct(ServiceRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = $this->repository->all();
        return view('admin/services.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {
       
        
         return view('admin/services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {  
        $this->repository->create($request->validated());
        return redirect()->route('admin.services.index')->with('success',  __('messages.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/services.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
       
        return view('admin/services.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.services.index')->with('success', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.services.index')->with('success', __('messages.deleted'));
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
