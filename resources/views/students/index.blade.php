@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col s12">
                <h1>Etudiants <a class="btn-floating waves-effect waves-light red" href="{{ URL::action('StudentsController@create')}}"><i class="material-icons">add</i></a></h1>

                <ul class="collapsible" data-collapsible="accordion">
                    @foreach($years as $item)
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{ $item->year }}</div>
                        <div class="collapsible-body">

                            @if(count($item->students) > 0)
                            <table class="highlight">
                                @foreach($item->students as $student)
                                    @include('students.table')
                                @endforeach
                            </table>
                            @else
                                <span>Aucun étudiant renseigné cette année.</span>
                            @endif

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
