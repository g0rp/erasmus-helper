<div class="input-field col s12 {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! Form::label('name', 'Nom', ['class' => 'col s4 control-label']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="input-field col s12 {{ $errors->has('country_id') ? 'has-error' : ''}}">
    {!! Form::label('country_id', 'Pays', ['class' => 'col s4 control-label']) !!}
    {!! Form::select('country_id', $countries, ['class' => 'form-control']) !!}
    {!! $errors->first('country_id', '<p class="help-block">:message</p>') !!}
</div><div class="input-field col s12 {{ $errors->has('city') ? 'has-error' : ''}}">
    {!! Form::label('city', 'Ville', ['class' => 'col s4 control-label']) !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
</div>

<div class="input-field">
    <div class="col soffset-4 col s4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Créer', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
