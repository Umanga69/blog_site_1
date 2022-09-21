<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function welcome(){
        $data =[
            'name'=>'UK',
            'age'=>17
        ];
        return view('welcome')->with($data);
    }

    public function main()
    {
        return view('main');
    }

    public function profile($id,$name){
        $data=[
            'id'=>$id,
            'name'=>$name
        ];
        return view('profile')->with($data);
    }

    public function create(){
        return view('create');
    }
    public function list(){
        $students = Student::get();
        return view('list')->with('students',$students);
    }

    public function store(Request $request){
        $student = new Student();
        $student->name=$request->name;
        $student->address=$request->address;
        $student->dob=$request->dob;

        //image
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension =  $request->file('img')->getClientOriginalExtension();
        $filenametostore= $filename."_".time().".".$extension;
        $img = Image::make($request->file('img'));
        $img-> save('storage/image/'.$filenametostore);

        $student->img= 'storage/image/'.$filenametostore;

        $student->save();

    }
}
