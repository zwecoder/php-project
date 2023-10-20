<?php
include_once "systemgen/postuploader.php";
$data = file_get_contents("assets/gendata.json");
$post=json_decode($data,true);
$imagelink=["1695730104-b.png","1695804878-Call Of Duty Ghosts.jpg","1697296074-g.jpg","1697378486-Rainbox-6-Seige-Feat.jpg"];
$i=0;
foreach ($post as $post) {
    $i++;
    $posttitle=$post['posttitle'];
    $postwriter=$post['postwriter'];
    $posttype=$post['posttype'];
    $category=$post['category'];
    $postcontent=$post['postcontent'];
    $imglink=$imagelink[$i%4];
    
    insertPost($posttitle,$postwriter,$posttype,$category,$postcontent,$imglink);
}
?>