@extends('layouts.master')

@section('content')
    @livewire('pro.machinery-index')
@endsection
@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#machineryModal').modal('hide'); // ให้ซ่อนโมดัล
        });
    </script>


@endsection
