<div class="container">
  <script>
  (function($){
    $(function(){


      $('.tooltipped').tooltip();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>


















<div class="row">

  <div class="col s12 m4">

    <div class="circle z-depth-3 tooltipped " data-position="left" data-tooltip="PDF T punto" >
      <div class="circle__inner">
        <div class="circle__wrapper ">
          <div class="circle__content ">
            <a class="waves-effect waves-light  modal-trigger" href="#modal1">
              <img src="images/ic_dialpad_128.png" alt="" class="responsive-img centrar">
            </a>
             
         
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="col s12 m4 tooltipped" data-position="top" data-tooltip="PDF T plano" >
  <div class="circle z-depth-3 ">
    <div class="circle__inner">
      <div class="circle__wrapper">
        <div class="circle__content">
         <a class="waves-effect waves-light  modal-trigger" href="#modal2">
            <img src="images/ic_tab_unselected_128.png" alt="" class="responsive-img centrar">
        </a>
        </div>
      </div>
    </div>
  </div>

  
</div>
 <div class="col s12 m4 tooltipped" data-position="right" data-tooltip="PDF T plano" >
  <div class="circle z-depth-3">
    <div class="circle__inner">
      <div class="circle__wrapper">
        <div class="circle__content">
         <a class="waves-effect waves-light  modal-trigger" href="#modal3">
            <img src="images/ic_play_circle_outline_128.png" alt="" class="responsive-img centrar">
          </a>
        </div>
      </div>
    </div>
  </div>

  
</div>

</div>






<!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
       <blockquote>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat voluptas repudiandae consectetur at ducimus itaque aspernatur ea voluptatum vitae rem eius dolorum expedita quos sapiente unde recusandae praesentium, corporis amet!</p>
      </blockquote>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">x</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
       <blockquote>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat voluptas repudiandae consectetur at ducimus itaque aspernatur ea voluptatum vitae rem eius dolorum expedita quos sapiente unde recusandae praesentium, corporis amet!</p>
      </blockquote>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">x</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <blockquote>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat voluptas repudiandae consectetur at ducimus itaque aspernatur ea voluptatum vitae rem eius dolorum expedita quos sapiente unde recusandae praesentium, corporis amet!</p>
      </blockquote>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">x</a>
    </div>
  </div>











      






<script>
  (function($){
  $(function(){

      $('#back').click(function(){
        $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
        $('#titulo_principal').html('CREATIVAPP');    
      }); 

       $('.modal').modal(); 
 
  }); // end of document ready
})(jQuery); // end of jQuery name space




</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large teal accent-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>






      
</div>