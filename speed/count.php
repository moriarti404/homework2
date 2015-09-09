<?php

function speed() {
    if (( $_POST ['distance'] < 0) or ( $_POST ['time'] <= 0)){
        echo "Input correct value";
    }else if ( isset( $_POST ['mps'] )) {
        $speed = $_POST ['distance'] * 1000 / ( $_POST ['time'] * 3600);
        echo('<p> Movement speed = ' . $speed . 'm/s </p>');
    } else {
        $speed = $_POST ['distance'] / $_POST ['time'];
        echo('<p> Movement speed = ' . $speed . 'km/h </p>');
    }
    return(NULL);
}
print_r( speed() );

?>