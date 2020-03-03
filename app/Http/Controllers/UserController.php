<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        // $user = ModelUser::all();
        // $respon['users']= $user;
        // $respon['succes']=1;
        // return $respon->json($respon);
        return "sjdsd";
    }
    public function registerPost(Request $request){
        // $this->validate($request, [
        //     'name' => 'required|min:4',
        //     'email' => 'required|min:4|email|unique:users',
        //     'password' => 'required',
        //     'confirmation' => 'required|same:password',
        // ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
    public function coba(){
        return view('coba');
    }
    public function coba2(){
        return view('coba2');
    }
    public function getData(){
        $cek = DB::select(DB::raw("Select * from users"));
        return response()->json($cek);
    }
}
