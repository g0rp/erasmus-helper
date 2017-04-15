@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Années <a class="btn-floating waves-effect waves-light red" href="{{ URL::action('YearsController@create')}}"><i class="material-icons">add</i></a></h1>
                <table class="bordered">
                    <thead>
                        <tr>
                            <th>Année</th><th class="right-align">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($years as $item)
                        <tr>
                            <td>{{ $item->year }}</td>
                            <td class="right-align">
                                <a href="{{ url('/years/' . $item->id) }}" title="View year"><button class="btn"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                <a href="{{ url('/years/' . $item->id . '/edit') }}" title="Edit year"><button class="btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/years', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                            'type' => 'submit',
                                            'class' => 'btn red',
                                            'title' => 'Supprimer une année',
                                            'onclick'=>'return confirm("Êtes-vous sûr ?")'
                                    )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
