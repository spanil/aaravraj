<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\FaqRepositoryInterface;
Use App\Models\Faq;
use App\Http\Requests\Admin\Faq\DeleteRequest;
use App\Http\Requests\Admin\Faq\ListRequest;
use App\Http\Requests\Admin\Faq\StoreRequest;
use App\Http\Requests\Admin\Faq\UpdateRequest;

class FaqController extends Controller
{
    private $repository;

    public function __construct(FaqRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = $this->repository->all();
        return view('admin/faqs.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {
       
        
         return view('admin/faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {  
        $this->repository->create($request->validated());
        return redirect()->route('admin.faqs.index')->with('success',  __('messages.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/faqs.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
       
        return view('admin/faqs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.faqs.index')->with('success', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.faqs.index')->with('success', __('messages.deleted'));
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
