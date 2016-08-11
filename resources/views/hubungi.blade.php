@extends('layout')

@section('content')

<div class="row">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $page_title }}</h3>
  </div>
  <div class="panel-body">

    <form>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama Anda...">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Email Anda...">
      </div>
      <div class="form-group">
        <label>Telefon</label>
        <input type="text" class="form-control" placeholder="Telefon Anda...">
      </div>
      <hr>
      <div class="form-group">
        <label>Subjek</label>
        <input type="text" name="subjek" class="form-control" placeholder="Nama Anda...">
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="content" class="form-control" placeholder="Nama Anda...">
      </div>
      <button type="submit" class="btn btn-primary">Hantar Ticket</button>
    </form>

  </div><!--/.panel-body-->
</div><!--/.panel-->

</div><!--/.col-md-->
</div><!--/.row-->
@endsection
