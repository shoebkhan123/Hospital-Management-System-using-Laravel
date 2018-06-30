<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Client;
Use DB;

class ClientsController extends Controller
{
    
    public function index()
    {
        return view('hospitall.client.index');
    }
    public function create()
    {
        return view('hospitall.client.create');
    }
    
    public function store(Request $request)
    {

      // Form Validation
       $this->validate($request, [
          'name' => 'required|String|max:10',
          'dob' => 'required',
            'email' => 'required',
          'phone'=>'required|integer'
       ]);
        // Create Post
        $st = new Client();
        $st->name = $request->name;
        $st->dob = $request->dob;
        $st->gender = $request->input('gender');
        $st->email = $request->input('email');

        $st->address = $request->input('address');
        $st->phone = $request->input('phone');


        // Save Post

       $st->save();
       return Redirect('/')->with('success','Patient Information Recorded successfully, '.$st->id.' is your Patient id please note this.');

        // Redirect
        //return Redirect('/index')->with('success', 'Post Created');
    
//$st = new Client;
//$st->name = $request->input('name');
//return $st->name;
    }

    public function show()
    { 
        $rd =  DB::table('clients')->orderBy('id', 'DESC')->paginate(5);
        return view('hospitall.client.show')->with('rd', $rd);
    }

    public function edit($id)
    {
        $rd = Client::find($id);

        return view('hospitall.client.edit', compact('rd'));
    }

    public function update(Request $request, $id)
    {
         $st = Client::find($id);
         $st->name = $request->input('name');
        $st->dob = $request->input('dob');
        $st->gender = $request->input('gender');
        $st->address = $request->input('address');
        $st->phone = $request->input('phone');
      $i = $st->id;

        // Save Post

       $st->save();
       return Redirect('/show')->with('success', $i.' ID No records has been updated successfully.');


       // $rdUpdate = $request->all();
      // $rd->name = 

        return 123;

         //$rd->update($rdUpdate);
         //return 12345;
    }
   public function destroy($id)
    {
        $post = Client::find($id);
        $post->delete();
        $i = $post->id;
        return Redirect('/show')->with('success', $i. ' Id No Patient record Removed.');

    }

    public function searchform()
    {
        return view('hospitall.client.searchform');

    }
   public function searchFind(){
    $q=Input::get('q');

   
   if($q !="")
   {
     $clients = Client::where('name', 'LIKE', '%' . $q . '%')->orWhere('gender', 'LIKE', '%' . $q . '%')->orWhere('id', 'LIKE', '%' . $q . '%')->orWhere('phone', 'LIKE', '%' . $q . '%')->get();

     if (count($clients) > 0)
        return view('hospitall.client.search')->withDetails($clients)->withQuery($q);
   }

        return Redirect('/searchPatient')->with('success','No Patient Record found, please try to search by ID again.');

    }
}