<div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
    {!! Form::label('model', 'Model', ['class' => 'col s4 control-label']) !!}
    <div class="col s6">
        {!! Form::text('model', null, ['class' => 'form-control']) !!}
        {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('model_id') ? 'has-error' : ''}}">
    {!! Form::label('model_id', 'Model Id', ['class' => 'col s4 control-label']) !!}
    <div class="col s6">
        {!! Form::number('model_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('model_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
    {!! Form::label('url', 'Url', ['class' => 'col s4 control-label']) !!}
    <div class="col s6">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col soffset-4 col s4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
