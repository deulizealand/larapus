<div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nama', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-4">
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>