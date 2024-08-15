@extends('layouts.master')


@section('content')

@livewire('computer.windows.windows-index')

@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#windowsModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>

@endsection
