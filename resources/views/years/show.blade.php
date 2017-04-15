@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>{{ $year->year }}
                    <a class="btn-floating waves-effect waves-light blue" href="{{ URL::action('YearsController@edit', $year->id)}}"><i class="material-icons">edit</i></a>
                    {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['years', $year->id],
                            'style' => 'display:inline'
                        ]) !!}
                    {!! Form::button('<i class="material-icons">delete</i></a>', array(
                            'type' => 'submit',
                            'class' => 'btn-floating waves-effect waves-light red',
                            'onclick'=>'return confirm("Êtes-vous sûr ?")'
                    ))!!}
                    {!! Form::close() !!}</h1>

                <div class="card-panel">
                    <h2>Etudiants</h2>

                    <table class="table">
                        @foreach($year->students as $student)
                            @include ('students.table')
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
