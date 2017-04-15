<div class="input-field col s12 {{ $errors->has('year') ? 'has-error' : ''}}">
    {!! Form::text('year', null) !!}
    {!! Form::label('year', 'Année') !!}
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <div class="col soffset-4 col s4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Créer', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
