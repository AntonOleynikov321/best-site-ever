@extends('layouts.app')
@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Создать новый форум</div>

                    <div class="panel-body">
                        <form method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Описание:</label>
                                <input type="text" class="form-control" id="description" name="description"
                                       value="{{ old('description') }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>

                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
