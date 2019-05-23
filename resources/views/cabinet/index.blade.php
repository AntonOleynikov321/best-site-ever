@extends('layouts.app')
@section('content')
<form>
    <div class="form-group" id="createGroup">
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
                    <li>  <p>{{$student_group->name}}</a><form action="{{route('')}}">
                            {{ csrf_field() }}
                            <>
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


                        </form></li>
                </ul>
                @endforeach

                <div class="panel-body">

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
