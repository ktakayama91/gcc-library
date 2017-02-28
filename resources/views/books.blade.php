@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($books) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>BOOKS</h3>
      </div>

      <div class="panel-body">
          @foreach ($books as $book)
          <div class="col-md-6">
            <div class="thumbnail">
              <h1>{{$book->name}}</h1>
              <h2>{{$book->author}}</h2>
              <div class="caption">
                Some text would be here!
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
    @endif
</div>
@endsection
