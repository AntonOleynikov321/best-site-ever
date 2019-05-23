@extends('layouts.app')

@section('content')

<form action="{{route('invite_student', 2)}}" method="POST">
    <input type="text" name='login' placeholder="enter login"/>
    <button type="submit" class="btn btn-default"> 
	<i class="fa fa-plus"></i> 
    </button>
</form>

@endsection
