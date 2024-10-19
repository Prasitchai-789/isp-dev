@extends('layouts.master')

@section('content')
    @livewire('technician.list-spare-part-index')
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#sparePartModal').modal('hide'); // ให้ซ่อนโมดัล
        });
    </script>
@endsection
