<?php

    # Functions for ordering items from Database, checking GET parameters (DESC/ASC order)
    $getSortAttribute = function($attribute) {
        if(isset($_GET['sortV'])) {
            $varVal = $_GET['sortV'];

            if($varVal[0] == "-") {
                return $attribute;
                }
            elseif($attribute == $varVal){
                return "-$attribute";
                // echo '-id_uplate';
            }
        }
        return $attribute;
    };



    # Function for rendering file content
    // function renderFile($file, $vars=null) {
    //     global $vars;
    //     if (is_array($vars) && !empty($vars)) {
    //         extract($vars);
    //     }
    //     ob_start();
    //     include $file;
    //     return ob_get_clean();
    // }



?>
