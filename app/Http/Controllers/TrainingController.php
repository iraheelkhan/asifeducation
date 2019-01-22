<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Participant;
use App\Enrolment;
use Session;
class TrainingController extends Controller
{
    public function __construct(){
    	 $this->middleware('auth');
    }
    public function add(){
		  return view('training.training_add');
	   }
    public function show(){

    	return view('personal.showpersonal');
    }
   
   	public function create(Request $request)
   	{
   		$training = new Training;
   		$validated = $request->validate([	
   			"title" => 'required|max:100',
   			"description" => 'required|max:400',
   			"date" => 'required',
   			"time" => 'required|max:100',
   			"category" => 'max:50',
   			"venue" => 'min:2',
   		]);
   		$training->title= $request->title;
   		$training->description= $request->description;
   		$training->date= $request->date;
   		$training->time= $request->time;
   		$training->category= $request->category;
      $training->venue = $request->venue;
   		$training->status = "active";
   		
   		//$training->email = $user_email;
   		//$training->user_id = $userid;
   		
   		$training->save();

   		//Session::flash('message', 'Training Succesfully Added <script> swal("Added", "Training Succesfully Added", "success"); </script> '); 
      $msg = ['okay'=>'perfect coding of the day'];
   		return response()->json($msg);
   	}

   	public function list()
   	{
   		$data = Training::all();
   		return view('training.training_list')->with('data', $data);
   	}

    public function delete(Request $request){
      $id = $request->id;
      $data = Training::findorFail($id);
      $data->delete();
      $msg = [
          'code'=>1,
          'messsage'=>'Training Deleted'];
      if($request->ajax()){
        return response()->json($msg);
      }
      Session::flash('message', 'Training Succesfully Deleted <script> swal("Added", "Training Succesfully Added", "success"); </script> ');
      return redirect('training/list');
          
    }

    public function view(Request $request){
        $id = $request->id;
        $data = Training::findorFail($id);
        $enrolls = Enrolment::where('training_id',$id)->get();
        $participant = Participant::all();

        return view('training.training_view')->with('data',$data)->with('participant', $participant)->with('enrolls', $enrolls);

      }

}
