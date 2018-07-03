<?php

session_start();
require_once 'conexao.php';

  function logado(){
     session_start();
       if(isset($_SESSION['id']))
           true;
      return false;
  }
  


function is_logged() {
	return isset($_SESSION['user-logged']);
}
