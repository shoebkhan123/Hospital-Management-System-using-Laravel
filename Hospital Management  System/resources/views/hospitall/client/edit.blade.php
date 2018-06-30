
<title>Edit and update Details
</title>
<body style="background-image: url('https://s7ym67pp8g-flywheel.netdna-ssl.com/wp-content/uploads/2015/09/Video-Featured-final.jpg'); background-repeat: no-repeat; background-size: cover;"> 
@include('hospitall.client.layouts.nav')
<br>
<div class="container" style="background-color:  ;opacity: 0.7; width: 500px; border-radius: 15px;" align="center" >
	@if(session('success'))
		<div class="alert alert-success">

			{{session('success')}}
		</div>
	@endif
  <h2 class="text-warning">Edit and update Details</h2>
  <hr>
  <h3 style="color: red;">Now you are updating record of id: <span style="color: red;"> {{ $rd->id }} </span></h3>
  <br>
  @include('hospitall.client.layouts.messages')

  <form class="form-horizontal" model="($rd)" action="{{ url('/edit/update' , $rd->id ) }}" method="PATCH">
  {{csrf_field()}}
    <div class="form-group">
     
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value ="{{ $rd->name}}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dob"  name = 'dob' placeholder="your date of birth here!" value ="{{ $rd->dob}}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="gender" value ="{{ $rd->gender}}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value ="{{ $rd->email}}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">    

        <input type="text" class="form-control" id="add" placeholder="Enter youe address" name="address" value ="{{ $rd->address}}">
      </div>
    </div><div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value ="{{ $rd->phone}}">
      </div>
    </div>
       <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-success" style="margin-right: 50 ">Update</button><button type="reset" class="btn btn-danger">Reset</button>
      </div>
        <br>

    </div>
  </form>

</div>
</body>