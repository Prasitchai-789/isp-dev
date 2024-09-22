@extends('layouts.master')

@livewireStyles()
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

@section('content')

@livewire('CAR.car-use-index')

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#carUseModal').modal('hide'); // ให้ซ่อนโมดัล
            $('#endModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>
<script>
    Pusher.logToConsole = true;

    // Initialize Pusher
    var pusher = new Pusher('ef92af8962eb586d8197', {
        cluster: 'ap1'
    });

    // Subscribe to the channel
    var channel = pusher.subscribe('notification');

    // Bind to the event
    channel.bind('test.notification', function(data) {
        console.log('Received data:', data); // Debugging line
        window.location.reload(); 

    });
    // Debugging line
    pusher.connection.bind('connected', function() {
        console.log('Pusher connected');
    });
</script>
@endsection
