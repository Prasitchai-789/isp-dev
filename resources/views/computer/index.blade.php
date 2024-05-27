@extends('layouts.master')

@section('content')

@livewire('computer.computer-index')

@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#computerModal').modal('hide'); // ให้ซ่อนโมดัล
        });
    </script>
@endsection
