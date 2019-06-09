@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="box box-info form-group">
        <form method="post" action="/add_item">
            @csrf
            <div class="box-header">
              <h3 class="box-title">Item Price List Upload Form</h3>
            </div>

                <div class="box-body">
                <!-- Color Picker -->
                <div class="form-group">
                    <label>Enter Item Name:</label>
                    <input name="name" type="text" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                        <label>SELECT ITEM CATEGORY</label>
                        {{-- <input type="text" class="form-control my-colorpicker1"> --}}
                        <Select class="form-control" name="category">
                            <option value="Beaute_Sets">Beaute Sets</option>
                            <option value="Per_Piece">Per Piece</option>
                            <option value="Facial_Car">Facial Care</option>
                            <option value="Body_Care">Body Care</option>
                            <option value="Under_Arm_Whitening_Set">Under Arm Whitening Set</option>
                            <option value="Under_Arm_Whitening_Per_Piece">Under Arm Whitening Per Piece</option>
                            <option value="Make_Up">Make-Up</option>
                            <option value="Perfumes">Perfumes</option>
                            <option value="Other_Sets">Other Sets</option>
                            <option value="Home">Home</option>
                            <option value="New_Products">New Products</option>
                            <option value="Glutathione">Glutathione</option>
                        </Select>
                </div>
                <!-- /.form group -->
                <hr>
                <div class="box-header">
                        <h3 class="box-title  btn btn-success">Enter Item Price Per Level</h3>
                </div>

                <div class="form-group d-inline-block col-sm-3">
                    <h3><label class="btn "><span class="badge btn-primary">Suggested Retail Price (SRP)</span></label></h3>
                    <div class="input-group my-colorpicker2">
                    <input name="srp" type="number" step="any" class="form-control">
                    </div>
                </div>


                <div class="form-group d-inline-block col-sm-3">
                    <h3 class="text-justify"><label class="btn "><span class="badge btn-success">Re-Seller</span></label></h3>
                    <div class="input-group">
                        <input name="reseller" type="number" step="any"class="form-control ">
                    </div>
                </div>

                <div class="form-group d-inline-block col-sm-3">
                    <h3><label class="btn "><span class="badge btn-warning">Distributor</span></label></h3>
                    <div class="input-group">
                        <input name="distributor" type="number" step="any" class="form-control ">
                    </div>
                </div>

                <div class="form-group d-inline-block col-sm-3">
                        <h3><label class="btn"><span class="badge  btn-danger">Mega Distributor</span></label></h3>
                    <div class="input-group">
                        <input name="mega_distributor" type="number" class="form-control timepicker">
                    </div>
                </div>

            </div>
            <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary">Submit</button>
                </div>

    </form>
</div>

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
