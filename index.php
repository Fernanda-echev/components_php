<?php 
require_once 'components/input.php';
require_once 'components/select.php';
require_once 'components/textarea.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">


    <title>Formulário</title>
</head>
<body>

<div class="formulario"> 

    <h2>Dados Pessoais</h2>

        <?php

        inputComponent('Nome Completo', 'nome');
        inputComponent('Email', 'email');
        inputComponent('CPF', 'cpf');
        inputComponent('Telefone', 'telefone');


        ?>

        <h2>Informações Reservas</h2>


        <?php

        selectComponent('Tipo de Quarto', 'tipo_quarto', [
            'standard' => 'Standard',
            'luxo' => 'Luxo',
            'presidencial' => 'Presidencial'
        ]);

        inputComponent('Data de Check-in', 'checkin', 'date');
        inputComponent('Data de Check-out', 'checkout', 'date');
        inputComponent('Número de Hóspedes', 'hospedes', 'number');
        textareaComponent('Observações', 'observacoes');
        ?>



</div>





</body>
</html>
