 @extends('layouts.auth')
@section('title_page')Contact @endsection
@section('content')
    <h1 class="display-1">Login admin</h1>


    <form action="" method="post">
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

        <button type="submit" class="btn btn-success" style="margin-left: auto;width: 129px;display: block;">Login</button>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
