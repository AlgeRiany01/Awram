<?php

namespace App\Http\Controllers\patient;

use Exception;

use App\Models\patientsPosts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorepatientsPostsRequest;


class PatientsPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = patientsPosts::where('patient', Auth::user()->id)->latest()->get();
        return view('patient.posts.index', compact('posts'));
    }


    public function store(StorepatientsPostsRequest $request)
    {
        try {
            $data = $request->validated();
            $data['patient'] = Auth::user()->id;
            patientsPosts::create($data);
            toast('تم الحفظ بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }


        return back();
    }

    public function update(StorepatientsPostsRequest $request, patientsPosts $patientPost)
    {

        try {


            $data = $request->validated();
            $patientPost->update($data);
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
            patientsPosts::find($id)->delete();
            toast('تم الحذف بنجاح', 'success');
        } catch (Exception $e) {
            toast('حدث خطأ غير متوقع', 'error');
        }
        return back();
    }
}
