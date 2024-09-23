<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\medicine;
use App\Models\medicineBooking;

use Illuminate\Support\Facades\DB;
use App\enums\patientBookingStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\medicine as RequestsMedicine;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $medicines = medicine::latest()->get();
        return view('admin.medicines.index', compact('medicines'));
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
    public function store(RequestsMedicine $request)
    {
        try {
            $data = $request->validated();
            medicine::create($data);
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestsMedicine $request, medicine $medicine)
    {
        try {
            $data = $request->validated();
            $medicine->update($data);

            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(medicine $medicine)
    {
        try {
            $medicine->delete();
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }

    public function getRequestedMedicines()
    {
        $medicines = medicineBooking::where('status', patientBookingStatus::WAITING)->latest()->get();

        return view('admin.medicines.requestedMedicines', compact('medicines'));
    }


    public function acceptMedicine($id)
    {
        DB::transaction(function () use ($id) {
            $medicineBooking = medicineBooking::findOrFail($id);

            $medicine = $medicineBooking->medicineRel;
            $medicine->decrement('qint', 1);

            $medicineBooking->update(['status' => patientBookingStatus::ACCEPTED]);
            toast('تمت العملية بنجاح', 'success');
        });
        return back();
    }



    public function deleteMedicineBooking($id)
    {

        $medicineBooking = medicineBooking::findOrFail($id);
        $medicineBooking->update(['status' => patientBookingStatus::UNACCEPTED]);
        toast('تمت العملية بنجاح', 'success');

        return back();
    }



    public function acceptedMedicine()
    {

        $medicines = medicineBooking::where('status', patientBookingStatus::ACCEPTED)->latest()->get();

        return view('admin.medicines.acceptedMedicine', compact('medicines'));
    }
}
