<?php include("header.php"); ?>

<div class="header_full">
	<div class="row header">
		<?php include('menu-topo.php') ?>
	</div>
</div>

<div class="conteudo">


	<!-- ##### MODAL FORMULARIO ##### -->
	<div id="modal_inscreva_se" class="modal">
		<div class="modal-content">
			<h4>Intensivo ITIL Foundation – EXIN (+ certificação)</h4>

			<form>
				<div class="input-field col s12">
				  <input placeholder="Nome completo" id="nome" type="text" required>
				</div>
				<div class="input-field col s12">
				  <input placeholder="E-mail" id="email" type="text" required>
				</div>
				<div class="input-field col s12">
				  <input class="phone_with_ddd" placeholder="Telefone" id="telefone" type="text" required>
				</div>
				<div class="input-field col s12">
				  <input placeholder="Data de Nascimento" id="data_nascimento" class="date" type="text">
				</div>
				<div class="input-field col s12">
				  <input placeholder="Periodo de Interesse" id="periodo" class="periodo" type="text">
				</div>

				<p>A fim de atendermos melhor seu interesse em investir neste curso, por gentileza escolha a alternativa que considera mais adequada:</p>

				<p>
					<label>
					  <input class="with-gap" name="melhor-atender-interesse" value="Pretendo fazer o curso nesta turma, já estou decidido" type="radio" required />
					  <span>Pretendo fazer o curso nesta turma, já estou decidido.</span>
					</label>
				</p>
				<p>
					<label>
					  <input class="with-gap" name="melhor-atender-interesse" value="Estou pesquisando as opções disponíveis, mas farei neste semestre." type="radio" required />
					  <span>Estou pesquisando as opções disponíveis, mas farei neste semestre.</span>
					</label>
				</p>
				<p>
					<label>
					  <input class="with-gap" name="melhor-atender-interesse" value="Estou pesquisando as opções disponíveis, farei futuramente." type="radio" required />
					  <span>Estou pesquisando as opções disponíveis, farei futuramente.</span>
					</label>
				</p>
				<p>
					<label>
					  <input class="with-gap" name="melhor-atender-interesse" value="Ainda não estou decidido sobre investir em uma pós-graduação." type="radio" required />
					  <span>Ainda não estou decidido sobre investir em uma pós-graduação.</span>
					</label>
				</p>
				<input class="waves-effect waves-defout btn-large btn_padrao" type="button" value="ENVIAR">
			</form>
		</div>
	</div>
	<!-- ##### fim MODAL FORMULARIO ##### -->


	<div class="section-internas-cursos-formacao">
		<div class="container">
			<div class="row">			
				<div class="col s12 position-relative">
					<nav class="breadcrumb">
						<div class="nav-wrapper">
						  <div class="col s12">
						    <a href="index.php" class="breadcrumb">Home</a>
						    <a href="internas-curso-formacao.php" class="breadcrumb">Itil</a>
						    <a href="#" class="breadcrumb">Itil Intensivo</a>
						  </div>
						</div>
					</nav>
				</div>

				<div class="col s12 position-relative">
					<h1>Intensivo ITIL Foundation – EXIN (+ certificação)</h1>
				</div>
				<div class="col s12 m12 l3">
		            <a href="internas-curso-formacao.php" class="waves-effect z-depth-1">
		            	<img src="images/itil-intensivo.jpg" alt="Curso Itil Intensivo" />
		            </a>
				</div>

				<div class="col s12 m12 l9">
					<ul class="informacoes">
						<li><strong>Informações:</strong></li>
						<li>Tipo: Presencial ou Remoto Ao Vivo</li>
						<li>Duração: 8 horas</li>
						<li>Módulos: 1</li>
					</ul>
					<a href="#modal_inscreva_se" class="waves-effect waves-light btn-large modal-trigger btn_padrao">INSCREVA-SE</a>
				
    				<h2>Objetivo do curso</h2>
		            <p>Curso intensivo de curta duração com foco para certificação oficial ITIL® Foundation, com aplicação de uma grande biblioteca de simulados, apresentação do conteúdo completo para conhecimento das boas práticas do ITIL® e preparação para o exame de certificação.</p>
		            <h4>O exame de Certificação Oficial EXIN será realizado ao final do curso intensivo de ITIL® Foundation, com o resultado online</h4>
				</div>
			</div>
		</div>
	</div>

</div>
<?php include("footer.php"); ?>