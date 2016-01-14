<!DOCTYPE html>
<html>
    <head>
        <title>Shorty</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
	<div class="container-fluid">
		<div class="jumbotron">
		  <h1>Shorty</h1>
		  <p>Looooonnnnngggg URL made short.</p> 
		</div>
		<div class="row">
		  <div class="col-sm-12">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			@if(isset($short_url) && isset($actual_url))
			<div class="alert alert-success">
			  Congratulation! You have successfully shorten URL <strong>{{ substr($actual_url,0,100) }}{{ (strlen($actual_url)>100) ? '...' : '' }}</strong> to <strong>{{ url('/') }}/{{ $short_url }}</strong>
			</div>
			@endif
			<form role="form" action="{{ action('ShortenUrlController@addUrl') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
				  <label for="url">URL:</label>
				  <input type="text" class="form-control" id="url" name="url" placeholder="Contoh: http://juhara.com" value="{{ old('url') }}">
				</div>
			   <button type="submit" class="btn btn-primary">Shorten URL</button>
			</form> 	
		  </div>
		</div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>			
    </body>
</html>
