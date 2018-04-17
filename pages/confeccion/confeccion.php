
<div class="row">
	<div class="col s12 m6">
		<ul class="collection with-header" id="list_videos">
			<li class="collection-header"><h4>Videos de confección</h4></li>
			<li class="collection-item"><div>1<a id="primer_video" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			<li class="collection-item"><div>2<a id="segundo_video" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			<li class="collection-item"><div>3<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			<li class="collection-item"><div>4<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
		</ul>


	</div>
	<div class="col s12 m6">
		 <video class="responsive-video" controls id="videos_confeccion">
       		 <source src="" type="video/mp4">
        </video>

	</div>
</div>





<script>
  (function($){
  $(function(){

        $('#back').click(function(){
	      $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
	      $('#titulo_principal').html('OVA Confección');    
	    });  
 		
        $('#primer_video').click(function(){
	      $("#videos_confeccion").attr("src","https://vjs.zencdn.net/v/oceans.mp4");
	      $('#videos_confeccion').get(0).play()
	    });  

        $('#segundo_video').click(function(){
	      $("#videos_confeccion").attr("src","https://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4");
	      $('#videos_confeccion').get(0).play()
	    });

          /* cambiar el color del boton cuando se pasa de sección */
	    $("ul#list_videos li a i").click(function() {
	      // remove classes from all
	      $("i").removeClass("orange-text");
	      // add class to the one we clicked
	      $(this).addClass("orange-text");
	    });




  }); // end of document ready
})(jQuery); // end of jQuery name space





</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large deep-purple darken-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>