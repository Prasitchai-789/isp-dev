import DataTable from "datatables.net-bs5";
import "datatables.net-bs5/css/dataTables.bootstrap5.min.css";
import 'datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css';
import 'datatables.net-responsive-bs5';


import $ from "jquery";
window.$ = window.jQuery = $;

// let table = new DataTable('#myTable', {
//     responsive: true
// });


$(document).ready(function() {
    $('#myTable').DataTable({
        responsive: true,
        autoWidth : false,
        ajax: {
            url: '/api/data', // เส้นทางที่ส่งข้อมูล JSON
            dataSrc: ''
        },
        columns: [
            // {
            //     data: null, // ข้อมูลจะไม่มีในฐานข้อมูล
            //     render: function (data, type, row, meta) {
            //         return meta.row + 1; // คืนค่าเป็นลำดับเริ่มต้นที่ 1
            //     },
            //     className: 'text-center' // จัดกลางข้อมูลในคอลัมน์
            // },
            {
                data: 'created_at',
                render: function (data) {
                    if (data) {
                        // แปลงวันที่จากรูปแบบ ISO 8601 เป็น dd/mm/yyyy
                        const date = new Date(data);
                        const day = String(date.getDate()).padStart(2, '0');
                        const month = String(date.getMonth() + 1).padStart(2, '0');
                        const year = date.getFullYear();
                        return `${day}/${month}/${year}`;
                    }
                    return 'N/A'; // กรณีที่ไม่มีวันที่
                },
                className: 'text-center'
            },
            { data: 'NameOfInformant' },
            {
                data: 'Status',
                render: function (data) {
                    let badge;
                    if (data == 1) {
                        badge = '<span class="badge rounded-pill bg-primary" style="font-family: \'Anuphan\', sans-serif;"><i class="fa-solid fa-clock"></i> รอดำเนินการ</span>';
                    } else if (data == 2) {
                        badge = '<span class="badge rounded-pill bg-warning text-dark" style="font-family: \'Anuphan\', sans-serif;"><i class="fa-solid fa-circle-check"></i> กำลังดำเนินการ</span>';
                    } else if (data == 3) {
                        badge = '<span class="badge rounded-pill bg-warning text-danger" style="font-family: \'Anuphan\', sans-serif;"><i class="fa-solid fa-paper-plane"></i> ส่งซ่อมภายนอก</span>';
                    } else if (data == 4) {
                        badge = '<span class="badge rounded-pill bg-success" style="font-family: \'Anuphan\', sans-serif;"><i class="fa-solid fa-circle-check"></i> ดำเนินการเสร็จสิ้น</span>';
                    } else {
                        badge = '<span class="badge rounded-pill bg-danger" style="font-family: \'Anuphan\', sans-serif;"><i class="fa-sharp fa-solid fa-circle-xmark"></i> ยกเลิก</span>';
                    }
                    return badge;
                },
                className: 'text-center'
            },
            {
                data: 'typeWork',
                render: function (data) {
                    // เช็คว่ามีข้อมูลใน typeWork หรือไม่
                    if (data && data.TypeWork) {
                        return data.TypeWork; // แสดงข้อมูล TypeWork
                    }
                    return 'N/A'; // กรณีที่ไม่มีข้อมูล
                },
                className: 'text-center'
            },
            { data: 'MachineName' },
            { data: 'Detail' },
            { data: 'Location' },
            { data: 'Telephone' },
            {
                data: null,
                render: function (data, type, row) {
                    return `
                        <a href="#" wire:click="confirmEdit(${row.id})" data-bs-toggle="modal" data-bs-target="#windowsModal" class="btn btn-link text-warning">
                            <i class="bi bi-pencil-square" style="font-size: 18px;"></i>
                        </a>
                        <a href="#" wire:click="confirmDelete(${row.id})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-link text-danger">
                            <i class="bi bi-trash" style="font-size: 18px;"></i>
                        </a>
                    `;
                },
                className: 'text-center'
            }
        ],
        order: [['id', 'desc']], // คอลัมน์วันที่ (index 6) เรียงลำดับจากล่าสุดไปหาล่าสุด
        columnDefs: [
            { targets: '_all', defaultContent: '' } // ให้คอลัมน์ที่ไม่มีข้อมูลแสดงเป็นค่าว่าง
        ]
    });

    // เพิ่มการจัดการปุ่มใน DataTables
    $('#myTable').on('click', '[wire\\:click]', function (e) {
        e.preventDefault();
        let action = $(this).attr('wire:click');
        let id = $(this).data('id');
        // @this.call(action, id);
    });
});
