<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Session;
use Auth;
use Gate;
class ParticipantController extends Controller
{
	public function __construct(){
    	 $this->middleware('auth');
       $user = Auth::user();
    }

    public function add(){
		  return view('participant.participant_add');
	}

    public function show(){

    	return view('personal.showpersonal');
    }

    public function edit(Request $request){
      $id = $request->user_id;
      $data = Participant::findorFail($id);
      return view('participant.participant_edit')->with('data', $data);
    }

    public function update(Request $request)
    {
      $id= $request->id;
      $participant = Participant::findorFail($id);
      $validated = $request->validate([ 
        "firstname" => 'required|max:25',
        "lastname" => 'required|max:25',
        "cnic" => 'required|max:16',
        "scale" => 'required|max:24',
        "department" => 'max:50',
        "gender" => 'required|max:10',
        "province" => 'min:2',
        "cell_number" => 'digits:11',
        "phone" => 'max:15',
        "email" => 'required|email',
      ]);
      
      $participant->first_name= $request->firstname;
      $participant->last_name= $request->lastname;
      $participant->cnic= $request->cnic;
      $participant->scale= $request->scale;
      $participant->department= $request->department;
      $participant->gender= $request->gender;
      $participant->province = $request->province;
      $participant->landline= $request->phone;
      $participant->cell_number= $request->cell_number;
      $participant->email= $request->email;
      $participant->update();

      Session::flash('message', 'Participant Personal Data Successfull Updated. <script> swal("Update", "You have added a new participant!", "success"); </script> '); 
      return redirect('participant/list');
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
   			"scale" => 'required|max:24',
        "department" => 'max:50',
   			"gender" => 'required|max:10',
   			"province" => 'min:2',
   			"cell_number" => 'digits:11',
   			"phone" => 'max:15',
   			"email" => 'required|email',
   			
   		]);
   		$participant->first_name= $request->firstname;
   		$participant->last_name= $request->lastname;
      $participant->cnic= $request->cnic;
   		$participant->scale= $request->scale;
      $participant->department= $request->department;
   		$participant->gender= $request->gender;
   		$participant->province = $request->province;
   		$participant->landline= $request->phone;
   		$participant->cell_number= $request->cell_number;
   		$participant->email= $request->email;
   		$participant->save();

   		Session::flash('message', 'Participant Personal Data Successfull Added. <script> swal("Added", "You have added a new participant!", "success"); </script> '); 
   		return redirect('participant/list');
   	}

   	public function list()
   	{
      $user = Auth::user();
      if(Gate::allows('only-admin', $user)){
        $data = Participant::all();
      
   		return view('participant.participant_list')->with('data', $data);
      }
      else{
        return view('errors.404_error');      
      }
   	}

    public function delete(Request $request){
      $id = $request->id;

      $data = Participant::findorFail($id);
      $data->delete();

      Session::flash('message', 'Participant Personal Data Deleted. <script> swal("Deleted", "You have Deleted participant!", "warning"); </script> '); 
      return redirect('participant/list');
    }
}
