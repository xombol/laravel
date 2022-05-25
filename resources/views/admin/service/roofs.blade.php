@extends('layouts.admin')
@section('title','ROOFS')
@section('content')
    <div class="container-fluid">

        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Крыши</h3>
                </div>
<div class="row">
    <div class="col-lg-12">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Название</th>
                            <th>Нагрузка</th>
                            <th style="width: 40px">Проценты</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $roof)

                                <tr>
                                    <td>{{$roof->id}}</td>
                                    <td><a href="{{ route('admin.roofs.detail',$roof->id) }}">{{$roof->name}}</a></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
</div>
            </div>
        </div>
    </div>





@endsection


