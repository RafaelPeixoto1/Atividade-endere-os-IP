<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>
<h1>Classes IP</h1>

<strong>Digite o endereço IP que pretende verificar</strong>
<br><br>
<form action="verificar.php" method="POST">
<input type="text" name="text1" size="1" />
 <input type="text" name="text2" size="1" /> 
  <input type="text" name="text3" size="1" /> 
  <input type="text" name="text4" size="1" /> 
<br><br>
<input type="submit" value ="Verificar">
</form>

<h1>Protocolos</h1>

<strong>Selecione o protocolo</strong>
<br>
             <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Protocolos
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="dns.html">DNS</a></li>
    <li><a href="ftp.html">FTP</a></li>
    <li><a href="http.html">HTTP</a></li>
     <li><a href="ip.html">IP</a></li>
  </ul>
</div>                  

</body>
</html>