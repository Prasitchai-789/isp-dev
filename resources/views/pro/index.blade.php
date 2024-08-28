@extends('layouts.master')

@section('content')
    @livewire('pro.machinery-index')
@endsection
@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#machineryModal').modal('hide'); // ให้ซ่อนโมดัล
        });
    </script>


    <script>
        window.addEventListener('modifyPdf', function(event) {
            modifyPdf(event);

        });
        const { degrees,PDFDocument,rgb,StandardFonts} = PDFLib

        async function modifyPdf(event) {
            console.log(event);

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
            firstPage.drawText('', {
                x: width / 2 + 115,
                y: height / 2 + 302,
                size: 16,
                font: thaiFont,
                color: rgb(0.95, 0.1, 0.1),
                // rotate: degrees(-45),
            })
            //ชื่อ
            firstPage.drawText(event.detail.fullName, {
                x: 75,
                y: 700,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //แผนก
            firstPage.drawText('เทคโนโลยีสารสนเทศ', {
                x: 258,
                y: 700,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });

            //ฝ่าย
            firstPage.drawText('ทรัพยากรบุคคล', {
                x: 358,
                y: 700,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //ที่ตั้ง
            firstPage.drawText('ออฟฟิศหน้า', {
                x: 155,
                y: 681,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });

            //หมายเลขเครื่อง
            firstPage.drawText('ISP-HRE01', {
                x: 394,
                y: 681,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            //อาการ
            firstPage.drawText('เครื่องเปิดไม่ติด', {
                x: 145,
                y: 644,
                size: 14,
                font: thaiFont,
                color: rgb(0.1, 0.1, 0.95),
            });
            // Serialize the PDFDocument to bytes (a Uint8Array)
            const pdfBytes = await pdfDoc.save()

            // Trigger the browser to download the PDF document
            download(pdfBytes, "pdf-lib_modification_example.pdf", "application/pdf");
        }
    </script>
@endsection
