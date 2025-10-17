<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

$errors = [];
if (trim($name) == '') {
    $errors[] = "<strong>Nome</strong> precisa ser informado";
}
if (!is_numeric($age)) {
    $errors[] = "<strong>Idade</strong> deve ser um número.";
} elseif ((int)$age <= 0) {
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
