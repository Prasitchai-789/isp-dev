import PDFDocument from 'pdf-lib';

async function embedFontAndMeasureText() {
    // Fetch custom font
//   const url = 'https://pdf-lib.js.org/assets/ubuntu/Ubuntu-R.ttf'
//   const fontBytes = await fetch(url).then(res => res.arrayBuffer())

// Create a new PDFDocument
const pdfDoc = await PDFDocument.create()

// Register the `fontkit` instance
// pdfDoc.registerFontkit(fontkit)

// Embed our custom font in the documen
//   const thaiFont = await pdfDoc.embedFont(fontBytes)
// Fetch and embed the Thai font
const thaiFontBytes = await fetch('https://script-app.github.io/font/THSarabunNew.ttf').then(res => res.arrayBuffer());
const thaiFont = await pdfDoc.embedFont(thaiFontBytes);

// Add a blank page to the document
const page = pdfDoc.addPage()

// Create a string of text and measure its width and height in our custom font
const text = 'ทดสอบ font!'
const textSize = 35
const textWidth = thaiFont.widthOfTextAtSize(text, textSize)
const textHeight = thaiFont.heightAtSize(textSize)

// Draw the string of text on the page
page.drawText(text, {
x: 40,
y: 450,
size: textSize,
font: thaiFont,
color: rgb(0, 0.53, 0.71),
})

// Draw a box around the string of text
//   page.drawRectangle({
//     x: 40,
//     y: 450,
//     width: textWidth,
//     height: textHeight,
//     borderColor: rgb(1, 0, 0),
//     borderWidth: 1.5,
//   })

// Serialize the PDFDocument to bytes (a Uint8Array)
const pdfBytes = await pdfDoc.save()
console.log(1);


    // Trigger the browser to download the PDF document
download(pdfBytes, "pdf-lib_creation_example.pdf", "application/pdf");
}


