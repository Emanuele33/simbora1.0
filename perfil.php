<?php 
include "menu.php";

?>
<link rel="stylesheet" type="text/css" href="css/perfil.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="card">
  <div class="card-header">
    <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" > 
               <form method="POST" action="" enctype="multipart/form-data" id="form"> 
              <input id="profile-image-upload" name="foto" class="hidden" type="file">
              <input type="submit" value="Enviar">
              
          </form>
              <!--Upload Image Js And Css-->
            </div>

  </div>
  <div class="card-content">

    <h3>Usuario</h3>
    <p></p>
  <button data-toggle="modal" data-target="#editModal" type="button">Alterar conta</button>

  </div>
  <div class="card-footer">
    <ul>
      <li>
        <a href="#"><i class="fa fa-codepen"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-stack-overflow"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-github"></i></a>
      </li>
    </ul>
  </div>
</div>
 <script>
      $(function() {
        $('#profile-image1').on('click', function() {
          $('#profile-image-upload').click();
        });
      });    

    </script> 
    