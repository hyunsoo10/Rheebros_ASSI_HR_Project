
<main style="width: 1200px;">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>
<?php echo $_SESSION['userid'] ?>
<div id="myPdf"></div>
<script>
var option =
{
    width: "1000px;",
		height: "1200px",
		pdfOpenParams: {view: 'FitV', page: '2', type: "application/x-google-chrome-pdf"},

}
PDFObject.embed("examples/example_014.php", "#myPdf", option);

</script>
</main>
