<?php 

function longDate($timestamp){
    return date("1 F jS Y",$timestamp);
}


echo longDate(time());

echo longDate(time()-17*24*60*60)


?>