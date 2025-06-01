<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\PermissionRepositoryInterface;
Use App\Models\Permission;
use App\Http\Requests\Admin\Permission\DeleteRequest;
use App\Http\Requests\Admin\Permission\ListRequest;
use App\Http\Requests\Admin\Permission\StoreRequest;
use App\Http\Requests\Admin\Permission\UpdateRequest;

class PermissionController extends Controller
{
    private $repository;

    public function __construct(PermissionRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = $this->repository->all();
        return view('admin/permissions.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $permission = new Permission();
         return view('admin/permissions.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {  
        $this->repository->create($request->validated());
        return redirect()->route('admin.permissions.index')->with('success', 'Permission created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $permission = $this->repository->find($id);
        return view('admin/permissions.show', compact('permission'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = $this->repository->find($id);
        return view('admin/permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.permissions.index')->with('success', 'Permission updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.permissions.index')->with('success', 'Permission deleted.');
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
