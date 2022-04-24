@extends('layouts.main_template')
@section('title','ROOFS')
@section('content')
    <div class="container">
    <div class="row">
                                @foreach($data as $roof)
<div class="col-lg-4 mb-5">
                                    <!-- Карточка (border-primary - цвет границ карточки) -->
                                    <div class="card border-primary">
                                        <!-- Шапка (bg-primary - цвет фона, text-white - цвет текста) -->
                                        <div class="card-header bg-primary text-white">
                                            Крыши
                                        </div>
                                        <!-- Текстовый контент -->
                                        <div class="card-body">
                                            <h4 class="card-title">{{$roof->name}}</h4>
                                            <p class="card-text">...</p>
                                            <a href="{{ route('roof.detail',$roof->id) }}" class="btn btn-primary">Перейти</a>
                                        </div>
                                    </div><!-- Конец карточки -->
</div>
                                @endforeach
    </div>

    </div>






@endsection


