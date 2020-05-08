
<?php 

 include 'simple_html_dom.php';

 $websiteUrl ="https://covid19ao.com/";

 $html=file_get_contents($websiteUrl);


// TOTAL DE CASOS CONFIRMADOS
 $Activos=explode('class="text-warning text-center mt-2"><h1>', $html);
 $act= explode("</div",$Activos[1]);
  $act2= explode("</h1>",$act[0]);


  $confirmados =$act2[0];

echo $confirmados;

// TOTAL DE CASOS RECUPERADOS
  $Recup=explode('class="text-success text-center mt-2"><h1>', $html);
 $act= explode("</div",$Recup[1]);
  $act2= explode("</h1>",$act[0]);


 $Recup_conf =$act2[0];



// TOTAL DE CASOS MORTES
  $Morte=explode('class="text-dark text-center mt-2"><h1>', $html);
 $act= explode("</div",$Morte[1]);
  $act2= explode("</h1>",$act[0]);


  $mortos =$act2[0];

 $Ativos_enternados=$confirmados-($Recup_conf+$mortos);
 


 

 

/*
 foreach ($html->find('.lastsection container box effect7') as $postDiv ) 
 {
 	foreach ($variable as $key => $value) {
 		# code...
 	}
 }
 */

 ?>