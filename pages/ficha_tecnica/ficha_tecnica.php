<script>
  (function($){
    $(function(){


      $('.tooltipped').tooltip();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>







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






      