@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
               @if (Session::has('alert-success'))

                <div class="alert alert-success" role="alert">
                {{Session::get('alert-success')}}
                 </div>
               @endif
                <table class="table">
  <thead>
    <tr>
      <th scope="col">title </th>
      <th scope="col">description</th>
      <th scope="col">completed</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
