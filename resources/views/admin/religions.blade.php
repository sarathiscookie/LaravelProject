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
                        <li><a href="/backend/dashboard" class="active">Dashboard</a></li>
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
                                <form action="" method="POST" class="form-inline" @submit.prevent="addNewReligion">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="religion">Religion:</label>
                                        <input v-model="newReligion.religion" type="text" class="form-control" id="religion" placeholder="Enter religion here" name="religion" autocomplete="off">
                                    </div>
                                    <button type="submit" class="btn btn-default" v-show="newReligion.religion">Create Religion</button>
                                </form>
                            </div>
                        </div>

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
                            <tr v-for="(index, religion) in religions | orderBy 'id' -1">
                                <td><input type="checkbox" id="checkbox" aria-label="checkbox" value="checkbox"></td>
                                <td>@{{ index + 1 }}</td>
                                <td>@{{ religion.religion | capitalize }}</td>
                                <td v-if="religion.status == 'publish'">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </td>
                                <td v-else>
                                    <span class="glyphicon glyphicon-remove"></span>
                                </td>
                                <td>@{{ religion.created_at }}</td>
                                <td><button type="button" class="btn btn-default" @click="EditReligion(religion.id)">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Edit"></span>
                                    </button>
                                    <button type="button" class="btn btn-default" @click="removeReligion(religion.id)">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Delete"></span>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/script.js"></script>
@endpush