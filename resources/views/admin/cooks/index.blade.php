@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h3>Oshpazlar ro`yxati</h3>
        </header>
        
      <table class="table table-bordered">
       @include('admin.alerts.main')
        <thead>
          <tr>
            <th><i class="icon_profile"></i> To`liq ismi</th>
            <th><i class="icon_mail_alt"></i> Email</th>
            <th><i class="icon_calendar"></i> Start Date</th>
            <th><i class="icon_cogs"></i> Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($cooks as $cook)
          <tr>
            <td style="">{{$cook->full_name}}</td>
            <td style="">{{$cook->start_date}}</td>
            <td>{{$cook->google}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a  class="btn btn-primary" href="{{route('admin.cooks.show', $cook->id)}}"><i class="fa fa-eye"></i>Ko'rish</a>
                
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-sort-desc"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a  class="" href="{{route('admin.cooks.edit', ['id' => $cook->id])}}">   <i style="text-align:center" class="fa fa-pencil"></i> Tahrirlash</a>
                    
                    <form action="{{route('admin.cooks.destroy', ['id' => $cook->id])}}" method="POST">
                      @csrf
                      @method('delete')
                     <button class="" style="width:100%" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i> O'chirish</button>
                  </form>
                  </div>
                </div>
              </div> 
            </td>
          </tr>
          @endforeach
          
        </tbody>
        {{$cooks->links()}}
      </table>
    </section>
    <a class="btn bnt-sm btn-primary float-right"  href="{{route('admin.cooks.create')}}">Yaratish</a>
  </div>
@endsection