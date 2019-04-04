@extends('layouts.dashboard')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Vehicles</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">vehicles</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">manage vehicles</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Manage Vehicles</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Plate Number</th>
                                        <th>Office</th>
                                        <th>Car Color</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->plate_number }}</td>
                                        <td>{{ $car->rent_price  }}</td>
                                        <td>{{ $car->location }}</td>
                                        <td>{{ $car->status }}</td>
                                        <td>  <a href=""> <i class="fa fa-edit"></i></a>
                                            <a href=""> <i class="fa fa-trash"></i></a>


                                            <a href=""> <i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Plate Number</th>
                                        <th>Office</th>
                                        <th>Car Color</th>
                                        <th>Dealer Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

@endsection
