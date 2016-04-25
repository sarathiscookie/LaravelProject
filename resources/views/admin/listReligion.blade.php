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
                        <button type="button" class="btn btn-info text-right">Create Religion</button>
                        <br>
                        <table class="table table-responsive table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Religion</th>
                                <th>Action</th>
                                <td>Status</td>
                            </tr>
                            </thead>

                            <tbody>
                            <tr class="success">
                                <td><input type="checkbox" id="checkbox" aria-label="checkbox" value="checkbox"></td>
                                <td>Buddhist</td>
                                <td>Active</td>
                                <td><button type="button" class="btn btn-primary">Edit</button></td>
                            </tr>
                            <tr class="danger">
                                <td><input type="checkbox" id="checkbox" aria-label="checkbox" value="checkbox"></td>
                                <td>Hindu</td>
                                <td>Disabled</td>
                                <td><button type="button" class="btn btn-primary">Edit</button></td>
                            </tr>
                            <tr class="warning">
                                <td><input type="checkbox" id="checkbox" aria-label="checkbox" value="checkbox"></td>
                                <td>Christian</td>
                                <td>On hold</td>
                                <td><button type="button" class="btn btn-primary">Edit</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection