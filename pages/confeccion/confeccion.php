





	<div class="fixed-action-btn"><a class="btn-floating btn-large deep-purple darken-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>



<div class="card">
	<div class="card-content">
		
      <table>
        <thead>
          <tr>
              <th>vídeos procesos de confección</th>
             
             	<th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>ver vídeo</td>
         
            <td>
            	<a class="waves-effect waves-light btn modal-trigger deep-purple lighten-1" href="#modal1">
            		<i class="material-icons Small">play_circle_outline</i>
            	</a>
            </td>
          </tr>

           <tr>
            <td>Primer vídeo</td>
         
            <td>
            	<a class="waves-effect waves-light btn modal-trigger deep-purple lighten-1" href="#modal1" id="primer_video">
            		<i class="material-icons Small">play_circle_outline</i>
            	</a>
            </td>
          </tr>
          <tr>
            <td>Segundo vídeo</td>
         
            <td>
            	<a class="waves-effect waves-light btn modal-trigger deep-purple lighten-1" href="#modal1" id="segundo_video">
            		<i class="material-icons Small">play_circle_outline</i>
            	</a>
            </td>
          </tr>
        </tbody>
      </table>
	</div>
</div>
            





	<!-- Modal Structure -->


	<div id="modal1" class="modal green-text">
		<div class="modal-content">
			<h4>Modal Header</h4>
			<p><div class="video-container">
				<iframe width="1102" height="620" src="https://www.youtube.com/embed/mBjY4xCcd9o" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
			</div></p>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
	</div>




	<script>
		(function($){
			$(function(){
				$('.modal').modal();
				$('#back').click(function(){
					$('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
					$('#titulo_principal').html('OVA Confección');    
				});  

				$('#primer_video').click(function(){
					$("#videos_confeccion").attr("src","https://vjs.zencdn.net/v/oceans.mp4");
					$('#videos_confeccion').get(0).play();
				});  

				$('#segundo_video').click(function(){
					$("#videos_confeccion").attr("src","https://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4");
					$('#videos_confeccion').get(0).play();
				});




				/* cambiar el color del boton cuando se pasa de sección */
				$("ul#list_videos li a i").click(function() {
	      // remove classes from all
	      $("i").removeClass(" deep-purple-text text-darken-4");
	      // add class to the one we clicked
	      $(this).addClass(" deep-purple-text text-darken-4");
	    });




  }); // end of document ready
})(jQuery); // end of jQuery name space



function pausar(){
        $('#video_ama')[0].pause();
      }

      function play(){
        $('#video_ama')[0].play();
      }






</script>
