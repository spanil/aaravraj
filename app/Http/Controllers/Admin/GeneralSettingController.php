<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\GeneralSettingRepositoryInterface;
Use App\Models\GeneralSetting;
use App\Http\Requests\Admin\GeneralSetting\StoreRequest;


class GeneralSettingController extends Controller
{
    private $repository;

    public function __construct(GeneralSettingRepositoryInterface $repository)
    {
       $this->repository = $repository;
    }
     /**
     * Display a listing of the resource.
     */
  

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $data = GeneralSetting::first();
         return view('admin/general_settings.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
   {         
         GeneralSetting::truncate();
        $this->repository->create($request->validated());
        return redirect()->route('admin.general_settings.index')->with('success',  __('messages.updated'));
    }


   
}
