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
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="religion">Religion:</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter religion here">
                                    </div>
                                    <button type="submit" class="btn btn-default">Create Religion</button>
                                </form>
                            </div>
                        </div>
                        <template id="tasks-template">
                            <table class="table table-responsive table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id</th>
                                    <th>Religion</th>
                                    <th>Action</th>
                                    <th>Created</th>
                                    <td>Status</td>
                                </tr>
                                </thead>

                                <tbody>
                                <tr v-for="(index, task) in list | orderBy 'id' -1">
                                    <td><input type="checkbox" id="checkbox" aria-label="checkbox" value="checkbox"></td>
                                    <td>@{{ index + 1 }}</td>
                                    <td>@{{ task.religion | capitalize }}</td>
                                    <td v-if="task.status == 'publish'">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </td>
                                    <td v-else>
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </td>
                                    <td>@{{ task.created_at }}</td>
                                    <td><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Edit"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Delete"></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </template>

                        <tasks></tasks>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/script.js"></script>
@endpush