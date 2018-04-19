<script>
  (function($){
    $(function(){


      $('.tooltipped').tooltip();

  }); // end of document ready
})(jQuery); // end of jQuery name space

</script>



		<blockquote class="white-text flow-text center-align">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto unde porro sapiente voluptas corporis cumque totam consequuntur ab quibusdam, optio facere ea blanditiis, error repellendus reprehenderit asperiores impedit praesentium libero?
    </blockquote>



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













<div class="card">
	<div class="card-content">
		
      <table>
        <thead>
          <tr>
              <th>vídeos de trazo y corte</th>
             
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
		<div class="modal-content deep-purple accent-2">
			<p><div class="video-container">
				<iframe width="1102" height="620" src="https://www.youtube.com/embed/mBjY4xCcd9o" frameborder="0" allowfullscreen id="videos_confeccion"></iframe>
			</div></p>
		</div>
		<div class="modal-footer  deep-purple accent-4">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat white-text">Cerrar</a>
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










<script>
  (function($){
  $(function(){

      $('#back').click(function(){
        $('#main_content').load('pages/inicio/dashboard.php').slideDown(560); 
        $('#titulo_principal').html('Ova Confección');    
      });  
 
  }); // end of document ready
})(jQuery); // end of jQuery name space




</script>


<div class="fixed-action-btn"><a class="btn-floating btn-large deep-purple darken-4 pulse" id="back"><i class="large material-icons">arrow_back</i></a></div>






      