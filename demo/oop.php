<?php

class ExerciseString{
    public $Check1 ;
    public $Check2 ;
    public function __construct($tr1,$tr2){
        $this->Check1 = $tr1 ;
        $this->Check2 = $tr2 ;
    }
    // đọc nội dung các file .txt
    public function readFile(){

        $read_one = fopen($this->Check1 ,"r");
        $txt_one = fgets($read_one); 
        echo ($txt_one) ;
         
        $read_two = fopen($this->Check2 ,"r");
        $txt_two = fgets($read_two); 
        echo ($txt_two) ;

        return [$txt_one ,$txt_two];
    }

    // kiểm tra chuỗi có hợp lệ hay không (function ở bài php basic)
    public function checkValidString(){
        $check = [];
        $read = $this->readFile();
        for($i = 0 ; $i<count($read) ; $i++){           
            if (strpos($read[$i],'restaurant') !== false and strpos($read[$i],'book') !== false){
                echo 'false';
                array_push($check,"false");
            }
            elseif (strpos($read[$i],'book') !== false or strpos($read[$i],'restaurant') !== false){
                echo 'true';
                array_push($check,"true");
            }
            else {
                echo "false" ;
                array_push($check,"false");
            }
        }
        return $check ;
    }
    // //  ghi nội dung vào result_file .txt
    public function writeFile(){
        $myfile = fopen("result_file.txt", "w");
        $txt = "hello everyone";
        fwrite($myfile, $txt);
        fclose($myfile);
        unlink( $filename );//xoa file 
        $data = $this->checkValidString();
        $read = $this->readFile();

        for($i = 0 ; $i<count($data) ; $i++){
            if($data[$i] == "false" ){
                $result = substr_count($read[$i], ".");
                for($x=1 ; $x<$result ; $x++){
                    $myfile = fopen("result_file.txt", "a");
                    $txt = "không hợp lệ";
                    fwrite($myfile, $txt);
                    fclose($myfile);
                }                
            }
            else{
                $result = substr_count($read[$i], ".");
                for($x=1 ; $x<$result ; $x++){
                    $myfile = fopen("result_file.txt", "a");
                    $txt = "Hợp lệ";
                    fwrite($myfile, $txt);
                    fclose($myfile);
                }
            }
    
        }
    }   
}
$object1 = new ExerciseString("txt1.txt","txt2.txt") ;
$object1 -> readFile();
$object1 -> checkValidString();
$object1 -> writeFile();




?>