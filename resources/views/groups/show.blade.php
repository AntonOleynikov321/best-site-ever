@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Добро пожаловать в группу : </h2>
            <div class="panel panel-default">

                <div class="panel-heading"><h4>{{$group->name}}</h4></div>
                <div class="panel-body">текст или чат</div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a href="/">
                        <button type="button" class="btn btn-primary bg-danger">
                            <i class="fa fa-primary"></i> Назад
                        </button> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection