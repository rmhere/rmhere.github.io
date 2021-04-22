<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<?php
  function puttext($label, $lang) {
    $text = "";
    
    switch($lang) {
      case 'pl':
        switch($label) {
          case 'text1':
            $text = "Radosław Michalski - strona domowa";
            break;
          case 'text2':
            $text = "Wersja polska";
            break;
          case 'text3':
            $text = "English version";
            break;
          case 'text4':
            $text = "Menu strony";
            break;
          case 'text5':
            $text = "O mnie";
            break;
          case 'text6':
            $text = "Publikacje";
            break;
          case 'text7':
            $text = "Dydaktyka";
            break;
          case 'text8':
            $text = "Konsultacje";
            break;
          case 'text9':
            $text = "Warto odwiedzić";
            break;
          case 'text10':
            $text = "Kontakt";
            break;
          case 'text11':
            $text = "Politechnika Wrocławska";
            break;
          case 'text12':
            $text = "Katedra Inteligencji Obliczeniowej";
            break;
          case 'text13':
            $text = "Radosław Michalski";
            break;
          case 'text14':
            $text = "Wybrzeże Wyspiańskiego 27";
            break;
          case 'text15':
            $text = "50-370 Wrocław";
            break;
          case 'text16':
            $text = "Polska";
            break;
          case 'text17':
            $text = "Kalendarz akademicki";
            break;
          case 'text18':
            $text = "Rozdziały w książkach";
            break;
          case 'text19':
            $text = "Konferencje międzynarodowe";
            break;
          case 'text20':
            $text = "Tel. +48 71 320 34 53";
            break;
          case 'text21':
            $text = "Fax +48 71 320 34 53";
            break;
          case 'text22';
            $text = "Zbiory danych";
            break;
          case 'text23':
            $text = "Czasopisma międzynarodowe";
            break;
          case 'text24':
            $text = "Działalność naukowa";
            break;
          case 'text25':
            $text = "Projekty R&amp;D";
            break;
          case 'text26':
            $text = "Organizacja wydarzeń naukowych";
            break;
          case 'text27':
            $text = "Członkostwo w komitetach programowych";
            break;
          case 'text28':
            $text = "Recenzent w czasopismach";
            break;
          case 'text29':
            $text = "Recenzent poza komitetem programowym";
            break;
          case 'text30':
            $text = "Stypendia i nagrody";
            break;
          case 'text31':
            $text = "Pozostałe aktywności";
            break;
          case 'text32':
            $text = "Obecne projekty";
            break;
          case 'text33':
            $text = "Wcześniejsze projekty";
            break;
          case 'text34':
            $text = "Przewodniczenie sesjom";
            break;
          case 'text35':
            $text = "Aktualności";
            break;
          case 'text36':
            $text = "Mój klucz GPG";
            break;
          case 'text37':
            $text = "o projekcie";
            break;
          case 'text38':
            $text = "Prace dyplomowe";
            break;
          case 'text39':
            $text = "Editorial board";
            break;
          case 'text40':
            $text = "Gmach A-1, pok. 203K";
            break;
          case 'text41':
            $text = "Organizacja numerów specjalnych czasopism naukowych";
            break;
          case 'text42':
	    $text = "Badania naukowe";
            break;
          case 'text43':
	    $text = "Rozprawa doktorska";
	    break;
          case 'text44':
            $text = "Preprinty";
	    break;
          case 'text45':
            $text = "(obecnie brak)";
	    break;
          case 'text46':
            $text = "Projekt: Dyfuzja informacji w temporalnych sieciach społecznych";
	    break;
        }
        break;
      case 'en':
        switch($label) {
          case 'text1':
            $text = "Radosław Michalski - home page";
            break;
          case 'text2':
            $text = "Wersja polska";
            break;
          case 'text3':
            $text = "English version";
            break;
          case 'text4':
            $text = "Main menu";
            break;
          case 'text5':
            $text = "About me";
            break;
          case 'text6':
            $text = "Publications";
            break;
          case 'text7':
            $text = "Teaching";
            break;
          case 'text8':
            $text = "Office hours";
            break;
          case 'text9':
            $text = "Recommended links";
            break;
          case 'text10':
            $text = "Contact me";
            break;
          case 'text11':
            $text = "Wrocław University of Science and Technology";
            break;
          case 'text12':
            $text = "Department of Computational Intelligence";
            break;
          case 'text13':
            $text = "Radosław Michalski";
            break;
          case 'text14':
            $text = "Wybrzeze Wyspianskiego 27";
            break;
          case 'text15':
            $text = "50-370 Wroclaw";
            break;
          case 'text16':
            $text = "Poland";
            break;
          case 'text17':
            $text = "University calendar";
            break;
          case 'text18':
            $text = "Book chapters";
            break;
          case 'text19':
            $text = "International conferences";
            break;
          case 'text20':
            $text = "Phone no. +48 71 320 34 53";
            break;
          case 'text21':
            $text = "Fax +48 71 320 34 53";
            break;
          case 'text22';
            $text = "Datasets";
            break;
          case 'text23':
            $text = "International journals";
            break;
          case 'text24':
            $text = "Scientific Activities";
            break;
          case 'text25':
            $text = "R&amp;D Projects";
            break;
          case 'text26':
            $text = "Organization of scientific events";
            break;
          case 'text27':
            $text = "Program Committee membership";
            break;
          case 'text28':
            $text = "Reviewer for scientific journals";
            break;
          case 'text29':
            $text = "Reviewer apart from PC";
            break;
          case 'text30':
            $text = "Scholarships and awards";
            break;
          case 'text31':
            $text = "Other activities";
            break;
          case 'text32':
            $text = "Current projects";
            break;
          case 'text33':
            $text = "Past projects";
            break;
          case 'text34':
            $text = "Sessions chairmanship";
            break;
          case 'text35':
            $text = "News";
            break;
          case 'text36':
            $text = "My GPG key";
            break;
          case 'text37':
            $text = "about GPG";
            break;
          case 'text38':
            $text = "Theses - topics";
            break;
          case 'text39':
            $text = "Editorial board";
            break;
          case 'text40':
            $text = "Bldg. A-1, room 203K";
            break;
          case 'text41':
            $text = "Special Issue Guest Editorship of Scientific Journals";
            break;
          case 'text42':
            $text = "Research";
	    break;
          case 'text43':
            $text = "Doctoral dissertation";
	    break;
          case 'text44':
            $text = "Preprints";
	    break;
          case 'text45':
            $text = "(none at the moment)";
	    break;
          case 'text46':
            $text = "Project: Diffusion of Information in Temporal Social Networks";
	    break;
        }
        break;
    }
    
    return $text;
  }
  
  function detectLanguage($defaultlang = 'en') {
    $langlist = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $lang = $defaultlang;
    foreach($langlist as $curLang) {
        $curLang = explode(';', $curLang);
        if (preg_match('/(en|pl)-?.*/', $curLang[0], $reg)) {
            $lang = $reg[1];
            break;
        }
    }
    return $lang;
  }

  $langs = array("pl", "en");
  $contents = array("about", "publications", "teaching", "hours", "links", "datasets", "scientific", "projects", "news", "theses", "projects-2016-ncn-diffusion");
  
  if(isset($_GET['lang']) && (in_array($_GET['lang'], $langs))) {
    $lang = $_GET['lang'];
  }
  else {
    $lang = detectLanguage();
  }
  
  if(isset($_GET['content']) && (in_array($_GET['content'], $contents)))
    $content = $_GET['content'];
  else
    $content = "about";
?>
    
<html version="-//W3C//DTD XHTML 1.1//EN"
      xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.w3.org/1999/xhtml
                          http://www.w3.org/MarkUp/SCHEMA/xhtml11.xsd">
  <head>
    <meta name="keywords" content="Radosław Michalski, sieci społeczne, wpływ społeczny, dyfuzja informacji, uczenie maszynowe, social influence, temporal networks, diffusion processes, influence maximization, social networks, social network analysis, machine learning, blockchain, Politechnika Wrocławska, Wrocław University of Science and Technology, WUST, politechnika, pwr, Katedra Inteligencji Obliczeniowej, Department of Computational Intelligence" />
    <meta name="description" content="Radosław Michalski - strona domowa" />
    <meta content="index,follow" name="robots" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <link href="style.css" media="screen, print" type="text/css" rel="stylesheet" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title><?php echo(puttext("text1", $lang)); ?></title>
    <link rel="SHORTCUT ICON" href="favicon.ico" />
  </head>

  <body style="overflow:scroll;">
    <script type="text/javascript" src="js/pupup.js"></script>

    <table class="table_main" cellpadding="0" cellspacing="0">
       
       <!-- Header - PWr logo -->
       <tr>
        <td class="table_main_top">
	   <div id="particles-js">
            
                <a href="index.php?lang=<?php echo($lang); ?>" onmouseover="window.status=''; return true;" >

                
		<?php
                    if($lang == "pl") {
                      echo "<img class=\"logo\" src=\"media/pwr_logo.png\" style=\"border-width:0px;\" alt=\"Politechnika Wrocławska\"/>";
                    }
                    else {
                      echo "<img class=\"logo\" src=\"media/pwr_logo_en.png\" style=\"border-width:0px;\" alt=\"Wrocław University of Science and Technology\"/>";
                    }
                  ?>
                </a>

          </div>
        </td>
       </tr>
       
       <!-- A line separating header from horizontal menu -->
       <tr>
        <td style="background-color:white;height:1px;">
        </td>
       </tr>
       
       <!-- Horizontal menu -->
       <tr>
        <td align="center">
          <table class="table_sitemap" cellpadding="0" cellspacing="0">
            <tr>
              <td style="width:100px;">
              </td>
              <td align="left">
                <span class="span_menu_title"><b><?php echo(puttext("text1", $lang)); ?></b></span>
              </td>
              <td align="right">
                <?php if($lang=="pl") echo('<span class="span_menu_actual">'); else echo('<span class="span_menu_link">'); ?>&nbsp;&nbsp;&nbsp;<?php if($lang<>"pl") echo('<a style="color:white;" href="index.php?content='.$content.'&amp;lang=pl">');?><?php echo(puttext("text2", $lang)); ?><?php if($lang<>"pl") echo('</a>'); ?>&nbsp;&nbsp;&nbsp;</span>
                <?php if($lang=="en") echo('<span class="span_menu_actual">'); else echo('<span class="span_menu_link">'); ?>&nbsp;&nbsp;&nbsp;<?php if($lang<>"en") echo('<a style="color:white;" href="index.php?content='.$content.'&amp;lang=en">');?><?php echo(puttext("text3", $lang)); ?><?php if($lang<>"en") echo('</a>'); ?>&nbsp;&nbsp;&nbsp;</span>
              </td>
            </tr>
          </table>
       </td>
      </tr>
    </table>
     
    <!-- Proper content -->
    <table class="table_bottom" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <table style="width: 100%;" cellpadding="0" cellspacing="0">
            <tr align="left">
            
              <!-- Left menu -->
              <td valign="top" style="width: 202px;">
                <div id="MainContactLbl">
                  <div class="MainContactLbl">
                    <b><?php echo(puttext("text4", $lang)); ?></b>
                  </div>
                  <div style="text-align:left; margin-top:1px">
                    <img src="media/hr_short.png" alt="" width="202px" height="7px"/>
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=about&amp;lang=<?php echo($lang); ?>"><?php if($content=="about") echo("<b>");?><?php echo(puttext("text5", $lang)); ?><?php if($content=="about") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=news&amp;lang=<?php echo($lang); ?>"><?php if($content=="news") echo("<b>");?><?php echo(puttext("text35", $lang)); ?><?php if($content=="news") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=publications&amp;lang=<?php echo($lang); ?>"><?php if($content=="publications") echo("<b>");?><?php echo(puttext("text6", $lang)); ?><?php if($content=="publications") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=scientific&amp;lang=<?php echo($lang); ?>"><?php if($content=="scientific") echo("<b>");?><?php echo(puttext("text24", $lang)); ?><?php if($content=="scientific") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=projects&amp;lang=<?php echo($lang); ?>"><?php if($content=="projects") echo("<b>");?><?php echo(puttext("text25", $lang)); ?><?php if($content=="projects") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=datasets&amp;lang=<?php echo($lang); ?>"><?php if($content=="datasets") echo("<b>");?><?php echo(puttext("text22", $lang)); ?><?php if($content=="datasets") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=teaching&amp;lang=<?php echo($lang); ?>"><?php if($content=="teaching") echo("<b>");?><?php echo(puttext("text7", $lang)); ?><?php if($content=="teaching") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=theses&amp;lang=<?php echo($lang); ?>"><?php if($content=="theses") echo("<b>");?><?php echo(puttext("text38", $lang)); ?><?php if($content=="theses") echo("</b>");?></a><br /><hr />
                  </div>
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=hours&amp;lang=<?php echo($lang); ?>"><?php if($content=="hours") echo("<b>");?><?php echo(puttext("text8", $lang)); ?><?php if($content=="hours") echo("</b>");?></a><br /><hr />
                  </div>
                  <!--
                  <div style="text-align:left; margin-top:3px">
                    <img src="media/strz.png" alt="" style="vertical-align:middle;" /><a onmouseover="window.status=''; return true;" href="index.php?content=links&amp;lang=<?php echo($lang); ?>"><?php if($content=="links") echo("<b>");?><?php echo(puttext("text9", $lang)); ?><?php if($content=="links") echo("</b>");?></a><br /><br />
                  </div>
                  -->
                </div>
              </td>
              <td style="width: 20px;">
              </td>
              
              <!-- Central part -->
              <td valign="top">
                <div>
                  <div class="MainContactLbl">
                    <b>
                      <?php 
                        switch($content) {
                          case "about":
                            echo(puttext("text5", $lang));
                            break;
                          case "news":
                            echo(puttext("text35", $lang));
                            break;
                          case "publications":
                            echo(puttext("text6", $lang));
                            break;
                          case "teaching":
                            echo(puttext("text7", $lang));
                            break;
                          case "hours":
                            echo(puttext("text8", $lang));
                            break;
                          case "links":
                            echo(puttext("text9", $lang));
                            break;
                          case "datasets":
                            echo(puttext("text22", $lang));
                            break;
                         case "scientific":
                            echo(puttext("text24", $lang));
                            break;
                         case "projects":
                            echo(puttext("text25", $lang));
                            break;
                         case "theses":
                            echo(puttext("text38", $lang));
                            break;
                         case "research":
                            echo(puttext("text42", $lang));
                            break;
                         case "projects-2016-ncn-diffusion":
                            echo(puttext("text46", $lang));
                            break;
                        }
                      ?>
                    </b>
                  </div>
                  
                  <!-- Base content -->
                  <?php
                    include("content/".$content.".php");
                  ?>
                  <!-- End of base content -->
                  
                </div>
              </td>
              <!-- End of central part -->
              
              <td style="width: 20px;">
              </td>
              
              <!-- Right menu -->
              <td valign="top" style="width: 202px;">
                <div>
                  <div class="MainContactLbl">
                    <b><?php echo(puttext("text10", $lang)); ?></b>
                  </div>
                  <div style="text-align: left; margin-top:1px">
                    <img src="media/hr_short.png" alt="" width="202px" height="7px"/>
                    <div style="margin-top:3px;">
                      <?php echo(puttext("text11", $lang)); ?>
                      <br />
                      <?php echo(puttext("text12", $lang)); ?>
                      <br />
                      <?php echo(puttext("text13", $lang)); ?>
                      <br />
                      <br />
                      <?php echo(puttext("text14", $lang)); ?>
                      <br />
                      <?php echo(puttext("text15", $lang)); ?>
                      
                      <?php
                        if($lang <> "pl") {
                          echo("<br />");
                          echo(puttext("text16", $lang));
                        }
                      ?>
                    </div>
                    
                    <br />
                    
                    <?php echo(puttext("text40", $lang)); ?>
                    
                    <br />
                    
                    <br />
                    
                    <script type="text/javascript">
                      <!--
                        var one = "radoslaw.michalski"
                        var two = "pwr"
                        var three = ".edu.pl"
                        document.write("<a href=" + "mail" + "to:" + one + "@" + two + three + ">" + one + "<code>@</code>" + two + three + "</a>")
                      -->
                    </script>
                    
                    <br />
                    <br />
                    
                    <a href="https://www.ii.pwr.edu.pl/~michalski/sec/michalski.txt">
                    <?php
                      echo(puttext("text36", $lang));
                    ?>
                    </a>
                    (<a href="https://emailselfdefense.fsf.org/en/infographic.html"><?php
                      echo(puttext("text37", $lang));
                    ?></a>)
                    <br />
                    <br />
                  
                    
                    <?php echo(puttext("text20", $lang)); ?>
                    
                    <br />
                    <!--
                    <?php echo(puttext("text21", $lang)); ?>
                    
                    <br />
                    -->
                    <br />
                    
                  </div>
                  <div style="top:25px;height:11px;">
                    <b><?php echo(puttext("text17", $lang)); ?></b>
                  </div>
                  <img src="media/hr_short.png" alt="" width="202px" height="7px"/><br />
                  <a href="http://pwr.edu.pl/studenci/kalendarz-akademicki" onmouseover="window.status=''; return true;">
                    <img src="media/kalendarz.jpg" width="202px" height="90px" class="MainIMCImg" alt="Kalendarz akademicki PWr" style="margin-top:3px;border:0px;"/>
                  </a>
                </div>
              </td>
              <!-- End of right menu -->
              
            </tr>
          </table>
        </td>
      </tr>
      
      <!-- Footer -->
      <tr class="MainFooter">
        <td style="text-align: left;" class="title">
          <br />
          <img src="media/linia.png" alt="" width="960px" height="1px" />
          <br />
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:gray;"><?php echo(puttext("text13", $lang)); ?> &copy; 2011-<?php echo date("Y"); ?></span>
        </td>
      </tr>
    </table>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-48118887-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <script src="js/particles.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
  </body>
</html>
