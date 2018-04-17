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




  }); // end of document ready
})(jQuery); // end of jQuery name space







</script>

<div class="row">
  <div class="col s12 m4">

    <div id="card-1" class="card ">
      <div class="card-content separar center-align"  id="patronaje">
        <header>

          <label class="title deep-purple-text text-darken-1 ">PATRONAJE</label>
        </header>
        <main>

          <img src="images/machine.png" alt="" class="responsive-img centrar">

        </main>

      </div>
    </div>


  </div>
  <div class="col s12 m4">
   <div id="card-1" class="card ">
    <div class="card-content separar center-align" id="confeccion">
      <header>

        <label class="title deep-purple-text text-darken-1 ">CONFECCIÓN</label>
      </header>
      <main>

        <img src="images/machine_blue.png" alt="" class="responsive-img centrar">

      </main>

    </div>
  </div>

</div>




<div class="col s12 m4">


 <div id="card-1" class="card ">
  <div class="card-content separar center-align">
    <header>

      <label class="title deep-purple-text text-darken-1 ">TRAZO Y CORTE</label>
    </header>
    <main>

      <img src="images/ic_content_cut_128.png" alt="" class="responsive-img centrar">

    </main>

  </div>
</div>


</div>

</div>

<div class="row">
  <div class="col s12 m4">


   <div id="card-1" class="card ">
    <div class="card-content separar center-align">
      <header>

        <label class="title deep-purple-text text-darken-1 ">FICHA TÉCNICA</label>
      </header>
      <main>

        <img src="images/ic_assignment_turned_in_128.png" alt="" class="responsive-img centrar">

      </main>

    </div>
  </div>


</div>

<div class="col s12 m4">


 <div id="card-1" class="card ">
  <div class="card-content separar center-align">
    <header>

      <label class="title deep-purple-text text-darken-1 ">EMPRESA</label>
    </header>
    <main>

      <img src="images/ic_wallet_travel_128.png" alt="" class="responsive-img centrar">

    </main>

  </div>
</div>


</div>

<div class="col s12 m4">


 <div id="card-1" class="card ">
  <div class="card-content separar center-align">
    <header>

      <label class="title deep-purple-text text-darken-1 ">FORO</label>
    </header>
    <main>

      <img src="images/ic_chat_128.png" alt="" class="responsive-img centrar">

    </main>

  </div>
</div>


</div>
</div>




