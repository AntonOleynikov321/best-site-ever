@extends('layouts.app')
@section('content')
<div class="panel-body">
    @include('common.errors')
    @if (count($materials) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Список лекций
        </div>
        <div class="panel-body">
            <table class="table table-striped materials-table">
                <thead>
                    <tr>
                        <th>Название лекции</th>
                        <th>Удаление</th>
                    </tr>           
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                    <tr>
                        <td class="table-text">
                            <div>{{ $material->name }}</div>
                        </td>
                        <td>
                            <form action="{{url($material->id)}} " method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button type="submit" class="btn btn-default bg-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <form action="{{ url('/materials') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="materials" class="col-sm-3 control-label">Лекция</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="materials-name" class="form-control">
                <textarea type="text" name="text" id="materials-text" class="form-control"></textarea>
                <div>
                    <input type="file" name="file">             
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary bg-danger">
                    <i class="fa fa-primary"></i> Сохранить
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
