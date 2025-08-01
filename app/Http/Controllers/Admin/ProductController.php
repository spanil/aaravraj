<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ProductRepositoryInterface;
Use App\Models\Product;
Use App\Models\Category;
use App\Http\Requests\Admin\Product\DeleteRequest;
use App\Http\Requests\Admin\Product\ListRequest;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;

class ProductController extends Controller
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }
     /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $datas = $this->repository->all();
        return view('admin/products.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $categories = Category::whereNull('parent_id')->get();
         return view('admin/products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {         
        $this->repository->create($request->validated());
        return redirect()->route('admin.products.index')->with('success',  __('messages.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/products.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('admin/products.edit', compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.products.index')->with('success', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.products.index')->with('success', __('messages.deleted'));
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
