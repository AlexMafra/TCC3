<!DOCTYPE html>
<html>
<head>
    <title>Exemplo</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    
    <style type="text/css"> </style> 
</head>
<body>    
     <div id="sidebar">
        <ul>
            <li><a onclick="carregar('consultaColaborador.php')" href="#">Home</a></li>
            <li><a onclick="carregar('consultaprocesso.php')" href="#">Explore</a></li>
            <li><a onclick="carregar('users.html')" href="#">Users</a></li>
        </ul>
    </div>
    <div id="conteudo"></div>
</body>
<script>
    function carregar(pagina){
        $("#conteudo").load(pagina);
    }
</script>
</html>