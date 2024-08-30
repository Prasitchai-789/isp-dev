@extends('layouts.master')

@livewireStyles()

@section('content')

@livewire('IT.repair-index')

@endsection

@section('script')

@vite('resources/js/datatable/repair-table.js')

@endsection
