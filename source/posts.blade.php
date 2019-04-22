@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <ul class="post-list">
        @forelse ($posts->sortBy('title') as $post)
            <li class="post-item">
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ date('M j, Y', $post->date) }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
