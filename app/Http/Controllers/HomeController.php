<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\donor;
use App\Models\patient;
use App\Models\hospital;
use App\Models\medicine;
use App\Models\med_request;
use Illuminate\Http\Request;
use App\Models\patientBooking;
use App\Models\medicineBooking;
use App\Models\patientsPosts;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $data['patientsCount'] = patient::count();
        $data['medicinesCount'] = medicine::Valid()->count();
        $data['hospitalsCount'] = hospital::count();
        $data['usersCount'] = patient::count() + donor::count();

        $data['hospitals'] = hospital::latest()->get();
        return view('home.index', $data);
    }

    public function admin()
    {
        $data['patientsCount'] = patient::count();
        $data['medicinesCount'] = medicine::Valid()->count();
        $data['hospitalsCount'] = hospital::count();
        $data['donorsCount'] = donor::count();
        $data['medicines'] = medicine::latest()->take(5)->get();

        return view('admin.dashboard', $data);
    }


    public function patient()
    {
        $data['medicinesCount'] = medicine::Valid()->count();
        $data['medicineBooking'] = medicineBooking::WithValidMedicines()->where('patient', Auth::user()->id)->count();
        $data['patientPosts'] = patientsPosts::where('patient', Auth::user()->id)->count();
        $data['hospitalsCount'] = hospital::count();

        $data['medicines'] = medicineBooking::latest()->take(5)->get();
        return view('patient.dashboard', $data);
    }
}
