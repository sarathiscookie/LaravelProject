@extends('admin.layouts.app')

@section('title', 'Religion')

@section('style')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.includes.sideNavbar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="/admin/dashboard" class="active">Dashboard</a></li>
                        <li>Religion</li>
                    </ol>
                </section>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Religious Details</h3>
                    </div>
                    <div class="panel-body">
                        List the data of religious
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection