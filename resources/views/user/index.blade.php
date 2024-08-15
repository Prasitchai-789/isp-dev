@extends('layouts.master')

@vite([ 'resources/js/apexchart.js'])


@section('content')

@livewire('user.user-index')


@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')
@endpush
