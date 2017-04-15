@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3">
                <h1><a href="{{ URL::action('StudentsController@index') }}" class="btn-floating waves-effect waves-light grey" title="Retour"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Modification</h1>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($student, [
                            'method' => 'PATCH',
                            'url' => ['/students', $student->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('students.form', ['submitButtonText' => 'Valider'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
