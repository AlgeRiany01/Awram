<?php

namespace App\Http\Controllers\patient;

use Exception;
use App\Models\hospital;
use App\Models\patientBooking;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StorepatientBookingRequest;
use App\Http\Requests\UpdatepatientBookingRequest;

class PatientBookingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = patientBooking::where('patient',  Auth::user()->id)->latest()->get();
        $hospitals = hospital::latest()->get();
        return view('patient.bookings.index', compact('bookings', 'hospitals'));
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
    public function store(StorepatientBookingRequest $request)
    {
        try {
            $data = $request->validated();
            $data['hospital'] = Crypt::decrypt($data['hospital']);
            $data['patient'] =  Auth::user()->id;
            patientBooking::create($data);
            toast('تم الحفظ بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }


        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(patientBooking $patientBooking)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(patientBooking $patientBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepatientBookingRequest $request, patientBooking $patientBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(patientBooking $patientBooking)
    {
        try {
            $patientBooking->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}
