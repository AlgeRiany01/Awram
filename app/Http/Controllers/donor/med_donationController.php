<?php

namespace App\Http\Controllers\donor;

use Exception;
use App\Models\medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\medicine as RequestsMedicine;
use Illuminate\Support\Facades\Auth;

class med_donationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('donor.medicines.index');
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
            $data['donor'] = Auth::user()->id;
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
