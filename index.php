<!--
Desenvolvido por: E5+
-->
<?php
$url = "http://e-5-m-a-i-s.com/";
$title = "E5+";

$var = array(
        "1" => array(
                  "titulo" => "Facebook",
                  "image" => "http://gph.is/1hX1Jwr"
                  ),
        "2" => array(
                  "titulo" => "Instagram",
                  "image" => "http://gph.is/1Orq2G6"
                  ),
        "3" => array(
                  "titulo" => "LinkedIn",
                  "image" => "http://gph.is/1Orq2G6"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
