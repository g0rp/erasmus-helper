@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3">
                <h1><a href="{{ URL::action('StudentsController@index') }}" class="btn-floating waves-effect waves-light grey" title="Retour"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    Nouvel étudiant</h1>
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/students', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('students.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
