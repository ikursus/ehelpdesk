@extends('admin/layout')

@section('content')

<h1>Tambah User</h1>

<hr>

{!! Form::open() !!}

  <div class="form-group">
    <label>Username</label>
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>Email</label>
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>Name</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>Password</label>
    {!! Form::password('password', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>Password Confirmation</label>
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>Role</label>
    {!! Form::select('role', $dropdown, null, ['class' => 'form-control']) !!}
  </div>
  <button type="submit" class="btn btn-primary">Daftar User</button>

{!! Form::close() !!}

@endsection
