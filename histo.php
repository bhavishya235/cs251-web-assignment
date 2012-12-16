<?php
$image = new Imagick("h.jpg");
$pixels=$image->getImageHistogram();
foreach($pixels as $p){
 $colors = $p->getColor();
 echo "<pre>";
 foreach($colors as $c){
        print( "$c\t" );
 }
 print( "\t:\t" . $p->getColorCount() . "\n" );
echo "</pre>";
}
?>
