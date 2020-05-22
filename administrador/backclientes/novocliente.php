<html>
<head>


<body>

    <form method="post" action="">

    <fieldset class="grupo">
        <div class="campo">
            <label for= "nomecli"> Nome </label>
        <input type=text name="nome" value=" "> <br>
        </div>

        <div class="campo">
            <label for ="datanasc"> Data de nascimento:</label>
            <input type=date name="datanasc" value=""><br>
        </div>

       <div class="campo">
            <label for="rg">RG: </label>
            <input type=text name="rg" value=""><br>
       </div>

       <div class="campo">
           <label for="cpf">CPF: </label>
            <input type="number" name="cpf" value=""><br>
       </div>   
       
       <div class="campo">
           <label for="telcli">Telefone:</label>
            <input type="number" name="telcli" value=""><br>
       </div>

        <input type="submit" class="enviar" name ="enviar"  value="enviar">
      
    </fieldset>
    </form>

</body>

</html>



<?php 

if (isset($_POST["enviar"]))
{


require "connection.php";

@$nome = $_POST["nome"];
@$datanasc = $_POST["datanasc"];
@$rg = $_POST["rg"];
@$cpf = $_POST["cpf"];
@$telcli = $_POST["telcli"];


if (mysqli_connect_errno($conn)) {
    echo "Erro: " . mysqli_connect_error();
} else {
    $sql = "INSERT INTO cliente ( nome , datanasc , rg , cpf, telcli)
    VALUES ( '$nome', '$datanasc' , '$rg' , '$cpf' , '$telcli')";

    if (mysqli_query($conn, $sql))
       {
        echo "Cliente inserido!";
        header("Location:./view_pesquisar.php");
    } else {
        echo "Erro:" . mysqli_error($conn);
    }

}

$conn->close();

}

?>
