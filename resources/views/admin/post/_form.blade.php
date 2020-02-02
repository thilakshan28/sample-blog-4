<div class="form-group">
    {!! Form::label('title', 'Title'); !!}
    {!! Form::text('title', null, ['class' => ['form-control', $errors->get('title') ? 'is-invalid' : ''] ]); !!}
    @error('title')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('editor', 'Content'); !!}
    {!! Form::textarea('content', null, ['class' => ['form-control', $errors->get('content') ? 'is-invalid' : ''], 'id'
    =>
    'editor' ]); !!}
    @error('content')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>