<?php
$arr = [ 46, 213, 78, 314, 111, 115, 43, 99, 100, 89, 56 ];
$min = min( $arr );
echo( '<p> min = ' . $min . '</p>');
function multiple( $arr, $min ) {
    foreach ( $arr as  $key => $num ) {
        if ($num == $min) {
            break;
        } else {
            $arr[ $key ] = $num * $min;
        }
    }
    return( $arr );
}
print_r(multiple( $arr, $min ));
?>