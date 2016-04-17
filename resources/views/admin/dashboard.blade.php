@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('style')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.includes.sideNavbar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Box Begin -->
                <!-- Box first row begin -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>
                                    150
                                </h3>
                                <p>
                                    New Orders
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-purple"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <h3>
                                    53<sup style="font-size: 20px">%</sup>
                                </h3>
                                <p>
                                    Bounce Rate
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-maroon">
                            <div class="inner">
                                <h3>
                                    44
                                </h3>
                                <p>
                                    User Registrations
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-teal">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Unique Visitors
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Box first row begin -->

                <!-- Box second row begin -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    150
                                </h3>
                                <p>
                                    New Orders
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    53<sup style="font-size: 20px">%</sup>
                                </h3>
                                <p>
                                    Bounce Rate
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                    44
                                </h3>
                                <p>
                                    User Registrations
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Unique Visitors
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Box second row end -->

                <!-- Box third row begin -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>
                                    150
                                </h3>
                                <p>
                                    New Orders
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-purple"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <h3>
                                    53<sup style="font-size: 20px">%</sup>
                                </h3>
                                <p>
                                    Bounce Rate
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-maroon">
                            <div class="inner">
                                <h3>
                                    44
                                </h3>
                                <p>
                                    User Registrations
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-teal">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Unique Visitors
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Box third row end -->

                <!-- Box fourth row begin -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    150
                                </h3>
                                <p>
                                    New Orders
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    53<sup style="font-size: 20px">%</sup>
                                </h3>
                                <p>
                                    Bounce Rate
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                    44
                                </h3>
                                <p>
                                    User Registrations
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Unique Visitors
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Bor fourth end -->

                <!-- Box End-->

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection