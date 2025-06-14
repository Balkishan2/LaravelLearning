@extends('layouts.masterLayout')
@section('content')
    <h1>About</h1>
    @verbatim
    {{ mess }}
    @endverbatim
    @endsection
@push('scripts')
var mess = "hello world";
    
@endpush