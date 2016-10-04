@extends('admin.layout.master')

@section('content')

@include('admin.layout.sider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">北科電競社</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                入社名單
                        </div>
                        <div class="panel-body"> 
                            <div class="col-lg-3">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>#</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->id }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>姓名</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->name }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                             <div class="col-lg-3">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>性別</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->gender }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>班級</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->class }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>學號</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->student_id }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                           
                            <div class="col-lg-3">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>申請入社時間</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->created_at }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>Facebook</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->facebook_url }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>社團經歷</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->clubs_experience }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>活動經歷</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->activities_experience }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>遊戲經歷</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->games_experience }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>入社動機</th></tr>
                                        </thead>
                                    <tbody>
                                        <tr><td>{{ $member->join_motivation }}</td></tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>                
                </div>
            </div>
</div>
@endsection