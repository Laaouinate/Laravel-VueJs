@extends('layouts.app')


@section('content')


	<div class="container" id="app">
		<div class="row">
			<div class="col-md-12">
				<form action="/items" method="post"  enctype="multipart/form-data">

					@csrf

					<div class="form-group">
						<label>Title :</label>
						<input type="text" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label>Description :</label>
						<textarea name="description" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>Picture :</label>
						<input class="form-control" type="file" name="photo">
					</div>

					<div class="form-group">
						<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
					</div>

				</form>
			</div>

		</div>
	</div>




@endsection

