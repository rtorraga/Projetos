<?php include ("header.php");?>
<!-- HOME -->
<div class="home container-fluid">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-off">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 padding-off">
                <img class="logo-promo bounceInRight animated" src="public/img/logo-promo.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 padding-off">
                <?php if (new DateTime() < new DateTime("2018-08-27 23:59:59")): ?>
                <a href class="cadastro" data-toggle="modal" data-target=".bd-example-modal-lg4">
                    <img class="btn-cadastro bounceInRight animated" src="public/img/btn-cadastro.png" alt="">
                </a>
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 padding-off">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-off">
                    <img class="flag-mecanica-1 bounceInLeft animated" src="public/img/flag-mecanica-1.png" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-off">
                    <img class="flag-mecanica-2 bounceInRight animated" src="public/img/flag-mecanica-2.png" alt="">
                    <p class="texto-mecanica-2 bounceInRight animated">© 2018 HBO OLE PARTNERS. ALL RIGHTS RESERVED.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 padding-off">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-off">
                    <img class="img-tv bounceInLeft animated center-block" src="public/img/img-tv.png" alt="">
                    <p class="texto-tv bounceInLeft animated text-center">15 TVs 49” 4k/Ultra HD</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-off">
                    <img class="img-kits bounceInRight animated center-block" src="public/img/img-kits.png" alt="">
                    <p class="texto-kits bounceInRight animated text-center">1 pipoqueira + 1 almofada-bandeja</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 padding-off">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-off">
                    <p class="texto-periodo">
                        Período de participação: de 30/07/2018 a 27/08/2018.<br>
                        Consulte o regulamento <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg1">aqui</a><br>
                        Certificado de Autorização CAIXA Sorteio n° 6-6630/2018.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-off">
                    <p class="texto-img-ilustrativa">*Imagens meramente ilustrativas</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CADASTRO -->
<div class=" modal bounceInDown animated bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="clearfix"></div><div class="margin-top-20"></div>
            <div class="col-md-12 col-lg-7 col-lg-offset-2 text-center">
                <h1 class="titlePar">PARTICIPE</h1>
                <p class="subFaq">“PROMOÇÃO SKY ENTRE NO MODO CINEMAX”</p>
            </div>

            <iframe src="<?php echo $cad_url; ?>" width="100%" height="500px"></iframe>

            <div class="clearfix"></div>

        </div>
    </div>
</div>
<!-- /MODAL CADASTRO -->

<?php include ("footer.php");?>
