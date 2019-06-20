@extends('layouts.partials.client.main')
@section('content')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">BeauteDerm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @guest
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/register">Reseller Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Log In</a>
            </li>
          </ul>
          @endguest
          @auth
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h5 class="nav-link"><a href="/user/profile">{{Auth::user()->name}}</a></h5>
                </li>
                <li class="nav-item">
                    <h5 class="nav-link"><a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">Log Out</a></h5>
                </li>
          </ul>
          @endauth
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white" id="size1">
      <div class="masthead-content">
        <div class="container ">
                @include('layouts.flash-message')
          <h2 class="masthead-subheading mb-0">Beautederm</h2>
          {{-- <h3 class="">Authorized Mega Distributor</h3> --}}
        @auth
        <div>
        {{-- <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Make Order ? Click Here</a> --}}
        </div>
        <div>
        <a href="/view_pdf" class="btn btn-primary btn-xl rounded-pill mt-5">View Current Item Price ? Click Here</a>
        </div>
        @endauth
        </div>
      </div>

    </header>

    <section>
      <div class="container border">
            <table class="table table-striped" id="users-table" width="100%">
                    <thead>
                        <div class="row container">
                            <div class="col-9">
                                <h2 class="btn btn-primary  rounded-pill mt-5 " >Personal Information</h2>
                            </div>
                            <div class="">
                                <a href="/user/profile/edit">
                                <h3 class="btn btn-success  rounded-pill mt-5 justify-content-end">Edit Personal Information</h3>
                                </a>
                            </div>
                        </div>

                        <tr ">
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
                        <thead>
                            <div class="row container">
                                    <h2 class="btn btn-primary  rounded-pill mt-5 " >Business Information</h2>
                            </div>
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
      </div>
    </section>


@endsection
