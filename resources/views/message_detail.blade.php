@extends('layouts.main_template')
@section('title_page')Users  {{$data->name }} @endsection
@section('content')
    <h1>| User - {{$data->name }} |</h1>

<div class="row">
    <div class="col-lg-4">
        <div class="alert alert-info">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                </div>
                <input type="text" readonly name="email" class="form-control"  value="{{$data->name}}" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Login</span>
            </div>
            <input type="text" readonly name="email" class="form-control"  value="{{$data->login}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Mail</span>
            </div>
            <input type="text" readonly name="email" class="form-control"  value="{{$data->email}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Post</span>
            </div>
            <input type="text" readonly name="email" class="form-control"  value="{{$data->post}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        </div>

        <a href="{{ route('contact-update',$data->id) }}"><button class="btn btn-success">Edit</button></a>
        <a href="{{ route('contact-delete',$data->id) }}"><button class="btn btn-danger ">Delete</button></a>
        <a href="{{ route('contact-data-one',$data->id+1) }}"><button class="btn btn-primary ">Next user</button></a>
    </div>
    <div class="col-lg-4">

    </div>
</div>






@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
