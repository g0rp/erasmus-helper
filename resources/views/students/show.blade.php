@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>{{ $student->firstname }} {{ $student->lastname }}</h1>

                <a href="{{ url('/students') }}" title="Retour"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                <a href="{{ url('/students/' . $student->id . '/edit') }}" title="Modifier"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['students', $student->id],
                    'style' => 'display:inline'
                ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Supprimer étudiant',
                            'onclick'=>'return confirm("Êtes-vous sûr ?")'
                    ))!!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
