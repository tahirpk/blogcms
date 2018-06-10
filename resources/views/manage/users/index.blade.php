@extends ('layouts.manage')

@section ('content')
<div class="container">
	<div class="columns">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="column">
			<a href="{{ route('users.create')}}" class="button is-primary"><i class="fa fa-user-ad m-r-10"></i>Create User</a>
		</div>
    </div>
</div>
@endsection