<?php // SALVAR COMO conexao.php            arquivo de comunicação entre o banco e seu sistema
class BancodeDados {
    // Nas linhas abaixo você poderá colocar as informações do Banco de Dados.
    private $host = "localhost"; 	// Nome ou IP do Servidor
    private $user = "root"; 		// Usuário do Servidor MySQL
    private $senha = ""; 		// Senha do Usuário MySQL
    private $banco = "sys"; 		// Nome do seu Banco de Dados
    public $con;
	
	// método responsável para conexão a base de dados
	function conecta(){
        $this->con = @mysqli_connect($this->host,$this->user,$this->senha, $this->banco); //@mysqli_connect: NOME PADRÃO, NÃO MODIFICAR
	    // Conecta ao Banco de Dados
        if(!$this->con){
      		// Caso ocorra um erro, exibe uma mensagem com o erro
			die ("  Problemas com a conexão");
        }
    }
	
	// método responsável para fechar a conexão
	function fechar(){         //sempre que abrirmos a conexão, devemos fechar
		mysqli_close($this->con);
		return;
	}
	
	// método para executar o SELECT (consultar.php, verexclusao.php, veralteracao.php)
	function sqlquery($string,$caminho){    //execução do banco de dados (insert, select, update e delete) ESSE É O FRAMEWORK
		// executando instrução SQL
		$resultado = @mysqli_query($this->con, $string);
		if (!$resultado) {
			echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br /><br />';
			die('<b>Query Inválida:</b>' . @mysqli_error($this->con)); 
		} else {
			$num = @mysqli_num_rows($resultado);
			if ($num==0){
			echo "<b>Código: </b>não localizado !!!!<br /><br />";
			echo '<input type="button" onclick="window.location='."'$caminho'".';" value="Voltar"><br /><br />';
			exit;		
			}else{
				$dados=mysqli_fetch_array($resultado);
			}
		} 
		$this->fechar(); // chama o método que fecha a conexão
		return $dados;
	}
	
	// método para executar o INSERT, UPDATE e DELETE (incluir.php)
	function sqlstring($string,$texto){
		$resultado = @mysqli_query($this->con, $string);
		if (!$resultado) {
			echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br /><br />';
			die('<b>Query Inválida:</b>' . @mysqli_error($mysql->con)); 
		} else {
			echo "<b>$texto </b> - Realizada com  Sucesso";
		}
		$this->fechar(); // chama o método que fecha a conexão
		return;
	}	
}
