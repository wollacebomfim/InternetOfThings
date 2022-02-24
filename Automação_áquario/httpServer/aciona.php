<?php

session_start();


$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($sock,"10.0.0.99", 80);


//Liga a lampada.
if($_POST['estado']=="On1")
{
    socket_write($sock, "1");
    
    header("Location: aquario.php");

}

//Desliga a lampada
if($_POST['estado']=="Off1")
{
    socket_write($sock, "2");
    header("Location: aquario.php");
}


//Liga o Filtro de água.
if($_POST['estado']=="On2")
{
    socket_write($sock, "3");
    header("Location: aquario.php");
}

//Desliga o filtro de água.
if($_POST['estado']=="Off2")
{
    socket_write($sock, "4");

    header("Location: aquario.php");
}

//Liga a bomba de ar.
if($_POST['estado']=="On3")
{
    socket_write($sock, "5");
    header("Location: aquario.php");
}

//Desliga a bomba de ar
if($_POST['estado']=="Off3")
{
    socket_write($sock, "6");
    header("Location: aquario.php");
}

//Vazio
if($_POST['estado']=="On4")
{
    socket_write($sock, "7");
    header("Location: aquario.php");
}

//Vazio
if($_POST['estado']=="Off4")
{
    socket_write($sock, "8");
    header("Location: aquario.php");
}



socket_close($sock);


?>