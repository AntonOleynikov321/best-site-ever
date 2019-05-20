@extends('layouts.app')
@section('content')
<div class="panel-body">
    @include('common.errors')
<form action="{{ url('/store') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="group" class="col-sm-3 control-label">Название группы</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="groups-name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary bg-danger">
                    <i class="fa fa-primary"></i> Сохранить
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
