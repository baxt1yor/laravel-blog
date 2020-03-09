@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Maqolalar
      </header>
 
      <table class="table table-bordered">
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
            <td style="text-align:center;">
              <div class="btn-group">
                <div class="pull-right"> 
                <form action="{{route('admin.posts.destroy', ['id' => $blog->id])}}" method="POST">
                    @csrf
                    @method('delete')
                   <button class="btn btn-danger btn-group-sm" type="submit"><i class="icon_close_alt2"></i></button>
                </form>
                </div>
                <div class="pull-right">
                <a class="btn btn-primary btn-group-sm " type="submit" href="{{route('admin.posts.edit', ['id' => $blog->id])}}"><i class="glyphicon glyphicon-pencil"></i></a>
                </div>
                <div class="pull-right">
                <a class="btn btn-success " href="{{route('admin.posts.show', ['id' => $blog->id ])}}"><i class="fa fa-eye"></i></a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a class="btn btn-sm btn-primary float-right" href="{{route('admin.posts.create')}}">Yaratish</a>
    </section>
  </div>
@endsection