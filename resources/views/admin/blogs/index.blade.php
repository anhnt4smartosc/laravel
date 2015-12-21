@extends('admin.layout.app')

@section('content')
    <div class="list-container" id="blogs-list">
        @foreach($blogList as $blog)
            <div class="list-item" id="blog-{{ $blog->id }}">
                {{ $blog->title }}
            </div>
        @endforeach
    </div>
@endsection