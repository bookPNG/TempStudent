<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tempmodel;
use Illuminate\Support\Facades\DB;

class TempController extends Controller
{
    public function index(){
        return view('home');
    }
    public function add(Request $request){
        $request->validate(
            [
                'student_id'=>'required|max:8',
                'student_temp'=>'required|max:4'
            ],
            [
                'student_id.required'=>"กรุณากรอกรหัสนักศึกษา",
                'student_id.max'=>"กรอกรหัสนักศึกษาไม่ถูกต้อง (ยาว - สั้น เกินไป)",
                'student_temp.reqiured'=>"กรุณากรอกอุณหภูมิ",
                'student_temp.max'=>"กรอกอุณหภูมิไม่ถูกต้อง (เลขทศนิยม 1 ตำแหน่ง)"
            ]
        );

        $status = "";
        $temp = number_format($request->student_temp,1);
        // dd($temp);
        if($temp > 37.5){
            $status = "High";
        }else if($temp < 35.0){
            $status = "Low";
        }else{
            $status = "Average";
        }

        $tempmodel = new tempmodel;
        $tempmodel->Student_ID = $request->student_id;
        $tempmodel->Student_Temp = $request->student_temp;
        $tempmodel->Student_Status = $status;
        $tempmodel->save();

        return redirect()->back()->with('success', "บันทึกข้อมูลแล้ว");
    }
    public function average(){
        $tempmodel = tempmodel::where('Student_status', 'Average')->avg('Student_Temp');
        $temp = number_format($tempmodel,1);
        // dd($temp);
        return view('average', compact('temp'));
    }
    public function top(){
        $tempmodel = tempmodel::where('Student_status', 'Average')->orderByDesc('Student_Temp')->limit(10)->get();
        // dd($tempmodel);
        return view('top', compact('tempmodel'));
    }
}
