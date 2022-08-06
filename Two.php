<?php
    session_start();
?>

<!DOCTYPE 
<html>
<head>
    <title>Carrinho de Compras PHP</title>
    <style type="text/css">
        *{margin: 0;padding: 0;box-sizing: border;}
        h2.title{
            background-color:#69;
            width:100%;
            padding:20px;
            text-align: center;
            color:white;
        }

        .carrinho-container{
            display: flex;
            margin-top: 10px;
        }
        .produto{
            width:33.3%;
            padding: 0 30px;
        }
        .produto img{
            max-width: 100%;
        }
        .produto a{
            display: black;
            width:100%;
            padding:10px;
            color: white;
            background-color:#5fb382;
            text-align: center;
            text-decoration: none;
        
        }
    </style>
</head>
<body>
    <h2 class="title">Carrinho de Compras PHP</h2>
    <div class="carrinho-container">
<?php 
    
   $items = array(['nome'=>'Curso 1','imagem'=>'download.jpeg','preço'=>'100'],['nome'=>'curso 2','imagem2'=>'download2.jpeg','preço'=>'200'],['nome'=>'curso 3','imagem3'=>'download3.jpeg','preço'=>'300']);
    foreach ($items as $key => $value)
    {
    ?>
    <div class="produto">
        <img src="<?php echo $value['imagem']?>" />
        <a href="?Adicionar=<?php echo $key?>">Adicionar ao Carrinho!</a>
    </div><!--produto-->       
    }   
<?php
    }
?>
    </div><!--carrinho-container-->

    <?php
        if(isset($_GET['adicionar'])){
            //Vamos adicionar ao carrinho.
            $idProduto = (int) $_GET['adicionar'];
            if(isset)($items[$idProduto]){
                if(isset($_session[$idProduto])){
                    $_session[$idProduto]['quantidade']++;
                    }else{    
                        $_session[$idProduto] = array('quantidade'=>1,'nome'=>$items[$idProduto]['nome'],['preço']
)                }else{
                die('Voçê não pode adicionar um item que não existe!');
            }
        }
    
    ?>
</body>
</html>





