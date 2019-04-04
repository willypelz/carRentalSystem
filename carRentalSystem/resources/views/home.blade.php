@extends('layouts.dashboard')

@section('content')

    <div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" id="user-activity">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#user" role="tab" aria-controls="" aria-selected="true">
                                <div class="icon-wrap primary">
                                    <i class="mdi mdi-account-group"></i>
                                </div>
                                <h4>5658</h4>
                                <span class="type-name">User</span>
                                <span class="text-success ">7%
                                            <i class="mdi mdi-arrow-up-bold"></i>
                                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#session" role="tab" aria-controls="" aria-selected="false">
                                <div class="icon-wrap success">
                                    <i class="mdi mdi-airballoon"></i>
                                </div>
                                <h4>324</h4>
                                <span class="type-name">Sessions</span>
                                <span class="text-success ">17%
                                            <i class="mdi mdi-arrow-up-bold"></i>
                                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#bounce" role="tab" aria-controls="" aria-selected="false">
                                <div class="icon-wrap info">
                                    <i class="mdi mdi-trophy"></i>
                                </div>
                                <h4>24.9%</h4>
                                <span class="type-name">Bounce Rate</span>
                                <span class="text-danger ">4%
                                            <i class="mdi mdi-arrow-down-bold"></i>
                                        </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab" aria-controls="" aria-selected="false">
                                <div class="icon-wrap danger">
                                    <i class="mdi mdi-clock"></i>
                                </div>
                                <h4>5m 32s</h4>
                                <span class="type-name">Session Duration</span>
                                <span class="text-success ">9%
                                            <i class="mdi mdi-arrow-up-bold"></i>
                                        </span>
                            </a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <h4 class="card-title pt-2">User Activity</h4>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="home-tab">
                                <canvas id="activity" class="chartjs"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center py-3">
                        <div class="date_picker">
                            <span></span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="more-link">
                            <a href="#">Audience Overview</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Active Now</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="active_now"></canvas>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center py-3">
                        <div class="date_picker">
                            <span></span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="more-link">
                            <a href="#">Audience Overview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vehicle acquisition</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="user_acq"></canvas>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center py-3">
                        <div class="date_picker">
                            <span></span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="more-link">
                            <a href="#">Audience Overview</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
