<div class="container">
  <script>
  (function($){
    $(function(){


      $('.tooltipped').tooltip();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>


<div class="row">
  <div class="col s12 m3"></div>
  <div class="col s12 m3">

    <div class="circle z-depth-3 tooltipped" data-position="left" data-tooltip="Desarrollo frente espalda" >
      <div class="circle__inner">
        <div class="circle__wrapper">
          <div class="circle__content">
            <a href="https://drive.google.com/file/d/1nsTrv-_7I5zNMGNnjh5v3NIxD8tZcVk7/view?usp=sharing" target="_blank">
             <img src="images/ic_dialpad_128.png" alt="" class="responsive-img centrar">
           </a>         

         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="col s12 m3 tooltipped" data-position="right" data-tooltip="Desarrollo manga" >
  <div class="circle z-depth-3">
    <div class="circle__inner">
      <div class="circle__wrapper">
        <div class="circle__content">
          <a href="https://drive.google.com/file/d/1EHzb8d-7M_fb1BBcVcrkdOQubM0SRKT3/view?usp=sharing" target="_blank">
            <img src="images/ic_tab_unselected_128.png" alt="" class="responsive-img centrar">
          </a>  
        </div>
      </div>
    </div>
  </div>

  
</div>
<div class="col s12 m3"></div>
</div>






<div class="card grey lighten-3 ">
  <div class="card-content teal-text text-accent-4">
    
    <div class="row">
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <div class="video-container">
              <iframe width="1102" height="620" src="https://www.youtube.com/embed/pEquTKXmfJ8?ecver" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
            </div>
             
            </div>
            <div class="card-content">
              <p class="center-align">
                Desarrollo de molde frente
              </p>
            </div>

          </div>


        </div>

        <div class="col s12 m4">

          <div class="card">
            <div class="card-image">
               <div class="video-container">
                <iframe width="1102" height="620" src="https://www.youtube.com/embed/5xETEI5zG1w?ecver" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
              </div>
               
              </div>
              <div class="card-content">
                <p class="center-align">
                  Desarrollo molde espalda
                </p>
              </div>

            </div>

          </div>

          <div class="col s12 m4">

          <div class="card">
            <div class="card-image">
               <div class="video-container">
                <iframe width="1102" height="620" src="https://www.youtube.com/embed/RjJHnClxYo0?ecver" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
              </div>
               
              </div>
              <div class="card-content">
                <p class="center-align">
                  Desarrollo de molde manga
                </p>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

<script>
  (function($){
  $(function(){

      $('#back').click(function(){
        $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
        $('#titulo_principal').html('<img src="images/nombre.png" class="responsive-img">');  
        $('#descripcion_titulo').html('Proceso de patronaje confección y acabado para una chaqueta vaquera');    
      });  
 
  }); // end of document ready
})(jQuery); // end of jQuery name space




</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large teal accent-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>






      
</div>