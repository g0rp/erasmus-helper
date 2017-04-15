<div class="input-field  col s12 {{ $errors->has('firstname') ? 'has-error' : ''}}">
    {!! Form::text('firstname', null, ['class' => 'validate']) !!}
    {!! Form::label('firstname', 'Prénom') !!}
    {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
</div>

<div class="input-field  col s12 {{ $errors->has('lastname') ? 'has-error' : ''}}">
    {!! Form::text('lastname', null, ['class' => 'validate']) !!}
    {!! Form::label('lastname', 'Nom') !!}
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>

<div class="input-field  col s12 {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::text('email', null, ['class' => 'validate']) !!}
    {!! Form::label('email', 'Email') !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="input-field col s12 {{ $errors->has('year_id') ? 'has-error' : ''}}">
    {!! Form::select('year_id', $years, null) !!}
    {!! Form::label('year_id', 'Année') !!}
    {!! $errors->first('year_id', '<p class="help-block">:message</p>') !!}
</div>

{!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Créer', ['class' => 'btn btn-primary']) !!}
{{ HTML::linkAction("StudentsController@index", "Annuler", null, ["class" => "btn grey"]) }}