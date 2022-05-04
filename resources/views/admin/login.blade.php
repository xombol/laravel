 @extends('layouts.auth')
@section('title_page')Contact @endsection
@section('content')
    <h1 class="display-1">Login admin</h1>


    <form action="{{ route('admin.login') }}" method="post">
        @csrf

<br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Login</span>
            </div>
            {!! Form::email('email',null,['class' => 'form-control']) !!}
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.register.index') }}" class="btn btn-outline-primary">Register</a>
            <button type="submit" class="btn btn-success" >Login</button>
        </div>

    </form>



@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
