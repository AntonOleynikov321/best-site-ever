@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel-body">
    <!-- Форма новой группы -->
    <form method='post' action="">
        {{ csrf_field() }}
        {{method_field('put')}}                                     
        <div class="form-group">
            <label for="task" class="col-sm-3 control_label"></label>
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control" value="" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" clas="btn btn-default bg-succes">
                    <i class="fa fa-plus"></i> Создать группу
                </button>
            </div>
    </form>
</div>
@endsection
