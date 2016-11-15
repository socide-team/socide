<?php

//ZÁHLAVÍ STRÁNKY 
 function admin_header(){
  ?>
  <link href="./style.css" rel="stylesheet" type="text/css" />
  <script src="http://code.jquery.com/jquery-latest.js"></script> 
  <div class="lista"></div><div class="lista_position">xxx</div><?php
  admin_menu();
 }
 
//MENU STRÁNKY 

 function admin_menu(){
  ?><div class="menu"><div style="height: 10px; width:100%"></div><table><?php menu_polozky(); ?></table></div><div style="margin-left: 220px;"><?php
 }
 
//ZÁPATÍ STRÁNKY 
 
 function admin_fotter(){
  ?></div><?php
 }                   

//TVORBA POLOŽEK MENU  

 function polozka($nadrazena, $nadrazena_url, $polozky, $polozky_url){
 
 ?><tr>
   <td><li><div class="nadrazena" style="margin-top: -4px;"><a <?php if($polozky == ""){ ?> style="width:200px;" <?php } else {} if($nadrazena_url == ""){ ?>href="?strana=<?php odstraneni_diakritiky($nadrazena);?>"<?php } else { ?>href="<?php echo $nadrazena_url; ?>"<?php } ?>><?php echo $nadrazena; ?></a></div><ul><?php
   if($polozky == ""){} else {
   $dodelat_url = $polozky_url;
   $dodelat = $polozky;
   for ($p = 0; $p < count($dodelat); ++$p){
     if($p == 0){
   ?>
   <div class="start"><li><a href="<?php if($dodelat_url == ""){ if($nadrazena_url == ""){ ?>?strana=<?php odstraneni_diakritiky($nadrazena); } else { ?>?strana=<?php odstraneni_diakritiky($nadrazena); } ?>&podstrana=<?php odstraneni_diakritiky($dodelat[$p]); } else { echo $dodelat[$p]; }?>"><?php echo $dodelat[$p]; ?></a></li></div>
   <?php } elseif($p == (count($dodelat) - 1)){?>
   <div class="end"><li><a href="<?php if($dodelat_url == ""){ if($nadrazena_url == ""){ ?>?strana=<?php odstraneni_diakritiky($nadrazena); } else { ?>?strana=<?php odstraneni_diakritiky($nadrazena); } ?>&podstrana=<?php odstraneni_diakritiky($dodelat[$p]); } else { echo $dodelat[$p]; }?>"><?php echo $dodelat[$p]; ?></a></li></div>
   <?php } else { ?>
   <li><a href="<?php if($dodelat_url == ""){ if($nadrazena_url == ""){ ?>?strana=<?php odstraneni_diakritiky($nadrazena); } else { ?>?strana=<?php odstraneni_diakritiky($nadrazena); } ?>&podstrana=<?php odstraneni_diakritiky($dodelat[$p]); } else { echo $dodelat[$p]; }?>"><?php echo $dodelat[$p]; ?></a></li> 
   <?php } } ?>
   </ul>
   </li></td>
   </tr><tr><td style="height: 1px;"></td></tr><?php
 } }
 
//ZOBRAZENÍ STRÁNKY 

function admin_stranky(){
  $strana = @$_GET["strana"];
  $podstrana = @$_GET["podstrana"];
if($strana){  
if($podstrana){
 @require("./stranky/$strana/$podstrana.php");
 exit();
} else { 
require("../config.php");
 @require("./stranky/$strana.php");
 exit();
 } 
} else {}
}

//ODESÍLÁNÍ MAILU

    function vlozit_kody($text,$odkaz){
       $kody = array('#VYGENEROVAT_ODKAZ#' => '<a style="color: #FFDB00;" href="'.$odkaz.'">'.$odkaz.'</a>','#VYGENEROVAT_KOD#' => $odkaz);
        foreach($kody as $textovy => $php) {
          $text = str_replace($textovy, $php, $text);
        }
        return $text;
      }   

      function mail_od_klubu($komu,$predmet_mailu,$zprava_strucna){    
      require($_SERVER['DOCUMENT_ROOT']."/config.php");
      if($komu == ""){} else{
      $dotaz3 = mysql_query("SELECT * FROM nastaveni WHERE nazev='email' ;");
                        while($vystup3 = mysql_fetch_object($dotaz3))
                        {
                          $zapati = $vystup3->text1;
                        }  
          $email_odesilatele = "klub.snilku@email.cz";
         // $od = "=?utf-8?B?".base64_encode("Klub Snílkù")."?=";
          $od .= "Klub Snílkù <".$email_odesilatele.">";
          $hlavicka = "From: $od\n";         
          $hlavicka .= "MIME-Version: 1.0\nContent-Type: text/html; charset=windows-1250\nContent-Transfer-Encoding:8bit\r\n";
          $zprava="<table style='
		  width: 100%; font-family: Calibri; padding: 10px; background-image: url($adresa/vzhled/email/email-header.png); background-repeat: no-repeat; background-color: #321f21; color: #ffffff; max-width: 900px; background-position-x: right; background-position-y: top; margin-left: auto; margin-right: auto;
		  '>
    <tr><td style='height: 260px; color: #ffffff;'><img style='width: 400px;' src='$adresa/vzhled/logo.png'><br /><h1 style='padding-left: 75px;'>$predmet_mailu</h1></td></tr>
    <tr><td><p style='color: #ffffff;'>$zprava_strucna</p></td></tr>
    <tr><td style='height: 20px;'></td></tr>
    <tr>$zapati</tr>
   </table>";
		  
          mail($komu,$predmet_mailu,$zprava,$hlavicka); }
  } 

//INFOHLÁŠKY

  function potvrzeni($tip,$text){
   if($tip == "1"){
   ?><div class="ok"><table style="margin: 0px;"><tr><td style="margin-left: auto; margin-right: auto; padding: 5px;"><?php echo $text; ?></td></tr></table></div><?php
  } else {
   ?><div class="chyba"><table style="margin: 0px;"><tr><td style="margin-left: auto; margin-right: auto; padding: 5px;">CHYBA - <?php echo $text; ?></td></tr></table></div><?php 
  }
  }
  
  function napoveda($text){
   ?>
   <div style="width: 16px;" class="box"><div class="bublina"><div class="spicka"></div><?php echo $text; ?></div><img style="cursor: pointer;" src="./vzhled/napoveda.png"></div>
 <?php
  }

// Zbalování boxu

// STYL - 0 nebo 1 !

  function nastavovaci_box_zacatek($nazev,$styl){
  ?>
  <div class="box_nastaveni<?php if($styl == "1"){ ?> closed<?php } ?>" id="box_<?php echo odstraneni_diakritiky($nazev); ?>">
  <h2 onclick="box('<?php echo odstraneni_diakritiky($nazev); ?>');"><?php echo $nazev; ?><div class="sipka"></div></h2>
  <div class="objekt">
  <?php
  }
  
  function nastavovaci_box_konec(){
  ?></div></div><?php
  }
      
 
?>
 <script> 
  function box(id){ 
   if(document.getElementById('box_' + id).className == 'box_nastaveni'){
    document.getElementById('box_' + id).className = 'box_nastaveni closed';
   } else {
    document.getElementById('box_' + id).className = 'box_nastaveni';
   }
  }   

 </script>
