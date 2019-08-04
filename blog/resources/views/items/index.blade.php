@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row">

		<div class="col-md-12">

				@if(session()->has('success'))

				<div class="alert alert-success" role="alert">

					{{ session()->get('success')}}
 	
				</div>

				@endif
				
				<div class="pull-right">

					<a href="{{ url('items/create')}}" class="btn btn-success">New Items</a>

				</div>
                <liste></liste>
        </div>

    </div>

</div>
@endsection
