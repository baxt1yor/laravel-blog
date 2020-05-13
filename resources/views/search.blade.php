@extends('layouts/app', ['title' => 'Qidiruv'])

@section('content')
<section class="section section-sm section-first bg-default section-style-2 text-md-left">
    <div class="container">   
      <form action="{{route('search')}}" method="get">
        <div class="form-group">
            <div class="input-group mb-3">
            <input type="search" name="key" class="form-control" value="{{ request()->get('key') }}" placeholder="Qidiruv " id="">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                      <span><i class="fa fa-search"></i></span>
                    </button>
                </div>
            </div>
        </div>
      </form>
      
    </div>
    @if (!count($results))
        <div class="alert alert-primary">
        Sizning "{{ request()->get('key')}}" so`rov bo`yicha hech nima topilmadi.
        </div>
    @endif
    <div class="container">
      <div class="row row-50">
      @foreach ($results as $item)
        <div class="col-lg-3">
          <ul class="list-xl box-typography">
            <li>
              <h4>{{$item->created_at}}</h4>
              <img src="storage/{{$item->img}}" alt="" class="img-responsive" style="border-radius: 5px;" >
              <h3>{{$item->title}}</h3>
              <h5><a href="{{route('blog.more', ['id' => $item->id ])}}"> {{$item->short}}</a></h5>
              <span class="fas fa-eye"> {{$item->view}}</span>
            </li>
          </ul>
        </div>
      @endforeach
        
      </div>
      
      {{$link}}
    </div>
  </section>
@endsection