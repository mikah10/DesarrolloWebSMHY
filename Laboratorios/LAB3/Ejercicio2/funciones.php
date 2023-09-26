<?php
function elimina_nmayores($arr, $mayor) {
    $result = array();
    foreach ($arr as $num) {
        if ($num <= $mayor) {
            array_push($result, $num);
        }
    }
    return $result;
}
?>
