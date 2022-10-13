<?php
//include 'java.php';
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <?php
    //if (!isset($_REQUEST['cn']))
    //echo '<meta http-equiv="refresh" content="15">';
    ?>

    <title>Axtelecom - Webtv</title>

    <style type="text/css">
    </style>



</head>

<body>


    <style type="text/css">
        .box {
            border-style: solid;
            border-width: 1px;
            display: block;
            width: 100px;
            height: 100px;
            background-color: #0000FF;
            -webkit-transition: width 2s, height 2s, background-color 2s, -webkit-transform 2s;
            transition: width 2s, height 2s, background-color 2s, transform 2s;
        }

        .box:hover {
            background-color: #FFCCCC;
            width: 200px;
            height: 200px;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .delay {
            font-size: 14px;
            transition-property: font-size;
            transition-duration: 4s;
            transition-delay: 2s;
            font-size: 36px;
        }

        .delay:hover {
            font-size: 36px;
        }

        .oculto {
            opacity: "0"
        }

        .visivel {
            opacity: "1";
            width: 100%;
            height: 10%;
            background-color: #cccccc;
        }

        body {
            /**background-image: url("https://i.ibb.co/xY0wTVb/mascara.png");*/
            background-color: #FFFFFF;
            /**background-color: #000000;*/
            height: 1080px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;

            background: -moz-linear-gradient(top, #E1E1E1 0%, #D1D1D1 50%, #FFFFFF 51%, #F1F1F1 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e5799), color-stop(50%, #2989d8), color-stop(51%, #207cca), color-stop(100%, #7db9e8));
            background: -webkit-linear-gradient(top, #E1E1E1 0%, #D1D1D1 50%, #FFFFFF 51%, #F1F1F1 100%);
            background: -o-linear-gradient(top, #E1E1E1 0%, #D1D1D1 50%, #FFFFFF 51%, #F1F1F1 100%);
            background: -ms-linear-gradient(top, #E1E1E1 0%, #D1D1D1 50%, #FFFFFF 51%, #F1F1F1 100%);
        }

        .seg_body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background-image: url("https://i.ibb.co/xY0wTVb/mascara.png");
        }

        .mascara {
            align-items: center;
            width: 100%;
            background-color: green;
            vertical-align: middle;
        }

        .imagem_noticia {
            display: flex;
            justify-content: center;
            align-items: center;

            position: absolute;
            top: 100px;
            left: 25%;
            width: 50%;
        }

        .quadro {
            animation: go-back 1.5s;
            filter: alpha(opacity=0);
            opacity: 0.8;
            /**background-color: #B0E0E6;*/
            border-radius: 15px;
            position: absolute;
            top: 81%;
            left: 15%;
            width: 70%;
            height: 17%;
            vertical-align: middle;

            /** 
            background: -webkit-gradient(linear, left top, right top, from(#CCCCCC), to(#000000)) no-repeat;
            background: -moz-linear-gradient(left, #CCCCCC, #000000);
            filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#CCCCCC', EndColorStr='#000000');
            */

            /** 
            background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(51%,#207cca), color-stop(100%,#7db9e8));
            background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
            background: -o-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
            background: -ms-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%);
            */

            background: -webkit-gradient(linear, left top, left bottom, from(#CCCCCC), to(#000000));
            background: -moz-linear-gradient(top, #CCCCCC, #000000);
            filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#CCCCCC', EndColorStr='#000000');
        }

        .quadro_descricao {
            animation: go-back2 0.5s;
            filter: alpha(opacity=100);
            opacity: 0.8;
            background-color: black;
            color: white;
            border-radius: 0px;
            position: absolute;
            top: 10%;
            left: 74%;
            width: 25%;
            height: 60%;
            text-align: center;
            vertical-align: middle;
        }

        .logo_ax {
            animation: go-back2 0.5s;
            filter: alpha(opacity=50);
            opacity: 0.8;
            /**background-color: black;*/
            border-radius: 4px;
            position: absolute;
            top: 87%;
            left: 87%;
            width: 9.5%;
            height: 12.9%;
            text-align: center;
            vertical-align: middle;
            padding-top: 7px;
            padding: 4px;
        }

        .data-atual {
            animation: go-back2 0.5s;
            filter: alpha(opacity=50);
            opacity: 0.8;
            border-radius: 4px;
            position: absolute;
            top: 94%;
            left: 86%;
            width: 12.5%;
            height: 3.5%;
            text-align: center;
            vertical-align: middle;
            /**padding-top: 0px;
            padding: 0px;**/
        }

        .hora-atual {
            animation: go-back2 0.5s;
            filter: alpha(opacity=50);
            opacity: 0.8;
            border-radius: 4px;
            position: absolute;
            top: 94%;
            left: 86%;
            width: 12.5%;
            height: 3.5%;
            text-align: center;
            vertical-align: middle;
            /**padding-top: 0px;
            padding: 0px;**/
        }

        .temp-atual {
            animation: go-back2 0.5s;
            filter: alpha(opacity=50);
            opacity: 0.8;
            border-radius: 4px;
            position: absolute;
            top: 94%;
            left: 86%;
            width: 12.5%;
            height: 3.5%;
            text-align: center;
            vertical-align: middle;
            /**padding-top: 0px;
            padding: 0px;**/
        }

        .logo_rss {
            filter: alpha(opacity=50);
            opacity: 0.8;
            animation: go-back2 0.5s;
            position: absolute;
            top: 81%;
            left: 1%;
            width: 12%;
            height: 17%;
            text-align: center;
            vertical-align: middle;
        }

        .seg_logo_rss {
            animation: go-back 0.5s;
            position: absolute;
            top: 81%;
            left: 1%;
            width: 12%;
            /**background-color: green;*/
            text-align: center;
            vertical-align: middle;
        }

        .clock {
            filter: alpha(opacity=0);
            opacity: 0.8;

            font-size: 24px;
            /**width: 900px;*/
            /**margin: 200px;*/

            position: absolute;
            top: 1%;
            left: 1%;
            width: 10%;
            height: 5%;

            text-align: center;
            border: 1px inset black;
            border-radius: 20px;

            color: white;

            background: -webkit-gradient(linear, left top, left bottom, from(#CCCCCC), to(#000000));
            background: -moz-linear-gradient(top, #CCCCCC, #000000);
            filter: progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#CCCCCC', EndColorStr='#000000');
        }






        
        @keyframes go-back {
            from {
                transform: translateX(300px);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes go-back2 {
            from {
                transform: translateY(300px);
            }

            to {
                transform: translateY(0);
            }
        }











        .img {
            margin-left: 50%;
            margin-top: 1%;
        }

        span {
            font-size: 12px;
            color: white;

        }

        .row {
            width: 100%;

        }

        .text {

            padding: 2%;
            color: white;

        }
    </style>



    <?php

    /*
    ini_set('display_errors', 1);
    ini_set('display_startup_erros', 1);
    error_reporting(E_ALL);
    */

    //
    //Dica para encontrar caminho xml: jovem pan webnode xml
    //

    //echo '<input type="text" id="rel_v1" class="clock">';

    $link = "";

    $vaux_logo_rss = "";

    //$vpath_logos = "https://operacao.axtelecom.com.br/axmanager/app/output/webtv/logos_canais/";
    $vpath_logos = "http://localhost/template-ax/template-ax\logos";

    //array("olhar_digital", "https://olhar-digital-online.webnode.page/rss/all.xml",         "olhar_digital.jpg"),

    $array_links = array(
        array("bbc",           "http://www.bbc.co.uk/portuguese/index.xml",                     "bbc.png"),
        array("cnn_br",        "https://cnnbrasiltv.webnode.com.br/rss/noticias.xml",           "cnn_br.png"),
        array("folha_sp",      "https://feeds.folha.uol.com.br/comida/rss091.xml",              "folha_sp.png"),
        array("olhar_digital", "https://olhar-digital-online.webnode.page/rss/novidades.xml",   "olhar_digital.png"),
        array("uol",           "https://www.uol.com.br/esporte/futebol/clubes/corinthians.xml", "uol.png"),
        array("espn_br",       "https://espnbrasiloficial.webnode.pt/rss/noticias.xml",         "espn_br.png"),
        array("ge",            "https://globoesporte-net.webnode.page/rss/noticias.xml",        "ge.png"),
        array("jp",            "https://jovem-pan9.webnode.page/rss/noticias.xml",              "jp.png"),
        array("rede_record",   "https://rede-record.webnode.com.br/rss/noticias.xml",           "r7.png"),
        array("g1",            "https://g1.globo.com/dynamo/brasil/rss2.xml",                   "g1.png"),
        array("tecmundo",      "https://tecmundo.webnode.com.br/rss/destaques.xml",             "tecmundo.png")
    );

    if (isset($_REQUEST['cn'])) {
        $vaux_cn = trim($_REQUEST['cn']);
        foreach ($array_links as $array_link) {
            if ($vaux_cn == trim($array_link[0])) {
                $vaux_logo_rss = trim($array_link[2]);
                $link = $array_link[1];
                $logo_rss = $vpath_logos . $vaux_logo_rss;
            }
        }
    }

    /*
    if (isset($_REQUEST['link']))
        $link = $_REQUEST['link'];
    */

    if (trim($link) == "") {
        $total_links = count($array_links) - 1;
        $linha_sorteada = rand(0, $total_links);
        $link = $array_links[$linha_sorteada][1];
        $vaux_logo_rss = trim($array_links[$linha_sorteada][2]);
        $logo_rss = $vpath_logos . $vaux_logo_rss;
    }

    $xml = simplexml_load_file($link)->channel;

    //
    $vaux_title = $xml->title;
    //$vaux_title = explode('>', $vaux_title)[1];
    $vaux_title = str_replace(">", " - ", $vaux_title);
    //

    $vaux_width = "100%";

    if ($vaux_logo_rss == "") {
        //$category_title = "";
        foreach ($xml->image as $img) {
            $vaux_logo_rss = $img->url;
            $logo_rss = $vaux_logo_rss;
            //$category_title = substr($img->title, 2, 100);
        }
        $vaux_width = "50%";
    }

    if ($vaux_logo_rss == "") {
        $logo_rss = $vpath_logos . "logo_padrao_tv.png";
        $vaux_width = "100%";
    }
    //

    $i = 0;

    $qtdelinks = 1;

    $qtde_items = count($xml->item) - 1;

    $j = rand(0, $qtde_items);

    $imagem_fundo_padrao = "https://static.wixstatic.com/media/6f6fc9_a0c601af69c04c00b68778865ced551b~mv2.jpg/v1/fill/w_1349,h_696,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/6f6fc9_a0c601af69c04c00b68778865ced551b~mv2.jpg";

    foreach ($xml->item as $item) {

        /*
        if (trim($item->title) == "") {
            header("Refresh:0");
        }
        */

        //if ($i < $qtdelinks) {
        if ($i == $j) {

            //
            $descr = $item->description;
            $dom = new DOMDocument();
            $dom->loadHTML($descr);
            if (!$dom) {
                die('Error loading HTML string.');
            }
            $xml2 = simplexml_import_dom($dom);
            //$imgSrc = (string)$xml->body->div->a->img['src'];
            //var_dump($imgSrc);
            $vaux_descricao = (string)$xml2->body;
            $vaux_descricao = utf8_decode($vaux_descricao);
            //

            $descr = $item->description;

            if (trim($descr) != "") {
                $doc = new DOMDocument;
                $desc = (string) $descr;
                if ($doc->loadHTML($desc)) {
                    $imgs = $doc->getElementsByTagName('img');
                    if ($imgs->length) {
                        $imagem[] = $imgs->item(0)->getAttribute('src');
                    }
                }
                if (trim($imagem[0]) != "") {
                    echo "<div class = 'imagem_noticia'>";
                    echo '  <img style = "width: 100%" src = "' . trim($imagem[0]) . '"</img>';
                    echo "</div>";
                } else {
                    echo "<div class = 'imagem_noticia'>";
                    echo '  <img style = "width: 140%" src = "' . $imagem_fundo_padrao . '"</img>';
                    echo "</div>";
                }
            } else {
                echo "<div class = 'imagem_noticia'>";
                echo '  <img style = "width: 140%" src = "' . $imagem_fundo_padrao . '"</img>';
                echo "</div>";
            }

            //Escrevendo logo do canal e da Axtelecom
            echo "<div class='logo_ax'><img width='100%' src='" . $vpath_logos . "ax.png' />";
            //echo '  <div class="text"> <span id="semana"></span> <span id="data"></span></div>';
            //echo '  <div class="text"> <span class="city"></span> 🌡<span id="temp"></span>°C 💧<span id="umidad"></span>%</div>';
            echo '</div>';
            echo "<div class='logo_rss'><img style='width: " . $vaux_width . "' src='" . $logo_rss . "' /></div>";
            /////////////////////////////////////////


            echo '<div class="data-atual" style="background-color:#008dc4;" id="dataSmart">';
            echo '    <div class="text"> <span id="semana"></span> <span id="data"></span></div>';
            //echo "data";
            echo '</div>';

            echo '<div class="temp-atual" style="background-color:#008dc4;" id="temperatura">';
            echo '    <div class="text"> <span class="city"></span> 🌡<span id="temp"></span>°C 💧<span id="umidad"></span>%</div>';
            //echo "temperatura";
            echo '</div>';

            echo '<div class="hora-atual" style="background-color:#008dc4;" id="horaSmart">';
            echo '    <div class="text"> <span id="rel_v1" style="font-size: 18px;"></span></div>';
            //echo '  <input type="text" id="rel_v1">';
            //echo '    <div class="text"> <input type="text" id="rel_v1"></div>';
            echo '</div>';

            

            /*
            if (trim($vaux_descricao) != "") {
                echo '<div class="quadro_descricao">';
                echo substr($vaux_descricao, 0, 1200);
                echo '</div>';
            }
            */

            //echo trim($item->link);

            //echo '<div class="quadro_descricao">';
            //echo '  <iframe src="' . trim($item->link) . '"/>';
            //echo '</div>';

            //Montando quadro com título do canal e da notícia
            echo '<div id = "rodape_principal" class="quadro">';
            echo "  <div align'left' style='background-color: #000000;'><strong><font size = '6px' color = 'white'>&nbsp;" . $vaux_title . "</font></strong><br /></div>";
            echo "  <div style='vertical-align: middle; border-width: 0px; border-color: black; border-style: solid;' align='center'><strong><font color = '#FFFFFF' size = '5px'>" . $item->title . "</font></strong></div>";
            echo '</div>';
            //////////////////////////////////////////////////

            //echo trim($item->link);
            //echo '<div>';
            //echo '  <iframe src="' . trim($item->link) . '"></frame>';

            //echo '<object data="' . $item->link . '" type="text/html" width="419" height="419" id="axCentro">';

            //echo '<embed src="' . $item->link . '" width="419" height="419" name="recebe"></embed>';

            //echo '</div>';




        }

        $i++;
    }

    ?>



    <script>
        let relogio = document.querySelector('#relogio')
        let h = document.querySelector('#h')
        let m = document.querySelector('#m')
        let s = document.querySelector('#s')

        let hSmart = document.querySelector('#hSmart')
        let mSmart = document.querySelector('#mSmart')
        let sSmart = document.querySelector('#sSmart')

        let data = document.querySelector('#data')
        let semana = document.querySelector('#semana')

        let dataHora = new Date()
        //console.log(dataHora)
        function moveRelogio() {

            let momentoAtual = new Date()

            let hora = momentoAtual.getHours()
            let minuto = momentoAtual.getMinutes()
            let segundo = momentoAtual.getSeconds()

            let strHora = new String(hora)
            let strMinuto = new String(minuto)
            let strSegundo = new String(segundo)

            if (strSegundo.length == 1) segundo = "0" + segundo
            if (strMinuto.length == 1) minuto = "0" + minuto
            if (strHora.length == 1) hora = "0" + hora

            h.textContent = hora
            m.textContent = minuto
            s.textContent = segundo

            //hSmart.textContent = hora
            //mSmart.textContent = minuto
            //sSmart.textContent = segundo

            setTimeout("moveRelogio()", 1000)
        }

        function pegarData() {

            let diaDaSemana = dataHora.getDay()
            let dia = dataHora.getDate()
            let mes = dataHora.getMonth() + 1
            let ano = dataHora.getFullYear()

            let strDia = new String(dia)
            let strMes = new String(mes)

            if (strDia.length == 1) mes = '0' + dia
            if (strMes.length == 1) mes = '0' + mes

            switch (diaDaSemana) {
                case 0:
                    diaDaSemana = 'DOM'
                    break;
                case 1:
                    diaDaSemana = 'SEG'
                    break;
                case 2:
                    diaDaSemana = 'TER'
                    break;
                case 3:
                    diaDaSemana = 'QUA'
                    break;
                case 4:
                    diaDaSemana = 'QUI'
                    break;
                case 5:
                    diaDaSemana = 'SEX'
                    break;
                case 6:
                    diaDaSemana = 'SÁB'
                    break;
            } // fim switch case

            let dataAtual = dia + '/' + mes + '/' + ano

            semana.textContent = diaDaSemana
            data.textContent = dataAtual

        }
        // evocar a funcao
        pegarData()

        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }

        let teste = new Date()

        //console.log(teste.toLocaleString('pt-BR'))
        //console.log(teste.toLocaleString('pt-BR', options))
        //console.log(teste.toLocaleDateString('pt-BR'))
        //console.log(teste.toLocaleTimeString('pt-BR'))

        function getUserPosition() {
            let url = ''
            navigator.geolocation.getCurrentPosition((pos) => {
                let lat = pos.coords.latitude
                let long = pos.coords.longitude
                url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&units=imperial&APPID=622296cd4fda08b69c46ccfa980f968d`
                fetchApi(url)
                //console.log(url)
            })
        }

        function fetchApi(url) {
            let city = document.querySelector('.city')
            let temperature = document.querySelector('#temp')
            let humidity = document.querySelector('#umidad')

            fetch(url)
                .then((data) => {
                    return data.json()
                })
                .then((data) => {
                    let tempInCelsius = ((5 / 9) * (data.main.temp - 32)).toFixed(1);

                    city.textContent = data.name
                    temperature.innerHTML = tempInCelsius
                    humidity.innerHTML = data.main.humidity
                })
                .catch((err) => {
                    city.innerText = `Impossível acessar o OpenWeather. Verifique a sua conexão.`;
                    temperature.innerHTML = `-`;
                })
        }

        getUserPosition();


        //moveRelogio();
    </script>




    <!--
    <input type="button" onclick="mostrar()" value="Mostrar">
    <input type="button" onclick="ocultar()" value="Ocultar">
    <input type="button" onclick="iniciar()" value="Iniciar">
    -->

    <script>
        function mostra_temperatura() {
            document.getElementById("temperatura").style.visibility = "visible";
            document.getElementById("horaSmart").style.visibility = "hidden";
            document.getElementById("dataSmart").style.visibility = "hidden";

            //document.getElementById("temperatura").style.animation = "go-back 0.5s";
            //document.getElementById("dataSmart").style.animation = "go-back2 0.5s";
        }

        function mostra_data() {
            document.getElementById("dataSmart").style.visibility = "visible";
            document.getElementById("temperatura").style.visibility = "hidden";
            document.getElementById("horaSmart").style.visibility = "hidden";

            //document.getElementById("temperatura").style.animation = "go-back2 0.5s";
            //document.getElementById("dataSmart").style.animation = "go-back 0.5s";
        }

        function mostra_hora() {
            document.getElementById("horaSmart").style.visibility = "visible";
            document.getElementById("temperatura").style.visibility = "hidden";
            document.getElementById("dataSmart").style.visibility = "hidden";
            
            //document.getElementById("temperatura").style.animation = "go-back2 0.5s";
            //document.getElementById("dataSmart").style.animation = "go-back 0.5s";
        }

        function iniciar() {
            const timer = (seconds) => {
                let time = seconds * 1000
                return new Promise(res => setTimeout(res, time))
            }

            async function loop_logo() {
                var opc = 0;
                //for (var i = 0; i < 100; i++) {

                for (var i = 0; i > -1; i++) {
                    //console.log("Looping... " + i);
                    //alert("teste");
                    if (opc == 0) {
                        mostra_temperatura();
                        opc = 1;
                    } else if (opc == 1) {
                        mostra_data();
                        opc = 2;
                    } else {
                        mostra_hora();
                        opc = 0;
                    }
                    await timer(1.5);
                }
            }

            loop_logo();
        }

        iniciar();
    </script>







    <script>
        function relogio_v1() {
            var data = new Date();
            var hor = data.getHours();
            var min = data.getMinutes();
            var seg = data.getSeconds();

            if (hor < 10) {
                hor = "0" + hor;
            }
            if (min < 10) {
                min = "0" + min;
            }
            if (seg < 10) {
                seg = "0" + seg;
            }

            var horas = hor + ":" + min + ":" + seg;

            //document.getElementById("rel_v1").value = horas;

            let relogio_v1 = document.querySelector('#rel_v1')
            relogio_v1.textContent = horas;
        }

        var timer = setInterval(relogio_v1, 1000);
    </script>



</body>

</html>