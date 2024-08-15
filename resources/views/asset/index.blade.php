@extends('layouts.master')


@section('content')

@livewire('asset.asset-index')

@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#assetModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>

@endsection
