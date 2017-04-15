@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col s12">
                <div class="panel panel-default">
                    <div class="panel-heading">partner {{ $partner->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/partners') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/partners/' . $partner->id . '/edit') }}" title="Edit partner"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['partners', $partner->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete partner',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $partner->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $partner->name }} </td></tr><tr><th> Country Id </th><td> {{ $partner->country_id }} </td></tr><tr><th> City </th><td> {{ $partner->city }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
