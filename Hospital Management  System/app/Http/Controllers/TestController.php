<?php

namespace App\Http\Controllers;
use App\zzz_test;
use App\storeTests;
use DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
    	$test = zzz_test::all();
    	return view('hospitall.test.test', compact('test'));
    }

	public function getTestParamenter()
  {
    $test = zzz_test::all();
    return $test;
  }

  public function store(Request $req)
  {
    
    $this->validate($req, [
        'test' => 'required',
    ]);

     // create new task
    $rows = $req->input('test');
    foreach ($rows as $row)
    {
        $Charges[] = new storeTests(array(
            'test'=>$req->$row['test'],
            'observeTest'=> $req->row['observeTest'],
            'testParameter'=>$req->row['testParameter']

        ));
    }
    Charge::storeTests($Charges);
     
          
           
        
              return Redirect('/')->with('added','history added');  
    }

}
