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
            <input type="text" name="login" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="text" name="password" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button type="submit" class="btn btn-success" style="margin-left: auto;width: 129px;display: block;">Login</button>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection