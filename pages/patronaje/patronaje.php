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

    <div class="circle z-depth-3 tooltipped" data-position="left" data-tooltip="PDF T punto" >
      <div class="circle__inner">
        <div class="circle__wrapper">
          <div class="circle__content">
            <a href="https://drive.google.com/file/d/1sw5E8PgMN7JVnIo6Id4sLJSqhTO6prc1/view?usp=sharing" target="_blank">
             <img src="images/ic_dialpad_128.png" alt="" class="responsive-img centrar">
           </a>         

         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="col s12 m3 tooltipped" data-position="right" data-tooltip="PDF T plano" >
  <div class="circle z-depth-3">
    <div class="circle__inner">
      <div class="circle__wrapper">
        <div class="circle__content">
          <a href="https://drive.google.com/file/d/1sw5E8PgMN7JVnIo6Id4sLJSqhTO6prc1/view?usp=sharing" target="_blank">
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
    <h5 class="card-title header center">Proceso de patronar confección y acabados para una chaqueta vaquera</h5>

    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <div class="video-container">
              <iframe width="1102" height="620" src="https://www.youtube.com/embed/mVEm3WXz08Y" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
            </div>
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>

          </div>


        </div>

        <div class="col s12 m6">

          <div class="card">
            <div class="card-image">
               <div class="video-container">
                <iframe width="1102" height="620" src="https://www.youtube.com/embed/E1HsaXSAJH8" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
              </div>
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
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
        $('#titulo_principal').html('CREATIVAPP');    
      });  
 
  }); // end of document ready
})(jQuery); // end of jQuery name space




</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large teal accent-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>






      