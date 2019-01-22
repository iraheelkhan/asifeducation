<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrolment;
class EnrolmentController extends Controller
{
    

    public function create(Request $request)
    {
    	//saving data of multiple checkboxes into the database using foreach loop. which is getting data from the view form. 
    	$training = $request->training_id;
        //$validated = 

        // dd($request->validate([
        //             'part'=>
        //             'required|unique:enrolments,participant_id,NULL,'.$part .',training_id,'.$training

        //         ]));
       
    	foreach ($request->part as $part) {
            $enroll = Enrolment::where('participant_id', $part)->where('training_id', $training)->count();
            if($enroll >0){
                
            }
            //$enroll->delete();
            else{
                $enrol = new Enrolment;
        		$enrol->participant_id = $part;
        		$enrol->training_id = $training;
        		$enrol->save();
            }

    	}
        $msg = [
          'code'=>1,
          'messsage'=>'Participant Added to the Training'];
          if($request->ajax()){
            return response()->json($msg);
          }
        //return redirect()->back();

    }
}
