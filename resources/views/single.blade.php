@extends('layout')

@section('content')
  <main>
    <h1 class="font-semibold">
      {!! the_title() !!}
    </h1>

    {!! the_content() !!}
  </main>
@endsection