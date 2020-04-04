@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <section class="panel">
      <header class="panel-heading">
        Xabarlarni o'qish
      </header>
      <table class="table table-striped">
        <tbody>
            <tr>
                <th>To'liq ismi</th>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <th>E-manzil</th>
                <td>{{$item->email}}</td>
            </tr>
            <tr>
                <th>Mavzu</th>
                <td>{{$item->subject}}</td>
            </tr>
            <tr>
                <th>Xabar</th>
                <td>{{$item->message}}</td>
            </tr>
            <tr>
                <th>Sana</th>
                <td>{{$item->created_at->format('H:i d/m/y')}}</td>
            </tr>
        </tbody>
      </table>
    </section>
  </div>
@endsection