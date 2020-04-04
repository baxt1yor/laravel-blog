@extends('layouts.admin')

@section('content')
    <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Xabarlar
              </header>

              <table class="table table-striped table-advance table-hover">
                @include('admin.alerts.main')
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> To'liq nomi</th>
                    <th><i class="icon_mail_alt"></i> E-manzil</th>
                    <th><i class="icon_calendar"></i> Sana</th>
                    <th><i class="fa fa-send"></i> Xabar</th>
                    <th><i class="fa fa-envelope"> Holat</i></th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach ($items as $item)
                  <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at->format('H:i d/m/Y')}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->status ? 'O`qilgan' : 'O`qilmagan'}}</td>
                    <td>
                        
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <a class="btn btn-primary" href="{{route('admin.feedback.show', ['id' => $item->id ])}}"><i class="fa fa-eye"></i>Ko'rish</a>
                            
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-sort-desc"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">                            
                            <form action="{{route('admin.feedback.delete', ['id' => $item->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button style="width:100%" class="dropdown-item " type="submit"><i class="fa fa-trash-o"></i> O'chirish</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </section>
          </div>
@endsection