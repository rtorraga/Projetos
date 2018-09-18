<?php
error_reporting(0);
ini_set('display_errors', 0);

if(@$_POST[act]=="7hswbdw378dsnas810"){


    if (!$_POST[email]) {
        $resultado = "Falha no envio, tente novamente";
    }else{
        $msg = "Nome:". $_POST[nome];
        $msg .= "<br />\r\n CPF:". $_POST[cpf];
        $msg .= "<br />\r\n Email:". $_POST[email];
        $msg .= "<br />\r\n Assunto:". $_POST[assunto];
        $msg .= "<br />\r\n Mensagem:". $_POST[mensagem];

        $msg = wordwrap($msg,70);

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <'.$_POST[email].'>' . "\r\n";
        mail("faleconosco@promocaoskycinemax.com.br",$_POST[assunto],$msg,$headers);

        $resultado = "Mensagem enviada com sucesso!";



        //envio da resposta automática

        $msg_cliente ="
    Prezado cliente.<br />
<br/>Agradecemos o seu contato e retornaremos seu e-mail em até 48h.
<br/>
<br/>O período de participação da Promoção se iniciou em 30 de Julho de 2018 e se estende até às 23h59 (vinte e três horas e cinquenta e nove minutos) do dia 27 de agosto de 2018, horário oficial de Brasília.
<br/>
<br/>Participam desta Promoção os assinantes da modalidade SKY PÓS-PAGO, ativos, adimplentes, pessoas físicas maiores de 18 (dezoito) anos, capazes, residentes e domiciliadas no Brasil que ao longo do período de participação, cumpram com todas as regras desse Regulamento.
<br/>
<br/>Participam também dessa Promoção novos assinantes que vierem a contratar os serviços da modalidade SKY PÓS-PAGO via “Assine Online”, por meio do link assine.sky.com.br ou nos pontos de venda autorizados e que efetuarem o pagamento de suas faturas mensais em dia. A participação, nesse caso, será efetivada após a comprovação do pagamento.
<br/>
<br/>O resultado da Promoção e os nomes dos ganhadores serão divulgados no endereço www.promocaoskycinemax.com.br/ no prazo de até 15 (quinze) dias úteis após a data da apuração.
<br/>
<br/>Os contemplados serão comunicados do resultado da Promoção pelo telefone de cadastro, envio de e-mail, telegrama ou carta com aviso de recebimento (AR), no prazo máximo de 10 (dez) dias úteis da data da apuração, de acordo com os dados cadastrais informados na Promoção ou constantes em sua assinatura.
<br/>
<br/>
<br/>Qualquer dúvida relacionada à promoção, estamos à disposição.
<br/>
<br/>Fale Conosco SKY ENTRE NO MODO CINEMAX
<br/>";


        $headers_cliente = "MIME-Version: 1.0" . "\r\n";
        $headers_cliente .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers_cliente .= 'From: <faleconosco@promocaoskycinemax.com.br>' . "\r\n";
        mail($_POST[email],"Contato Sky",$msg_cliente,$headers_cliente);

    }

}


$parameters = $_SERVER['QUERY_STRING'];

if($_GET['app'] == "sim"){
    $cad_url = "https://www1.sky.com.br/sitesky/beneficios/AdminPromotion/Index/xxxxxx".$parameters;
}else{
    $cad_url = "https://www1.sky.com.br/sitesky/beneficios/AdminPromotion/Index/xxxxxx";
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                                                              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                                    })(window,document,'script','dataLayer','GTM-PBGTTDQ');</script>
        <!-- End Google Tag Manager -->

        <meta charset="UTF-8">
        <title>PROMOÇÃO SKY ENTRE NO MODO CINEMAX</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv=Content-Type content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

        <link rel="stylesheet" href="public/css/style.css" media="screen">
        <link rel="stylesheet" href="public/css/animate.css" media="screen">
        <link rel="stylesheet" href="public/css/jquery.jscrollpane.css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>

        <meta name="Title" content="PROMOÇÃO SKY ENTRE NO MODO CINEMAX" />
        <meta name="og:title" content="PROMOÇÃO SKY ENTRE NO MODO CINEMAX" />
        <meta name="description" content="PROMOÇÃO SKY ENTRE NO MODO CINEMAX" />
        <meta name="og:description" content="PROMOÇÃO SKY ENTRE NO MODO CINEMAX" />
        <meta name="theme-color" content="#cb2127"/>

        <script type="text/javascript" src="public/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="public/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="public/js/gen_validatorv4.js"></script>

        <!--[if lt IE 10]>
<script src="public/js/html5shiv.js"></script>
<script src="public/js/respond.min.js"></script>
<![endif]-->

        <!--[if lt IE 10]>
<div class="fundo-atualiza-ie">
<div class="container">
<div class="row">
<div class="titulo-atualiza-navegador">
Atualize seu navegador
</div>
<div class="texto-atualiza-navegador">
Este site pode não funcionar neste navegador. Usar um navegador desatualizado deixa o seu computador vulnerável. <br />Por favor, clique em um dos logos abaixo para instalar a versão mais recente do seu navegador preferido.
</div>
<ul id="browserlist">
<li id="chrome">
<a href="http://www.google.com/chrome" title="Google Chrome">
<div class="icon"></div>
<h2>Google Chrome</h2>
</a>
</li>
<li id="firefox">
<a href="http://www.firefox.com/" title="Mozilla Firefox">
<div class="icon"></div>
<h2>Mozilla Firefox</h2>
</a>
</li>
<li id="safari">
<a href="http://www.apple.com/safari/" title="Apple Safari">
<div class="icon"></div>
<h2>Safari</h2>
</a>
</li>
<li id="opera">
<a href="http://www.opera.com/" title="Opera">
<div class="icon"></div>
<h2>Opera</h2>
</a>
</li>
<li id="ie">
<a href="http://windows.microsoft.com/ie" title="Microsoft Internet Explorer">
<div class="icon"></div>
<h2>Internet Explorer</h2>
</a>
</li>
</ul>
</div>
</div>
</div>
<![endif]-->
    </head>
    <?php $uri = $_SERVER['REQUEST_URI'];?>
    <body class="<?php echo ($uri == '/index.php') || ($uri == '/')?'bgHomeIndex':'';?>">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBGTTDQ"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- MENU TOPO MOBILE-->
        <div class="menuMobile">
            <div class="hidden-md hidden-lg">
                <div class="container-fluid retira-margem">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#menuSkyMobile"><i class="fa fa-bars pull-right" aria-hidden="true"></i></a>
                                </h4>
                            </div>
                            <div id="menuSkyMobile" class="panel-collapse collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <?php
                                    if (new DateTime() > new DateTime("2018-08-27 23:59:59")) {
                                    ?>
                                    <li class="" data-toggle="modal" data-target=".bd-example-modal-lg5"><a href="#ganhadores">Ganhadores</a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="#" data-toggle="modal" data-target=".bd-example-modal-lg1"><a href="#regulamento">Regulamento</a></li>
                                    <li class="#" data-toggle="modal" data-target=".bd-example-modal-lg2"><a href="#duvidas">Dúvidas</a></li>
                                    <li class="#" data-toggle="modal" data-target=".bd-example-modal-lg3"><a href="#contato">Contato</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm">
                        <div class="clearfix"></div><div class="margin-top-30"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /MENU TOPO MOBILE -->

        <!-- MENU TOPO DESKTOP-->
        <div class="menuTopo hidden-xs hidden-sm">
            <div class="container supMobile">
                <div class="row">
                    <div class="col-md-12 mMob">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <nav class="navbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <?php
                                    if (new DateTime() > new DateTime("2018-08-27 23:59:59")) {
                                    ?>
                                    <li class="" data-toggle="modal" data-target=".bd-example-modal-lg5"><a href="#ganhadores">Ganhadores</a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="" data-toggle="modal" data-target=".bd-example-modal-lg1"><a href="#regulamento">Regulamento</a></li>
                                    <li class="#" data-toggle="modal" data-target=".bd-example-modal-lg2"><a href="#duvidas">Dúvidas</a></li>
                                    <li class="#" data-toggle="modal" data-target=".bd-example-modal-lg3"><a href="#contato">Contato</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /MENU TOPO DESKTOP-->

        <!-- MODAL NUMERO DA SORTE -->
        <div class="modal bounceInDown animated bd-example-modal-lg0" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- FORM NUMERO DA SORTE  -->
                    <div class="clearfix"></div><div class="margin-top-20"></div>
                    <div class="text-center">
                        <h1 class="titlePar">NÚMERO DA SORTE</h1>
                        <p class="subFaq">“PROMOÇÃO SKY ENTRE NO MODO CINEMAX”</p>
                    </div>
                    <iframe src="http://www1.sky.com.br/sitesky/Beneficios/AdminPromotionLuckyNumbers/POSPromotion?certificateNumber=4-0754/2017" width="100%" height="500px"></iframe>
                    <div class="clearfix"></div>
                    <!-- /FORM NUMERO DA SORTE -->
                </div>
            </div>
        </div>
        <!-- /MODAL NUMERO DA SORTE -->

        <!-- MODAL GANHADORES -->
        <div class=" modal bounceInDown animated bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-ganhadores">
                <div class="modal-content">
                    <!-- Nav tabs -->
                    <div class="col-md-12 col-lg-12 nav_tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">TVs 4k</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="false">Kits</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-md-12 col-lg-12 text-left padding-off tt-ganhadores">
                                <div class="col-md-12 col-lg-12">
                                    <h1 class="titlePar">Ganhadores</h1>
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div><div class="margin-top-20"></div>

                            <div class="col-md-12 col-lg-12 text-center">
                                <div class="table-mobile">
                                    <table class="table table-bordered table-ganhadores">
                                        <thead>
                                            <tr>
                                                <th>SORTEIO</th>
                                                <th>ORDEM</th>
                                                <th>PRÊMIO</th>
                                                <th>GANHADOR</th>
                                                <th>CPF</th>
                                                <th>CIDADE</th>
                                                <th>UF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="white-space: nowrap;"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="col-md-12 col-lg-12 text-left padding-off tt-ganhadores">
                                <div class="col-md-12 col-lg-12">
                                    <h1 class="titlePar">Ganhadores</h1>
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div><div class="margin-top-20"></div>

                            <div class="col-md-12 col-lg-12 text-center">
                                <div class="table-mobile">
                                    <table class="table table-bordered table-ganhadores">
                                        <thead>
                                            <tr>
                                                <th>SORTEIO</th>
                                                <th>ORDEM</th>
                                                <th>PRÊMIO</th>
                                                <th>GANHADOR</th>
                                                <th>CPF</th>
                                                <th>CIDADE</th>
                                                <th>UF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="white-space: nowrap;"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- MODAL GANHADORES -->

        <script>
            $(document).ready(function() {
                $('#myTab a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
            });
        </script>


        <!-- MODAL REGULAMENTO -->
        <div class=" modal bounceInDown animated bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="clearfix"></div><div class="margin-top-20"></div>
                    <div class="col-md-12 col-lg-7 col-lg-offset-2 text-center">
                        <h1 class="titlePar">REGULAMENTO</h1>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 box-regulamento">
                        <div class="texto-regulamento">
                            <p align="center"><strong>PROMOÇÃO “SKY, ENTRE NO MODO CINEMAX”.</strong></p>

                            <div class="mt-10"></div>
                            <div>
                                <p><strong>1.	PROMOTORA:</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>1.1	Esta <strong>PROMOÇÃO</strong> é realizada pela SKY SERVIÇOS DE BANDA LARGA LTDA. sediada na Av. Nações Unidas, 12.901, 15º andar, Torre Norte Brooklin Novo, São Paulo (SP), inscrita no CNPJ sob o nº 00.497.373/0001-10.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>2.	PRAZO DE EXECUÇÃO:</strong> De 30 de julho de 2018 a 12 de setembro de 2018.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>3.	PERÍODO DE PARTICIPAÇÃO:</strong> Das 12hs de 30 de julho de 2018 até às 23h59 (vinte e três horas e cinquenta e nove minutos) do dia 27 de agosto de 2018, horário oficial de Brasília.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>4.	OBJETIVO DA PROMOÇÃO:</strong> <strong>Promoção</strong> de engajamento com a base de clientes na modalidade SKY PÓS-PAGO para o objetivo de manter a base ativa e captar novos assinantes.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>5.	QUEM PODE PARTICIPAR:</strong> Assinantes da modalidade SKY PÓS-PAGO, ativos, adimplentes, pessoas físicas maiores de 18 (dezoito) anos, capazes, residentes e domiciliadas no Brasil que ao longo do período de participação, cumpram com todas as regras desse Regulamento.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.1	Novos assinantes que vierem a contratar os serviços da modalidade SKY PÓS-PAGO via “Assine Online”, por meio do link assine.sky.com.br ou nos pontos de venda autorizados e que efetuarem o pagamento de suas faturas mensais em dia. A participação, nesse caso, será efetivada após a comprovação do pagamento.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.2	É considerado assinante da <strong>Promotora</strong>, para os fins dessa <strong>Promoção</strong>: pessoas que possuam assinatura individual na modalidade SKY PÓS-PAGO, contrato tipo DTH (Direct To Home) e HDTV (High Definition Television) - sistemas de TV paga, no qual tem instalado em casa uma antena parabólica e um receptor/decodificador recebendo sinais dos canais por satélite contratados, antes ou ao longo do período da <strong>Promoção</strong>, e que cumpra com todas as regras desse Regulamento.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.3	Não podem participar: assinantes das modalidades SKY PÓS-PAGO que estiverem inadimplentes, assinantes exclusivos do serviço de banda larga SKY, titulares e dependentes dos pacotes SKY PRÉ-PAGO; pessoas incapazes, pessoas jurídicas; funcionários da <strong>Promotora</strong>; funcionários das agências de propaganda e <strong>Promoção</strong> que mantém contrato com a <strong>Promotora</strong> e/ou quaisquer outras empresas envolvidas na presente <strong>Promoção</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.4	O assinante na modalidade SKY PÓS-PAGO deverá estar adimplente, ou seja, tenha realizado o pagamento de todas as suas faturas até um dia antes da data da apuração. Se for selecionado e não estiver adimplente, o Participante será desclassificado e será selecionado o próximo Participante de acordo com os critérios de elegibilidade e regras previstas nesse Regulamento.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.5	O Participante é responsável por manter os dados cadastrais de sua assinatura atualizados.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.6	A participação na <strong>Promoção</strong> não é automática. O mero sinal ativo da televisão não garante a participação na <strong>Promoção</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>5.7	Caso o Participante não seja cliente da <strong>Promotora</strong>, não poderá participar por não cumprir os critérios de elegibilidade da <strong>Promoção</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>6.	PREMIAÇÃO</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>6.1	 Será distribuído pela <strong>Promoção</strong> um total de 115 (cento e quinze) prêmios, conforme tabela abaixo:
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><p align="center"><strong>Clientes</strong></p></td>
                                            <td><p align="center"><strong>Descrição do prêmio</strong></p></td>
                                            <td><p align="center"><strong>Quantidade de prêmios</strong></p></td>
                                            <td><p align="center"><strong>Valor unitário</strong></p></td>
                                        </tr>
                                        <tr>
                                            <td><p>1º ao 15º </p></td>
                                            <td><p>1 (uma) televisão de 49&rdquo; polegadas, 4K, da marca LG,   modelo SmartTV <strong>WFI B</strong>, ou similar.</p></td>
                                            <td><p>15  (quinze)</p></td>
                                            <td><p>R$   2.228,70 (Dois mil duzentos e vinte e oito reais e setenta centavos)</p></td>
                                        </tr>
                                        <tr>
                                            <td><p>16º ao 115º</p></td>
                                            <td><p>1 (um) kit Sky contendo: (i) uma pipoqueira no valor de   R$174,90, (ii) uma almofada bandeja no valor de R$ 145,90.</p></td>
                                            <td><p>100 (cem)</p></td>
                                            <td><p>R$ 320,80 (trezentos e vinte reais   e oitenta centavos)</p></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><p>VALOR TOTAL DOS PRÊMIOS *</p></td>
                                            <td colspan="2"><p>R$65.510,50 (sessenta e cinco mil, quinhentos e dez reais   e cinquenta centavos)</p></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><p>* O valor acima se refere ao valor de mercado atual e   aproximado dos prêmios.</p></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>7.	DESCRIÇÃO DETALHADA DA OPERAÇÃO</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>7.1	Durante o período de participação da <strong>Promoção</strong>, o assinante interessado em participar poderá se inscrever pelos sites disponíveis nos endereços www.sky.com.br/promocoes ou www.promocaoskycinemax.com.br , inserir as informações solicitadas a título de inscrição na <strong>Promoção</strong> e responder a seguinte pergunta:</p>
                                <p>“Com qual TV por assinatura você concorre à 15 TVs 4K para assistir a incrível programação do Canal Cinemax?”</p>
                                <p class="text-center">(     ) SKY ou  (      ) Outras</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>7.1.1 O Participante que tiver sua inscrição confirmada na <strong>Promoção</strong> receberá a mensagem na própria tela do site: “Inscrição concluída com sucesso, boa sorte!”.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>7.2	A participação na <strong>Promoção</strong> está obrigatoriamente vinculada com a resposta correta à pergunta. Aqueles que acertarem a resposta estarão concorrendo ao sorteio dos prêmios através de 1 (um) cupom atribuído automaticamente, que será impresso oportunamente pela <strong>Promotora</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>7.3	Caso a mensagem não seja recebida, o Participante deverá entrar em contato por meio do faleconosco@promocaoskycinemax.com.br.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>7.4	Será concedido um cupom extra aos Participantes que possuírem faturas devidamente adimplidas a partir de R$300,00 (trezentos reais)/mês. Também será (ão) concedido(s) cupom(ns) extra(s), proporcionalmente com a quantidade de anos que o cliente possuir a assinatura Sky, conforme exemplo abaixo:</p>
                                <p class="text-center"><strong>1 ano com a SKY</strong> = 1 cupom extra;</p>
                                <p class="text-center"><strong>2 anos com a SKY</strong> = 2 cupons extras;</p>
                                <p class="text-center"><strong>3 anos com a SKY</strong> = 3 cupons extras.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>7.5	A <strong>Promotora</strong> identificará, previamente, em seu banco de dados se os participantes estão com suas faturas quitadas até um dia antes da apuração. Esta verificação poderá ser realizada também durante a apuração.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>8.	DATA, FORMA E LOCAL DA APURAÇÃO</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.1	Haverá uma única apuração nesta <strong>Promoção</strong>, que acontecerá às 10h do dia 12/09/2018, na agência Momentum, Rua Araporé, 655, Jardim Guedala, São Paulo/SP.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.2	Na data da apuração, serão retirados da urna, manual e aleatoriamente, a quantidade necessária de cupons, até que sejam encontrados 115 (cento e quinze) cupons válidos, cujos participantes titulares serão contemplados cada uma unidade do seguinte prêmio, na seguinte ordem de classificação:
                                </p>

                                <p> &#8658; DO 1º AO 15º CUPOM: 1 (uma) televisão de 49” polegadas, 4K, da marca LG, modelo SmartTV WFI B, ou similar no valor de R$ 2.228,70 (Dois mil duzentos e vinte e oito reais e setenta centavos).</p>
                                <p> &#8658; DO 16 º AO 115º CUPOM: 1 (um) kit Sky, no valor de R$ 320,80 (trezentos e vinte reais e oitenta centavos, contendo: (i) uma pipoqueira, (ii) uma almofada bandeja.</p>

                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.3	A <strong>Promotora</strong> poderá entrar em contato com os ganhadores durante os procedimentos de apuração, por meio de seus dados cadastrados junto à SKY, para solicitar documentos para comprovar a regularidade de suas participações e, assim efetuar a sua classificação.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.3.1	Caso os documentos apresentados sejam insuficientes para comprovar a regularidade da participação ou ainda a <strong>Promotora</strong> verifique no momento da apuração que o participante não preencheu os requisitos de participação, haverá a sua desclassificação e a <strong>Promotora</strong> poderá retirar no ato do sorteio um novo cupom que atenda aos requisitos de participação.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.3.1.1	Em caso de desclassificação encerrada a apuração, o valor equivalente ao prêmio será recolhido como renda aos Cofres da União.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.3.2	Os documentos enviados deverão ser legíveis e não possuir rasuras, sob pena de desclassificação imediata.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>8.4	A <strong>Promotora</strong> poderá solicitar o contato de alguém próximo aos ganhadores para que, na impossibilidade de serem contatados nas próximas oportunidades, tenha alguém de sua confiança para transmitir recados da <strong>Promotora</strong>, para que não haja prejuízo na entrega do prêmio no prazo definido em lei.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>9.	FORMA DE DIVULGAÇÃO DO RESULTADO</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>9.1	Os ganhadores serão comunicados do resultado da <strong>Promoção</strong> pelo telefone de cadastro, envio de e-mail, telegrama ou carta com aviso de recebimento (AR), no prazo máximo de 10 (dez) dias úteis da data da apuração, de acordo com os dados cadastrais informados na <strong>Promoção</strong> ou constantes de sua assinatura.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>9.2	O resultado da <strong>Promoção</strong> e os nomes dos ganhadores serão divulgados no endereço www.promocaoskycinemax.com.br no prazo de até 15 (quinze) dias úteis após a data da apuração.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>10.	LOCAL ONDE OS PRÊMIOS SERÃO EXIBIDOS</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>10.1	Os prêmios em Kits Sky não poderão ser visualizados. Os televisores poderão ser visualizados em quaisquer sites de lojas que os comercializem, bem como estabelecimentos físicos.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>10.2	A <strong>Promotora</strong> comprovará a aquisição, por meio de notas fiscais, conforme o artigo 34, inciso I da Portaria/MF nº 41/2008 do Ministério da Fazenda.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>11.	FORMA DE ENTREGA DOS PRÊMIOS</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.1	Os prêmios serão entregues no endereço dos ganhadores, conforme constarem na base de dados da <strong>Promotora</strong>, sem qualquer tipo de ônus, em até 30 (trinta) dias após a data da apuração, conforme artigo 5°, do Decreto nº 70.951/72.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.2	No ato da comunicação ou recebimento dos televisores, os ganhadores deverão assinar o recibo de entrega do respectivo prêmio. Neste ato, deverão ainda, apresentar e entregar cópia do seu RG e CPF que, juntamente com o recibo, constituirão prova de entrega do prêmio, os quais serão mantidos sob guarda, pelo prazo de 03 (três) anos, após o término da <strong>Promoção</strong>. Por sua vez, para os prêmios Kits Sky, o ganhador deverá confirmar seus dados para registro em planilha a ser enviada à REPCO para prestação de contas.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.3	Na hipótese do ganhador não poder receber pessoalmente o prêmio, por qualquer razão, será admitida sua representação, por meio de procuração, em conformidade com a legislação vigente. Deverá o ganhador constituir Procurador por meio de mandato, por instrumento público ou particular, com firma reconhecida e poderes específicos para o fim que se destina.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.4	Na hipótese de falecimento do ganhador antes da entrega do prêmio, este será entregue ao seu espólio, na pessoa do inventariante, desde que fique comprovada tal condição dentro do prazo de prescrição dos prêmios estabelecido na Lei e nesse Regulamento.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.5	A documentação pessoal que se fizer necessária ao recebimento do prêmio será de inteira responsabilidade do ganhador.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.6	Após a entrega dos prêmios, a <strong>Promotora</strong> não se responsabiliza pelos danos ocorridos. Caso estes apresentem falhas ou tenham sofrido algum dano, o ganhador deverá entrar em contato diretamente com a assistência técnica.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.7	Os prêmios serão distribuídos livres e desembaraçados de quaisquer ônus para os ganhadores e não poderão ser substituídos ou trocados por dinheiro, ou por qualquer outro item não descrito neste Regulamento.</p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>11.8	Os prêmios são pessoais e intransferíveis e em nenhuma hipótese, poderão ser transferidos para terceiros.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>12.	CANAIS E FORMAS DE DIVULGAÇÃO INSTITUCIONAL PELA MÍDIA</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>12.1	A <strong>Promoção</strong> será divulgada por meio dos canais: (i) canal do cliente, cross channel, através de comunicação em vídeo, (ii) peças de comunicação no site da SKY e no canal do cliente; (iii) e-mail para endereços eletrônicos dos clientes cadastrados na base da <strong>Promotora</strong>; (iv) decoder; (v) aplicativo “MINHA SKY” (vi) redes sociais oficias da <strong>Promotora</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>13.	PRAZO DE PRESCRIÇÃO DOS PRÊMIOS</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>13.1	Caso o prêmio não seja reclamado no prazo de 180 (cento e oitenta) dias, contados da data do término da <strong>Promoção</strong>, caducará o direito do respectivo titular e o valor correspondente será recolhido pela <strong>Promotora</strong> ao Tesouro Nacional, como renda da União, em até 10 (dez) dias passados da data do término do prazo prescricional.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>14.	DESCLASSIFICAÇÃO DE PARTICIPANTES</strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>14.1	A participação nesta <strong>Promoção</strong> implica a total aceitação, sem ressalvas nem restrições, deste Regulamento, assim como das leis e regulamentos aplicáveis.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>14.2	Todos os participantes deverão observar as condições, formas e prazos de participação, sendo sumariamente desclassificados os Participantes que descumprirem quaisquer regras desse Regulamento, que efetuem o procedimento de cadastro com dados falsos ou ajam em qualquer etapa da <strong>Promoção</strong>, com falta de decoro, falta de urbanidade, ou, ainda, cometam qualquer tipo de suspeita de fraude, incluindo, mas não se limitando a, à criação, benefício e utilização de ferramentas automatizadas com o intuito de alterar os resultados da <strong>Promoção</strong>, ficando, ainda, sujeitos à responsabilização penal e civil.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>14.3	Qualquer participante que tente interferir no sistema da <strong>Promoção</strong> de qualquer forma, para ganhar ou tentar ganhar cupons extras, será desclassificado da <strong>Promoção</strong>. Qualquer declaração falsa de um Participante provocará sua desclassificação da <strong>Promoção</strong> sem qualquer responsabilidade da <strong>Promotora</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>14.4	Serão desclassificados os participantes que estiverem inadimplentes em até um dia antes da data da apuração.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>15.	DÚVIDAS, CONTROVÉRSIAS E RECLAMAÇÕES.
                                    </strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>15.1	As dúvidas e controvérsias oriundas de reclamação dos Participantes da <strong>Promoção</strong> deverão ser preliminarmente dirimidas pela <strong>Promotora</strong>, por meio do e-mail faleconosco@promocaoskycinemax.com.br.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>15.2	Persistindo-as serão submetidas à Representação de Promoções Comerciais (REPCO/CAIXA) e/ou aos órgãos integrantes do Sistema Nacional de Defesa do Consumidor.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>16.	PROPRIEDADE INTELECTUAL
                                    </strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>16.1	A reprodução e representação de todos ou de parte dos sinais distintivos que fazem parte da <strong>Promoção</strong> são estritamente proibidas, uma vez que são de titularidade da <strong>Promotora</strong> ou a ela estão licenciados.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>16.2	Qualquer reprodução não autorizada destes sinais distintivos constitui ou pode constituir uma infração passível de sanções cíveis e/ou penais.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p><strong>17.	DISPOSIÇÕES GERAIS
                                    </strong></p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.1	A participação na <strong>Promoção</strong> é voluntária e implicará a aceitação total e irrestrita de todos os itens deste Regulamento. Não terão validade as participações que não preencherem as condições básicas da <strong>Promoção</strong> previstas neste Regulamento.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.2	A participação na <strong>Promoção</strong> implica também o conhecimento e aceitação pelo Participante das características e dos limites da rede de Internet, especialmente no que se refere aos desempenhos técnicos, tempo de resposta para consultar, analisar ou transferir informações, riscos de interrupção, riscos relacionados com a conexão, ausência de proteção de determinados dados contra eventuais coletas não autorizada e riscos de contaminação por eventuais vírus que circulam na rede de Internet. A <strong>Promotora</strong> não será considerada responsável pelas falhas que possam afetar a rede de Internet, qualquer problema de configuração ou relacionado com um determinado navegador, entre outros.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.3	A participação não poderá ser cancelada após a inscrição na <strong>Promoção</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.4	Os Participantes concordam em ceder neste ato, gratuitamente, os direitos de uso do seu nome, imagem e voz à <strong>Promotora</strong>, em quaisquer mídias físicas ou eletrônicas, tais como, mas não se restringindo a, DVD, revistas, jornais, website, newsletter, redes sociais, TV aberta ou fechada, rádio, entre outras mídias existentes, ou que venham a ser criadas, sem restrição de frequência, para uso institucional ou comercial, exclusivo dessa <strong>Promoção</strong>, pelo período de 12 (doze) meses a contar do final da <strong>Promoção</strong> sem que isso implique qualquer tipo de pagamento ou ônus pela <strong>Promotora</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.5	OS PARTICIPANTES AUTORIZAM A UTILIZAÇÃO DE SEUS ENDEREÇOS FÍSICOS, ELETRÔNICOS, TELEFONES E DEMAIS DADOS INFORMADOS COM O PROPÓSITO DE FORMAÇÃO DE CADASTRO, REFORÇO DE MÍDIA PUBLICITÁRIA E DIVULGAÇÃO DA PRÓPRIA PROMOÇÃO, NOS LIMITES DO CÓDIGO DE DEFESA DO CONSUMIDOR, SEM NENHUM ÔNUS PARA A <strong>PROMOTORA</strong>, SENDO QUE, NO ENTANTO, DE ACORDO COM O QUE DISPÕE O ARTIGO 11 DA PORTARIA MF Nº 41/2008, A <strong>PROMOTORA</strong> É EXPRESSAMENTE VEDADA DE COMERCIALIZAR OU CEDER OS DADOS COLETADOS NESSA PROMOÇÃO.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.6	Os dados coletados estarão armazenados em ambiente seguro, observado o estado da técnica disponível, e somente poderão ser acessados por pessoas qualificadas e previamente autorizadas pela <strong>Promotora</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.7	A <strong>Promotora</strong> processa e armazena os dados de tráfego e de conexão ao hotsite da <strong>Promoção</strong>, principalmente, a identificação (endereço IP) do dispositivo utilizado pelo Participante com o objetivo de gerar estatísticas de acesso ao hotsite, garantir a segurança da <strong>Promoção</strong>, assim como verificar a correta participação, garantindo sua conformidade em relação a este Regulamento, e na prevenção ou detecção de acessos automáticos em seus sistemas, levando assim à exclusão do Participante envolvido nesta atividade.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.8	Fica acordado que os dados existentes nos sistemas de informação da <strong>Promotora</strong> possuem valor probatório em relação à data e hora de conexão, aos elementos de conexão e das informações resultantes do processamento de dados relativo a esta <strong>Promoção</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.9	A <strong>Promotora</strong> não será responsável por problemas, falhas ou funcionamento técnico, de qualquer tipo, em redes de computadores, servidores ou provedores, equipamentos de computadores, celulares, tablets, hardware ou software, ou erro, interrupção, defeito, intervenção, intrusão externa e não autorizada, atraso ou falha em operações ou transmissões para o correto processamento de seus sistemas, incluindo, mas não se limitando, congestionamento na Internet, vírus, falha de programação (bugs) ou violação por terceiros (hackers).
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.10	A <strong>Promotora</strong> não se responsabiliza pela autenticidade dos dados fornecidos pelos Participantes.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.11	A prestação de contas, após o encerramento da <strong>Promoção</strong>, deverá ser encaminhada à REPCO dentro do prazo legal estabelecido na Portaria nº 41, de 2008.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.12	Conforme o artigo 70 da Lei nº. 11.196, de 21 de novembro de 2005, a <strong>Promotora</strong> recolherá 20% (vinte por cento) de Imposto de Renda Retido na Fonte (IRRF) sobre o valor dos prêmios, até o terceiro dia útil subsequente ao decêndio de ocorrência dos fatos geradores.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.13	Fica, desde já, eleito o foro do Participante para solução de quaisquer questões referentes ao Regulamento da presente <strong>Promoção</strong>.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div>
                                <p>17.14	A <strong>Promotora</strong> compromete-se a incluir o número do Certificado de Autorização CAIXA, de forma clara e precisa em todos os materiais de divulgação desta <strong>Promoção</strong>, conforme determina o artigo 28 da Portaria/MF nº 41/2008.
                                </p>
                            </div>
                            <div class="mt-10"></div>
                            <div class="text-center">
                                <p><strong>Certificado de Autorização CAIXA nº 6-6630/2018
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- /MODAL REGULAMENTO-->

        <!-- MODAL DUVIDAS -->
        <div class="modal bounceInDown animated bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top-20"></div>
                    <div class="text-center">
                        <h1 class="titlePar">DÚVIDAS</h1>
                        <p class="subFaq">“PROMOÇÃO SKY ENTRE NO MODO CINEMAX”</p>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        1 - Quando posso participar da promoção?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Das 12hs de 30 de julho de 2018 até às 23h59 (vinte e três horas e cinquenta e nove minutos) do dia 27 de agosto de 2018, horário oficial de Brasília.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        2 - Quando acontece a apuração dos ganhadores da promoção?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">No dia 12/09/2018, às 10h.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        3 - Quais são os prêmios?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    3.1 15 (quinze) televisores de 49” polegadas, 4K, da marca LG, modelo SmartTV WFI B, ou similar no valor de R$ 2.228,70 (Dois mil duzentos e vinte e oito reais e setenta centavos). <br>
                                    3.2. 100 (cem) kits Sky, no valor de R$ 320,80 (trezentos e vinte reais e oitenta centavos, contendo: (i) uma pipoqueira, (ii) uma almofada bandeja.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        4 - Quem pode participar?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Assinantes da modalidade SKY PÓS-PAGO, ativos, adimplentes, pessoas físicas maiores de 18 (dezoito) anos, capazes, residentes e domiciliadas no Brasil que ao longo do período de participação, cumpram com todas as regras do Plano de Operação.<br>
                                    Novos assinantes que vierem a contratar os serviços da modalidade SKY PÓS-PAGO via “Assine Online”, por meio do link assine.sky.com.br ou nos pontos de venda autorizados e que efetuarem o pagamento de suas faturas mensais em dia. A participação, nesse caso, será efetivada após a comprovação do pagamento.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                        5 - Preciso estar com o pagamento da minha fatura em dia?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">Sim, o assinante deverá estar adimplente e ter realizado o pagamento de todas suas faturas até a data de vencimento durante todo o período de participação na promoção até um dia antes da apuração.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                        6 - O que acontece se eu for selecionado e não estiver adimplente?</a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">Se for selecionado e não estiver adimplente em até um dia antes da apuração, você será desclassificado e será selecionado o próximo assinante participante que esteja adimplente e que tenha preenchido os demais requisitos de participação da promoção.</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                        7 - Como posso participar?</a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Durante o período de participação da Promoção, o assinante interessado em participar poderá se inscrever pelos sites disponíveis nos endereços www.sky.com.br/promocoes ou www.promocaoskycinemax.com.br, inserir as informações solicitadas a título de inscrição na Promoção e responder a seguinte pergunta:
                                    “Com qual TV por assinatura você concorre à 15 TVs 4K para assistir a incrível programação do Canal Cinemax?”<br/>
                                    <span class="text-center">(     ) SKY ou  (      ) Outras</span><br/>
                                    O Participante que tiver sua inscrição confirmada na Promoção receberá a mensagem na própria tela do site: “Inscrição concluída com sucesso, boa sorte!”.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                        8 - Eu vou receber uma confirmação da minha participação?</a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">Sim, você receberá a seguinte mensagem: “Inscrição concluída com sucesso, boa sorte!”.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                        9 - Caso eu não receba a mensagem de confirmação de participação, qual canal devo contatar?</a>
                                </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">Entre em contato por meio do faleconosco@promocaoskycinemax.com.br.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                        10 - Ao participar estou aceitando todo o regulamento?</a>
                                </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">Sim, a participação na <strong>Promoção</strong> é voluntária e implicará a aceitação total e irrestrita de todos os itens deste Regulamento.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                                        11 - Tenho sinal SKY, já estou participando?</a>
                                </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">Não, pois a participação na <strong>Promoção</strong> não é automática. O mero sinal ativo da SKY na televisão e/ou modem do assinante não garante a sua participação na <strong>Promoção</strong>. Para participar e concorrer aos prêmios é necessário se inscrever e estar adimplente no momento do cadastro e durante todo o período de participação na promoção.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
                                        12 - Quem não pode participar?</a>
                                </h4>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse">
                                <div class="panel-body">Assinantes das modalidades SKY PÓS-PAGO que estiverem inadimplentes, assinantes exclusivos do serviço de banda larga SKY, titulares e dependentes dos pacotes SKY PRÉ-PAGO; pessoas incapazes, pessoas jurídicas; funcionários da <strong>Promotora</strong>; funcionários das agências de propaganda e <strong>Promoção</strong> que mantém contrato com a <strong>Promotora</strong> e/ou quaisquer outras empresas envolvidas na presente <strong>Promoção</strong>.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                                        13 - E se eu não puder participar e ainda sim conseguir me inscrever?</a>
                                </h4>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse">
                                <div class="panel-body">A sua inscrição não será considerada para fins de participação e premiação na <strong>Promoção</strong>.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
                                        14 - Em que situações alguém pode ser desclassificado?</a>
                                </h4>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse">
                                <div class="panel-body">Serão sumariamente desclassificados os Participantes que descumprirem quaisquer regras do Regulamento.<br>
                                    Também serão desclassificados os participantes que agirem no procedimento de cadastro com dados falsos ou em qualquer momento da Promoção, com falta de decoro, falta de urbanidade, ou, ainda, que cometerem qualquer tipo de suspeita de fraude, incluindo, mas não se limitando a, à criação, benefício e utilização de ferramentas automatizadas com o intuito de alterar os resultados da <strong>Promoção</strong>, ficando, ainda, sujeitos à responsabilização penal e civil.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                                        15 - Como serão escolhidos os ganhadores?</a>
                                </h4>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse">
                                <div class="panel-body">Por meio da extração aleatória dos cupons das participações havidas.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
                                        16 - Como saberei se sou um dos ganhadores?</a>
                                </h4>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse">
                                <div class="panel-body">A <strong>Promotora</strong> entrará em contato com os possíveis ganhadores na data da apuração para validação e verificação dos procedimentos de elegibilidade. Esteja a postos no dia da apuração, pois os atendentes Sky poderão entrar em contato para validar a sua participação na <strong>Promoção</strong>.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                                        17 - Onde poderei consultar o resultado da promoção?</a>
                                </h4>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse">
                                <div class="panel-body">O resultado da <strong>Promoção</strong> e os nomes dos ganhadores serão divulgados no endereço www.promocaoskycinemax.com.br no prazo de até 15 (quinze) dias úteis após a data da apuração.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">
                                        18 - Quais documentos serão necessários para receber meu prêmio?</a>
                                </h4>
                            </div>
                            <div id="collapse18" class="panel-collapse collapse">
                                <div class="panel-body">Os ganhadores dos televisores deverão entregar cópia do seu RG e CPF e assinar um Termo de Recebimento e Quitação de Premiação.
                                    Os ganhadores dos Kits Sky deverão apresentar RG e CPF.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">
                                        19 - Posso dar o prêmio como presente?</a>
                                </h4>
                            </div>
                            <div id="collapse19" class="panel-collapse collapse">
                                <div class="panel-body">O recebimento do prêmio é ato intransferível, contudo, após o recebimento você poderá dispor da sua premiação da maneira que melhor lhe convir.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">
                                        20 - Em quanto tempo os prêmios serão entregues?</a>
                                </h4>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse">
                                <div class="panel-body">Os prêmios serão entregues em até 30 dias da data da apuração.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">
                                        21 - Posso trocar meu prêmio por dinheiro?</a>
                                </h4>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse">
                                <div class="panel-body">Por lei, no Brasil, o prêmio não poderá ser convertido em dinheiro.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">
                                        22 - Caso o ganhador venha falecer, como proceder?</a>
                                </h4>
                            </div>
                            <div id="collapse22" class="panel-collapse collapse">
                                <div class="panel-body">Na hipótese de falecimento do Contemplado antes da entrega do prêmio, este será entregue ao seu espólio, na pessoa do inventariante, desde que fique comprovada tal condição dentro do prazo de prescrição dos prêmios estabelecido na Lei e no Regulamento da <strong>Promoção</strong>.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse23">
                                        23 - A SKY pode usar minha imagem, som da voz e nome na divulgação de materiais publicitários e institucionais?</a>
                                </h4>
                            </div>
                            <div id="collapse23" class="panel-collapse collapse">
                                <div class="panel-body">Sim, os contemplados cedem gratuitamente à SKY os direitos de uso de seu nome, imagem e som de voz, pelo período de 01 (um) ano contados do final da <strong>Promoção</strong>, sem restrição de frequência.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse24">
                                        24 - Minha dúvida não foi respondida aqui, a quem posso recorrer?</a>
                                </h4>
                            </div>
                            <div id="collapse24" class="panel-collapse collapse">
                                <div class="panel-body">Dúvidas podem ser esclarecidas no site da <strong>Promoção</strong> ou pelo e-mail faleconosco@promocaoskycinemax.com.br.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse25">
                                        25 - Como será divulgada a Promoção?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse25" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A Promoção será divulgada por meio dos canais: (i) canal do cliente, cross channel, através de comunicação em vídeo, (ii) peças de comunicação no site da SKY e no canal do cliente; (iii) e-mail para endereços eletrônicos dos clientes cadastrados na base da Promotora; (iv) decoder; (v) aplicativo “MINHA SKY” (vi) redes sociais oficias da Promotora
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse26">
                                        26 - Essa promoção foi autorizada pela Caixa?</a>
                                </h4>
                            </div>
                            <div id="collapse26" class="panel-collapse collapse">
                                <div class="panel-body">Sim, por meio do Certificado de Autorização Caixa nº 6-6630/2018.</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- /MODAL DUVIDAS-->

        <!-- MODAL CONTATO -->
        <div class="modal bounceInDown animated bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top-20"></div>
                    <div class="col-md-12 col-lg-7 col-lg-offset-2 text-center">
                        <h1 class="titlePar">CONTATO</h1>
                        <p class="subFaq">Não deixe de informar corretamente seu endereço de email para que possamos retornar o mais breve possível. Agradecemos seu contato!</p>
                    </div>
                    <div class="col-md-12">
                        <form class="form-horizontal" id="contato" name="contato" role="form" method="post" action="<?=basename($_SERVER['PHP_SELF'])?>">
                            <input type="hidden" name="act" value="7hswbdw378dsnas810">
                            <div class="">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="">
                                        <div class="">
                                            <div class="mensagemSucesso">
                                                <?=@$resultado?>
                                            </div>
                                            <div class="form-group formContato">
                                                <div class="col-xs-12 retira-margem">
                                                    <input type="CPF do titular Sky" class="form-control cpf_mask" id="cpf" name="cpf" placeholder="* DIGITE SEU CPF">
                                                </div>
                                            </div>
                                            <div class="form-group formContato">
                                                <div class="col-xs-12 retira-margem">
                                                    <input type="nome" class="form-control" id="nome" name="nome" placeholder="* NOME COMPLETO">
                                                </div>
                                            </div>
                                            <div class="form-group formContato">
                                                <div class="col-xs-12 retira-margem">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="* E-MAIL">
                                                </div>
                                            </div>
                                            <div class="form-group formContato" style="height: 30px">
                                                <div class="col-xs-12 retira-margem">
                                                    <select class="form-control" id="assunto" name="assunto" placeholder="* ASSUNTO">
                                                        <option>* ASSUNTO</option>
                                                        <option value="Elogios">Elogios</option>
                                                        <option value="Dúvidas">Dúvidas</option>
                                                        <option value="Reclamações">Reclamações</option>
                                                        <option value="Sugestões">Sugestões</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group formMensagem">
                                                <div class="col-xs-12 classText retira-margem">
                                                    <textarea style="height: 140px" class="form-control form-controlMessage" rows="1" name="mensagem" placeholder="* MENSAGEM"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12 retira-margem text-center">
                                                    <p class="obrig pull-left">* campos obrigatórios</p>
                                                    <div class="clearfix"></div>
                                                    <button type="submit" class="btnEnviar pull-right center-block">ENVIAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
