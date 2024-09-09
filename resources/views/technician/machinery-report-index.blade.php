@extends('layouts.master')

@section('content')
    @livewire('technician.machinery-report-index', ['machineryId' => $machinery->id])
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#sparePartModal').modal('hide'); // ให้ซ่อนโมดัล
        });
    </script>
@endsection
