import SignPDF from "./SignPDF";
import fs from "node:fs";
import path from "node:path";

async function main() {
  const originalPdfName = "Array";       //VEM DO FRONT
  const certificateName = "userp12";    //VEM DO FRONT

  const pdfBuffer = new SignPDF(
    path.resolve('../front/pdf/' + originalPdfName),
    path.resolve('../front/certificado/' + certificateName + '.p12')
  );

  const signedDocs = await pdfBuffer.signPDF();
  const pdfName = `../front/exports/pdfAssinado.pdf`;
  // const randomNumber = Math.floor(Math.random() * 5000);
  // const pdfName = `./exports/pdfassinadoNum${randomNumber}.pdf`;

  fs.writeFileSync(pdfName, signedDocs);
  console.log(`New Signed PDF created called: ${pdfName}`);
}

main();
