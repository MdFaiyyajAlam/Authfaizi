<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){
        $role=Auth::user()->role;

        if($role=='1'){
            return view('admin.dashboard');
        }

        if ($role=='2'){
            return view('admin.seller');
        }
        else{
            return view('home.index');
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function addseller(Request $request){
       $data = new User();

       $data->name = $request->name;
       $data->email = $request->email;
       $data->password = bcrypt( $request->password);
       $data->role='2';
       $data->save();

       return redirect()->back();
    }
    public function seller(){
        $data['products']=Product::all();
        return view('admin.seller',$data);
    }
    public function sellertable(){
        return view('admin.sellertable');
    }

    public function usertable(){
        $data['users']=User::all();
        return view('admin.usertable',$data);
    }

    public function destroyUser(Request $req, $id) {
        User::find($id)->delete();
        return redirect()->back();
     }

     ////// product //////////////////////////////////

     public function addproduct(){
        return view('doctor.apply');
    }


     public function productStore(Request $req){


        $req->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',

        ]);

        $filename = time(). "." .$req->image->extension();

        $req->image->move(public_path('image'),$filename);

        Product::create([
            'title' => $req->title,
            'price' => $req->price,
            'image' => $filename,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }

    public function destroyProduct(Request $req, $id) {
        Product::find($id)->delete();
        return redirect()->back();
     }

}
