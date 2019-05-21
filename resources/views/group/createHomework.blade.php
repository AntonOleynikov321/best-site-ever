@extends('layouts.app')
@section('content')
<div class="panel-body" id="addHomework" >
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
<div  class="panel panel-default">
    <div class="panel-heading">Домашнее задание: </div>
    <form method="POST" class="form-horizontal" action="{{route('store.homework')}}" >
        {{ csrf_field() }}
      <div class="form-group">
        <label for="homework">Заголовок:</label>
        <div >
          <input type="text" name="name" id="homework-name" class="form-control">
        </div>
        <label for="homework">Описание:</label>
        <div>
            <textarea id="homework-text" name="text"></textarea>
        </div>
        <label for="homework" >Дата окончания:</label>
        <div>
            <input type="date" name="finish" id="homework-finish" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
             {{ method_field('POST') }}
          <button type="submit" class="btn btn-success">
            <i class="fa fa-plus"></i> Добавить 
          </button>
        </div>
      </div>
    </form>
</div>
  </div>
@endsection
