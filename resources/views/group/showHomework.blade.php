@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading"><h3>{{$homework->name}}</h3>
            </div>
                <div class="panel-body">
                    <p>{{$homework->text}}</p>
                <p>
                <p style='color:red'>Дата окончания: {{$homework->finish}}</p>
                </div>
            </div>
            <a href="{{route('group.show')}}"><button class="btn btn-info"><i class="fa fa-arrow-left"></i> Назад</button></a>
        </div>
@endsection
