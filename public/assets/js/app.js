
window.addEventListener("alert", (event) => {
    let data = event.detail;

    Swal.fire({
        position: data.position,
        icon: data.icon,
        title: data.title,
        showConfirmButton: false,
        timer: data.timer,
    });
});


window.addEventListener("alertconfirmDelete", (event) => {
    let data = event.detail;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger me-2",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons
        .fire({
            title: "ต้องการลบ ใช่ไหม ?",
            text: "เพราะจะไม่สามารถนำกลับมาได้ !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, ต้องการลบ !",
            cancelButtonText: "No, ยกเลิก !",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                // เมื่อยืนยันการลบ ส่งอีเวนต์ไปยังคอมโพเนนต์ Livewire
                Livewire.dispatch("deleteConfirmed");
            } else {
                //
            }
        });
});



