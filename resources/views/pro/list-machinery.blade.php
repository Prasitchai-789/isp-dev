@extends('layouts.master')

@section('content')

@livewire('pro.list-machinery-index', ['sparepartId' => $sparepart->id])

@endsection
