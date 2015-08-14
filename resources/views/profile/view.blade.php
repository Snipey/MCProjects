@extends('layout.main')
@section('content')
        <!--<div class="row">
        <div class="col-md-12 text-center">
            <h2>Bootstrap User Profile Template</h2>


            Crafted by <a href="http://www.designbootstrap.com/" target="_blank" >DesignBootstrap</a>
            <br />
            <br />

        </div>
    </div>-->
<!-- USER PROFILE ROW STARTS-->
<div class="row">
    <div class="col-md-3 col-sm-3">

        <div class="user-wrapper">
            <img src="http://placehold.it/400x400" class="img-responsive"/>

            <div class="description">
                <a href="#" class="btn btn-default btn-sm pull-right"> <i class="glyphicon glyphicon-plus"></i> &nbsp;Follow</a>

                <h4> {{ $profile->name }}</h4>
                <h5><strong> Software Developer </strong></h5>

                <p>
                    {{ $profile->profile->snippet }}
                </p>
                <hr/>
                @if($profile->profile->skype)
                    <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                    <div id="SkypeButton_Call_{{ $profile->profile->skype }}_1">
                        <script type="text/javascript">
                            Skype.ui({
                                "name": "chat",
                                "element": "SkypeButton_Call_{{ $profile->profile->skype }}_1",
                                "participants": ["{{ $profile->profile->skype }}"],
                                "imageSize": 24
                            });
                        </script>
                    </div>
                @endif

                @if($profile->profile->twitter)

                    <a href="http://twitter.com/{{ $profile->profile->twitter }}" class="btn btn-social btn-twitter">
                        <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-9 col-sm-9  user-wrapper">
        <div class="description">
            <h3> Biography : </h3>
            <hr/>
            <p>
                {{ $profile->profile->bio }}
            </p>
            <br>


        </div>

    </div>
</div>
<!-- USER PROFILE ROW END-->

@endsection