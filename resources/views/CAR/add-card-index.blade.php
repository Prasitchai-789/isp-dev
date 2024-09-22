@extends('layouts.master')

@livewireStyles()

@section('content')

@livewire('CAR.add-card-index')

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#addCardModal').modal('hide'); // ให้ซ่อนโมดัล
            $('#editCardModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>
@endsection
