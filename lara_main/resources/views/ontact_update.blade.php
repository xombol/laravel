@extends('layouts.main_template')
@section('title_page')Contact @endsection
@section('content')
    <h1>Edit user</h1>


    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Write name</label>
            <input type="text" name="name" placeholder="write name" id="name" class="form-control" value="{{$data->name}}">
        </div>

        <div class="form-group">
            <label for="email">Write email</label>
            <input type="text" name="email" placeholder="write name" id="email" class="form-control" value="{{$data->email}}">
        </div>

        <div class="form-group">
            <label for="login">Write login</label>
            <input type="text" name="login" placeholder="write login" id="login" class="form-control" value="{{$data->login}}">
        </div>

        <div class="form-group">
            <label for="message">Write text</label>
            <textarea name="message" id="message" class="form-control" placeholder="white text"> {{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
