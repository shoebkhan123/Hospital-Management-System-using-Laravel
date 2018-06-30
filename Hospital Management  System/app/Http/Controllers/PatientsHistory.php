<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Historie;
use App\Client;



class PatientsHistory extends Controller
{
	public function history($id)
	    {
	   		$rd = DB::select("select * from histories where patient_id = '$id' ");	
	  	 	return view('hospitall.client.showHistory', compact('rd', 'id'));
      //  return $id->name;
	    }
	public function store(Request $request)
	{
       $d = array('diabetes', 'hypotention', 'dirnking', 'smoking');
      
        // Create history
        $st = new Historie();
        $st->patient_id = $request->patient_id;
        $st->d1 = $request->diabetes;
        $st->d2 = $request->hypotention;
        $st->d3 = $request->dirnking; 
        $st->d4 = $request->smoking; 
        $visitId = rand(2,1001);
$data = array(
    array('patient_id'=>$st->patient_id, 'types'=> $d[0], 'answer'=>$st->d1, 'visitId'=>$visitId),
    array('patient_id'=>$st->patient_id, 'types'=> $d[1], 'answer'=>$st->d2,'visitId'=>$visitId),
    array('patient_id'=>$st->patient_id, 'types'=> $d[2], 'answer'=>$st->d3,'visitId'=>$visitId),
    array('patient_id'=>$st->patient_id, 'types'=> $d[3], 'answer'=>$st->d4,'visitId'=>$visitId)

    //...
);

Historie::insert($data);
        // Save Post
      //  $st->save();
        return Redirect('/show')-> with('msg', 'Patients History Recoded Successfully.');
        
       // return  $data;

	}
  public function test()
  {
    $list = Client::all()->toArray();
    return view('test', compact('list'));
  }
}
