<a href="#" class="voltar-ao-topo"><i class="material-icons">arrow_upward</i></a>

<div class="footer-inner">
	<div class="container">
		<footer>
			Via Academy - Qualificação para Transformar Pessoas e Empresas
		</footer>
	</div>
</div>

<script type="text/javascript">
	$('.dropdown-button').dropdown({
			hover: true, 
		}
	);
	$(document).ready(function(){
		$('.parallax').parallax();
	    $('select').material_select();
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

</body>
</html>