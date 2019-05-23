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

                @foreach ($students as $student)
                <ul>
                    <li>{{$student->name}}</li>
                </ul>
                @endforeach

                <div class="panel-body">

                </div>
            </div>
            <div class="panel panel-default" >
                <div class="panel-heading">Как учитель:</div>


                @foreach ($teachers as $teacher)
                <ul>
                    <li>{{$teacher->name}}</li>
                </ul>
                @endforeach

                <div class="panel-body">

                </div>
            </div>

        </div>
        <form method="GET" action="{{url('/{group}/forums/create')}}">
            <div class="forum-group" id="createForum">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"> Создать форум</i> 
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
