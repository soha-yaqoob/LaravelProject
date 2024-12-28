<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class MyFirstController extends Controller
{
    //
    public function selectUser(){
        return view('users');
    }
    public function selectStudents(){
       $allStudents=['ali','aqsa','aqib','faiz'];
      return view ('students',compact('allStudents'));
// $allStudents=[
//         ['ali','ali@gmail.com','karachi',123],
//         ['sahir','sahir@gmail.com','karachi',123],
//         ['aqib','aqib@gmail.com','karachi',123],
//         ['faiz','faiz@gmail.com','karachi',123],
//     ];
$allStudents=[
    ['id'=>'1','name'=>'ali','city'=>'karachi','password'=>'123'],
    ['id'=>'2','name'=>'sahir','city'=>'karachi','password'=>'123'],
    ['id'=>'3','name'=>'aqib','city'=>'karachi','password'=>'123'],
    ['id'=>'4','name'=>'faiz','city'=>'karachi','password'=>'123'],
];
return view('students',compact('allStudents'));
    }
    // public function selectMembers(){
    //     $allMembers = [
                    
    //         [ 'id' => 1 ,
    //          'name' => "Waleed",
    //         'email' => "waleed@gmail.com",
    //         'city' => "Karachi",  ],

    //         [ 'id' => 2 ,
    //          'name' => "Ali", 
    //         'email' => "ali@gmail.com",
    //         'city' => "karachi", ],

    //         [ 'id' => 3 ,
    //          'name' => "Aqsa", 
    //         'email' => "aqsa@gmail.com",
    //         'city' => "karachi", ],
    
    //         [ 'id' => 4 ,
    //          'name' => "Imran",
    //         'email' => "imran@gmail.com",
    //         'city' => "lahore",  ],
    //     ];
    //     return view('assoc',compact('allMembers'));
    // }
    public function addRecord(Request $req){
        $req->validate([
            "uName"=>"required",
            "uEmail"=>"required|email|unique:students,email",
            "uPassword" => ['required', 'min:8', 'max:15']
        ]);
        $std = new Student();
        $std->name=$req->uName;
        $std->email=$req->uEmail;
        $std->password=$req->uPassword;
        $std->save();
        return redirect('select');
}

public function selectRecords(){
    $std=new Student();
    $allStudents=$std->all();
    return view('selectUser',compact('allStudents'));
}

public function editData($id){
    $std=new Student();
    $stdRecord=$std::find($id);
    return view('edit',compact('stdRecord'));
}
public function updateData(Request $req, $id){
    $std=new Student();
    $stdRecord=$std::find($id);
    $stdRecord->name=$req->uName;
    $stdRecord->email=$req->uEmail;
    $stdRecord->password=$req->uPassword;
    $stdRecord->save();
    return redirect('select');
}
}