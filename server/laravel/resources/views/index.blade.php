@extends('common.layout')

@section('index')
    <p>{{ $company_name }}</p>
    @foreach ($blanch_country as $country)
        {{ $country }}<br>
    @endforeach
@endsection