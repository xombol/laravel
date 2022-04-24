@extends('layouts.admin')
@section('title','ROOFS')
@section('content')
    <form action="{{ route('admin.roof.detail.update',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container-fluid">
        <div class="card-header">
            <div class="input-group mb-3">
                <div class="input-group-prepend d-flex">
                    <span class="input-group-text" id="basic-addon1">Название</span>
                </div>
                <input type="text" value="{{$data->name}}" name="name" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div  class="list-group-item list-group-item-action flex-column align-items-start">
                    <h4>Основные параметры</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Ширина основания A</span>
                        </div>
                        <input type="text" value="{{$data->osn_par1}}" name="osn_par1" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Длина основания D</span>
                        </div>
                        <input type="text" value="{{$data->osn_par2}}" name="osn_par2" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Высота подъема B</span>
                        </div>
                        <input type="text" value="{{$data->osn_par3}}" name="osn_par3" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Длина свеса C</span>
                        </div>
                        <input type="text" value="{{$data->osn_par4}}" name="osn_par4" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                    </div>
                </div> <br>



                <div  class="list-group-item list-group-item-action flex-column align-items-start">
                    <h4>Расчет стропил</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Шаг стропил</span>
                        </div>
                        <input type="text" value="{{$data->strop_par1}}" name="strop_par1" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Длина свеса C </span>
                        </div>
                        <select class="custom-select form-control" id="inputGroupSelect01" name="strop_par2">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </div>
                </div>


                <div  class="list-group-item list-group-item-action flex-column align-items-start">
                    <h4>Расчет обрешетки</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Ширина доски <br> обрешетки</span>
                        </div>
                        <input type="text" value="{{$data->obres_par1}}" name="obres_par1" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                            <button class="btn btn-outline-secondary" type="button">мм</button>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Толщина доски <br>  обрешетки</span>
                        </div>
                        <input type="text" value="{{$data->obres_par2}}" name="obres_par2" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                            <button class="btn btn-outline-secondary" type="button">мм</button>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-flex">
                            <span class="input-group-text" id="basic-addon1">Расстояние между <br> досками обрешетки</span>
                        </div>
                        <input type="text" value="{{$data->obres_par3}}" name="obres_par3" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-prepend d-flex">
                            <button class="btn btn-outline-secondary " type="button">+</button>
                            <button class="btn btn-outline-secondary" type="button">-</button>
                            <button class="btn btn-outline-secondary" type="button">мм</button>
                        </div>
                    </div>


                </div>
                <br>
                <button type="submit" class="btn btn-outline-success btn-lg btn-block" style="width: 100%;">Изменить</button>


            </div>
            <div class="col-lg-8">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Активность</h3>
                        <input type="hidden" value="active" name="status">
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate bootstrap-switch-off" style="width: 66px;"><div class="bootstrap-switch-container" style="width: 96px; margin-left: -32px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 32px;">ON</span><span class="bootstrap-switch-label" style="width: 32px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 32px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch=""></div></div>

                        <div class="form-group">

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                    </div>

                </div>
                <img src="/{{asset($data->img) }}" alt="">

            </div>

        </div>
        </div>

    </form>


@endsection

