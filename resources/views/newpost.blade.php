@extends('layouts.app')
@section('content')


<div class="row mx-2">
	<div class="container">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Post Questions</h6>
			</div>
			<div class="card-body">
				<div class="container mx-1">
					<form action="{{ route('post') }}" method="POST" class="form">
						@csrf
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control">
							<br>
							<label>Body</label>
							<textarea name="body" class="form-control"></textarea>
						</div>
						<button class="btn btn-primary" style="float: right;">Post</button>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>


@endsection