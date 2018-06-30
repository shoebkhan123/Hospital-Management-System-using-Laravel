<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use DB;

class PatientsController extends Controller
{
    public function records()
    {
    	$rd = Patient::all();
    	//return $rd;
    	//$rd = DB::table('patients')->get();
    	//return $rd;
    	//$var = DB::selectOne('select * from patients where id = 2');
		//return $var->name;
		//DB::insert("insert into patients(name, age, email) values ('Pria', 20, 'pria@gamil.co.in')");
		//return 'inserted';
		return view('hospital.patient.patientsRecord', compact('rd'));

    }
    public function destroy($id)
    {
        $dt = Patient::find($id);
        $post->delete();
        return Redirect('/posts')->with('success', 'Post Removed');

    }
}
