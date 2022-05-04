@extends('layouts.main_template')
@section('title_page')Contact @endsection
@section('content')
    <h1>Edit user</h1>


    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text"  name="name" class="form-control"  value="{{$data->name}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Login</span>
            </div>
            <input type="text"  name="login" class="form-control"  value="{{$data->login}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Mail</span>
            </div>
            <input type="text"  name="email" class="form-control"  value="{{$data->email}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Post</span>
            </div>
            <input type="text"  name="post" class="form-control"  value="{{$data->post}}" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button type="submit" class="btn btn-success">Send</button>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
