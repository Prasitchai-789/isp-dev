@extends('layouts.master')

@livewireStyles()

@section('content')
    @livewire('IT.repair-index')
@endsection

@section('script')
    {{-- @vite('resources/js/datatable/repair-table.js') --}}

    <script>
        window.addEventListener('close-modal', event => {
            $('#WorkOrderModal').modal('hide'); // ให้ซ่อนโมดัล
        });

        document.addEventListener('livewire:load', function() {
            Livewire.on('reloadPage', function() {
                location.reload(); // รีโหลดหน้าเว็บ
                console.log('reload');

            });
        });

        window.addEventListener('modifyPdf', function(event) {
            modifyPdf(event);
        });

        const {
            degrees,
            PDFDocument,
            rgb,
            StandardFonts
        } = PDFLib

        async function modifyPdf(event) {

            // Fetch an existing PDF document
            const url = '/pdfs/FM-HRE-60-0061_Network.pdf'
            const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer())

            // Load a PDFDocument from the existing PDF bytes
            const pdfDoc = await PDFDocument.load(existingPdfBytes)

            // Register the `fontkit` instance
            pdfDoc.registerFontkit(fontkit)

            // Fetch and embed the Thai font
            const thaiFontBytes = await fetch('https://script-app.github.io/font/THSarabunNew.ttf').then(res => res
                .arrayBuffer());
            const thaiFont = await pdfDoc.embedFont(thaiFontBytes);

            // Embed the Helvetica font
            //   const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica)

            // Get the first page of the document
            const pages = pdfDoc.getPages()
            const firstPage = pages[0]

            // Get the width and height of the first page
            const {
                width,
                height
            } = firstPage.getSize()

            // Draw a string of text diagonally across the first page
            //เลขที่
            firstPage.drawText(event.detail.Number, {
                x: width / 2 + 115,
                y: height / 2 + 302,
                size: 16,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
                // rotate: degrees(-45),
            })
            //ชื่อ
            firstPage.drawText(event.detail.NameOfInformant, {
                x: 77,
                y: 700,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //ชื่อ
            firstPage.drawText(event.detail.NameOfInformant, {
                x: 340,
                y: 560,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //วันที่
            firstPage.drawText(event.detail.Date, {
                x: 370,
                y: 540,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //แผนก
            firstPage.drawText('', {
                x: 258,
                y: 700,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });

            //ฝ่าย
            firstPage.drawText('', {
                x: 358,
                y: 700,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //ที่ตั้ง
            firstPage.drawText(event.detail.Location, {
                x: 155,
                y: 681,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });

            //หมายเลขเครื่อง
            firstPage.drawText(event.detail.MachineName, {
                x: 394,
                y: 681,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //อาการ
            firstPage.drawText(event.detail.Detail, {
                x: 145,
                y: 644,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });

            firstPage.drawText(event.detail.RepairReport, {
                x: 125,
                y: 423,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });

            firstPage.drawText(event.detail.Technician, {
                x: 305,
                y: 132,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            firstPage.drawText(event.detail.updateDate, {
                x: 310,
                y: 112,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            // Serialize the PDFDocument to bytes (a Uint8Array)
            const pdfBytes = await pdfDoc.save()

            // Trigger the browser to download the PDF document
            download(pdfBytes, "ใบแจ้งซ่อม FM-HRE-60-0061.pdf", "application/pdf");
        }
    </script>
@endsection
