<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>login</title>
		<h1>LOGIN</h1>
      
      
</head>
<body>
<form id="cadfuncionario" method="post"  class="Formulario" action="processafuncionario.php">
                    

                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    cpf<br>
                    <input type="text" name="cpf" class="campo" maxlength="40" required autofocus><br>
					
                    <input type="submit" value="salvar" class="btn">
  <br><br>
        </form>


<footer>

</footer>
</body>
</html>
