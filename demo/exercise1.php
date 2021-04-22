 <?php

function check($str)
{
    if (strpos($str,'restaurant') !== false and strpos($str,'book') !== false) {
        var_dump(1==2);
        echo "Chuỗi không hợp lệ" ;
    }
    elseif (strpos($str,'book') !== false xor strpos($str,'restaurant') !== false) {
        var_dump(1==1);
        $result = substr_count($str,".");
        if ($result != 0){
            for($i=1 ; $i<=$result; $i++){
                echo "Chuỗi  hợp lệ ";
            } 
        }
    }
    else {
        var_dump(1==2);
        echo "Chuỗi không hợp lệ" ;
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