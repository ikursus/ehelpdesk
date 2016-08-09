@extends('layout')

@section('content')

<div class="row">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Borang Hubungi</h3>
  </div>
  <div class="panel-body">

    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Daftar Masuk</button>
    </form>

  </div><!--/.panel-body-->
</div><!--/.panel-->

</div><!--/.col-md-->
</div><!--/.row-->
@endsection
