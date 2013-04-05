@layout('master')

@section('container')
	<h1>URL-shortener</h1>

	{{ Form::open('/') }}
		{{ Form::text('url') }}
		{{ Form::submit('Shorten') }}
	{{ Form::close() }}
@endsection