@extends('layout')

@section('sidebar')
    <sidebar class="flex mt-8">
        <div class="space-y-4">
            {!! do_action('get_sidebar') !!}
        </div>
    </sidebar>
@endsection
