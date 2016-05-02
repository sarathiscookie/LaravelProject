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
                        <template id="list-template">
                            <table class="table table-responsive table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Id</th>
                                    <th>Religion</th>
                                    <th>Action</th>
                                    <td>Status</td>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td><input type="checkbox" id="checkbox" aria-label="checkbox" value="checkbox"></td>
                                    <td>1</td>
                                    <td>Buddhist</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="left" title="Edit"></span> <span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Delete"></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </template>

                        <data-list list=""></data-list>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/vue.js"></script>
    <script src="/js/vue-resource.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        /*class="success" and class="danger"*/
        Vue.component('data-list',{
            template: '#list-template',
            data: function(){
                return {
                    list: []
                };
            }
        });

        var vw = new Vue({
            el:'body',
            ready: function(){
                alert(1);
            }
        });
    </script>
@endsection