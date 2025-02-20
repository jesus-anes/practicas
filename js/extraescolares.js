btnDescargar.addEventListener('click', function () {
    const link = document.createElement('a');
    link.href = "resource/extraescolares-judo-dojo-tarraco.pdf";
    link.download = "extraescolares-judo-dojo-tarraco.pdf";
    link.click();
});