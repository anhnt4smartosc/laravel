
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm {{ $name }}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ App::make('url')->to('/') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ App::make('url')->to('/blog') }}">View All Nerds</a></li>
            <li><a href="{{ App::make('url')->to('/blog/create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <h1>Create a Blog</h1>

    <!-- if there are creation errors, they will show here -->
    {{--{!! Html::ul($errors->all()) !!}--}}

    {!! Form::open(array('url' => 'blog')) !!}


    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
        <p class="errors">{{ $errors->first('title') }}</p>
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', Input::old('description'), array('class' => 'form-control')) !!}
        <p class="errors">{{ $errors->first('description') }}</p>
    </div>

    {!! Form::submit('Create Blog!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

</div>
</body>
</html>