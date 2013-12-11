
<link rel="stylesheet" href="css/block.css">

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
	    function initialize() {
	        var map_canvas = document.getElementById('goo_map');
	        var myLatlng = new google.maps.LatLng(41.564231,-8.575605);
	        var map_options = {
		          center: myLatlng,
		          zoom: 15,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
	        } 

	        var map = new google.maps.Map(map_canvas, map_options)

	        var marker = new google.maps.Marker({
			    position: myLatlng,
			    map: map,
			    title: 'Hello World!'
			});
    	}
     	google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<section class='block well'>
		<div  class='header'>
			<h1 class='title centro_color'><span class="text-muted">Entre em</span> <b>Contacto</b></h1>
			<hr>
			<div id="goo_map"></div>
			<hr>
			<div class='table'>
				<div class='col-2'>
					<h3 class='black'>Marta Pontes</h3>
					<p class='title'>E-mail: <span class='black'>martapontestf@gmail.com</span></p>
					<p class='title'>Telm: <span class='black'>939 799 234 // 916 735 546</span></p>
					<br>
					<p>Presto apoio domiciliário em:</p>
					<ul>
						<li class='lista'>Barcelos</li>
						<li class='lista'>Braga</li>
						<li class='lista'>Esposende</li>
						<li class='lista'>Vila Verde</li>
					</ul>
					<hr>

					<h2 class='black'>Parceria com Centro de Estudos de Galegos</h2>
					<img class='img-rounded perfil parceria' src="img/CEG.png">
					<h3 class='black'>Glória Costa</h3>

					<p class='title'>E-mail: <span class='black'>galegoscentroestudos@sapo.pt</span></p>
					<p class='title'>Telm: <span class='black'>919 405 966</span></p>
					<br>

				</div>
				<div class='col-1'>

					<h4 class='black'>Envie-nos uma mensagem!</h4>
					<p>Entre em contacto connosco e exponha-nos as suas dúvidas directamente através do formulário de contacto presente nesta página.</p>
					<hr>
					<?php echo form_open('Mail','');?>
					
						<h5 class='title form'>Nome: </h5>
						<?php echo form_input(array('name'=>'NOME','class'=>'form-control input form_input','placeholder'=>'Nome'),set_value('NOME'));?>
					
					

					
						<h5 class='title form'>E-mail: </h5>
						<?php echo form_input(array('name'=>'EMAIL','class'=>'form-control input form_input','placeholder'=>'E-mail'),set_value('EMAIL'));?>
					
					
					

						<h5 class='title form'>Telefone: </h5>
						
							<?php echo form_input(array('name'=>'TELEFONE','class'=>'form-control input form_input','placeholder'=>'Telefone'),set_value('TELEFONE'));?>	
						

						
						

					
					

				</div>
			</div>
			
			
			

			


		</div>