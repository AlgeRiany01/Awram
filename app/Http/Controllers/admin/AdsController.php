<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\ads;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreadsRequest;
use App\Http\Requests\UpdateadsRequest;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = ads::latest()->get();

        return view('admin.ads.index', compact('ads'));
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
    public function store(StoreadsRequest $request)
    {
        try {
            $data = $request->validated();
            $data['admin'] = Auth::user()->id;
            ads::create($data);
            toast('تم الحفظ بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }


        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreadsRequest $request,  $id)
    {
        try {


            $data = $request->validated();
            $ad = ads::findorFail($id);
            $ad->update($data);
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
    public function destroy($id)
    {
        try {
            ads::find($id)->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}
