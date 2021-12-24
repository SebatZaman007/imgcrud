<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redis;

class StudentController extends Controller
{
    public function index(){
        $student = Student::latest()->get();
        return view('welcome',compact('student'));
    }
    public function studentCreate()
    {
        return view('form');
    }

    public function studentStore(Request $request){
        $store = new Student;
        $store->name=$request->input('name');
        $store->course=$request->input('course');
        if($request->hasfile('profile_img'))
        {
            $file=$request->file('profile_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename =time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $store->profile_img = $filename;
        }
       $store->save();
       return redirect()->route('index');
    }

    public function studentEdit($id)
    {
        // return $id;
        $edit = Student::where('id',$id)->first();
        return view('edit',compact('edit'));
    }

    public function studentUpdate(Request $request){
        $id=$request->id;
        $store =Student::where('id',$id)->first();
        $store->name=$request->input('name');
        $store->course=$request->input('course');
        if($request->hasfile('profile_img'))
        {
            $destination ='uploads/students/'.$store->profile_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('profile_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename =time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $store->profile_img = $filename;
        }
       $store->update();
       return redirect()->route('index');

    }

    public function studentDelete($id){
        Student::where('id',$id)->delete();
        return redirect()->route('index');
    }


}
