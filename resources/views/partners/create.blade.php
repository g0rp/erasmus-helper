@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3 card-panel">
                <h1><a href="{{ URL::action('PartnersController@index') }}" class="btn-floating waves-effect waves-light grey" title="Retour"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    Nouveau partenaire</h1>
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                {!! Form::open(['url' => '/partners', 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('partners.form')

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
