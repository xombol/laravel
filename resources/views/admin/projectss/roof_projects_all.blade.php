@extends('layouts.admin')
@section('title','Admins')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admins</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">

                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name project</th>
                            <th>Role</th>
                            <th>User</th>
                            <th>Date added</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roofs as $roof)
                            <tr>
                                <td>{{$roof->id}}</td>
                                <td>{{$roof->roof->name}}</td>
                                <td>{{$roof->user->role}}</td>
                                <td>{{$roof->user->name}}</td>
                                <td>{{$roof->created_at}}</td>
                                <th>    <a href="{{ route('admin.projects.detail.roofs',$roof->id) }}">
                                        <span class="fa fa-trash color-red"></span> Перейти
                                    </a></th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            {{ $roofs->links() }}
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <div class="modal fade modal-danger in" id="modal-destroy" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h1 class="modal-title">Внимание</h1>
                </div>
                <div class="modal-body">
                    <p class="text-center"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
                    <a href="#" type="button" class="c-btn-destroy btn btn-danger">Выполнить</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.c-modal-destroy', function (e) {
            e.preventDefault();

            //  $('#exampleModal').toggle();

            let $modal = $('#modal-destroy');
            if ($modal.length) {
                $('.modal-body > p', $modal).html($(this).data('body'));
                $('.c-btn-destroy', $modal).attr('href', $(this).data('route'));
                $modal.modal();
            }
        });
    </script>

@endsection

