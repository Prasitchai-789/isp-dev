@extends('layouts.master')

@livewireStyles()

@section('content')

@livewire('HRE.car-request-index')

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
            $('#carRequestModal').modal('hide'); // ให้ซ่อนโมดัล
        });
</script>

<script>
    window.addEventListener("confirmApprove", event => {
    const carRequestId = event.detail;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: "btn btn-danger me-2",
            confirmButton: "btn btn-primary me-2",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons
        .fire({
            title: 'คุณแน่ใจหรือไม่?',
            text: "คุณต้องการอนุมัติคำขอนี้หรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'ใช่, อนุมัติ!',
            cancelButtonText: 'ไม่อนุมัติ'
        })
        .then((result) => {
            if (result.isConfirmed) {
                // เมื่ออนุมัติ
                Livewire.dispatch('approveCarRequest', carRequestId); // ส่งค่า carRequestId ไปยัง Livewire
                Swal.fire({
                title: 'อนุมัติแล้ว!',
                text: 'คำขอได้ถูกอนุมัติเรียบร้อย.',
                icon: 'success',
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'blue-button' // ใช้ Bootstrap class หรือกำหนด class ของคุณเอง
                },
                buttonsStyling: false // ปิดการใช้งาน styles เริ่มต้นของ SweetAlert
            });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // เมื่อไม่อนุมัติ
                Livewire.dispatch('rejectCarRequest', carRequestId); // ส่งค่า carRequestId ไปยัง Livewire
                Swal.fire({
                title: 'ไม่อนุมัติ!',
                text: 'คำขอได้ถูกปฏิเสธเรียบร้อย.',
                icon: 'error',
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'blue-button' // ใช้ Bootstrap class หรือกำหนด class ของคุณเอง
                },
                buttonsStyling: false // ปิดการใช้งาน styles เริ่มต้นของ SweetAlert
            });
            }
        });
});

</script>

@endsection
