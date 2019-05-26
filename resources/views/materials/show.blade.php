@extends('layouts.app')
@section('content')
<div class="panel-body">
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
                            <form action="{{route('materials_destroy',$material->id)}} " method="post">
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
    <!--todo кнопка ссылка на форму-->
    <button type="submit" class="btn btn-primary bg-danger">
        <a href="{{route('materials_create',$group->id)}}">
            <i class="fa fa-primary"></i> Добавить
        </a>
    </button>
</div>
@endsection
