@extends('layouts.app')


@section('content')



	<div class="container" id="app">

		<div class="row">

			<div class="col-md-12">

				<form action="/items" method="post"  enctype="multipart/form-data">

					@csrf

					<div class="form-group">

						<label>Title :</label>

						<input type="text" name="title" class="form-control @if($errors->get('title')) is-invalid @endif" value="{{ old('title')}}" >

						@if($errors->get('title'))

							@foreach($errors->get('title') as $message)

								<li>{{ $message }}</li>

							@endforeach	

						@endif

					</div>

					<div class="form-group">

						<label>Description :</label>

						<textarea name="description" class="form-control @if($errors->get('description')) is-invalid @endif">{{ old('description')}}</textarea>


						@if($errors->get('description'))

							@foreach($errors->get('title') as $message)

								<li>{{ $message }}</li>

							@endforeach	

						@endif

					</div>

					<div class="form-group">

						<label>Picture :</label>

						<input class="form-control @if($errors->get('photo')) is-invalid @endif" type="file" name="photo" value="{{ old('photo')}}">

						
						@if($errors->get('photo'))

							@foreach($errors->get('title') as $message)

								<li>{{ $message }}</li>

							@endforeach	

						@endif

					</div>

					<div class="form-group">

						<input type="submit" value="Enregistrer" class="form-control btn btn-primary">

					</div>

				</form>

			</div>

		</div>

	</div>




@endsection

