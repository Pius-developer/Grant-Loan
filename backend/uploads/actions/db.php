<?php
 
   $server = "localhost";
    $username = "root";
    $pwd = "";
    $db = "capfx";

$conn = mysqli_connect($server,$username,$pwd,$db) or die ("couldnt connect to database");



// my function

 $now = date("Y-m-d H:i:s");
     $update = function($table,$values,$where = "") use ($conn){
         $value = "";
         foreach($values as $k => $v){
             if(is_numeric($v))$v = (int)$v;
             $value .= $k." = ".$v.",";
         }
         $value = rtrim($value,",");
         $sql = "UPDATE ".$table." SET ".$value.($where != ""? " WHERE ".$where : "");
       return  mysqli_query($conn,$sql);
     };
     
     $select = function($table,$where = "") use ($conn){
    $sql = "SELECT * FROM  ".$table.($where != ""? " WHERE ".$where : "");
$result= mysqli_query($conn,$sql);
$result_check = mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0){
    return $result;
}else{
     return false;
}
     };
     
     function test_input($data ){
  $data = trim( $data);
  $data = stripslashes ($data);
  $data = htmlspecialchars ($data);
  return mysqli_real_escape_string($GLOBALS['conn'],$data) ;
  }
  
 function toNumber($val) {
        if (is_numeric($val)){
            $int = (int)$val;
            $float = (float)$val;
     $val = ($int == $float) ? $int : $float;
            return $val;
        } 
    }
    


    function protect ($a) {
    if(is_array($a)) return $a;
  return test_input($a);
}

function getPost()
{
    if(!empty($_POST))
    {
        // when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request
         return $_POST;
    }

    // when using application/json as the HTTP Content-Type in the request 
    $post = json_decode(file_get_contents('php://input'), true);
    if(json_last_error() == JSON_ERROR_NONE)
    {
        return $post;
    }

}  

function print_v ($a = 0, $b = 0, $c = 0) {
  $arr = is_array($a) ? $a : $_POST;
  $emp = array();
  $rea = array();
  foreach ($arr as $k => $v) {
    if($c > 1) echo $k." | ";
    if(is_callable($b)) $v = $b($v, $k);
      global ${$k};
      ${$k}     = $v;
      $rea[$k]  = $v;
      if(!is_array($v)) {
        $nv = trim($v);
        if(empty($nv)) {
          array_push($emp, $k);
        }
      }
  }
  global $is_empty;
  $is_empty = $emp;
  return $rea;
}




?>
