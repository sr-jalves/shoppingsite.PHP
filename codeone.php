<?php
   $paginas = ['home'=>'Pagina1', 'sobre'=>'Página Home','contato'=>'<input type="text" placeholder="Seu nome..." /></form>','FAQ'=>'Perguntas Frequentes','Loja'=>'Conteúdo da Loja'];
   
?>

<!DOCTYPE html>
     <html>
     <head>
        <title>HTML POR PHP!<title>
         <style type="text/css">
            *{
               margin: 0;
               padding: 0;
               box-sizing: border-box;
      
            }

            header{
               background-color:#069;
               padding:8px 10px;
               text-align: center;
            }

            a{
               display: inline-block;
               margin:0 10px;
               color: white;
               font-size: 17px;
   
            }

            section{
               max-width: 960px;
               margin: 20px auto;padding: 0 2%;
            }

            h2{
               background-color:#069;
               color: white;
               padding: 8px 10px;

            }
            p{
               color: black;
               
            }

            </style>
            </head>
      <body>
        <header>  
            <?php
               foreach ($paginas as $key => $value){
                  echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';

               }
            ?>
        </header>
        <section>
            
            <h2><?php

               $pagina = (isset($_get['page']) ? $_get['page'] : 'home');
               if(!array_key_exists($pagina, $paginas)){
                  $pagina = 'home';
               }
               echo ucfirst($pagina);

            ?></h2>
            <p><?php 
            echo $pagina[$pagina]; 
            ?></p>
         </section>
         
      </body>
     </html>
