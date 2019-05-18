@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой группы -->
    <form action="{{route('home.index')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">         
            <div class="col-sm-6">
                <input type="text" name="name" id="group-name" class="form-control">
            </div>
        </div>
        <!-- Кнопка добавления группы -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default bg-success">
                    <i class="fa fa-plus"></i> Создать группу
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
