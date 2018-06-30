<hr>
<div class="jumbotron">
<button class="btn btn-info" ng-click="showme=true" style="margin-right: 50px;">Have more diseases click me</button> 
<button  class="btn btn-default" ng-click="showme=false">Want to hide form Click me</button> 

</div>
    @include('hospitall.client.layouts.messages')

<div class="jumbotron">
  <div ng-show="showme" align="center">
    <h1 class="text-warning">Fill the Patient deseases Details </h1>
    <br>
    <form class="form" action="/storeDeseases">
        {{csrf_field()}}
        <input type="hidden" name="patient_id" value="{{$id}}" ></td>

        <table class="table table-striped" style="width:600px;">
          <thead>
            <tr><th>Sr. No</th>
            <th>Desease Type</th>
            <th>Your Answer</th>
            </tr>
          </thead>

      <tbody>
      <tr>
        <td>1.</td>
        <th>Diabetes</th>
<td>
  <select name="diabetes" class="form-control"" >
    <option>None</option>
    <option>Yes</option>
    <option>NO</option>
  </select>
</td>
</tr>

<tr><td>2.</td>
  <th>Hypotention</th>
<td>
<select name="hypotention" class="form-control" >
    <option>None</option>
    <option>Yes</option>
    <option>NO</option>
  </select>
</td>
  </tr>


<tr><td>3.</td>
 <th>Drinking</th>
 <td>
<select name="dirnking" class="form-control">
    <option>None</option>
    <option>Yes</option>
    <option>NO</option>
  </select></td>
</tr>

<tr><td>4.</td>
 <th>Smoking</th>
 <td>
<select name="smoking" class="form-control">
    <option>None</option>
    <option>Yes</option>
    <option>NO</option>
  </select></td>
</tr>
</tbody>
  </table>
  <button type="submit" class="btn btn-info">Submit</button>
    </form>
    </div>
    <div class="jumbotron" ng-hide = 'showme'>
      <h1 align="center" class="text-danger">Diseases from will appear in this section.</h1>
    </div>
  </div>  