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
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>姓名</th>
                                <th>班級</th>
                                <th>學號</th>
                                <th>性別</th>
                                <th>Fackbook</th>
                                <th width="450px">入社動機</th>
                                <th >入社時間</th>
                                <th>詳細</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($count=0)
                        @foreach ($members as $member)
                        
                            @if ( $count%2 == 1  )
                            <tr class="gradeA odd">
                            @else
                            <tr class="gradeA even">
                            @endif
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->class }}</td>
                                <td>{{ $member->student_id }}</td>
                                <td>{{ $member->gender }}</td>
                                <td><a href="{{ $member->facebook_url }}">{{ $member->facebook_url }}</a></td>
                                <td>{{ $member->join_motivation}}</td>
                                <td>{{ $member->created_at }}</td>
                                <td><a href="{{Url('/admin/join/detail',[$member->id])}}">詳細 </td>
                            </tr>

                        @php ($count++)
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

@include('admin.<layout class="footer"></layout>')

@endsection