@extends('layouts.main_template')
@section('title_page', 'Расчёт односкатной крыши')
@section('content')


    <h1>{{$data->name}}</h1>

    <form action="#" method="post" id="project_roof">
       <!-- <input type="hidden" name="user__name" value=""> -->
    <div class="row">
   <div class="col-lg-4">
       <div  class="list-group-item list-group-item-action flex-column align-items-start">
           <h4>Основные параметры</h4>
       <div class="input-group mb-3">
           <div class="input-group-prepend d-flex">
               <span class="input-group-text" id="basic-addon1">Ширина основания A</span>
           </div>
           <input type="text" class="form-control" name="shirina_ons" id="sh_1" aria-describedby="basic-addon1" value="{{$data->osn_par1}}">
           <div class="input-group-prepend d-flex">
               <button class="btn btn-outline-secondary " type="button">+</button>
               <button class="btn btn-outline-secondary" type="button">-</button>
           </div>
       </div>

       <div class="input-group mb-3">
           <div class="input-group-prepend d-flex">
               <span class="input-group-text" id="basic-addon1">Высота подъема B</span>
           </div>
           <input type="text" class="form-control" name="visota_podema" id="sh_2"  aria-describedby="basic-addon1" value="{{$data->osn_par2}}">
           <div class="input-group-prepend d-flex">
               <button class="btn btn-outline-secondary " type="button">+</button>
               <button class="btn btn-outline-secondary" type="button">-</button>
           </div>
       </div>

       <div class="input-group mb-3">
           <div class="input-group-prepend d-flex">
               <span class="input-group-text" id="basic-addon1">Длина свеса  C</span>
           </div>
           <input type="text" class="form-control" name="dlinna_svesa" id="sh_3"  aria-describedby="basic-addon1" value="{{$data->osn_par3}}">
           <div class="input-group-prepend d-flex">
               <button class="btn btn-outline-secondary " type="button">+</button>
               <button class="btn btn-outline-secondary" type="button">-</button>
           </div>
       </div>

       <div class="input-group mb-3">
           <div class="input-group-prepend d-flex">
               <span class="input-group-text" id="basic-addon1">Длина стены D</span>
           </div>
           <input type="text" class="form-control" name="dlinna_steni" id="sh_4"  aria-describedby="basic-addon1" value="{{$data->osn_par4}}">
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
               <input type="text" class="form-control" id="strop_sh" name="shag_stropil" aria-describedby="basic-addon1" value="{{$data->strop_par1}}">
               <div class="input-group-prepend d-flex">
                   <button class="btn btn-outline-secondary " type="button">+</button>
                   <button class="btn btn-outline-secondary" type="button">-</button>
               </div>
           </div>

           <div class="input-group mb-3">
               <div class="input-group-prepend d-flex">
                   <span class="input-group-text" id="basic-addon1">Длина свеса C </span>
               </div>
               <select class="custom-select form-control" id="inputGroupSelect01">
                   <option value="1"  selected>1</option>
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
               <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" value="{{$data->obres_par1}}">
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
               <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" value="{{$data->obres_par2}}">
               <div class="input-group-prepend d-flex">
                   <button class="btn btn-outline-secondary " type="button">+</button>
                   <button class="btn btn-outline-secondary" type="button">-</button>
                   <button class="btn btn-outline-secondary" type="button">мм</button>
               </div>
           </div>
           <div class="input-group mb-3">
               <div class="input-group-prepend d-flex">
                   <span class="input-group-text" name="rast_mej_doskami" id="basic-addon1">Расстояние между <br> досками обрешетки</span>
               </div>
               <input type="text" class="form-control" id="rast_dosk" aria-describedby="basic-addon1" value="{{$data->obres_par3}}">
               <div class="input-group-prepend d-flex">
                   <button class="btn btn-outline-secondary " type="button">+</button>
                   <button class="btn btn-outline-secondary" type="button">-</button>
                   <button class="btn btn-outline-secondary" type="button">мм</button>
               </div>
           </div>


       </div>
        <br>
       <input type="button" id="btn_roof" class="btn btn-outline-success btn-lg btn-block" value="Рассчитать" data-page="{{$data->id}}" style="width: 100%;">



   </div>
    <div class="col-lg-8">
        <div style="background: url('/storage/{{$data->img}}');width: 100%;height: 100%;background-size: cover;background-repeat: no-repeat;background-position: center;"></div>
    </div>

</div>

    <div class="row mt-5">
    <div class="col-lg-12" >

        <div id="calc_result">
            <div class="row">
                <div class="col-lg-6">
                    <canvas id="myCanvas" width="600" height="600"></canvas>
                </div>
                <div class="col-lg-6">
                    <canvas id="myCanvas2" width="599" height="599"></canvas>
                </div>
            </div>

            <h2>Расчеты</h2>
            <table id="table_pdf"   width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: left; width: 100%!important">

                <input type="hidden" name="roof_id" value="{{$data->id}}">

                <input type="hidden" id="area_h" name="area">
                <input type="hidden" id="count_area_h" name="count_area">
                <input type="hidden" id="dlina_stripol_h" name="dlina_stripol">
                <input type="hidden" id="count_st_h" name="count_st">

                <input type="hidden" name="pr_ves_h" value="199.79">
                <input type="hidden" name="min_sec" value="40 x 150">
                <input type="hidden" name="objem_brusa" value="0.37">
                <input type="hidden" name="prim_ves_br" value="172.32">
                <input type="hidden" name="rast_mej_doskami" value="312">
                <input type="hidden" name="kol_dosok_obr" value="17">
                <input type="hidden" name="kol_dosok_obr" value="17">
                <input type="hidden" name="area_dosok" value="0.32">
                <input type="hidden" name="pr_ves_dosok" value="144.9">


                <tbody><tr><td><b>Крыша</b>
                    </td><td>
                    </td><td>
                    </td></tr>
                <tr><td>
                        Угол наклона крыши <br> <span class="green"> Угол наклона подходит для данного материала.</span></td> <td><b id="ugol_naklona">18.43</b></td> <td> градусов
                    </td></tr>


                <tr><td>
                        Площадь поверхности крыши</td> <td><b id="area" >33.3</b></td> <td> м2
                    </td></tr>

                <tr><td>
                        Примерный вес кровельного материала</td> <td><b>199.79</b></td> <td> кг
                    </td></tr>


                <tr><td>
                        Количество рубероида с нахлестом 10%</td> <td><b id="count_area">2.4</b></td> <td> рулонов
                    </td></tr>

                <tr><td><b>Стропила</b></td><td>
                    </td><td>
                    </td></tr>

                <tr><td>
                        Длина стропил</td> <td><b id="dlina_stripol">416</b></td> <td> см
                    </td></tr>
                <tr><td>
                        Минимальное сечение стропил при шаге 60 см. <br>и длине 316 см. в пролете  <br> (Для региона со снеговой нагрузкой 153 кг/м2) </td> <td><b>40 x 150     </b></td> <td> мм
                    </td></tr>
                <tr><td>
                        Количество стропил</td> <td><b id="dlina_stripol">15</b></td> <td> шт
                    </td></tr>
                <tr><td>
                        Объем бруса для стропил</td> <td><b>0.37</b></td> <td> м3
                    </td></tr>

                <tr><td>
                        Примерный вес стропил</td> <td><b>172.32</b></td> <td> кг
                    </td></tr>

                <tr><td><b>Обрешетка</b></td><td>
                    </td><td>
                    </td></tr>
                <tr><td>
                        Количество рядов обрешетки</td> <td><b id="count_st">10</b></td> <td> рядов
                    </td></tr>

                <tr><td>
                        Равномерное расстояние между досками обрешетки</td> <td><b>312</b></td> <td> мм
                    </td></tr>



                <tr><td>
                        Количество досок обрешетки стандартной длиной 6 метров</td> <td><b>14</b></td> <td> шт
                    </td></tr>

                <tr><td>
                        Объем досок обрешетки</td> <td><b>0.32</b></td> <td> м3
                    </td></tr>

                <tr><td>
                        Примерный вес досок обрешетки</td> <td><b>144.9</b></td> <td> кг
                    </td></tr>
                </tbody></table>



        <div class="btn-group mt-5">
            <input type="button" id="btn_roof_pdf" class="btn btn-outline-danger  mr-5" value="PDF generate" data-page="{{$data->id}}" >
            <input type="submit" id="btn_roof_save" class="btn btn-outline-success k" value="Save in profile" data-page="{{$data->id}}" >
        </div>
</div>

    </div>
    </div>

    </form>









@endsection

@section('sidebar_template')
    @parent
    <p>dob</p>
@endsection


<style>
    /*! CSS Used from: Embedded */
    a{text-decoration:none;}
    h2{color:#494949;text-align:center;font-size:1.3em;}
    h3{color:#494949;text-align:center;}
    img{border:none;max-width:760px;}
    input{outline:none;}
    calc img{width:100%;height:100%;}
    calc a{color:#ec7000;}
    .green{color:green;}
    .submit_button{display:flex;justify-content:center;padding:50px 0;}
    #calc_result .submit_button{display:none;}
    .submit{background:#f77601 url(https://stroy-calc.ru/img/butbg.jpg) repeat-x top;border-radius:4px;border:none;padding:12px;color:#fff;font-size:24px;background-position:0 -15px;letter-spacing:1px;}
    .submit:hover{background-position:0 0;}
    #calc_result{font-size:16px;}
    #calc_result img{width:100%;height:auto;display:flex;}
    #calc_result tr{height:auto;}
    #calc_result tr:hover{-webkit-transition:background 0.8s 0.02s ease;background-color:#fffddd;}
    #calc_result td{padding-left:0;border-bottom:1px solid #ec7000;padding:15px 0;}
    #calc_result td:nth-child(2){text-align:center;padding:5px;}
    #calc_result a{color:#000;text-decoration:underline;}
    #calc_result a:hover{color:#ec7000;}
    span.tg{width:100%;font-size:18px;padding:10px 0;border-top:1px solid #ec7000;text-align:center;position:fixed;bottom:0;left:0;background-color:#fff;display:block;z-index:999;}
    @media (min-width:769px){
        .submit{cursor:pointer;font-size:20px;}
        #calc_result td{padding-left:5px;}
    }
    @media (min-width:1025px){
        #calc_result .submit_button{display:flex;justify-content:center;padding:50px 0;}
    }
    /*! CSS Used from: Embedded ; media=print */
    @media print{
        .noprint{visibility:hidden;}
    }
</style>
