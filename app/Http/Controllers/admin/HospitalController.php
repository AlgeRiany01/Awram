<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\hospital;
use App\Http\Controllers\Controller;
use App\Traits\ImageProcessingTrait;
use App\Http\Requests\StorehospitalRequest;

class HospitalController extends Controller
{
    use ImageProcessingTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = hospital::latest()->get();
        return view('admin.hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehospitalRequest $request)
    {
        try {
            $data = $this->processImageAndData($request, $request->validated(), 'hospitals/');
            hospital::create($data);
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorehospitalRequest $request, hospital $hospital)
    {
        try {
            $data = $this->processImageAndData($request, $request->validated(), 'hospitals/');
            $hospital->update($data);
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hospital $hospital)
    {
        try {
            $hospital->delete();
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }
}
