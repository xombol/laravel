@extends('layouts.main_template')
@section('title_page')Users All - Admin Panel @endsection
@section('content')
    <h1>Users</h1>


    @if (!empty($data))
        @foreach($data as $el)
            <div class="row">
                <div class="col-lg-5">
                    <div class="alert alert-info">
                        <div class="row">
                            <div class="col-lg-9">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Login</span>
                                    </div>
                                    <input type="text" readonly class="form-control" placeholder="{{$el->login }}" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                    </div>
                                    <input type="text" readonly class="form-control" placeholder="{{$el->name }}" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend  ">
                                        <span class=" text-success input-group-text" id="basic-addon1">Add admin</span>
                                    </div>
                                    <input type="text"   readonly class="form-control text-success" placeholder="{{$el->admin }}" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <a href="{{ route('contact-data-one',$el->id) }}"><button class="btn btn-outline-success">Детально </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    @if(empty($data[0]))
        <div class="row">
            <div class="col-lg-4">
                <div class="alert ">
                <h5><p class="text-danger">Нету данных </p></h5>
                </div>
            </div>
        </div>
    @endif
@endsection



@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection
