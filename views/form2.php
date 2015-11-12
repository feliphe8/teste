<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="uft-8">
        <title>Nosso Formulário2</title>
    </head>
    <body>
         <p>Alunos:Caio Fernando Dalla Vechia da Silva<br>
                  Feliphe Simões Carvalho</p>
        <form action="/index.php/controller/doPost" method="POST">
            Nome:<input type="text" name="nome"/><br>
            E-mail:<input type ="email" name="email"/><br>
            Idade:<input type="text" name="idade"/><br>
            Nmr de Acessos:<input type="number" name="numero"/><br>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>