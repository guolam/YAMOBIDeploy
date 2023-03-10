@extends('layouts.app')

@section('content')
    @isset($stocks)
        <div id="stock" data-stocks='{{ $stocks }}'></div>
    @endisset
@endsection