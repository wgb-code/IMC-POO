<?php
    include '../app/controllers/getInfos.php';

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $person = new Person($name, $age, $gender, $height, $weight);

    $imc = $person->calc();

    $classification = "";
    if ($imc < 18.5) {
        $classification = "Abaixo do peso";
    } else if ($imc < 25) {
        $classification = "Peso normal";
    } else if ($imc < 30) {
        $classification = "Sobrepeso";
    } else {
        $classification = "Obesidade";
    }

    echo "Nome: " . $person->getName() . "<br>";
    echo "Idade: " . $person->getAge() . " anos<br>";
    echo "Gênero: " . $person->getGender() . "<br>";
    echo "Altura: " . $person->getHeight() . " m<br>"; // Display formatted height
    echo "Peso: " . $person->getWeight() . " kg<br>";
    echo "IMC: " . $person->calc() . "<br>";
    echo "Classification" . $classification . "<br>";

    echo json_encode([
        'imc' => $imc,
        'classification' => $classification
    ]);

?>
