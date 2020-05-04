
<?php 

 include 'simple_html_dom.php';

 $websiteUrl ="https://news.google.com/?hl=pt-PT&gl=PT&ceid=PT%3Apt-150";

 $html=file_get_html($websiteUrl);

 $list=$html->find('div[class="MXd18e"]',0);

 	foreach ($list->find('h2')as $elemento) {
 		echo $elemento->plaintext;
 		echo "<br>";
 	}

 

/*
 foreach ($html->find('.lastsection container box effect7') as $postDiv ) 
 {
 	foreach ($variable as $key => $value) {
 		# code...
 	}
 }
 */

 ?>