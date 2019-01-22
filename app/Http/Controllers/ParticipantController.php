<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Session;
use Auth;
class ParticipantController extends Controller
{
	public function __construct(){
    	 $this->middleware('auth');
    }
    public function add(){
		  return view('participant.participant_add');
	   }
    public function show(){

    	return view('personal.showpersonal');
    }
   
   	public function create(Request $request)
   	{
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$participant = new Participant;
   		$validated = $request->validate([	
   			"firstname" => 'required|max:25',
   			"lastname" => 'required|max:25',
   			"cnic" => 'required|max:16',
   			"designation" => 'max:100',
        "department" => 'max:50',
   			"gender" => 'required|max:10',
   			"province" => 'min:2',
   			"district" => 'max:50',
   			"cell_number" => 'max:20',
   			"phone" => 'max:15',
   			"dob" => 'required',
   			"email" => 'required|email',
   			"degree_qualification" => 'required|max:300',
   			
   		]);
   		$participant->first_name= $request->firstname;
   		$participant->last_name= $request->lastname;
   		$participant->cnic= $request->cnic;
   		$participant->designation= $request->designation;
      $participant->department= $request->department;
   		$participant->gender= $request->gender;
   		$participant->province = $request->province;
   		$participant->landline= $request->phone;
      	$participant->district= $request->district;
   		$participant->cell_number= $request->cell_number;
   		$participant->date_of_birth= $request->dob;
   		$participant->email= $request->email;
   		$participant->degree_qualification= $request->degree_qualification;
   		//$participant->email = $user_email;
   		//$participant->user_id = $userid;
   		
   		$participant->save();

   		Session::flash('message', 'Participant Personal Data Successfull Added. <script> swal("Added", "You have added a new participant!", "success"); </script> '); 
   		return redirect('participant/list');
   	}

   	public function list()
   	{
   		$data = Participant::all();
   		return view('participant.participant_list')->with('data', $data);
   	}
}
