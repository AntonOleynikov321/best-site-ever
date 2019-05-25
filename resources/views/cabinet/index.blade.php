
@extends('layouts.app')
@section('content')
<form action="{{route('group_create')}}" method="POST" class="form-horizontal">
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

        <div class="col-md-10 col-md-offset-1" id="groups">
            <div class="panel panel-default" >
                <div class="panel-heading">Как студент:</div>

                @foreach ($students_group as $student_group)
                <ul>
                    <li>  <form>
                            {{ csrf_field() }}
                            <a href="{{ route('group_show',$student_group->id) }}">{{$student_group->name}}</a>
                        </form></li>               
                </ul>
                @endforeach

                <div class="panel-body">

                </div>
            </div>
            <div class="panel panel-default" >
                <div class="panel-heading">Как учитель:</div>


                @foreach ($teachers_group as $teacher_group)
                <ul>
                    <li>  <form>
                            {{ csrf_field() }}

                            <a href="{{ route('group_show',$teacher_group->id) }}">{{$teacher_group->name}}</a>


                        </form>
                        <form method='post' action="{{ route('group_destroy', $teacher_group->id) }}">
                            {{ csrf_field() }}
                            {{method_field('delete')}}                                     
                            <button type="submit" class="btn btn-default bg-danger">
                                <i class="fa fa-trash"></i> Удалить
                            </button>
                        </form>
                    </li>

                </ul>
                @endforeach

                <div class="panel-body">

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
