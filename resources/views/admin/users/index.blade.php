@extends('admin/layout')

@section('content')

  <h1>Senarai Users</h1>

  <a href="{{ url('admin/users/tambah') }}" class="btn btn-primary">Tambah User</a>

  <hr>

  <table class="table table-bordered table-hover">
    <thead>
        <tr class="active">
          <th>Username</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
  @foreach( $users as $user )
  <tr>

    <td>{{ $user->username }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ ucwords( $user->role ) }}</td>
    <td>
      <a href="{{ url('admin/users/' . $user->id) }}" class="btn btn-xs btn-info">Kemaskini</a>
      <button class="btn btn-xs btn-danger">Hapus</button>
    </td>

  </tr>
  @endforeach
  </tbody>
</table>

  {!! $users->render() !!}

@endsection
