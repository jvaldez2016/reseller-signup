{{-- @extends('adminlte::master') --}}
@extends('layouts.secondForm')
@section('content')
<div class="container">
    <table class="table table-striped">
       <tbody>
          <tr>
             <td colspan="1">
                <form class="well form-horizontal">
                   <fieldset>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Full Name</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="fullName" name="firstname" placeholder="First Name" class="form-control" required="true" value="" type="text">
                                <input id="fullName" name="middlename" placeholder="Middle Name" class="form-control" required="true" value="" type="text">
                                <input id="fullName" name="lastname" placeholder="Last Name" class="form-control" required="true" value="" type="text">
                                <input id="fullName" name="nickname" placeholder="Nick Name" class="form-control" required="true" value="" type="text">
                            </div>
                         </div>
                      </div>
                      <label class="col-md-4 control-label">Introduced to Beautederm by a reseller?</label>
                      <div class="col-md-8 inputGroupContainer">
                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                           <input id="fullName" name="upline" placeholder="Name of the Reseller" class="form-control" required="true" value="" type="text">
                        </div>
                      </div>
                      <label class="col-md-4 control-label">If none, please tick the circle to indicate NO REFERRER</label>
                      <div class="col-md-8 inputGroupContainer">
                         <div class="input-group center">
                            <input  type="radio" class="form-conrtrol"type="text">
                        </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Address Line 1</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Address Line 2</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">City</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">State/Province/Region</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Postal Code/ZIP</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Country</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                               <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                               <select class="selectpicker form-control">
                                  <option>A really long option to push the menu over the edget</option>
                               </select>
                            </div>
                         </div>
                      </div>
                   </fieldset>
                </form>
             </td>
          </tr>
       </tbody>
    </table>
 </div>
<script type="text/javascript">

</script>
</body>
@endsection
