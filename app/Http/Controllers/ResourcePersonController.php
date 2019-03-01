<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\ResourcePerson;
class ResourcePersonController extends Controller
{

	public function __construct(){
    	 $this->middleware('auth');
    }
    public function add(){
		  return view('resourceperson.resourceperson_add');
	   }

	public function create(Request $request)
   	{
         
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$person = new ResourcePerson;
   		$validated = $request->validate([	
   			"firstname" => 'required|max:25',
   			"lastname" => 'required|max:25',
   			"cnic" => 'unique:resource_people|required|digits:14',
   			"designation" => 'max:100',
   			"gender" => 'max:10',
   			"cell_number" => 'digits:11',
   			"phone" => 'max:15',
   			"email" => 'required|email',
            "cv" => 'required'
   			
   		]);
         if ($request->hasFile('cv')) { 
            $cv = $request->file('cv'); 
            $name = time().'_'.$cv->getClientOriginalName(); 
            $destinationPath = public_path().'/front/images'; 
            $upload = $cv->move($destinationPath, $name); 
         }

   		$person->first_name= $request->firstname;
   		$person->last_name= $request->lastname;
   		$person->cnic= $request->cnic;
         $person->vendor_no= $request->vendor_no;
   		$person->bank= $request->bank;
   		$person->cell_number= $request->cell_number;
         $person->email= $request->email;
   		$person->cv= $name;
   		$person->save();

   		Session::flash('message', 'Resource Person Data Successfull Added. <script> swal("Added", "You have added a new Resource Person!", "success"); </script> '); 
   		return redirect('resource/list');
   	}

   	public function list()
   	{
   		$data = ResourcePerson::all();
   		return view('resourceperson.resourceperson_list')->with('data', $data);
   	}
}
