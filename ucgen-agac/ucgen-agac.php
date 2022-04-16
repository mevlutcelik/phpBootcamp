<?php
function ucgenCiz($sayi = 10, $char = "*"){
    for($i=0;$i<=$sayi;$i++){
        for($j = 0; $j<=$sayi;$j++){
            if($i>=$j) echo $char;
        }
        echo "<br/>";
    }
}
ucgenCiz(15);
?>