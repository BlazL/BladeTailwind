@extends('base')

@section('sidebar')
  <sidebar class="bg-gray-40">
    {!! do_action('get_sidebar') !!}
  </sidebar>
@endsection
