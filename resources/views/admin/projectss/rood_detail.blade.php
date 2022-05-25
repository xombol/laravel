@extends('layouts.admin')
@section('title','ROOFS')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Входные данные </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Ширина основания A</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->name }}" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Длина основания B</label>
                            <input  type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->osn_par1 }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Высота подъема C</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->osn_par2 }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Длина свеса D</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->osn_par3 }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Ширина доски обрешетки<</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->osn_par4 }} см" readonly>
                        </div>

                        <br>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Толщина доски  обрешетки</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->strop_par1 }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Расстояние между досками обрешетки</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->strop_par2 }} см" readonly>
                        </div>
                        <br>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Project Name</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->obres_par1 }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Project Name</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->obres_par2 }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Project Name</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->roof->obres_par3 }} см" readonly>
                        </div>


                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Budget</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-dark" role="alert">
                            Крыша
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Угол наклона крыши</label>
                            <input type="text" id="inputName"  class="form-control w-25" value=" 32 градуса" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Площадь поверхности крыши</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="{{ $data->area }} см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Примерный вес кровельного материала</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="199.79 кг" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Количество рубероида с нахлестом 10%</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="2.65 рулонов" readonly>
                        </div>
                        <div class="alert alert-dark mt-3" role="alert">
                            Стропила
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Длина стропил</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="468.30 см" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Минимальное сечение стропил при шаге 60 см. и длине 316 см. в пролете</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="40 x 150 мм" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Количество стропил</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="15 шт" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Объем бруса для стропил</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="0.37 м3" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Примерный вес стропил</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="172.32 кг" readonly>
                        </div>
                        <div class="alert alert-dark mt-3" role="alert">
                            Обрешетка
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Количество рядов обрешетки</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="5 рядов" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Равномерное расстояние между досками обрешетки</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="312	мм" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Количество досок обрешетки стандартной длиной 6 метров</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="14 шт" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Объем досок обрешетки</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="0.32 м3" readonly>
                        </div>
                        <div class="input-group-prepend d-flex mb-1">
                            <label class="w-75" for="inputName">Примерный вес досок обрешетки</label>
                            <input type="text" id="inputName"  class="form-control w-25" value="144.9 кг" readonly>
                        </div>
                    </div>

                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Files</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>File Name</th>
                                <th>File Size</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Functional-requirements.docx</td>
                                <td>49.8005 kb</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr><tr>
                                <td>UAT.pdf</td>
                                <td>28.4883 kb</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr><tr>
                                <td>Email-from-flatbal.mln</td>
                                <td>57.9003 kb</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr><tr>
                                <td>Logo.png</td>
                                <td>50.5190 kb</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr><tr>
                                <td>Contract-10_12_2014.docx</td>
                                <td>44.9715 kb</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr></tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success float-right">
            </div>
        </div>
    </section>

@endsection

