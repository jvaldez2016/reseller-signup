@extends('adminlte::page')
@push('css')
<link rel="stylesheet" href="{{asset('css/table/userdatatable.css')}}">
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endpush
@section('title', 'BeauteDerm')
@section('content')
@isset($result)


    <div class="container-fluid">
        <table class="table table-striped" width="100%">
            <thead><h2>Item Information</h2>
                <tr>
                    <th class="table-border-horizontal">Id Number</th>
                    <th class="table-border-horizontal">Name</th>
                    <th class="table-border-horizontal">SRP</th>
                    <th class="table-border-horizontal">Reseller</th>
                    <th class="table-border-horizontal">Distributor</th>
                    <th class="table-border-horizontal">Mega Distributor</th>
                    <th class="table-border-horizontal">Date Created</th>
                    <th class="table-border-horizontal">Date Updated</th>

                </tr>
            </thead>
    <form action="/">
                <tbody>
                    <tr class="table-border-horizontal" >
                        <td><input type="text" value="{{$result->id}}" name="" class="size-s"></td>
                        <td><input type="text"  value="{{$result->name}}"class="size-m" ></td>
                        <td><input type="text" value="{{$result->suggested_retail_price}}" class="size-s"></td>
                        <td><input type="text" name="" value="{{$result->reseller}}" class="size-s"></td>
                        <td><input type="text" value="{{$result->distributor}}" class="size-s"></td>
                        <td><input type="text" value="{{$result->mega_distributor}}"class="size-s"></td>
                        <td>{{ Carbon\Carbon::parse($result->created_at)->format('M-d-Y')}}</td>
                        <td>{{ Carbon\Carbon::parse($result->updated_at)->format('M-d-Y')}}</td>
                    </tr>
                </tbody>
        </table>
    </div>
        <div class="container-fluid">

                    <button class="btn btn-warning" type="submit"> Update</button>

                    <button class="btn btn-danger"> Delete</button>

        </div>

    </form>

@endisset
@empty($result)
    <H1>NO RECORDS YET</H1>
@endempty
@endsection
