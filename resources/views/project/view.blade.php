@extends('layout.main')

@section('title')
    Project | View
@endsection

@section('style')
    <style>
        .carousel>img{
            width: 100%;
            height: 500px;
        }
    </style>
@section('content')
    <div class="row">

        <div class="col-md-12">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach ($post->photos as $key => $photo)
                        @if ($key==0)
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        @elseif ($key>0)
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}"></li>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach ($post->photos as $key => $photo)
                        @if ($key==0)

                        <div class="item active">
                            <img src="{{ $photo->path }}" alt="...">

                            <div class="carousel-caption">

                            </div>
                        </div>
                        @elseif ($key>0)
                            <div class="item">
                                <img src="{{ $photo->path }}" alt="...">

                                <div class="carousel-caption">

                                </div>
                            </div>
                        @endif
                    @endforeach



                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="thumbnail">

                <div class="caption-full">
                    <hr>
                    <h4>{{ $post->title }}
                    </h4>
                    <span class="label label-default">{{ $post->published_at->format('M jS, Y') }}</span>
                    <hr>
                    {!! nl2br(e($post->content)) !!}


                </div>
                <div class="ratings">

                </div>
            </div>

            <div class="well">

                <div class="text-right">
                    <a class="btn btn-success">Leave a Review</a>
                </div>


                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">15 days ago</span>

                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection