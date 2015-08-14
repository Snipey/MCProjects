@extends('layout.main')

@section('title')
    Project | Edit
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
@endsection
@section('content')

    <form action="/projects/{{$project->slug}}/photos" method="POST" class="dropzone">
        {{ csrf_field() }}
    </form>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
@endsection