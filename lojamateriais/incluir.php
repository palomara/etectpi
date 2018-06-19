		<?php
			include_once('conexao.php'); //EFETIVA CONEXÃO COM BANCO DE DADOS
			//criando o objeto mysql e conectando ao banco de dados
			$mysql = new BancodeDados();
			$mysql->conecta();
					
			// recuperando os dados de inclusao.php
			$user_code = $_POST['user_code'];
			$login_nm = $_POST['login_nm'];	
			$user_password = $_POST['user_password'];	

		   
			//diretório onde será gravado a imagem
			//$arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:""; 
			//if(isset($_FILES['arquivo'])){
			///	$nome = $arquivo['name'];
			//	move_uploaded_file($_FILES['arquivo']['tmp_name'],'imagens/' . $nome);
			//} 
			
			// criando a linha de INSERT
			$sqlinsert =  "insert into tb_usuario (user_code, login_nm, user_password) values 
						  ('$user_code', '$login_nm', '$user_password')",

			
			// executando instrução SQL através do método sqlstring() que esta em conexao.php
			$resultado = $mysql->sqlstring($sqlinsert,"INCLUSÃO");
			
		?>