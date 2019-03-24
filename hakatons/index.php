<?php
$error = '';
$datums = '';
$TlSkaits = '';
$velosipeduSk = '';
$gajejuSK = '';
$bojagajusoSk = '';
$smagibojajumiSk = '';
$nepilnbojaSk = '';
$nepilnmiesasSk = '';
$novads = '';
$vieta = '';
$pilseta = '';
$pagasts = '';
$ciems = '';
$iela = '';
$maja = '';
$krustojumaiela = '';
$celanosaukums = '';
$celakm = '';
$Mnumurs = '';
$Mapraksts = '';
$vards = '';
$uzvards = '';
$Tnumurs = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["iesniegt"]))
{
        if(isset($_POST["datums"])){
        $datums = ($_POST["datums"]);
    }
    if(isset($_POST["TlSkaits"])){
        $TlSkaits = ($_POST["TlSkaits"]);
    }
    if(isset($_POST["velosipeduSk"])){
        $velosipeduSk = ($_POST["velosipeduSk"]);
    }
    if(isset($_POST["gajejuSK"])){
    $gajejuSK = ($_POST["gajejuSK"]);
    }
    if(isset($_POST["bojagajusoSk"])){
    $bojagajusoSk = ($_POST["bojagajusoSk"]);
    }
    if(isset($_POST["smagibojajumiSk"])){
    $smagibojajumiSk = ($_POST["smagibojajumiSk"]);
    }
    if(isset($_POST["nepilnbojaSk"])){
    $nepilnbojaSk = ($_POST["nepilnbojaSk"]);
    }
    if(isset($_POST["nepilnmiesasSk"])){
    $nepilnmiesasSk = ($_POST["nepilnmiesasSk"]);
    }
    if(isset($_POST["novads"])){
    $novads = ($_POST["novads"]);
    }
    if(isset($_POST["vieta"])){
    $vieta = ($_POST["vieta"]);
    }
    if(isset($_POST["pilseta"])){
    $pilseta = ($_POST["pilseta"]);
    }
    if(isset($_POST["pagasts"])){
    $pagasts = ($_POST["pagasts"]);
    }
    if(isset($_POST["ciems"])){
    $ciems = ($_POST["ciems"]);
    }
    if(isset($_POST["iela"])){
    $iela = ($_POST["iela"]);
    }
    if(isset($_POST["maja"])){
    $maja = ($_POST["maja"]);
    }
    if(isset($_POST["krustojumaiela"])){
    $krustojumaiela = ($_POST["krustojumaiela"]);
    }
    if(isset($_POST["celanosaukums"])){
    $celanosaukums = ($_POST["celanosaukums"]);
    }
    if(isset($_POST["celakm"])){
    $celakm = ($_POST["celakm"]);
    }
    if(isset($_POST["numurs"])){
    $Mnumurs = ($_POST["numurs"]);
    }
    if(isset($_POST["apraksts"])){
    $Mapraksts = ($_POST["apraksts"]);
    }
    if(isset($_POST["username"])){
    $vards = ($_POST["username"]);
    }
    if(isset($_POST["usersurname"])){
    $uzvards = ($_POST["usersurname"]);
    }
    if(isset($_POST["usermobile"])){
    $Tnumurs = ($_POST["usermobile"]);
    }
    
    
 if($error == '')
 {
  $file_open = fopen("rezultati.csv", "a");
  $no_rows = count(file("rezultati.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  =>              $no_rows,
   'datums' =>              $datums,
   'TlSkaits' =>            $TlSkaits,
   'velosipeduSk' =>        $velosipeduSk,
   'gajejuSK' =>            $gajejuSK,
   'bojagajusoSk' =>        $bojagajusoSk,
   'smagibojajumiSk' =>     $smagibojajumiSk,
   'nepilnbojaSk' =>        $nepilnbojaSk,
   'nepilnmiesasSk' =>      $nepilnmiesasSk,
   'novads' =>              $novads,
   'vieta' =>               $vieta,
   'pilseta' =>             $pilseta,
   'pagasts' =>             $pagasts,
   'ciems' =>               $ciems,
   'iela' =>                $iela,
   'maja' =>                $maja,
   'krustojumaiela' =>      $krustojumaiela,
   'celanosaukums' =>       $celanosaukums,
   'celakm' =>              $celakm,
   'numurs' =>              $Mnumurs,
   'apraskts' =>            $Mapraksts,
   'username' =>            $vards,
   'usersurname' =>         $uzvards,
   'usermobile' =>          $Tnumurs,
  );
  fputcsv($file_open, $form_data, ";");
     $datums = '';
     $TlSkaits = '';
     $velosipeduSk = '';
     $gajejuSK = '';
     $bojagajusoSk = '';
     $smagibojajumiSk = '';
     $nepilnbojaSk = '';
     $nepilnmiesasSk = '';
     $novads = '';
     $vieta = '';
     $pilseta = '';
     $pagasts = '';
     $ciems = '';
     $iela = '';
     $maja = '';
     $krustojumaiela = '';
     $celanosaukums = '';
     $celakm = '';
     $Mnumurs = '';
     $Mapraksts = '';
     $vards = '';
     $uzvards = '';
     $Tnumurs = '';
 }
}


function arrayToCsv(){
    $array = array($datums, $TlSkaits ,$velosipeduSk ,$gajejuSK ,$bojagajusoSk ,$smagibojajumiSk ,$nepilnbojaSk ,$nepilnmiesasSk ,$novads ,$vieta ,$pilseta ,$pagasts ,$ciems ,$iela ,$maja ,$krustojumaiela ,$celanosaukums ,$celakm ,$Mnumurs, $Mapraksts, $vards ,$uzvards ,$Tnumurs);
    
if(count($array) == 0){
    return null;
}
    ob_start();
    $path = "rezultati.csv";
    $df = fopen($path, 'w');
    fputcsv($df, array_keys(reset($array)));
    foreach ($array as $row){
        fputcsv($df, explode(";" , $row), ";");
    }
    fclose($df);
    return ob_get_clean();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="./qgis/resources/ol.css">
        <link rel="stylesheet" href="./qgis/resources/ol3-layerswitcher.css">
        <link rel="stylesheet" href="./qgis/resources/qgis2web.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <title>Ceļu satiksmes negadījumi un pārkāpumi</title>
        
        <script>
            function enableTxtBox1() {
                document.getElementById("pagastsid").disabled = !document.getElementById("pagastsrid").checked;
                document.getElementById("ciemsid").disabled = !document.getElementById("pagastsrid").checked;
                document.getElementById("pilsetaid").disabled = document.getElementById("pagastsrid").checked;
            }

            function enableTxtBox() {
                if (document.getElementById("pagastsrid").checked) {
                    document.getElementById("pagastsid").disabled = false;
                    document.getElementById("ciemsid").disabled = false;
                    document.getElementById("pilsetaid").disabled = true;
                } else if (document.getElementById("pilsetarid").checked) {
                    document.getElementById("pagastsid").disabled = true;
                    document.getElementById("ciemsid").disabled = true;
                    document.getElementById("pilsetaid").disabled = false;
                }
            }
        </script>
    </head>
    
    <body bgcolor="#5CDB95">
        

        <div class="container">
            <div class="row">
                <header>
                    <h1>HOTROAD</h1>
                </header>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <img src="infoimg/rd1.jpg" alt="img1" style="width:100%; border-radius: 5; border: 0.75vw solid #EDF5E1;">
                    <div class="text-block">
                        <h4 style="font-size: 2vw">Pirmās radaru programmas mērķis izpildīts – samazināts bojāgājušo un ievainoto skaits</h4>
                        <p style="font-size: 1.4vw">Ceļu satiksmes drošības direkcija (CSDD) ar labiem rezultātiem noslēgusi valdības deleģēto 100 stacionāro fotoradaru ieviešanas programmu, jo ir izpildīts projekta galvenais mērķis – radaru tuvumā samazināts bojāgājušo un ievainoto skaits. <br>
                            <a target="_blank" href="https://www.csdd.lv/jaunumi/pirmas-radaru-programmas-merkis-izpildits-%E2%80%93-samazinats-bojagajuso-un-ievainoto-skaits">Uz avotu</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <img src="infoimg/rd2.jpg" alt="img2" style="width:100%; border-radius: 5; border: 0.75vw solid #EDF5E1;">
                    <div class="text-block">
                        <h4 style="font-size: 2vw">Vairāk nekā 700 autovadītāju uzlabojuši savas braukšanas prasmes ziemas apstākļos</h4>
                        <p style="font-size: 1.4vw">Ceļu satiksmes drošības direkcijas (CSDD) organizētajās drošas ziemas braukšanas konsultācijās Rīgā, Jelgavā, Tukumā, Rēzeknē, Valmierā, Liepājā un Ventspilī šogad piedalījies rekordskaits cilvēku – vairāk nekā 700 autovadītāju. <br>
                            <a target="_blank" href="https://www.csdd.lv/jaunumi/vairak-neka-700-autovaditaju-uzlabojusi-savas-brauksanas-prasmes-ziemas-apstaklos">Uz avotu</a></p>
                    </div>
                </div>
            </div>
              
            <div class="row">
                <div class="col-sm-12">
                    <img src="infoimg/rd3.jpg" alt="img3" style="width:100%; border-radius: 5; border: 0.75vw solid #EDF5E1;">
                    <div class="text-block">
                        <h4 style="font-size: 2vw">Gada spārnotais teiciens - "Izkāp no telefona!"</h4>
                        <p style="font-size: 1.4vw">Par 2018. gada spārnoto teicienu izvēlēta CSDD kampanas devīze - "Izkāp no telefona!". Akcijas "Gada vārds, nevārds un spārnotais teiciens" rīkotāji informēja, ka "Izkāp no telefona!" par spārnoto teicienu atzīts ne tikai tāpēc, ka tas aizgājis tautā, bet ir arī tāds, kas spārno domāt, pārdomāt un iznākumā rīkoties uz labu. <br>
                            <a target="_blank" href="https://www.csdd.lv/jaunumi/2018-gada-sparnotakais-teiciens-izkap-no-telefona">Uz avotu</a></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="table-responsive">
                    <article>
                    <h2 style="text-shadow: 0.2vw 0.2vw #05386B; font-size: 3vw">Esi ceļa satiksmes negadījuma liecinieks?</h2>
                    <form method="post">
                        <table class="table" border="1" width="50%" style="color: #EDF5E1; font-size: 1vw">
                            <tr>
                                <td align="right">Notikuma datums un laiks</td>
                                <td><input type="datetime-local" name="datums" value="<?php echo $datums; ?>"></td>
                                <td rowspan="17" class="banneris"><a href="http://www.sngo.eu/" target="_blank"><img src="reklama/banerSngo.jpg" height="70%" alt="sngobaner" style=" border-radius: 5; border: 0.75vw solid #EDF5E1;" align="right"></a></td>
                            </tr>

                            <tr>
                                <td align="right">Iesaistīto Tl. skaits</td>
                                <td><input type="number" name="TlSkaits" min="1" max="7" value="<?php echo $TlSkaits; ?>"></td>
                            </tr>

                            <tr>
                                <td align="right">tajā skaitā velosipēdisti?</td>
                                <td>
                                    <input type="checkbox" onclick="document.getElementById('velosipeduSkid').disabled=!this.checked;">
                                    To skaits:
                                    <input type="number" name="velosipeduSk" min="1" max="7" disabled id='velosipeduSkid'>
                                </td>
                            </tr>

                            <tr>
                                <td align="right">Vai iesaistīti gājēji</td>
                                <td><label>
                                        <input type="checkbox" onclick="document.getElementById('gajejuSkid').disabled=!this.checked;">
                                        To skaits:
                                        <input type="number" name="gajejuSK" min="1" max="7" disabled id='gajejuSkid'>
                                    </label></td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    Bojā gājušo sk
                                    <input type="number" name="bojagajusoSk" min="0" max="7" id='gajejuSkid'>
                                    Personas ar smagiem miesas bojājumiem
                                    <input type="number" name="smagibojajumiSk" min="0" max="7">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    Personas ar viegliem miesas bojājumiem
                                    <input type="number" name="vieglibojajumiSk" min="0" max="7">
                                    personas bez miesas bojājumiem
                                    <input type="number" name="bezbojajumiemSk" min="0" max="7">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    Nepilngadīgo bojā gājušo skaits
                                    <input type="number" name="nepilnbojaSk" min="0" max="7">
                                    Nepilngadīgo skaits ar miesas bojājumiem
                                    <input type="number" name="nepilnmiesasSk" min="0" max="7">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    Notikuma vietas novads
                                    <input type="text" name="novads">
                                </td>
                            </tr>

                            <tr>
                                <td align="right">Notikuma vieta</td>
                                <td><label>
                                        <input type="radio" name="vieta" value="pilseta" id='pilsetarid' onclick="enableTxtBox1()">
                                        Pilsēta<br>
                                        <input type="radio" name="vieta" value="pagasts" id='pagastsrid' onclick="enableTxtBox1()">
                                        Pagasts<br>
                                    </label></td>
                            </tr>

                            <tr>
                                <td>
                                    Pilsētas nosaukums
                                    <input type="text" name="pilseta" disabled id='pilsetaid'>
                                </td>
                                <td>
                                    Pagasta nosaukums
                                    <input type="text" name="pagasts" disabled id='pagastsid'>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Ciems<input type="text" name="ciems" disabled id='ciemsid'> </td>
                            </tr>

                            <tr>
                                <td align="right"> Iela</td>
                                <td> <input type="text" name="iela"> <br></td>
                            </tr>

                            <tr>
                                <td align="right">Tuvākā māja</td>
                                <td><input type="text" name="maja"> </td>
                            </tr>

                            <tr>
                                <td align="right">Vai krustojumā</td>
                                <td><label>
                                        <input type="checkbox" onclick="document.getElementById('krustojumsid').disabled=!this.checked;">
                                        Krustojuma iela
                                        <input type="text" name="krustojumaiela" disabled id='krustojumsid'>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td align="right">Vai uz nosaukta ceļa?</td>
                                <td><label>
                                        <input type="checkbox" onclick="document.getElementById('celsid').disabled=!this.checked;document.getElementById('celskmid').disabled=!this.checked;">
                                        Ceļa nosaukums
                                        <input type="text" name="celanosaukums" disabled id='celsid'>

                                        uz
                                        <input type="number" name="celakm" id='celskmid' disabled>
                                        kilometra
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td style=" vertical-align: top">Automašīnu numurzīmes <br><textarea rows="4" cols="50vs" name="numurs"></textarea></td>

                                <td>Automašīnu apraksti un papildus informācija <br><textarea rows="4" cols="50" name="apraksts"></textarea> </td>
                            </tr>

                            <tr>
                                <td align="right">
                                    Jūsu vārds <input type="text" name="username"><br>Jūsu uzvārds <input type="text" name="usersurname"><br>Jūsu telefona numurs <input type="text" name="usermobile">
                                </td>
                                <td>
                                    <div style=" vertical-align: bottom"><input type="submit" value="Iesniegt" name="iesniegt" style="float: right;" /></div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </article>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <h2>Ceļa satiksmes negadījuma un pārkāpumu notikuma vietas</h2>
                    <div id="map">
                        <div id="popup" class="ol-popup">
                            <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                            <div id="popup-content"></div>
                        </div>
                    </div>
                    <script src="qgis/resources/qgis2web_expressions.js"></script>
                    <script src="qgis/resources/polyfills.js"></script>
                    <script src="./qgis/resources/functions.js"></script>
                    <script src="./qgis/resources/ol.js"></script>
                    <script src="./qgis/resources/ol3-layerswitcher.js"></script>
                    <script src="qgis/layers/Prkpuminegadjumi_0.js"></script>
                    <script src="qgis/styles/Prkpuminegadjumi_0_style.js"></script>
                    <script src="./qgis/layers/layers.js" type="text/javascript"></script>
                    <script src="./qgis/resources/qgis2web.js"></script>
                    <script src="./qgis/resources/Autolinker.min.js"></script>
                </div>
            </div>
              
            <div class="row">
                <div class="col-sm-12">
                    <footer>
                        <a href="https://data.gov.lv/lv" target="_blank"><img src="icon/logo.svg" height="50vw" alt="data.gov.lv" style="margin-left: 20vw"></a>
                        <a href="https://jak.lv/" target="_blank"><img src="icon/jaklogo.png" height="50vw" alt="jak.lv" style="margin-left: 3vw"></a>
                        <a href="http://www.sngo.eu/" target="_blank"><img src="reklama/sngo.png" height="50vw" alt="sngo.eu" style="margin-left: 3vw"></a>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>