@extends('layouts.app')

@section('content')
<form action="{{route('groups_create')}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    {{ method_field('get') }}
    <div class="form-group" id="createGroup" >
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"> Создать</i> 
            </button>
        </div>
    </div>
</form>
<div class="container">
    <div class="row">
       
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading"><h3>*Название группы*</h3>
                    <button type="submit" class="btn btn-danger" id="exitGroup">
<!--            Покинуть группу для участника или же удалить для главного-->
                        <i class="fa fa-trash">Удалить группу</i> 
          </button>
                    <button type="submit" class="btn btn-warning" id="exitGroup">
<!--            Покинуть группу для участника или же удалить для главного-->
                        <i class="fa fa-pencil">Редактировать</i> 
          </button></div>
                <p>*Описание группы*</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="panel-body">
                    
                </div>
            </div>
            
            
        </div>
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading"><h4>Материалы</h4>
<!--                    TODO форма добавления материалов-->
                    <button type="submit" class="btn btn-default" id="exitGroup"> 
            <i class="fa fa-plus"></i> 
          </button></div>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <form method='post' action="{{ route('groups_destroy', $group->id) }}">
                        {{ csrf_field() }}
                        {{method_field('delete')}}                                     
                        <button type="submit" class="btn btn-default bg-danger">
                            <i class="fa fa-trash"></i> Удалить
                        </button>
                    </form>
                </ul>
            </div>
            
            
        </div>
    </div>
    </div>

@endsection
