<title>Patient Registration Form
</title>

<body style="background-image: url('https://s7ym67pp8g-flywheel.netdna-ssl.com/wp-content/uploads/2015/09/Video-Featured-final.jpg'); background-repeat: no-repeat; background-size: cover;">
@include('hospitall.client.layouts.nav')
<div class="container">
</div>
<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/assets/admin/js/sessions/myjavascript.js"></script>
<br>
<div class="container" style="background-color:  ;opacity: 0.7; width: 500px; border-radius: 15px;" align="center" >
  <h2 class="text-danger" style="font-family: 'Boogaloo', cursive;
">Patient Registration Form</h2>
  <hr>

  <p style="color: red; font-size: 16px; font-family: 'Volkhov', serif;
"><b>* name, Date of Birth, email and Phone number are mandatory </b></p>
@include('hospitall.client.layouts.messages')

  <form class="form-horizontal" action="/create/store">
  {{csrf_field()}}
  <span class="glyphicon glyphicon-name"></span>
    <div class="form-group">
     
      <div class="col-sm-10">
        
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name*"> 
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dob" placeholder="your date of birth here!*" name="dob">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="gender">
      </div>
    </div>
 <div class="form-group">
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter your mail id*" name="email">
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-10">          
        <textarea class="field span12" id = "add" name="address" rows="6" cols="48" placeholder="Enter your address here!"></textarea> 
      </div>
    </div><div class="form-group">
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number*" name="phone">
      </div>
    </div>
    <br>
       <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-success" style="margin-right: 50; font-size: 20px; font-family: 'Volkhov', serif;
 ">Submit</button><button type="reset" class="btn btn-danger" style="font-size: 20px; font-family: 'Volkhov', serif;
">Reset</button>
      </div>
        <br>

    </div>
  </form>

</div>

<script type="text/javascript">
  

$document().ready(function() {
  
  $(#dob).datepicker();

});



</script>
</body>