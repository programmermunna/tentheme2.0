<?php ob_start();
    require('database.php');
    // <!-- ===================Sortcut for query=========== -->     
    //made by php_munna
    function _fetch($table,$condition){
    global $conn;
    $query = "SELECT * FROM $table WHERE $condition";
    return mysqli_fetch_assoc(mysqli_query($conn,$query));
    }
    //made by php_munna     
    function _getAll($table){
    global $conn;
    $query = "SELECT * FROM $table ORDER BY id DESC";
    return mysqli_query($conn,$query);
    }
    //made by php_munna 
    function _get($table,$condition){
    global $conn;
    $query = "SELECT * FROM $table WHERE $condition";
    return mysqli_query($conn,$query);
    }
    //made by php_munna 
    function _query($table){
    global $conn;
    $query = "$table";
    return mysqli_query($conn,$query);
    }   
    //made by php_munna     
    function _delete($table,$condition){
    global $conn;
    $query = "DELETE FROM $table WHERE $condition";
    return mysqli_query($conn,$query);
    }

    //made by php_munna     
    function _update($table,$data,$condition){
    global $conn;
    $query = "UPDATE $table SET $data WHERE $condition";
    return mysqli_query($conn,$query);
    }
    //made by php_munna     
    function _insert($table,$data,$value){
    global $conn;
    $query = "INSERT INTO $table($data) VALUE($value)";
    return mysqli_query($conn,$query);
    }    

    //============Other code start here========//

    // $query = _getAll("brand");
    // $query = _get("brand","id=8");

    // $query = _delete("brand","id=7");

    // $query = _insert("brand","name","'value'");
    // $query = _update("brand","name='munna'","id=8");

    // $query = _query("DELETE FROM brand WHERE id=15");


    function _login($login,$person){
        if(isset($_SESSION[''.$person.'_id'])){
            $id = $_SESSION[''.$person.'_id'];
            if($id>0){
              header("location:$login.php");
            }
          }
          if(isset($_COOKIE[''.$person.'_id'])){
            $id = $_COOKIE[''.$person.'_id'];
            if($id>0){
              header("location:$login.php");
            }
          }
    }

    function _logout($logout,$person){        
        if(isset($_COOKIE[''.$person.'_id'])){
            setcookie(''.$person.'_id','', time() - 86000);
        }
        if(!session_start()){session_start();}
        if(isset($_SESSION[''.$person.'_id'])){
            unset($_SESSION[''.$person.'_id']);
            session_destroy();
            header("location:$logout.php");
        }
            header("location:$logout.php");
    }

    $time = time();
    //$website = _fetch("website","id=1");
    
    function sort_str($string, $word_count = 10) {
      $string = explode(' ', $string);
      if (empty($string) == false) {
          $string = array_chunk($string, $word_count);
          $string = $string[0];
      }
      $string = implode(' ', $string);
      echo $string;
  }
    require('plugins.php');
?>