<div class="form-group">
    {!! Form::label('firstname', 'Firstname'); !!}
    {!! Form::text('firstname', null, ['class' => ['form-control', $errors->get('firstname') ? 'is-invalid' : ''] ]); !!}
    @error('firstname')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('lastname', 'Lastname'); !!}
    {!! Form::text('lastname', null, ['class' => ['form-control', $errors->get('lastname') ? 'is-invalid' : ''] ]); !!}
    @error('lastname')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('phone_no', 'Phone no'); !!}
    {!! Form::text('phone_no', null, ['class' => ['form-control', $errors->get('phone_no') ? 'is-invalid' : ''] ]); !!}
    @error('phone_no')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Email'); !!}
    {!! Form::email('email', null, ['class' => ['form-control', $errors->get('email') ? 'is-invalid' : ''] ]); !!}
    @error('email')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('role', 'Role'); !!}
    {!! Form::select('role',[''=>'--Choose User Role--']+['Editor'=>'Editor']+['Publisher'=>'Publisher']); !!}
    @error('role')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('password', 'Password'); !!}
    {!! Form::password('password', null, ['class' => ['form-control', $errors->get('password') ? 'is-invalid' : ''] ]); !!}
    @error('password')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('password-confirm', 'Confirm password'); !!}
    {!! Form::password('password-confirm', null, ['class' => ['form-control', $errors->get('password-confirm') ? 'is-invalid' : ''] ]); !!}
    @error('password-confirm')
    <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>



