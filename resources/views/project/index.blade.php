@extends('layout.main')
@section('title', 'Projects | Browse')
@section('style')
    <style>
        .portfolio-item {
            margin-bottom: 25px;
        }

        .thumbnail {
            position: relative;
            overflow: hidden;

        }

        img {

        }

        .caption {
            position: absolute;
            top: 0;
            right: 0;
            background: rgba(90, 90, 93, 0.6);
            width: 100%;
            height: 100%;
            display: none;
            text-align: center;
            color: #fff !important;

        }

        .pagination {
            align-content: center;
        }

    </style>
@endsection
@section('content')


    <div class="row">
        @foreach ($posts as $key => $post)
            <div class="portfolio-item col-xs-4">
                <div class="thumbnail">
                    <div class="caption">

                        <p>{{ str_limit($post->content) }}</p>

                        <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
                    </div>
                    <img src="{{ $post->photos }}"/>
                </div>
                <center><a href="/projects/{{ $post->slug }}" class="">{{ str_limit($post->title, 34) }}</a></center>

            </div>


        @endforeach
    </div>
    <center>{!! $posts->render() !!}</center>


@endsection
@section('script')
    <script>
        $("[rel='tooltip']").tooltip();

        $('.thumbnail').hover(
                function () {
                    $(this).find('.caption').slideDown(250); //.fadeIn(250)
                },
                function () {
                    $(this).find('.caption').slideUp(250); //.fadeOut(205)
                }
        );
    </script>
@endsection