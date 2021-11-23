@extends('templates.layout')
@section('title', 'Blog')
@section('content')
<div>
    <ul>
        @foreach($posts as $post)
            {{-- @if($post->published ) --}}
            <li>
                <a href="{{ $post->link }}">
                    {{ $post->title }} - 
                </a>
                <p>{{ $post->content }}</p>
            </li>
            {{-- @endif --}}
        @endforeach

        {{ $posts->links() }}
    </ul>
</div>
@endsection