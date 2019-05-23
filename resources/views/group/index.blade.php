@extends('layouts.app')
@section('content')
<div id="participants" class="panel panel-default">
    <div class="panel-heading">Участники: 
        <!--        TODO добавление участника-->
        <button type="submit" class="btn btn-success"> 
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
                    <button type="submit" class="btn btn-warning" id="exitGroup" style="margin-right: 10px">
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
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <button class="w3-bar-item w3-button" onclick="openCase('Materials')">Материалы</button>
                    <button class="w3-bar-item w3-button" onclick="openCase('Homework')">Домашнее задание</button>
                    <!--TODO форма добавления материалов-->
                    
                    <button type="submit" class="btn btn-success cases" id="btnMaterials" style="float:right"> 
                        <a href="{{ url('/materials/create') }}">
<!--                            '/{group}/materials/create'-->
                            <i class="fa fa-plus">Добавить лецию</i>
                        </a>                        
                    </button>
                    
                    <a href="{{route('create.homework')}}">  <button type="submit" class="btn btn-success cases" id="btnHomework" style="display:none; float:right">
                            <i class="fa fa-plus">Добавить домашнее задание</i> 
                        </button>
                    </a>
                </div>
                
                <div id="Materials" class="cases" >
                    <!--if                                    -->
                    <table class="table table-striped task-table">
                        <tbody>
                            <!--foreach-->
                            <tr>
                                <td class="table-text">
                                    <div><a href="#">Лекция 1</a></div>
                                </td>
                                <td>
                                    <!--                                    <f                                orm>-->
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-book"></i> Читать
                                    </button>
                                    <!--</form>-->
                                </td>
                                <td>
                                    <!--                                    <form>-->
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-pencil"></i>Редактировать
                                    </button>
                                    <!--</form>-->
                                </td>
                                <td>
                                    <!--<form>-->
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Удалить
                                    </button>
                                    <!--</form>-->
                                </td>
                            </tr>
                            <!--                                    endforeach-->
                        </tbody>
                    </table>
                    <!--                    endif-->
                </div>
                <div id="Homework" class="cases" style="display:none">
                    @if (count($homeworks) >0)
                    <table class="table table-striped task-table">
                        <tbody>
                            @foreach ($homeworks as $homework)
                            <tr>
                                <td class="table-text">
                                    <div><a href="#">{{ $homework->name }}</a></div                                                            >
                                </td>
                                <td>
                                    <!--                                    <form>-->
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-book"></i> Читать
                                    </button>
                                    <!--</form>-->
                                </td>
                                <td>
                                    <!--                                    <form>-->
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-pencil"></i>Редактировать
                                    </button>
                                    <!--</form>-->
                                </td>
                                <td>
                                    <form action="{{route('destroy.homework')}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                <script>
                    function openCase(caseName) {
                        var i;
                        var x = document.getElementsByClassName("cases");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        var str = 'btn' + caseName;
                        document.getElementById(caseName).style.display = "block";
                        document.getElementById(str).style.display = "block";
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection