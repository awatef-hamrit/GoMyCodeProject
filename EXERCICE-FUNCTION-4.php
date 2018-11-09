<?php
function extractTabByType ($tab, $type){ 


    function isType($element){
        return gettype($element);
    }

    

    foreach ($tab as $x){  

        if (isType($x) === $type){  
            $arrRes [] = $x;        
        }
    }
   
    print_r($arrRes);   }


// extractTabByType([true, false, true, 12,15,1111,"awatef","12"], 'boolean');
extractTabByType([true, false, true, 12,15,1111,"awatef","12"], 'string');
extractTabByType([true, false, true, 12,15,1111,"awatef","12"], 'integer');