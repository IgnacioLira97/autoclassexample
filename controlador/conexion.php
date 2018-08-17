<?php

class conexion {
    private $server="localhost";
    private $usario="root";
    private $pass="";
    private $base="automotora";
    
    private $cone;
    function __construct() {
        try {
            $this->cone= mysqli_connect($this->server, $this->usario, $this->pass, $this->base);
                    
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
            
        }
          public function SqlOperacion($sql){
              try {
                  mysqli_query($this->cone,$sql);
                  return mysqli_affected_rows($this->cone);
              } catch (Exception $exc) {
                  echo $exc->getTraceAsString();
              }
          }
      
          public function SqlSelection($sql) {
              try {
                  $reg= mysqli_query($this->cone, $sql);
                  return $reg;
              } catch (Exception $exc) {
                  echo $exc->getTraceAsString();
              }
                    }
    
    
}
