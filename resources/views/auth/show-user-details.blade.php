@extends('adminlte::page')
@push('css')
<link rel="stylesheet" href="{{asset('css/table/userdatatable.css')}}">
@endpush
@section('title', 'BeauteDerm')
@section('content')
@isset($user)
<div class="container-fluid">
        <h2 class="">Personal Information</h2>
        <h4>
        <a href="/user/{{$user->id}}/edit"><button class="btn btn-primary">Edit</button> </a>
        </h4>
        <table class="table table-striped" id="users-table" width="100%">
            <div class="container d-inline-block" style="displat:inline-flex" >

            </div>

                <tr>
                    <th class="table-border-horizontal">First Name</th>
                    <th class="table-border-horizontal">Middle Name</th>
                    <th class="table-border-horizontal">Last Name</th>
                    <th class="table-border-horizontal">Birth Date</th>
                    <th class="table-border-horizontal">Home Address</th>

                </tr>
            </>
            <tbody>
                <tr  class="table-border-horizontal">
                    <td>{{$user->userDetail->first_name}}</td>
                    <td>{{$user->userDetail->middle_name}}</td>
                    <td>{{$user->userDetail->last_name}}</td>
                    <td>{{$user->userDetail->birth_date}}</td>
                    <td>{{$user->userDetail->home_address}}</td>

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
                        <td>{{$user->userDetail->mobile_number}}</td>
                        <td>{{$user->userDetail->facebook_name}}</td>
                        <td>{{$user->userDetail->facebook_url}}</td>
                        <td>{{$user->userDetail->instagram_account}}</td>

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
                        <td>{{$user->userBusinessInformation->product_user_since}}</td>
                        <td>{{$user->userBusinessInformation->name_of_referrer}}</td>
                        <td>{{$user->userDetail->shipping_address}}</td>
                        <td>{{$user->userDetail->land_line_number}}</td>
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
                         @if ($user->userBusinessInformation->existing_business)
                         <td>{{$user->userBusinessInformation->existing_business}}</td>
                         @else
                             <td></td>
                         @endif

                        @if(isset($user->userBusinessInformation->existing_business_address))
                            <td>{{$user->userBusinessInformation->existing_business_address}}</td>
                        @else
                            <td></td>
                        @endif
                        @if ($user->userBusinessInformation->dti_number)
                        <td>{{$user->userBusinessInformation->dti_number}}</td>
                        @else
                            <td></td>
                        @endif
                        @if ($user->userBusinessInformation->tin_number)
                        <td>{{$user->userBusinessInformation->tin_number}}</td>
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
                        @if ($user->userBusinessInformation->facebook_business_account)
                        <td>{{$user->userBusinessInformation->facebook_business_account}}</td>
                        @else
                            <td></td>
                        @endif
                        @if ($user->userBusinessInformation->facebook_business_url)
                        <td>{{$user->userBusinessInformation->facebook_business_url}}</td>
                        @else
                            <td></td>
                        @endif

                        @if ($user->userBusinessInformation->instragram_business_account)
                        <td>{{$user->userBusinessInformation->instragram_business_account}}</td>
                        @else
                           <td></td>
                        @endif
                       @if ($user->userBusinessInformation->lazada_account)
                       <td>{{$user->userBusinessInformation->lazada_account}}</td>
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
                        <td>{{$user->userBusinessInformation->shopee_account}}</td>
                    </tr>
                </tbody>
        </table>
    </div>
@endisset
@empty($user)
    <H1>NO RECORDS YET</H1>
@endempty
@endsection
