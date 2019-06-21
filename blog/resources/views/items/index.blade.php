@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
				
				<div class="pull-right">
					<a href="{{ url('items/create')}}" class="btn btn-success">New Items</a>
				</div>

				<table class="table">
					<head>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Date</th>
						</tr>
					</head>
					<body>
						@foreach($items as $item)
						<tr>
							<td>{{ $item->title }}</td>
							<td>{{ $item->description }}</td>
							<td>{{ $item->created_at }}</td>
						</tr>
						@endforeach
					</body>
				</table>
		</div>
	{!! $items->links() !!}
	</div>
</div>

@endsection

@section('javascripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
@endsection