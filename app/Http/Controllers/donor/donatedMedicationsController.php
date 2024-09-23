<?php

namespace App\Http\Controllers\donor;

use Exception;
use App\Models\medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\medicine as RequestsMedicine;

class donatedMedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = medicine::where('donor', Auth::user()->id)->latest()->get();
        return view('donor.medicines.donated', compact('medicines'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestsMedicine $request,  $id)
    {
        try {
            $data = $request->validated();
            $medicine = medicine::findOrFail($id);
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
    public function destroy(string $id)
    {
        try {
            $medicine = medicine::findOrFail($id);
            $medicine->delete();
            toast('تمت العملية بنجاح', 'success');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return back();
    }
}
