@extends('layouts.master')

@livewireStyles()

@section('content')

@livewire('CAR.car-view-index', ['carReportId' => $carReport->id])

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#carRepairModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>
@endsection
