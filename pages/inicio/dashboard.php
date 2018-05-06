




<div class="row">
  <div class="col s12 m4">

    <div id="card-1" class="card ">
      <div class="card-content separar center-align"  id="patronaje">
        <header>

          <label class="title teal-text text-accent-4 ">PATRONAJE</label>
        </header>
        <div class="scene5">

          <img src="images/machine.png" alt="" class="responsive-img centrar" data-depth="1.00">

        </div>

      </div>
    </div>


  </div>
  <div class="col s12 m4">
   <div id="card-1" class="card ">
    <div class="card-content separar center-align" id="confeccion">
      <header>

        <label class="title teal-text text-accent-4 ">CONFECCIÓN</label>
      </header>
      <div class="scene4">

        <img src="images/machine_blue.png" alt="" class="responsive-img centrar" data-depth="0.8">

      </div>

    </div>
  </div>

</div>




<div class="col s12 m4">


 <div id="card-1" class="card ">
  <div class="card-content separar center-align" id="trazoycorte">
    <header>

      <label class="title teal-text text-accent-4 ">TRAZO Y CORTE</label>
    </header>
    <div class="scene3">

      <img src="images/ic_content_cut_128.png" alt="" class="responsive-img centrar" data-depth="0.9">

    </div >

  </div>
</div>


</div>

</div>

<div class="row">
  <div class="col s12 m4">


   <div id="card-1" class="card ">
    <div class="card-content separar center-align" id="ficha_tecnica">
      <header>

        <label class="title teal-text text-accent-4 ">FICHA TÉCNICA</label>
      </header>
      <div class="scene2">

        <img src="images/ic_assignment_turned_in_128.png" alt="" class="responsive-img centrar" data-depth="0.6">

      </div>

    </div>
  </div>


</div>

<div class="col s12 m4">


 <div id="card-1" class="card ">
  <div class="card-content separar center-align" id="empresa">
    <header>

      <label class="title teal-text text-accent-4 ">EMPRESA</label>
    </header>
    <div class="scene1">

      <img src="images/ic_wallet_travel_128.png" alt="" class="responsive-img centrar" data-depth="0.7">

    </div>

  </div>
</div>


</div>

<div class="col s12 m4">


 <div id="card-1" class="card ">
  <div class="card-content separar center-align" id="foro">
    <header>

      <label class="title teal-text text-accent-4 ">FORO</label>
    </header>
    <div class="scene">

      <img src="images/ic_send_128.png" alt="" class="responsive-img centrar" data-depth="0.8">

    </div>

  </div>
</div>


</div>
</div>






<script>
  (function($){
    $(function(){

      $('.tooltipped').tooltip();

      $('#patronaje').click(function(){
        $('#main_content').load('pages/patronaje/patronaje.php').slideDown(560);  
        $('#titulo_principal').html('Patronaje');
      }); 

      $('#confeccion').click(function(){
        $('#main_content').load('pages/confeccion/confeccion.php').slideDown(560);  
        $('#titulo_principal').html('Confección');
      }); 

      $('#foro').click(function(){
        $('#main_content').load('pages/foro/foro.php').slideDown(560);  
        $('#titulo_principal').html('Foro');
      });

      $('#trazoycorte').click(function(){
        $('#main_content').load('pages/trazoycorte/trazoycorte.php').slideDown(560);  
        $('#titulo_principal').html('Trazo y Corte');
      });
      
      $('#empresa').click(function(){
        $('#main_content').load('pages/empresa/empresa.php').slideDown(560);  
        $('#titulo_principal').html('Empresas');
      }); 

      $('#ficha_tecnica').click(function(){
        $('#main_content').load('pages/ficha_tecnica/ficha_tecnica.php').slideDown(560);  
        $('#titulo_principal').html('Ficha Técnica');
      });

      var scene = $('.scene').get(0);
      var parallaxInstance = new Parallax(scene);

      var scene1 = $('.scene1').get(0);
      var parallaxInstance = new Parallax(scene1);

      var scene2 = $('.scene2').get(0);
      var parallaxInstance = new Parallax(scene2);

      var scene3 = $('.scene3').get(0);
      var parallaxInstance = new Parallax(scene3);

      var scene4 = $('.scene4').get(0);
      var parallaxInstance = new Parallax(scene4);

      var scene5 = $('.scene5').get(0);
      var parallaxInstance = new Parallax(scene5);


  }); // end of document ready
})(jQuery); // end of jQuery name space





  
 
</script>