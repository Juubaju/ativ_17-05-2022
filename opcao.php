<html>
    <head>
        <title>TELA <?php echo $_GET['tela']; ?></title>
    </head>
<body>
    <?php if ($_GET['tela'] == 1){ ?>
            <h3> CARREGOU O CONTEÚDO DA TELA 1 </H3>
        <?php }else if ($_GET['tela'] == 2){ ?>
            <h3> CARREGOU O CONTEÚDO DA TELA 2 </H3>  
        <?php }else{?>
            <h3> CARREGOU O CONTEÚDO DA TELA 3 </H3> 
        <?php }  ?>
     </body>
</html>