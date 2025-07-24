<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
Use App\Models\Banner;


class HomeController extends Controller
{
   
    public function index()
    {
        return view('web/index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {
       
        
         return view('admin/banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {  
        $this->repository->create($request->validated());
        return redirect()->route('admin.banners.index')->with('success', __('messages.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/banners.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
       
        return view('admin/banners.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.banners.index')->with('success', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.banners.index')->with('success', __('messages.deleted'));
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
