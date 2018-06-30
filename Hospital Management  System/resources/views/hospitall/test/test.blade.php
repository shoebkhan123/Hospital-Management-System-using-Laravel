@extends('hospitall.client.layouts.main')
@section('content')
<br>
<h1 align="center">Add Patient Test Details Page</h1>
<hr>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <button type="button" class="btn-add-row btn" style="margin-bottom: 10px;margin-left: 200px;"><i style="font-size: 25px; color: green;" class="fa fa-plus-square" aria-hidden="true"></i>
</button>
<br>
<form class="form-inline" style="margin-left: 200px;" action="{{ url('/test-store')}}">
  <div class="container">
  <div class="element-wrapper">
    <div class="row"style="margin: 10px;">

         <select class="form-control" style="margin-right: 10px;" name="test">
            @foreach($test as $i)
              <option value="{{ $i->id }}"> {{ $i->test }} </option>
            @endforeach
         </select>
        <input type="text" name="observeTest" placeholder="Enter Value" class="form-control" style="margin-right: 10px;"> 
<select class="form-control" style="margin-right: 10px;" name="testParameter">
            @foreach($test as $i)
              <option> {{ $i->testParameter  }} </option>
            @endforeach
         </select>       
         <button class="btn-remove-row btn btn-danger">Remove</button> 
    </div>  
  </div>
 </div>
 <br>
  <button class="btn btn-info" style="margin-left: 300px; margin-top: 30px;">Submit</button>

 <br>
</form>
<br>




  <script type="text/javascript">
    $(document).on("click", ".btn-add-row", function(){

      var row=$(".row").eq(0).clone().show();

      $(".element-wrapper").append(row);

    });


    $(document).on("click", ".btn-remove-row", function(){

      var index =$(".btn-remove-row").index(this);

      console.log(index);

      $(".row").eq(index).remove();
    });


 </script>


@endsection