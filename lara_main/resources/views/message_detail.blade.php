@extends('layouts.main_template')
@section('title_page')Users  {{$data->name }} @endsection
@section('content')
    <h1>| User - {{$data->name }} |</h1>

<div class="row">
    <div class="col-lg-4">
        <div class="alert alert-info">
            <p >User name is : {{$data->login}}</p>
            <p>Mail :  {{$data->email}}</p>
            <p>Post : {{$data->message}}</p>
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
