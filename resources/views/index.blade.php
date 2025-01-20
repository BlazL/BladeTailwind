@extends('base')

@section('sidebar')
  <sidebar class="bg-red-400">
    {!! do_action('get_sidebar') !!}
  </sidebar>
@endsection
