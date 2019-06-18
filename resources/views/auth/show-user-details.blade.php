@extends('adminlte::page')
@push('css')
<link rel="stylesheet" href="{{asset('css/table/userdatatable.css')}}">
@endpush
@section('title', 'BeauteDerm')
@section('content')
@isset($user)
<div class="">
        <table class="table table-striped" id="users-table" width="100%">
            <thead><h2>Personal Information</h2>
                <tr>
                    <th class="table-border-horizontal">First Name</th>
                    <th class="table-border-horizontal">Middle Name</th>
                    <th class="table-border-horizontal">Last Name</th>
                    <th class="table-border-horizontal">Birth Date</th>
                    <th class="table-border-horizontal">Home Address</th>

                </tr>
            </thead>
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
                        <td>{{$user->userBusinessInformation->existing_business}}</td>
                        <td>{{$user->userBusinessInformation->existing_business_address}}</td>
                        <td>{{$user->userBusinessInformation->dti_number}}</td>
                        <td>{{$user->userBusinessInformation->tin_number}}</td>
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
                        <td>{{$user->userBusinessInformation->facebook_business_account}}</td>
                        <td>{{$user->userBusinessInformation->facebook_business_url}}</td>
                        <td>{{$user->userBusinessInformation->instragram_business_account}}</td>
                        <td>{{$user->userBusinessInformation->lazada_account}}</td>
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
            {{-- {{$user->userD}} --}}
    </div>
@endisset
@empty($user)
    <H1>NO RECORDS YET</H1>
@endempty
@endsection
{{-- @push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('/userdetail/{id}') !!}',
        columns: [

            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script> --}}

{{-- @endpush --}}
