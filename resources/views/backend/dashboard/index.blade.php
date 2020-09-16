@extends('backend.layouts.structures.main')
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Dashboard</h4>
                        <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                        </li>
                        <li class="breadcrumb-item"><a href="index-1.htm">Group Add-ons</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <!-- Input Group Sizes & Colors card start -->
        <div class="card">
            <div class="card-header">
                <h5>Input Group Sizes & Colors</h5>
                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="sub-title">Group Addons Sizes</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon" id="basic-addon6">@</span>
                                    <input type="text" class="form-control" placeholder="input-group-lg">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon7">@</span>
                                    <input type="text" class="form-control" placeholder="input-group">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon" id="basic-addon8">%</span>
                                    <input type="text" class="form-control" placeholder="input-group-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="sub-title">Color Addons</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group input-group-primary">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-presentation"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-primary">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group input-group-warning">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-queen"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-warning">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-default">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-shield"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-default">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group input-group-danger">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-volume-down"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-danger">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-success">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-volume-off"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-success">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group input-group-inverse">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-wifi"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-inverse">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-info">
                                                                    <span class="input-group-addon">
                                       <i class="icofont icofont-signal"></i>
                                       </span>
                                    <input type="text" class="form-control" placeholder="input-group-info">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Input Group Sizes & Colors card end -->
    </div>
    <!-- Page-body end -->
@endsection
