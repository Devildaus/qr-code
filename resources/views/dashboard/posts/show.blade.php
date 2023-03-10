@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h2 class="mb-3" style="text-align:center;">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" return onclick="return confirm('Apakah Kamu Yakin?')">
                    <span data-feather="x-circle"></span> Delete
                </button>
            </form>

            {{ $post->body }}


        </div>
    </div>
</div>
@endsection