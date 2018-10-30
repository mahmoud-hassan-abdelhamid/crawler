<?php

require("simple_html_dom.php");
ini_set('max_execution_time', 300);


$init_page = 1;
$init_url = 'http://www.homegate.ch/mieten/immobilien/kanton-zuerich/trefferliste?ep=';
$url = $init_url . $init_page;
$html = file_get_html($url);

/*
I have sliced the task to parts 1.a , 1.b , 1.c , 2.a , 2.b
just uncomment the part from start to end to view the result of it
*/

/////////////////////// start 1.a ///////////////////////
$regex = '#/mieten/([0-9.]+)#';
//check if link contains id
foreach($html->find('a') as $a){
    if(preg_match($regex, $a->href, $matches)){
    	echo '<a href="https://www.homegate.ch'. $a->href .'">https://www.homegate.ch' . $a->href . '</a><br>';
    }
} 
/////////////////////// end 1.a ///////////////////////



// /////////////////////// start 1.b ///////////////////////
// //getting current page from page content instead of adding it manually!
// $current_page = $html->find('div[class=paginator-container]')[0]
// 						->find('ul[class=paginator]')[0]
// 							->find('li[class=page-link]')[0]
// 								->find('a[class=active]')[0]
// 									->innertext; 
// $next_page = ++$current_page;
// $url2 = $init_url . $next_page;
// $html2 = file_get_html($url2);

// $regex = '#/mieten/([0-9.]+)#';
// //check if link contains id
// foreach($html2->find('a') as $a){
//     if(preg_match($regex, $a->href, $matches)){
//     	echo '<a href="https://www.homegate.ch'. $a->href .'">https://www.homegate.ch' . $a->href . '</a><br>';
//     }
// } 
// /////////////////////// end 1.b ///////////////////////



// /////////////////////// start 1.c ///////////////////////
// $current_page = 1;
// $regex = '#/mieten/([0-9.]+)#';

// //looping through all pages starting from page 1
// while($current_page){
// 	$url3 = $init_url . $current_page;
// 	$html3 = file_get_html($url3);

// 	//check if link contains id
// 	foreach($html3->find('a') as $a){
// 	    if(preg_match($regex, $a->href, $matches)){
// 	    	echo '<a href="https://www.homegate.ch'. $a->href .'">https://www.homegate.ch' . $a->href . '</a><br>';
// 	    }
// 	} 

// 	//check if there is a next page or the current one is the last page
// 	$next_page_element = $html3->find('div[class=paginator-container]',0)
// 									->find('ul[class=paginator]',0)
// 											->find('a[class=active]',0)
// 												->parent()
// 													->next_sibling();
// 	if($next_page_element != null){
// 		$current_page++;
// 	}
// 	else{
// 		$current_page = false;
// 	}									

// }
// /////////////////////// end 1.c ///////////////////////



// I have used proxycrawl to get ride of bot protection
$init_page_2 = 1;
$init_url_2 = 'https://www.newhome.ch/de/kaufen/suchen/haus_wohnung/kanton_zuerich/liste.aspx?p=';
$url_2 = $init_url_2 . $init_page_2;
$userAgent = urlencode('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.1.1 Safari/605.1.15');
$url_2 = urlencode($url_2);
$html_2 = file_get_html('https://api.proxycrawl.com/?token=fdAhvMAdtbzpBVOXI8eyaA&user_agent=' . $userAgent . '&url=' . $url_2);



// /////////////////////// start 2.a ///////////////////////

// //check if link contains id
// foreach($html_2->find('a') as $a){
//     if (strpos($a->href, 'id=') !== false) {
//     	echo '<a href="'. $a->href .'">' . $a->href . '</a><br>';
//     }
// } 
// // /////////////////////// end 2.a ///////////////////////



// /////////////////////// start 2.b ///////////////////////
// //getting current page from page content instead of adding it manually!
// $current_page = $html_2->find('ul[class=pagination]')[0]
// 						->find('li[class=active]')[0]
// 							->find('a')[0]
// 								->innertext; 
// $next_page = ++$current_page;
// $url_2_2 = $init_url_2 . $next_page;
// $html_2_2 = file_get_html('https://api.proxycrawl.com/?token=fdAhvMAdtbzpBVOXI8eyaA&user_agent=' . $userAgent . '&url=' . $url_2_2);


// //check if link contains id
// foreach($html_2_2->find('a') as $a){
//     if (strpos($a->href, 'id=') !== false) {
//     	echo '<a href="'. $a->href .'">' . $a->href . '</a><br>';
//     }
// } 
// /////////////////////// end 2.b ///////////////////////
