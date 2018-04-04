<html>
<head>
<!-- HTML 4 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- HTML5 -->
<meta charset="utf-8"/>
  <title>Enviando E-mail com PHP - DevMedia</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<nav>
		<ul class="menu">
			<li><a class="active">HOME</a></li>
		</ul>
    <div id="contato_form">
      <form action="enviar.php" name="form_contato" method="post" >
      <p class="titulo">Formulario <small class="asteristico">*Campos Obrigatorios</small></p>
        <table align="center">
          <tr>
            <td>Nome:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="nome" maxlength="40" />
            </td>
          </tr>
          <tr>
            <td>E-mail:<sup class="asteristico">*</sup></td>
            <td>
              <input type="email" name="email" maxlength="30" />
            </td>
          </tr>
          <tr>
            <td>Telefone:<sup class="asteristico">*</sup></td>
            <td>
              <input type="text" name="telefone" maxlength="14" />
            </td>
          </tr>
          <tr>
            <td>Estado:<sup class="asteristico">*</sup></td>
            <td>
              <select name="escolhas" class="campo_input">
				    <select id="pestado" size="1">
				    <option value="AC"> AC </option>
				    <option value="AL"> AL </option>
				    <option value="AM"> AM </option>
				    <option value="AP"> AP </option>
				    <option value="BA"> BA </option>
				    <option value="CE"> CE </option>
				    <option value="DF"> DF </option>
				    <option value="ES"> ES </option>
				    <option value="GO"> GO </option>  
				    <option value="MA"> MA </option>
				    <option value="MG"> MG </option>
				    <option value="MS"> MS </option>
				    <option value="PA"> PA </option>
				    <option value="PB"> PB </option>
				    <option value="PE"> PE </option>
				    <option value="PI"> PI </option>
				    <option value="PR"> PR </option>
				    <option value="RJ"> RJ </option>
				    <option value="RN"> RN </option>
				    <option value="RR"> RR </option>
				    <option value="RS"> RS </option>
				    <option value="SC"> SC </option>
				    <option value="SE"> SE </option>
				    <option value="SP"> SP </option>
				    <option value="TO"> TO </option>
				    </select>
              </select>
			  <td>Assunto:<sup class="asterisco">*</sup</td>
			  <td>
				<input type="text" name="telefone" maxlength="14" />
            </td>
          </tr>
          <tr>
            <td>Mensagem:<sup class="asteristico">*</sup></td>
            <td>
              <textarea name="msg" cols="16" rows="5"></textarea>
            </td>
          </tr>
          <tr align="right";>
            <td colspan="2">
              <input type="reset" class="campo_submit" value="Limpar" />
              <input type="submit" class="campo_submit" value="Enviar" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
          </tr>
        </table>
      </form>
    </div>
</body>
</html>