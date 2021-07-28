<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addressBook;

class AddressBookController extends Controller
{
    public function index(){
        $addbook = addressBook::paginate(9);
        return view('index',['addbook'=>$addbook]);
    }
    public function addForm(){
        return view('addition');
    }
    public function create(Request $request){
        $validate = $request->validate([
                'name'  => 'required',
                'email' => 'required',
                'mobile'=> 'required',
                'city'  => 'required',
                'country'=> 'required',
                'pincode'=> 'required',
            ]); 

            $addressBook = new addressBook();
            $addressBook->name = $request->name;
            $addressBook->email = $request->email;
            $addressBook->phone = $request->mobile;
            $addressBook->city  = $request->city;
            $addressBook->country = $request->country;
            $addressBook->pincode = $request->pincode;
            $addressBook->save();    
            return redirect(route('index'))->with('status', 'Address Updated !!');
    }


    public function edit(){
            $addbook = addressBook::paginate(9);
            return view('edit',['addbook'=>$addbook]);
    }

    public function editform($id){
            $addbook = addressBook::find($id);
            return view('editform',['addbook'=>$addbook]);
    }

    public function update(Request $request, $id){

        $validate = $request->validate([
                'name'  => 'required',
                'email' => 'required',
                'mobile'=> 'required',
                'city'  => 'required',
                'country'=> 'required',
                'pincode'=> 'required',
            ]); 

            $addressBook = addressBook::find($id);
            $addressBook->name = $request->name;
            $addressBook->email = $request->email;
            $addressBook->phone = $request->mobile;
            $addressBook->city  = $request->city;
            $addressBook->country = $request->country;
            $addressBook->pincode = $request->pincode;
            $addressBook->save();    
            return redirect(route('edit'))->with('status', 'Address Updated !!');
    }

    public function delete(){
        $addbook = addressBook::paginate(9);
        return view('delete', ['addbook'=>$addbook]);
    }

    public function destroy($id)
    {
        $addbook = addressBook::destroy($id);
        $addbook = addressBook::paginate(9);
        return view('delete', ['addbook'=>$addbook])->with('status', 'Address Deleted !!');
    }
    public function display(){
        $addbook = addressBook::paginate(9);
        return view('display', ['addbook'=>$addbook]);
    }

    public function contactus(){
        return view('contact');
    }
}
