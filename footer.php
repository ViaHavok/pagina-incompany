<div class="section-contato parallax-container" id="section-contato">
	<div class="container">
		<div class="row">
			<div class="col s12 position-relative">
				<h2>Contatos</h2>
			</div>
			<p class="center-align">Agende uma conversa ou visita com um de nossos consultores especializados e encontre <br> <span>A MELHOR SOLUÇÃO PARA VOCÊ OU SUA EMPRESA</span></p>
		
			<div class="row">
			    <form class="col s12 m12 l5">
			      <div class="row">
			        <div class="input-field col s12">
			          <input placeholder="Nome" id="nome" type="text">
			        </div>
			        <div class="input-field col s12">
			          <input placeholder="E-mail" id="email" type="text">
			        </div>
			        <div class="input-field col s12">
			          <input placeholder="Empresa" id="empresa" type="text">
			        </div>
			        <div class="input-field col s12">
			          <input class="phone_with_ddd" placeholder="Telefone" id="telefone" type="text">
			        </div>

					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Tenho interesse em</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
					</div>
			      </div>
			      <input class="waves-effect waves-defout btn-large" type="button" value="ENVIAR">
			    </form>

				<div class="col s12 m12 l6 offset-l1 position-relative">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.425946072166!2d-46.655056139452604!3d-23.55313698707842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58353d94746d%3A0x4ceaf577d3e568e7!2sR.+Frei+Caneca%2C+558+-+23%C2%BA+andar+-+Consola%C3%A7%C3%A3o%2C+S%C3%A3o+Paulo+-+SP%2C+01307-001!5e0!3m2!1spt-BR!2sbr!4v1522261091666" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					<p>Rua Frei Caneca, 558 - 23º andar Consolação - CEP 01307-000 São Paulo</p>
					<p>TELEFONE : 11 3385-1414</p>
				</div>

			</div>
		</div>
		<div class="parallax"><img src="images/bg-contatos.jpg"></div>
	</div>
</div>


<a href="#" class="voltar-ao-topo"><i class="material-icons">arrow_upward</i></a>
<div class="footer-inner">
	<div class="container">
		<footer>
    		<p>Treinamentos ITIL® entregues em parceria com a Office IT - Empresa oficialmente credenciada pelo <strong>EXIN</strong>, <strong>AXELOS</strong> e <strong>PeopleCert</strong>. Treinamentos COBIT 5® credenciado pela APMG</p>
    		<p>ITIL® is a registered trade mark of AXELOS Limited - The Swirl logo™ is a trade mark of AXELOS Limited - Cobit® is a trade mark of ISACA © 2016 Todos Direitos Reservados Via Academy</p>
		</footer>
	</div>
</div>

<script type="text/javascript">
	$('.dropdown-button').dropdown({
			hover: true, 
		}
	);
	$(document).ready(function(){
    	$('.scrollspy').scrollSpy();
		$('.parallax').parallax();
	    $('select').material_select();
	    $('.modal').modal();
	    $('.materialboxed').materialbox();
		jQuery(window).scroll(function() {
		    if (jQuery(this).scrollTop() > 1200) {
		        jQuery('.voltar-ao-topo').fadeIn(200);
		    } else {
		        jQuery('.voltar-ao-topo').fadeOut(200);
		    }
		});
		jQuery('.voltar-ao-topo').click(function(event) {
		    event.preventDefault();
		    jQuery('html, body').animate({scrollTop: 0}, 500);
		});
		$('.date').mask('00/00/0000');
		$('.time').mask('00:00:00');
		$('.date_time').mask('00/00/0000 00:00:00');
		$('.periodo').mask('00/00/0000 á 00/00/0000');
		$('.cep').mask('00000-000');
		$('.phone').mask('0000-0000');
		$('.phone_with_ddd').mask('(00) 0000-00000');
		$('.fallback').mask("00r00r0000", {
		  translation: {
		    'r': {
		      pattern: /[\/]/,
		      fallback: '/'
		    },
		    placeholder: "__/__/____"
		  }
		});
		$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
	});
	$('.button-collapse').sideNav({
		menuWidth: 300, 
		edge: 'right', 
		closeOnClick: true, 
		draggable: true, 
		onOpen: function(el) {}, 
		onClose: function(el) {}, 
    });
</script>

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="https://v2.zopim.com/?4ewm6WeEW5ZIJVfd9bB3SDwriF00q3kY";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

</body>
</html>