@extends('layouts.partials.client.main')
@section('content')
<div class="container">
    <form class="well form-horizontal" method="post" action="userBusinessDetail">
        <table class="table table-striped">
            <thead><span><h4>Business Information</h4></span></thead>
            <tbody>
                <tr>
                    <td >
                        @csrf
                        <fieldset class="center">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Beautederm User Since ?</label>
                                <div class="inputGroupContainer col-md-4">
                                    <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-calendar"></i></span>
                                        {{-- <input id="phoneNumber" name="product_user_since" placeholder="" class="form-control" required="true" value="" type="date"> --}}
                                        <input type="text" id="month" name="user_since" class="monthPicker" />

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Name of Referrer</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
                                        <input id="fullName" name="name_referrer" placeholder="Person Intruduced you to the Product" class="form-control" required="true" value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Existing Business if any</label>
                                <div class="col-md-7 inputGroupContainer">
                                    <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-home"></i></span>
                                        <input id="fullName" name="existing_business" placeholder="Name of Business Establishment" class="form-control"  value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Existing Business Address</label>
                                <div class="col-md-7 inputGroupContainer">
                                    <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-home"></i></span>
                                        <input id="fullName" name="existing_business_adress" placeholder="Business Establishment Address" class="form-control"  value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">DTI Number :(Optional)</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-pencil"></i></span>
                                        <input id="fullName" name="dti_number" placeholder="Optional" class="form-control"  value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">TIN Number :(Optional)</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-pencil"></i></span>
                                        <input id="fullName" name="tin_number" placeholder="Optional" class="form-control"  value="" type="text">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td colspan="1">
                        <fieldset class="center">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Where do you intend to sell Beautederm?</label>
                                <div class="col-md-5 inputGroupContainer ">
                                    <div class="input-group">
                                        <label class="checkbox-inline">
                                            <input name="facebook" type="checkbox" value="1">Facebook
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <label class="checkbox-inline">
                                            <input name="instagram" type="checkbox" value="1">Instagram
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <label class="checkbox-inline">
                                            <input name="lazada" type="checkbox" value="1">Lazada
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <label class="checkbox-inline">
                                            <input name="shopee" type="checkbox" value="1">Shopee
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <label class="checkbox-inline">
                                            <input name="personalcontacts" type="checkbox" value="1">Personal Contacts
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <label class="checkbox-inline">
                                            <input name="existingbusiness" type="checkbox" value="1">Existing Business
                                        </label>
                                    </div>
                                    <div class="input-group">
                                    <label class="">
                                     Others: <input class="" type="text" value="" placeholder="(Optional)">
                                    </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Business Facebook Account :(if you click the checkbox)</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                                            <input id="fullName" name="facebook_business_account" placeholder="" class="form-control"  value="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Business Facebook Account Url  :(if you click the checkbox)</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <input id="fullName" name="facebook_business_url" placeholder="" class="form-control"  value="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Business Instagram Account  :(if you click the checkbox)</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <input id="fullName" name="instagram_business_account" placeholder="" class="form-control"  value="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Lazada Account  :(if you click the checkbox)</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <input id="fullName" name="lazada_account" placeholder="" class="form-control"  value="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Shopee Account  :(if you click the checkbox)</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <input id="fullName" name="shopee_account" placeholder="" class="form-control" value="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-8 control-label">Others  :(if you click the checkbox)</label>
                                    <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group " ><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <input id="fullName" name="others" placeholder="" class="form-control" " value="" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-md-12 inputGroupContainer align" align="right">
                                <div class="input-group ">
                                <button class="btn btn-primary" type="submit">Complete Registration</button>
                                </div>
                            </div>
                            </div>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                </tr>
            </tbody>
        </table>
    </form>
 </div>
<script type="text/javascript">

</script>
</body>
@endsection
