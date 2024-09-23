<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use App\Traits\ImageProcessingTrait;

class AdminController extends Controller
{

    use ImageProcessingTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = admin::latest()->get();
        return view('admin.admins.index', compact('admins'));
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
    public function store(StoreadminRequest $request)
    {

        try {

            $data = $this->processImageAndData($request, $request->validated(), 'admins/');

            admin::create($data);

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
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreadminRequest $request, admin $admin)
    {

        try {
            $data = $this->processImageAndData($request, $request->validated(), 'admins/');
            $admin->update($data);
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        try {
            $admin->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}