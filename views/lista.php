<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url();?>Static/css/style2.css" type="text/css" />
    </head>
    <body>
        <?php 
        
                
            foreach($usuarios as $u){
                echo "<h1>"."Nome: ".$u->nome. "<br>  Idade: ".$u->idade."<br>  Email: ".$u->email."</h1>";
            }
        ?>
    </body>
</html>