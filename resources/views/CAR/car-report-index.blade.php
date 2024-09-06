@extends('layouts.master')

@livewireStyles()

@section('content')

@livewire('CAR.car-report-index')

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#carReportModal').modal('hide'); // ให้ซ่อนโมดัล
            $('#carTypeModal').modal('hide'); // ให้ซ่อนโมดัล
            $('#carCharacterModal').modal('hide'); // ให้ซ่อนโมดัล
            $('#carBrandModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>
@endsection
