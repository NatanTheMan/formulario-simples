<?php

$name = $_POST['name'];
$age = $_POST['age'];

$errors = [];

if (trim($name) == '') {
    $errors[] = "<strong>Nome</strong> precisa ser informado";
}
if ((int)$age <= 0) {
    $errors[] = "<strong>Idade</strong> não pode ser menor do que zero";
}

if (count($errors) > 0) {
    foreach ($errors as $err) {
        echo "<p>$err</p>";
    }
    echo "<a href='index.html'>Voltar</a>";
} else {
    echo "<p>Olá <strong>$name</strong>, você tem <strong>$age</strong> anos</p>";
}
