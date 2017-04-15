@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col s12">
                <div class="panel panel-default">
                    <div class="panel-heading">media {{ $media->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/medias') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/medias/' . $media->id . '/edit') }}" title="Edit media"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['medias', $media->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete media',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $media->id }}</td>
                                    </tr>
                                    <tr><th> Model </th><td> {{ $media->model }} </td></tr><tr><th> Model Id </th><td> {{ $media->model_id }} </td></tr><tr><th> Url </th><td> {{ $media->url }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
