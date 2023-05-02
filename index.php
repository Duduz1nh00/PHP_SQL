<?php

$connect = mysqli_connect(
    'db', #Nome do serviço
    'root', # user
    '1234', # Senha
    'decoracao' # tabela
);

$table_name = "Funcionarios";

$query = " SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['body']."</p>";
    echo "<p>".$i['date_created']."</p>";
    echo "<hr>";
}