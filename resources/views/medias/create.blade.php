@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col s12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New media</div>
                    <div class="panel-body">
                        <a href="{{ url('/medias') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/medias', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('medias.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
