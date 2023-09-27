<?php

$name = "Julio Laindorf";
$age = 32;
$salary_expactation = 3000;
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Nullam vel ullamcorper velit. Sed facilisis arcu eget quam ullamcorper, nec pellentesque dolor suscipit.</p>
";
$open_to_negociation = true;

$skills = ['javascript', 'html', 'css'];

$adress = [
    'cep' => '92325150',
    'street' => 'Libertação',
    'city' => 'Canoas',
    'state' => 'RS',
    'neighborhood' => 'Mathias',
    'number' => 45,
    'complement' => 'frente'
];

$contacts = (object)[

    'github' => 'https://github.com/jlaindorf',
    'phone' => '9999-9999',
    'linkedin' => 'https://linkedin.com/jlaindorf'
];

$experiences =[

    [
        'company_name' => 'Hai',
        'cargo' => 'Programador',
        'period' => '04/09/2019 - 26/9/2023',
        'description' => '...........'
    ],
    [
        'company_name' => 'Savarauto',
        'cargo' => 'Programador',
        'period' => '04/09/2019 - 26/9/2023',
        'description' => '...........'
    ],
]
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1><?php echo $name ?></h1>
        <p><?php echo "$adress[street] - $adress[number] - $adress[neighborhood]"?></p>
        <p>GitHub : <?php  echo $contacts->github?></p>
        <p>Telefone: (123) 456-7890</p>

    </header>

    <div class="container">
        <h2>Resumo Profissional</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel ullamcorper velit. Sed facilisis arcu eget quam ullamcorper, nec pellentesque dolor suscipit.</p>

        <h2>Experiência Profissional</h2>
        <ul>
        <?php 
           foreach ($experiences as $experience){
           
            ?>
          <li>
                    <p><strong><?php echo $experience['company_name'] ?></strong></p>
                    <p>Cargo: <?php echo $experience['cargo'] ?></p>
                    <p>Período: <?php echo $experience['period'] ?></p>
                    <p><?php echo $experience['description'] ?>.</p>
                </li>

            <?php
           }
           ?>
            <!-- Adicione mais experiências profissionais conforme necessário -->
        </ul>

        <h2>Formação Acadêmica</h2>
        <ul>
            <li>
                <p><strong>Nome da Universidade</strong></p>
                <p>Curso: Nome do Curso</p>
                <p>Ano de Conclusão: Ano de Conclusão</p>
            </li>
            <!-- Adicione mais formações acadêmicas conforme necessário -->
        </ul>
        


        <h2>Habilidades Técnicas</h2>
        <ul>
        <?php 
            foreach($skills as $skill) {
                echo "<li>$skill</li>";
            }

          //  unset($skill); 
           ?>
        
        </ul>
    </div>
</body>

</html>