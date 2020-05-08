
<?php 

 include 'simple_html_dom.php';

 $websiteUrl ="https://www.worldometers.info/coronavirus/country/angola/";

 $html=file_get_contents($websiteUrl);


// TOTAL DE CASOS CONFIRMADOS
 $Activos=explode('<h1>Deaths:</h1>', $html);
 $act= explode("<h1>Deaths:</h1>",$Activos[1]);
$act2= explode("</span>",$act[0]);

//echo"MORTOS".$act2[0];
$mortos=$act2[0];


 $Activos2=explode('<h1>Coronavirus Cases:</h1>', $html);
 $act2= explode("<h1>Coronavirus Cases:</h1>",$Activos2[1]);
$act3= explode("</span>",$act2[0]);

//echo "CONFORMADOS".$act3[0];
$confirmados=$act3[0];

 $Activos3=explode('<h1>Recovered:</h1>', $html);
 $act3= explode("<h1>Recovered:</h1>",$Activos3[1]);
$act4= explode("</span>",$act3[0]);

//echo"RECUPERADOS".$act4[0];

 $recuperados=$act4[0];



/*echo "ATIVOS: ".$ativos_int=$confirmados;

$pegar_Morte=$mortos;
$pegar_recuperado=$recuperados;
$ativos_hospital = $pegar_Morte + $pegar_recuperado;
$no_hospital=$ativos_int-$ativos_hospital;

//echo "ATTTIVOS".$ativos_int;
//echo "string".$pegar_Morte;
//echo "ATIVO HOSPITAL".$ativos_hospital;


//echo $act2[1];
 // echo $confirmados =$act2[0];

/*

// TOTAL DE CASOS RECUPERADOS
  $Recup=explode('class="text-success text-center mt-2"><h1>', $html);
 $act= explode("</div",$Recup[1]);
  $act2= explode("</h1>",$act[0]);


echo  $Recup_conf =$act2[0];



// TOTAL DE CASOS MORTES
  $Morte=explode('class="text-dark text-center mt-2"><h1>', $html);
 $act= explode("</div",$Morte[1]);
  $act2= explode("</h1>",$act[0]);


  echo $mortos =$act2[0];

 $Ativos_enternados=$confirmados-($Recup_conf+$mortos);
 

<a href="/wiki/COVID-19_pandemic_in_Angola" title="COVID-19 pandemic in Angola">Angola</a>
 

 

/*
 foreach ($html->find('.lastsection container box effect7') as $postDiv ) 
 {
 	foreach ($variable as $key => $value) {
 		# code...
 	}
 }
 */

 ?>