<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\StaffRepositoryInterface;
Use App\Models\Staff;
use App\Http\Requests\Admin\Staff\DeleteRequest;
use App\Http\Requests\Admin\Staff\ListRequest;
use App\Http\Requests\Admin\Staff\StoreRequest;
use App\Http\Requests\Admin\Staff\UpdateRequest;

class StaffController extends Controller
{
    private $repository;

    public function __construct(StaffRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = $this->repository->all();
        return view('admin/staffs.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {
       
        
         return view('admin/staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {  
        $this->repository->create($request->validated());
        return redirect()->route('admin.staffs.index')->with('success', __('messages.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->repository->find($id);
        return view('admin/staffs.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->repository->find($id);
       
        return view('admin/staffs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('admin.staffs.index')->with('success', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.staffs.index')->with('success', __('messages.deleted'));
    }

    public function destroyImage($id)
    {
        
        $this->repository->destroyImage($id);
        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);
    }

    public function getData()
    {
        return $this->repository->datatable();
    }
}
