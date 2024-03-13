<html lang="pt">
<head>
    <meta charset='utf-8'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    <link rel='stylesheet' href='./css/bootstrap.css'/>
    <link rel='stylesheet' href='./css/estilo.css'/>
    <title>Drew Food</title>
    
</head>
<body>
        <?php include("includes/cabecalho.php");?>
        
        <main>
            <?php 
                include_once("controller/verurl.php");
                $redirecionar = new VerUrl();
                $redirecionar->trocarUrl(@$_GET['secao']);


            ?>
        </main>
        <?php include("includes/rodape.php");?>
        
    <script src='js/bootstrap.bundle.js'></script>
 
</body>
</html>