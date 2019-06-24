@extends('adminlte::page')
@push('css')
<link rel="stylesheet" href="{{asset('css/table/userdatatable.css')}}">
@endpush
@section('title', 'BeauteDerm')
@section('content')
@isset($user)
<div class="container-fluid">
<form action="/user/{{$user->id}}" method="POST">
        @csrf
        @method('put')
            <div id="div-inline"><h2>Personal Information</h2></div>

            <div id="container row">
                    <button class="btn btn-warning" type="submit">Update</button>
            </div>


        <table class="table table-striped" id="users-table" width="100%">
            <thead>
                <tr>
                    {{-- <h2>Personal Information</h2> --}}
                </tr>
                <tr>
                    <th class="table-border-horizontal">First Name</th>
                    <th class="table-border-horizontal">Middle Name</th>
                    <th class="table-border-horizontal">Last Name</th>
                    <th class="table-border-horizontal">Birth Date</th>
                    <th class="table-border-horizontal">Home Address</th>

                </tr>
            </thead>
            <tbody>
                <tr  class="table-border-horizontal inout-group">
                    <td><input id="fullName" name="first_name" placeholder="First Name"  required="true" value="{{$user->userDetail->first_name}}" type="text"></td>
                    <td><input id="middlename" name="middle_name" placeholder="Middle Name (Optional)"  value=" {{$user->userDetail->middle_name}}" type="text"></td>
                    <td><input id="lastname" name="last_name" placeholder="Last Name" class="" required="true" value="{{$user->userDetail->last_name}}" type="text"></td>
                    <td><input id="datepicker" name="birth_date" placeholder="Phone Number *" class="" required="true" value="{{$user->userDetail->birth_date}}" type="text"></td>
                    <td><input type="text" name="home_address" value="{{$user->userDetail->home_address}}" id=""></td>

                </tr>
            </tbody>
        </table>
        <table class="table table-striped" id="users-table" width="100%">
            <thead>
                <tr>
                    <th>Mobile Number</th>
                    <th>Facebook Name</th>
                    <th>Facebook Url</th>
                    <th>Instagram</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><input type="text" name="mobile_number" id="" value="{{$user->userDetail->mobile_number}}"></td>
                        <td><input type="text" name="facebook_name" value="{{$user->userDetail->facebook_name}}"></td>
                        <td><input type="text" name="facebook_url" value="{{$user->userDetail->facebook_url}}"></td>
                        <td><input type="text" name="" id="" value="{{$user->userDetail->instagram_account}}"></td>

                    </tr>
            </tbody>
        </table>
        <table class="table table-striped" id="users-table" width="100%">
                <thead><h2>Business Information</h2>
                    <tr>
                        <th>Member Since</th>
                        <th>Name of the Upline</th>
                        <th>Shipping Address</th>
                        <th>Land Line Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="product_user_since" id="" value="{{$user->userBusinessInformation->product_user_since}}"></td>
                        <td><input type="text" name="name_of_referrer" value="{{$user->userBusinessInformation->name_of_referrer}}"></td>
                        <td><input type="text" name="shipping_address" value="{{$user->userDetail->shipping_address}}"></td>
                        <td><input type="text" name="land_line_number" id="" value="{{$user->userDetail->land_line_number}}"></td>
                    </tr>
                </tbody>
        </table>
        <table class="table table-striped" id="users-table" width="100%">
                <thead>
                    <tr>
                        <th>Existing Business</th>
                        <th>Existing Business Address</th>
                        <th>DTI Number</th>
                        <th>TIN Number</th>
                    </tr>
                </thead>
                 <tbody>
                     <tr>
                        @if (isset($user->userBusinessInformation->existing_business))

                            <td><input type="text" name="existing_business" id="" value="{{$user->userBusinessInformation->existing_business}}"></td>
                        @else
                            <td></td>
                        @endif
                        @if(isset($user->userBusinessInformation->existing_business_address))
                            <td><input type="text" value="{{$user->userBusinessInformation->existing_business_address}}" value="existing_business_address"></td>
                        @else
                            <td></td>
                        @endif
                        @if (isset($user->userBusinessInformation->dti_number))

                            <td> <input type="text" name="dti_number" value="{{$user->userBusinessInformation->dti_number}}"></td>
                        @else
                            <td></td>
                        @endif
                        @if (isset($user->userBusinessInformation->tin_number))
                        <td> <input type="text" name="tin_number" id="" value="{{$user->userBusinessInformation->tin_number}}"></td>
                        @else
                            <td></td>
                        @endif

                     </tr>
                </tbody>
        </table>
        <table class="table table-striped" id="users-table" width="100%">
                <thead>
                    <tr>
                        <th>Business Facebook Acount</th>
                        <th>Business Facebook URL</th>
                        <th>Business Instagram Acount</th>
                        <th>Lazada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @if (isset($user->userBusinessInformation->facebook_business_account))
                        <td> <input type="text" name="facebook_business_account" id="" value="{{$user->userBusinessInformation->facebook_business_account}}"></td>
                        @else
                            <td></td>
                        @endif
                        @if ($user->userBusinessInformation->facebook_business_url)
                            <td><input type="text" name="" value="{{$user->userBusinessInformation->facebook_business_url}}"></td>
                        @else
                            <td></td>
                        @endif
                        @if ($user->userBusinessInformation->instragram_business_account)
                        <td><input type="text" name="instragram_business_account" id="" value="{{$user->userBusinessInformation->instragram_business_account}}"></td>
                        @else
                            <td></td>
                        @endif
                        @if ($user->userBusinessInformation->lazada_account)
                            <td><input type="text" name="lazada_account" id="" value="{{$user->userBusinessInformation->lazada_account}}"></td>
                        @else
                          <td></td>
                        @endif

                    </tr>
                </tbody>
        </table>
        <table class="table table-striped" id="users-table" width="100%">
                <thead>
                    <th>Shopee</th>
                </thead>
                <tbody>
                    <tr>
                        @if ($user->userBusinessInformation->shopee_account)
                        <td> <input type="text" name="shopee_account" value="{{$user->userBusinessInformation->shopee_account}}"></td>
                        @else
                            <td></td>
                        @endif

                    </tr>
                </tbody>
        </table>
    </form>
</div>
@endisset
@empty($user)
    <H1>NO RECORDS YET</H1>
@endempty
@endsection
@section('js')
<script>
        $( function() {
          $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '-50:+0',
          }).attr([
              'autocomplete','off'
          ]);
        } );
</script>
@endsection
