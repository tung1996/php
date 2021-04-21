 <?php

function check($str){
    if (strpos($str,'restaurant') !== false and strpos($str,'book') !== false){
        echo 'False';
    }
    elseif (strpos($str,'book') !== false or strpos($str,'restaurant') !== false){
        echo 'true';
        $result = substr_count($str, ".");

        if ($result != 0){
            for($i=1 ; $i<=$result-1; $i++){
                echo 'true ';
            } 
        }
    }
    else {
        echo 'False';
    }
}

// check file txt1 
$fp_one = fopen("txt1.txt", "r");
$txt_one= fgets($fp_one); 
check($txt_one);


// check file txt2
$fp_two = fopen("txt2.txt","r");
$txt_two = fgets($fp_two); 
check($txt_two );


?>