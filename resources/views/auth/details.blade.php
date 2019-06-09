{{-- @extends('adminlte::master') --}}
@extends('layouts.secondForm')
@section('content')
<div class="container">
    <table class="table table-striped">
        <thead><span><h4>Personal Information</h4></span></thead>
       <tbody>
          <tr>
             <td colspan="1">
                <form class="well form-horizontal" method="post" action="userDetail">
                    @csrf
                   <fieldset>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Full Name</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="fullName" name="firstname" placeholder="First Name" class="form-control" required="true" value="" type="text">
                                <input id="fullName" name="middlename" placeholder="Middle Name" class="form-control" required="true" value="" type="text">
                                <input id="fullName" name="lastname" placeholder="Last Name" class="form-control" required="true" value="" type="text">
                            </div>
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">Birth Date</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group col-md-1"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              <input id="phoneNumber" name="birthdate" placeholder="mm/dd/yyyy" class="form-control " required="true" value="" type="date">
                           </div>
                        </div>
                     </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">LandLine</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                              <input id="phoneNumber" name="landline" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Mobile Number</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                              <input id="phoneNumber" name="mobile" placeholder="Phone Number" class="form-control" required="true" value="" type="text">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Home Address</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                             <input id="addressLine2" name="home_adress" placeholder="Address Line 2" class="form-control" required="true" value="" type="text">
                          </div>
                        </div>
                     </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Shipping Address</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-plane"></i></span>
                              <input id="addressLine2" name="shipping_adress" placeholder="Address Line 2" class="form-control" required="true" value="" type="text">
                           </div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-md-4 control-label">Facebook Account</label>
                         <div class="col-md-8 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input id="postcode" name="facebook_name" placeholder="Facebook Name" class="form-control" required="true" value="" type="text">
                                <input id="postcode" name="facebook_url" placeholder="Facebook Url" class="form-control" required="true" value="" type="text">
                            </div>
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-4 control-label">InstaGram Account</label>
                        <div class="col-md-8 inputGroupContainer">
                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                               <input id="postcode" name="instagram" placeholder="IG Account" class="form-control" required="true" value="" type="text">
                           </div>
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-12 inputGroupContainer align" align="right">
                           <div class="input-group ">
                            <button class="btn btn-primary" type="submit">Continue</button>
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
