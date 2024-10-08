@extends('layouts.master')

@section('content')
<livewire:SEC.pass-card-live />
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#passCardModal').modal('hide'); // ให้ซ่อนโมดัล
        });
    </script>
    <script>
        window.addEventListener("confirmPassCard", event => {
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
                cancelButtonText: 'ยกเลิก'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    // เมื่ออนุมัติ
                    Livewire.dispatch('approvePassRequest', carRequestId); // ส่งค่า carRequestId ไปยัง Livewire
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
                } else {
                    //
                }
            });
    });
    </script>
@endsection
