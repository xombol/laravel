@extends('layouts.main_template')
@section('title_page')Contact @endsection
@section('content')
    <h1>Admin auth</h1>


    <form action="" method="post">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text" name="name"  class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Login</span>
            </div>
            <input type="text" name="login" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input type="text" name="email" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Post</span>
            </div>
            <select name="post" class="form-control">
                <option value="manager" selected>manager</option>
                <option value="seo">seo</option>
                <option value="textwriter">textwriter</option>
                <option value="SUB ADMIN">SUB ADMIN</option>
            </select>

        </div>

        <button type="submit" class="btn btn-success">Send</button>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
