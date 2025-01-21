@extends('sendportal::layouts.app')

@section('title', $campaign->name)

@section('heading')
    {{ $campaign->name }}
@endsection

@section('content')

    @include('sendportal::campaigns.reports.partials.nav')

    @include('sendportal::campaigns.partials.preview')


@endsection


@push('js')

@endpush
