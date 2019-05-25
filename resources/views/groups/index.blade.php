@extends('layouts.app')

@section('content')
<div id="participants" class="panel panel-default">
    <div class="panel-heading">Участники: 
<!--        TODO добавление участника-->
        <button type="submit" class="btn btn-default"> 
            <i class="fa fa-plus"></i> 
          </button></div>
    <ul>
        <li><a href="#"><h4>*Создатель группы*</h4></a></li>
<!--        TODO foreach для вывода всех участников -->
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
        <li><a href="#">*участник*</a></li>
    </ul>
</div>

<div id="aboutGroup">
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
                </ul>
            </div>
            
            
        </div>
    </div>
    </div>

@endsection