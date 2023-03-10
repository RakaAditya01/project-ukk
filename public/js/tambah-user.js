function bukahidden() {
    const coba = document.getElementById('exampleFormControlSelect1').value
   if (coba == "siswa") {
    document.getElementById('nisn').removeAttribute('hidden');
   } else {
    document.getElementById('nisn').setAttribute('hidden', true);
   }

}