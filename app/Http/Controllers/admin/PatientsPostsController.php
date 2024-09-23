<?php

namespace App\Http\Controllers\admin;

use Exception;

use App\Models\patientsPosts;
use App\Http\Controllers\Controller;


class PatientsPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = patientsPosts::latest()->get();
        return view('admin.patients.posts.index', compact('posts'));
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = patientsPosts::findorFail($id);
        return view('admin.patients.posts.show', compact('post'));
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