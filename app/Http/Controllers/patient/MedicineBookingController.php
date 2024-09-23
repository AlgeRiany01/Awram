<?php

namespace App\Http\Controllers\patient;

use Exception;
use App\Models\medicine;
use App\Models\medicineBooking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoremedicineBookingRequest;
use App\Http\Requests\UpdatemedicineBookingRequest;

class MedicineBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicinesBooking = MedicineBooking::withValidMedicines()
            ->latest()
            ->get();

        $medicines = Medicine::valid()
            ->latest()
            ->get();
        return view('patient.bookings.medicines', compact('medicinesBooking', 'medicines'));
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
    public function store(StoremedicineBookingRequest $request)
    {
        try {
            $data = $request->validated();
            $data['medicine'] = Crypt::decrypt($data['medicine']);
            $data['patient'] =  Auth::user()->id;
            medicineBooking::create($data);
            toast('تم الحفظ بنجاح', 'success');
        } catch (Exception $e) {
            // return $e->getMessage();
            toast('حدث خطأ غير متوقع', 'error');
        }


        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(medicineBooking $medicineBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medicineBooking $medicineBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemedicineBookingRequest $request, medicineBooking $medicineBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            medicineBooking::findorFail($id)->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}
