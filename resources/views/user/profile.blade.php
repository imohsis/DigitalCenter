@extends('layouts.app')

<style type="text/css">
	.profile-img{
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
	}

</style>

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img  class="profile-img" src="C:\Users\HP\Desktop\check\IMG-20151030-WA001.png">
				<h1>{{ $user->name }}</h1>
				<h5>{{ $user->email }}</h5>
				<h5>{{ $user->dob->format('l j F Y') }} ({{$user->dob->age}})</h5>
                 
             
				<button class="btn btn-success">Follow </button>
			</div>
		</div>

	</div>

</div>

@endsection