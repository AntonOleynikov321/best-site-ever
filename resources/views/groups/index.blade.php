@extends('layouts.app')
@section('content')
    <div class="form-group" id="createGroup">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <a href="{{ url('/create') }}">
                    <i class="fa fa-plus"> Создать</i>
                </a>                
            </button>
        </div>
    </div>







<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="groups">
            <div class="panel panel-default" >
                <div class="panel-heading">Состою:</div>
                <ul>
                    <li></li>
                </ul>
                <div class="panel-body">                    
                </div>
            </div>
            <div>
                @foreach ($groups as $group)
                <ul>
                    <li>{{$group->name}}</li>
                </ul>
                @endforeach
            </div>

            <div class="panel panel-default" >
                <div class="panel-heading">Мои:</div>
                <ul>
                    <li></li>
                </ul>            
                <div class="panel-body">                   
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection
