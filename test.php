<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.8.0/JsBarcode.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>


<div class='print'>
    
<svg  class="barcode" jsbarcode-format="CODE128" jsbarcode-value="" jsbarcode-textmargin="0" jsbarcode-fontoptions="bold"></svg>

</div>

<button onclick="window.print();">Print ca mec </Button>

<div>AA</div>
<style>

    @media print {
    body * {
        visibility: hidden;
    }

    .print,  .print *{
        visibility: visible;
    }

}

</style>


<script>
    $('.barcode').attr('jsbarcode-value', 'cmd-50-p7')
    JsBarcode(".barcode").init()


</script>



