@extends('layout.main')

@section('title')
    Project | Create
@endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            {!! Form::open([ 'route' => 'projects.store' ]) !!}
                    <!--- Title Field --->
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <!--- Description Field --->
            <div class="form-group">
                {!! Form::label('projectcontent', 'Description:') !!}
                {!! Form::textarea('projectcontent', null, ['class' => 'form-control']) !!}

            </div>


            <!--- Create Field --->
            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>


        <div class="col-md-3">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection