  <script>
  (function($){
    $(function(){


      $('.tooltipped').tooltip();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>









<div class="row">
    <div class="col s12 m1"></div>

  <div class="col s12 m2">

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light ">
        <img class="activator" src="images/ic_account_balance_wallet_128.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Empresa 1<i class="material-icons right">more_vert</i></span>
       
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
        



    <table>
      <thead>
        <tr>
          <th>Empresa 1</th>

          <th></th>
        </tr>
      </thead>

      <tbody>
        <tr id="ver_video">

        </tr>

    
      <tr>
        <td>1- Alistamiento de elementos</td>

        <td>
         <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="#modal1" id="segundo_video">
          <i class="material-icons Small">play_circle_outline</i>
        </a>
      </td>
    </tr>
      <tr>
      <td>2- Base en papel</td>

      <td>
        <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="#modal1" id="cuarto_video">
          <i class="material-icons Small">play_circle_outline</i>
        </a>
      </td>
    </tr>
    <tr>
      <td>3- Instrucciones iniciales</td>

      <td>
        <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="#modal1" id="tercer_video">
          <i class="material-icons Small">play_circle_outline</i>
        </a>
      </td>
    </tr>
    
    <tr>
      <td>4- Revisión de trazo</td>

      <td>
        <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="#modal1" id="quinto_video">
          <i class="material-icons Small">play_circle_outline</i>
        </a>
      </td>
    </tr>


    <tr>
      <td>5- Extendido</td>

      <td>
        <a class="waves-effect waves-light btn modal-trigger teal accent-4" href="#modal1" id="septimo_video">
          <i class="material-icons Small">play_circle_outline</i>
        </a>
      </td>
    </tr>


  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col s12 m2">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light  ">
        <img class="activator" src="images/ic_assignment_128.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Empresa 2<i class="material-icons right">more_vert</i></span>
       
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>

  </div>
  <div class="col s12 m2">

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light ">
        <img class="activator" src="images/ic_crop_original_128.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Empresa 3<i class="material-icons right">more_vert</i></span>
        
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
   <div class="col s12 m2">

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light ">
        <img class="activator" src="images/ic_now_wallpaper_128.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Empresa 4<i class="material-icons right">more_vert</i></span>
        
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class="col s12 m2">

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light ">
        <img class="activator" src="images/ic_now_wallpaper_128.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Empresa 4<i class="material-icons right">more_vert</i></span>
        
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
  <div class="col s12 m1"></div>
</div>





















<script>
  (function($){
    $(function(){

      $('#back').click(function(){
        $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
        $('#titulo_principal').html('CREATIVAPP');    
      });  

  }); // end of document ready
})(jQuery); // end of jQuery name space




</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large teal accent-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>





















<!-- Modal Structure -->


<div id="modal1" class="modal green-text">
  <div class="modal-content grey lighten-4">
   <p><div class="video-container">
    <iframe width="1102" height="620" src="" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
  </div></p>
</div>
<div class="modal-footer  grey lighten-2">
 <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat teal-text text-accent-4">Cerrar</a>
</div>
</div>




<script>
  (function($){
   $(function(){
    $('.modal').modal();
    $('#back').click(function(){
     $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
     $('#titulo_principal').html('<img src="images/nombre.png" class="responsive-img">');  
     $('#descripcion_titulo').html('Proceso de patronaje confección y acabado para una chaqueta vaquera');    
   });  

    

    $('#segundo_video').click(function(){
     $("#videos_confeccion").attr("src","https://www.youtube.com/embed/mVEm3WXz08Y");
     ver_video();
   })

    $('#tercer_video').click(function(){
      $("#videos_confeccion").attr("src","https://www.youtube.com/embed/GQD6qQ17f0Y");
      ver_video();
    })

    $('#cuarto_video').click(function(){
      $("#videos_confeccion").attr("src","https://www.youtube.com/embed/E1HsaXSAJH8");
      ver_video();
    })

    $('#quinto_video').click(function(){
      $("#videos_confeccion").attr("src","https://www.youtube.com/embed/Gg0bg1UqZ2A");
      ver_video();
    })

    $('#sexto_video').click(function(){
      $("#videos_confeccion").attr("src","https://www.youtube.com/embed/2ufW6eyeRCY?ecver=2");
      ver_video();
    })

   
    function ver_video(){
      $('#ver_video').html('<td>seguir viendo el vídeo</td> <td> <a class="waves-effect waves-light btn modal-trigger teal accent-4 pulse" href="#modal1"> <i class="material-icons Small">play_circle_outline</i> </a> </td>');

    }

    /* cambiar el color del boton cuando se pasa de sección */
    $("ul#list_videos li a i").click(function() {
          // remove classes from all
          $("i").removeClass(" teal-text text-accent-4");
          // add class to the one we clicked
          $(this).addClass(" teal-text text-accent-4");
        });




  }); // end of document ready
})(jQuery); // end of jQuery name space





</script>




