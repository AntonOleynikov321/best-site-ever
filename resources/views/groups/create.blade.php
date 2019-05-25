@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой группы -->
    <table class="table table-striped task-table">
        <tr> 
        <form action="{{route('group_store', $groups->id)}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

                      
                <td>       
                    <div class="form-group">         
                        <div class="col-sm-6">
                            <input type="text" name="name" id="group-name" class="form-control">
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Кнопка добавления группы -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default bg-success">
                                <i class="fa fa-plus"></i> Создать группу
                            </button>
                        </div>
                    </div>
                </td>
       

        </form>
             </tr> 
    </table>
</div>
@endsection
