<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\RoleRepositoryInterface;
Use App\Models\Role;
use App\Http\Requests\Admin\Role\DeleteRequest;
use App\Http\Requests\Admin\Role\ListRequest;
use App\Http\Requests\Admin\Role\StoreRequest;
use App\Http\Requests\Admin\Role\UpdateRequest;
class RoleController extends Controller
{
   private $repository;

    public function __construct(RoleRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = $this->repository->all();
        return view('admin/roles.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $data = new Role();
         return view('admin/roles.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {  
        $this->repository->create($request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/roles.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/roles.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.roles.index')->with('success', 'Role deleted.');
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
