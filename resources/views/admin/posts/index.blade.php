@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Maqolalar
      </header>
      
      <table class="table table-bordered">
       @include('admin.alerts.main')
        <thead>
            <tr>
                <th><i class="icon_profile"></i> Sarlavha</th>
                <th>Qisqacha</th>
                <th><i class="icon_cogs"></i> Amallar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($blogs as $blog)
          <tr>
            <td style="width:400px;text-align:center;">{{$blog->title}}</td>
            <td style="width:400px;text-align:center;">{{$blog->short}}</td>
            
            <td>
              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a target="_blank" class="btn btn-primary" href="{{route('blog.more', ['id' => $blog->id ])}}"><i class="fa fa-eye"></i>Ko'rish</a>
                
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-sort-desc"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a  class="" href="{{route('admin.posts.edit', ['id' => $blog->id])}}">   <i style="text-align:center" class="fa fa-pencil"></i> Tahrirlash</a>
                    
                    <form action="{{route('admin.posts.destroy', ['id' => $blog->id])}}" method="POST">
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
        {{$blogs->links()}}
      </table>
      
    </section>
    <a class="btn bnt-sm btn-primary"  href="{{route('admin.posts.create')}}">Yaratish</a>
  </div>
@endsection