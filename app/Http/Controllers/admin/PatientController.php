<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\patient;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepatientRequest;
use App\Traits\ImageProcessingTrait;

class PatientController extends Controller
{
    use ImageProcessingTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $patients = patient::latest()->get();
        return view('admin.patients.index', compact('patients'));
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
    public function store(StorepatientRequest $request)
    {

        try {

            $data = $this->processImageAndData($request, $request->validated(), 'patients/');
            patient::create($data);

            toast('تمت العملية بنجاح', 'success');
        } catch (\Exception $e) {
            return $e->getMessage();
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorepatientRequest $request, patient $patient)
    {

        try {


            $data = $this->processImageAndData($request, $request->validated(), 'patients/');
            $patient->update($data);
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            // toast('حدث خطأ غير متوقع', 'error');
            return $e->getMessage();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(patient $patient)
    {
        try {
            $patient->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}