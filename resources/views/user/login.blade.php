@extends('layouts.auth')
@section('title_page')Contact @endsection
@section('content')
    <h1 class="display-1">User login</h1><br>


    <form action="" method="post">
        @csrf


        <div class="input-group mb-3 11">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Login</span>
            </div>
            <input type="text" name="email" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="text" name="password" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('user.register.index') }}" class="btn btn-outline-primary">Register</a>
            <button type="submit" class="btn btn-success" >Login</button>
        </div>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
