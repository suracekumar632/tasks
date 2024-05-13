<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Student;
class DragController extends Controller
{
    //
    public function index(Request $request){
        $data['name'] = Student::all();
        $data['record'] = Student::orderBy('order','asc')->get();
        return view('student',$data);
    }

    public function updateOrder(Request $request){
          
            if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
       
            foreach($arr as $sortOrder => $id){
                $menu = Student::find($id);
                $menu->order = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
