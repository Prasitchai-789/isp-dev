@extends('layouts.master')

@section('content')

@livewire('pro.report-machinery-index')

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#sparepartModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>

@endsection
