 @extends('layouts.main_template')
@section('title_page')Contact @endsection
@section('content')
    <h1>Login admin</h1>


    <form action="" method="post">
        @csrf


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

        <button type="submit" class="btn btn-success">Login</button>




    </form>
@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
