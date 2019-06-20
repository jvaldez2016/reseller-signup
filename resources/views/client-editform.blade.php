@extends('layouts.partials.client.main')
@section('content')
{{-- <div class="container-fil"> --}}
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
            <h1>You Are Now At Edit Page</h1>
    </header>

    <section>
      <div class="container border">

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
      @endif
          <form action="/user/profile/edit/update" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-striped" id="users-table" width="100%">
                    <thead>
                            <div class="col-md-9">
                                <h2 class="btn btn-primary  rounded-pill mt-5 " >Personal Information</h2>
                            </div>
                        <tr >
                            <th class="table-border-horizontal">First Name</th>
                            <th class="table-border-horizontal">Middle Name (optional)</th>
                            <th class="table-border-horizontal">Last Name</th>
                            <th class="table-border-horizontal">Birth Date</th>
                            <th class="table-border-horizontal">Home Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  class="table-border-horizontal">
                            <td><input class="form-control" type="text" value="{{$user->userDetail->first_name}}" name="first_name" id=""></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->middle_name}}" name="middle_name"></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->last_name}}" name="last_name"></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->birth_date}}" name="birth_date"></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->home_address}}" name="home_address"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" width="100%">

                        <thead>
                            <tr class=" table-border-horizontal">
                                <th class="">Mobile Number</th>
                                <th class="">Facebook Name</th>
                                <th class="">Facebook Url</th>
                                <th class="">Instagram</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr class=" table-border-horizontal">
                            <td><input class="form-control"  type="text" value="{{$user->userDetail->mobile_number}}" name="mobile_number"></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->facebook_name}}" name="facebook_name"></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->facebook_url}}" name="facebook_url"></td>
                            <td><input class="form-control" type="text" value="{{$user->userDetail->instagram_account}}" name="instagram_account"></td>
                        </tr>
                    </tbody>
                </div>
                </table>
                <table class="table table-striped" id="users-table" width="100%">
                    <div class="form-group">
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
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->product_user_since}}" name="product_user_since"></td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->name_of_referrer}}" name="name_of_referrer" ></td>
                                <td><input class="form-control" type="text" value="{{$user->userDetail->shipping_address}}" name="shipping_address"></td>
                                <td><input class="form-control" type="text" value="{{$user->userDetail->land_line_number}}" name="land_line_number"></td>
                            </tr>
                        </tbody>
                    </div>
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
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->existing_business}}" name="existing_business"></td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->existing_business_address}}" name="existing_business_address"></td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->dti_number}}" name="dti_number"> </td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->tin_number}}" name="tin_number"></td>
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
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->facebook_business_account}}" name="facebook_business_account"></td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->facebook_business_url}}" name="facebook_business_url"></td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->instragram_business_account}}" name="instragram_business_account"></td>
                                <td><input class="form-control" type="text" value="{{$user->userBusinessInformation->lazada_account}}" name="lazada_account"></td>
                            </tr>
                        </tbody>
                </table>
                <div class="row container col-3">
                        <table class="table table-striped " id="users-table" width="100%">
                                <thead >
                                    <tr >
                                        <th >Shopee</th>
                                    </tr>

                                </thead>
                                <tbody >
                                    <tr >
                                        <td ><input class="form-control" type="text"  value="{{$user->userBusinessInformation->shopee_account}}" name="shopee_account"></td>
                                    </tr>
                                </tbody>
                        </table>
                </div>

                <div class="container">
                        <button type="submit" class="bnt btn-success btn-lg btn-block rounded-pill">Update Personal Information</button>
                </div>

                {{-- <h3 class="c btn btn-success  rounded-pill mt-5 justify-content-end">Update Personal Information</h3> --}}
            </form>
      </div>
    </section>

{{-- </div> --}}
@endsection
