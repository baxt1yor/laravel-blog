
@extends('layouts/admin')
@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Oshpaz ko`rinishi
      </header>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>To`liq ismi</th>
              <th>Rasm</th>
              <th>Mutahasisi</th>
              <th>Ish boshlagan vaqti</th>
              <th>Google</th>
              <th>Instagram</th>
              <th>Facebook</th>
              <th>Twitter</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td><img width="100px" src="/storage/{{$cook->picture}}" alt="{{$cook->full_name}}"></td>
              <td>{{$cook->full_name}}</td>
              <td>{{$cook->special}}</td>
              <td>{{$cook->start_date}}</td>
              <td>{{$cook->google}}</td>
              <td>{{$cook->instagram}}</td>
              <td>{{$cook->facebook}}</td>
              <td>{{$cook->twitter}}</td>
            </tr>
          </tbody>
        </table>
      </div>

    </section>
  </div>
@endsection