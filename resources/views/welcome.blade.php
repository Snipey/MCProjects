@extends('layout.main')
@section('title')
    Home
@endsection

@section('style')
    <style>
        .hide-bullets {
            list-style: none;
            margin-left: -40px;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')


    <div class="row">

        <div class="col-xs-12">
            @include('partial.slider')



            {{ Auth::getUser('Snioey') }}

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar tempus odio. Maecenas interdum
                nulla sed efficitur facilisis. In hac habitasse platea dictumst. Ut mi mauris, fermentum nec sapien in,
                volutpat porttitor erat. Nunc sed nibh semper, blandit lacus nec, semper mauris. Donec interdum in lacus
                vitae interdum. Vestibulum eget finibus sem. Donec vitae ligula eu est aliquet iaculis in in lectus.
                Duis et quam dapibus, tincidunt dolor vel, accumsan diam. Aenean tincidunt justo at est porttitor, at
                semper mauris pulvinar. Sed blandit malesuada sem. Maecenas velit velit, lacinia at nulla eu, finibus
                dignissim mi. Ut mollis, neque a rutrum semper, ex libero accumsan enim, eget dictum risus enim in urna.
                Nulla mattis ex ac elit placerat, quis ultricies tellus lacinia.
            </p>

            <p>Pellentesque dapibus lectus ut leo semper, id ultricies orci aliquet. Etiam varius lectus a ante semper,
                ut maximus ipsum blandit. Cras venenatis non est eu congue. Donec vehicula, augue sed dictum lacinia,
                sapien neque pretium erat, non sagittis nunc nunc id ipsum. In hac habitasse platea dictumst. Nunc sed
                vestibulum lacus. Nam tellus libero, dapibus eget fermentum sed, blandit vitae lacus. Ut et auctor urna.
                Etiam condimentum mollis libero ut consequat.
            </p>

            <p>Morbi posuere nunc non aliquet blandit. Quisque congue porta enim. Vestibulum et eros arcu. Nulla vitae
                porttitor augue. Vestibulum euismod risus ut lacus porttitor, sed hendrerit nulla convallis. Cras
                laoreet gravida ultricies. Suspendisse magna magna, finibus dapibus sollicitudin nec, semper sed lacus.
                Maecenas vitae vestibulum lectus. Vestibulum id ex eu felis pharetra rutrum. Praesent eget tellus nunc.
                In sagittis imperdiet est, id imperdiet turpis condimentum vitae. Aenean pellentesque justo at orci
                convallis, dignissim luctus sem elementum. Donec blandit, sem eget interdum malesuada, arcu neque
                rhoncus ex, et ultrices elit est eu odio. Morbi a ipsum sit amet justo accumsan accumsan eget non velit.
            </p>

            <p>Duis pretium, erat eu vestibulum consectetur, urna eros auctor justo, sed laoreet arcu diam non enim.
                Suspendisse lobortis, justo quis viverra fringilla, ex ante egestas urna, vitae gravida magna magna vel
                libero. Fusce placerat, est non dignissim tempor, sem odio luctus velit, quis auctor mauris tortor id
                lacus. Nunc vestibulum posuere pulvinar. Nunc in ornare neque. Donec facilisis tellus quis nibh euismod,
                euismod hendrerit tortor placerat. Nullam at commodo lectus, id eleifend quam. Fusce et eros arcu. Ut
                tincidunt tellus ipsum, et blandit ipsum bibendum eget. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Vestibulum nunc neque, ornare sit amet rhoncus et, aliquet in dui. Phasellus sit amet
                libero id tortor elementum tempor.
            </p>

            <p>Suspendisse potenti. Nam neque dui, aliquam in mi id, malesuada iaculis arcu. Vestibulum porttitor turpis
                ut tristique imperdiet. Etiam aliquam dignissim neque, sed semper eros dictum placerat. Suspendisse eget
                eleifend urna. In ultrices sapien non eros aliquam elementum. Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia Curae; Quisque scelerisque, elit sed elementum imperdiet, nunc
                lectus facilisis libero, non placerat ante libero non neque.
            </p></div>
    </div>
@endsection
@section('script')
    <script>
        jQuery(document).ready(function ($) {

            $('#myCarousel').carousel({
                interval: 5000
            });

            $('#carousel-text').html($('#slide-content-0').html());

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function () {
                var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
            });


            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-' + id).html());
            });
        });
    </script>
@endsection