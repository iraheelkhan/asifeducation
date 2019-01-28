<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Participant;
use App\Enrolment;
use App\User;
use App\ResourcePerson;
use Session;
class TrainingController extends Controller
{
    public function __construct(){
    	 $this->middleware('auth');
    }
    public function add(){
      $users = User::where('role','cordinator')->get();
      $resourceperson = ResourcePerson::all();
		  return view('training.training_add')->with('users',$users)->with('resourceperson',$resourceperson);
	  }

    
   
   	public function create(Request $request)
   	{
   		$training = new Training;
   		$validated = $request->validate([	
   			"title" => 'required|max:100',
   			"description" => 'required|max:400',
        "from_date" => 'required|max:100',
   			"to_date" => 'required|max:100',
   			"category" => 'max:50',
        "venue" => 'min:2',
        "user_id" => 'required',
   			"resourceperson_id" => 'required',
   		]);
   		$training->title= $request->title;
   		$training->description= $request->description;
      $training->from_date= $request->from_date;
   		$training->to_date= $request->to_date;
   		$training->category= $request->category;
      $training->user_id = $request->user_id;
      $training->resource_person_id = $request->resourceperson_id;
   		$training->status = "active";
   		$training->save();


      if($request->ajax()){
        $msg = ['okay'=>'perfect coding of the day'];
      return response()->json($msg);
      }
   		Session::flash('message', 'Training Succesfully Added <script> swal("Added", "Training Succesfully Added", "success"); </script> ');
      return redirect('training/list');
      
   	}

   	public function list()
   	{
   		$data = Training::all();
   		return view('training.training_list')->with('data', $data);
   	}

    public function edit(Request $request){
      $id = $request->training_id;
      $training = Training::findorFail($id);
      $resourceperson = ResourcePerson::all();
      $cordinator = User::where('role', 'cordinator')->get();

      return view('training.training_edit')->with('data',$training)->with('resourceperson' , $resourceperson)->with('cordinators', $cordinator);
    }

    public function update(Request $request)
    {
      $id = $request->training_id;
      $training = Training::findorFail($id);
      $validated = $request->validate([ 
        "title" => 'required|max:100',
        "description" => 'required|max:400',
        "from_date" => 'required|max:100',
        "to_date" => 'required|max:100',
        "category" => 'max:50',
        "venue" => 'min:2',
        "user_id" => 'required',
        "resourceperson_id" => 'required',
      ]);
      $training->title= $request->title;
      $training->description= $request->description;
      $training->from_date= $request->from_date;
      $training->to_date= $request->to_date;
      $training->category= $request->category;
      $training->user_id = $request->user_id;
      $training->resource_person_id = $request->resourceperson_id;
      $training->status = "active";
      $training->update();


      if($request->ajax()){
        $msg = ['okay'=>'perfect coding of the day'];
      return response()->json($msg);
      }
      Session::flash('message', 'Training Succesfully Edited <script> swal("Updated", "Training Succesfully Edited", "success"); </script> ');
      return redirect('training/list');
      
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
      Session::flash('message', 'Training Deleted <script> swal("Added", "Training Succesfully Added", "success"); </script> ');
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
