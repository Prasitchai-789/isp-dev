@extends('layouts.master')

@livewireStyles()

@section('content')

@livewire('GM.dashboard-palm-index')

@endsection

@section('script')

@vite('resources/js/GM/dashboard-palm.js')

@endsection
