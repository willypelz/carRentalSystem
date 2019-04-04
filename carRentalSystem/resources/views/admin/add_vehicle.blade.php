@extends('layouts.dashboard')

@section('content')

    <div class="content-body">

    <div class="container">
        <div class="col-xl-7 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Car details</h4>
                </div>
                <div class="card-body">
                    <strong>
                        @if (Session::has('addCar'))
                            <div class="alert alert-danger">{{ Session::get('message') }}</div>
                        @endif
                    </strong>
                    <div class="basic-form">
                        <form method="POST" action="{{ route('save-car') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="car_owner_name" class="form-control input-default" placeholder="Full Name of the Owner">
                            </div>
                            <div class="form-group">
                                <input type="text" name="plate_number" class="form-control input-default" placeholder="Plate Number">
                            </div>
                            <div class="form-group">
                                <input type="text" name="color" class="form-control input-default" placeholder="Car Color">
                            </div>
                            <div class="form-group">
                                <input type="text" name="side_window_no" class="form-control input-default" placeholder="Number Etched into side Windows ">
                            </div>
                            <div class="form-group">
                                <input type="text" name="chassis_no" class="form-control input-default" placeholder="Chassis Number / VIN number Please enter the full 17 digits ">
                            </div>
                            <div class="form-group">
                                <input type="text" name="make_of_vehicle" class="form-control input-default" placeholder="Make of Vehicle">
                            </div>
                            <div class="form-group">
                                <input type="text" name="model" class="form-control input-default" placeholder="Model">
                            </div>
                            <div class="form-group">
                                <input type="text" name="dealer_name" class="form-control input-default" placeholder="Dealer Name">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
