<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
    	view('search');
    }
    public function search(Request $request)

	{

	if($request->ajax())

	{

$output="";

$clients=DB::table('clients')->where('title','LIKE','%'.$request->search."%")->get();

if($clients)

{

	foreach ($clients as $key => $product) 
	{

$output.='<tr>'.

'<td>'.$product->id.'</td>'.

'<td>'.$product->title.'</td>'.

'<td>'.$product->description.'</td>'.

'<td>'.$product->price.'</td>'.

'</tr>';

}



return Response($output);



 


  



}

