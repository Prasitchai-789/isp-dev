
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
            cancelButton: "btn btn-danger me-2",
            confirmButton: "btn btn-primary me-2",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons
        .fire({
            title: "คุณต้องการลบใช่หรือไม่ ?",
            text: "เพราะไม่สามารถกู้คืนได้ !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, ต้องการลบ !",
            // reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch("deleteConfirmed");
            } else {
                //
            }
        });
});



