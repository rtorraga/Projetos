<!-- GOOGLE ANALYTICS -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122940504-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122940504-1');
</script>

<script>
    if(window.location.href.indexOf('#regulamento') != -1) {
        $('.bd-example-modal-lg1').modal('show');
    }
</script>
<script>
    if(window.location.href.indexOf('#duvidas') != -1) {
        $('.bd-example-modal-lg2').modal('show');
    }
</script>
<script>
    if(window.location.href.indexOf('#contato') != -1) {
        $('.bd-example-modal-lg3').modal('show');
    }
</script>
<script>
    if(window.location.href.indexOf('#ganhadores') != -1) {
        $('.bd-example-modal-lg5').modal('show');
    }
</script>

<!-- /GOOGLE ANALYTICS -->
<?php
if (new DateTime() > new DateTime("2018-08-27 23:59:59")) {
?>
<div class="container-fluid faixa">
    <a class="btn-close-faixa" href=""><img src="public/img/btn-close-faixa.png" alt="" class="img-responsive"></a>
    <div class="container">
        <p class="tt-faixa">O período de participação encerrou-se em <span>27/08/2018 às 23h59.</span></p>
<!--        <p class="tt-faixa-2">Para conhecer os ganhadores, <a data-toggle="modal" data-target=".bd-example-modal-lg5" href="#"><span>clique aqui.</span></a></p>-->
    </div>
</div>
<?php
}
?>
</body>
</html>
