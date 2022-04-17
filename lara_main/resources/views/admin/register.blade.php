@extends('layouts.main_template')
@section('title_page')Contact @endsection
@section('content')
    <h1>Reg admin</h1>


    <form action="{{ route('admin.register') }}" method="post">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            {!! Form::text('name','',['class' => 'form-control']) !!}
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            {!! Form::email('email',null,['class' => 'form-control']) !!}
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>

        <button type="submit" class="btn btn-success">Send</button>

    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
