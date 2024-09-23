<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\Donor;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonorRequest;
use App\Traits\ImageProcessingTrait;

class DonorController extends Controller
{
    use ImageProcessingTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Donors = Donor::latest()->get();
        return view('admin.Donors.index', compact('Donors'));
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
    public function store(StoreDonorRequest $request)
    {

        try {

            $data = $this->processImageAndData($request, $request->validated(), 'donors/');
            Donor::create($data);

            toast('تمت العملية بنجاح', 'success');
        } catch (\Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(StoreDonorRequest $Donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoreDonorRequest $Donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDonorRequest $request, Donor $Donor)
    {

        try {
            $data = $this->processImageAndData($request, $request->validated(), 'donors/');
            $Donor->update($data);
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
    public function destroy(Donor $Donor)
    {
        try {
            $Donor->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}