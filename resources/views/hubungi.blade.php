@extends('layout')

@section('content')

<div class="row">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $page_title }}</h3>
  </div>
  <div class="panel-body">

    @if ( Auth::user() )

    {!! Form::open() !!}

      <p>Sila tinggalkan pesanan anda di sini.</p>

      <hr>
      <div class="form-group">
        <label>Subjek</label>
        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        <label>Pesanan</label>
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
      </div>
      <button type="submit" class="btn btn-primary">Hantar Ticket</button>

    {!! Form::close() !!}

    @else

    <div class="alert alert-warning">
        <p>Sila login terlebih dahulu</a>
    </div

    @endif


  </div><!--/.panel-body-->
</div><!--/.panel-->

</div><!--/.col-md-->
</div><!--/.row-->
@endsection
