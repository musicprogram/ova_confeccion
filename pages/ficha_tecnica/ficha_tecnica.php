<div class="container">
  <script>
  (function($){
    $(function(){


      $('.tooltipped').tooltip();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>



<div class="row">
<div class="col s12 m4"></div>
  <div class="col s12 m4">

    <div class="circle z-depth-3 tooltipped " data-position="left" data-tooltip="Ficha técnica excel" >
      <div class="circle__inner">
        <div class="circle__wrapper ">
          <div class="circle__content ">
            <a class="waves-effect waves-light  modal-trigger" href="https://docs.google.com/uc?export=download&id=1eTVTrDFQHQQGQ00JOY3REqRcf7A-J8UK" target="_blank">
              <img src="images/ic_assignment_128.png" alt="" class="responsive-img centrar">
            </a>
             
        
         </div>
       </div>
     </div>
   </div>
 </div>

<div class="col s12 m4"></div>

</div>



<script>
  (function($){
  $(function(){

      $('#back').click(function(){
        $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
        $('#titulo_principal').html('<img src="images/nombre.png" class="responsive-img">');  
        $('#descripcion_titulo').html('Proceso de patronaje confección y acabado para una chaqueta vaquera');    
      }); 

       $('.modal').modal(); 
 
  }); // end of document ready
})(jQuery); // end of jQuery name space




</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large teal accent-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>






      
</div>