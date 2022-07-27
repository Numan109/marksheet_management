<?php

namespace App\Http\Controllers;

use App\Models\Student;



use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    
    public function index()
    {
        return view('main.add_student');
    }

    
    public function create(Request $request)
    {
 

        $validator = Validator::make($request->all(), [
            'std_name' => 'required',
            'std_class' => 'required',
            'std_roll'  => 'required',
            'std_gender'  => 'required',
            'std_dateOfbirth' => 'required',
            'std_religion'=> 'required',
            'std_nationality' => 'required',
            'std_birth_reg'=> 'required',
            'std_present_add' => 'required',
            'std_homedistrict'=> 'required',
            'std_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'std_sig' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'std_father_name' => 'required',
            'std_father_phone' => 'required',
            'std_father_occupation'=> 'required',
            'std_mother_name' => 'required',
            'std_mother_phone' => 'required',
            'std_mother_occupation'=> 'required',
            'std_password' => 'required',
         
        ]);
        if ($validator->fails()) {
            return redirect('add_student')->withErrors($validator)->withInput();
        }
        $data = $validator->validated();
        $data['std_permenent_add']=$request->std_permenent_add;
        $data['std_phone']=$request->std_phone;
        $data['std_email']=$request->std_email;
        $data['std_father_email']=$request->std_father_email;
        $data['std_mother_email']=$request->std_mother_email;

     

        try {
            
            $imgfilename = $this->imageUpload($request);
            $sigfilename = $this->sigUpload($request);
            $data['std_image'] = $imgfilename;
            $data['std_sig'] = $sigfilename;           
            // echo "<pre>";
            // print_r($data);
            // exit();
            $student = Student::create($data);
            Session::flash("message",'Student create successfully');
        }catch(QueryException $e){
            Session::flash("message",$e->errorInfo[2]);
        }
        return redirect()->back();
    }

    protected function imageUpload($image)
    {
        if ($image->file('std_image')) {
            $imgfile = $image->file('std_image');
            $imgfilename = date('YmdHi') . $imgfile->getClientOriginalName();
            $imgfile->move(public_path('images'), $imgfilename);
            return $imgfilename;
        }
    }
    protected function sigUpload($signature)
    {
        if ($signature->file('std_sig')) {
            $sigfile = $signature->file('std_sig');
            $sigfilename = date('YmdHi') . $sigfile->getClientOriginalName();
            $sigfile->move(public_path('images'), $sigfilename);
            return $sigfilename;
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $students=Student::paginate(1);
        return view('main.view_student_info', compact('students'));
    }

    
    public function edit(Student $student)
    {
        //
    }

    
    public function update(Request $request, Student $student)
    {
        //
    }

    
    public function destroy(Student $student)
    {
        //
    }
}
