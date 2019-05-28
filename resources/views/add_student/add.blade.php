@extends('layouts.app')

@section('content')

<form action="{{route('invite_student', 1)}}" method="POST">
    {{csrf_field()}}
    <input type="text" name='login' placeholder="enter login"/>
    <button type="submit" class="btn btn-default"> 
	<i class="fa fa-plus"></i> 
    </button>
</form>

@endsection
