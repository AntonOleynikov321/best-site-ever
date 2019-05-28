@extends('layouts.app')
@section('content')
<div class="panel-body">
    @include('common.errors')
    <form action="{{ route('materials_store',$group->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="materials" class="col-sm-3 control-label">Лекция</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="materials-name" class="form-control">
                <textarea type="text" name="text" id="materials-text" class="form-control"></textarea>
                <div>
                    <input type="file" name="file_name">             
                </div>
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