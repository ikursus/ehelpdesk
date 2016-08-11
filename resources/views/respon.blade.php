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

    @foreach( )
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Perkara</th>
          <th>Detail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Subjek</td>
          <td></td>
        </tr>
        <tr>
          <td>Pesanan</td>
          <td></td>
        </tr>
        <tr>
          <td>Respon</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    @endforeach

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
