@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col s12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit country #{{ $country->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/countries') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($country, [
                            'method' => 'PATCH',
                            'url' => ['/countries', $country->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('countries.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
