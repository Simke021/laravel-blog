@extends('main')

@section('title', '| Create New Post')
<!-- Parsley css -->
@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Create New Post</h1>
			<hr>
			
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191', 'minlength' => '10')) }}

				{{ Form::label('body', 'Post Body:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'minlength' => '100')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px;')) }}
			{!! Form::close() !!}
		</div>
	</div><!-- End of row -->

@endsection
<!-- Parsley script -->
@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection