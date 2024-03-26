<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Só mais algumas informações...</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/getDados.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-general user-select-none  d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <div class="authorize-data p-5 bg-light rounded shadow-lg">
            <header class="d-flex justify-content-between align-items-center gap-2">
                <img src="assets/imgs/android-chrome-192x192.png" alt="IMC Logo" title="IMC" width="50px" height="50px">
                <h1 class="header-title fw-bold">IMC Software</h1>
            </header>

            <section class="d-flex flex-column m-3">
                <form class="d-flex flex-column gap-1" action="calc.php" method="post">

                    <label for="name-user">Nome</label>
                    <input class="rounded p-2" name="name" type="text">

                    <label for="age-user">Idade</label>
                    <input class="rounded p-2" name="age" type="number">

                    <label for="gender-user">Gênero</label>
                    <select class="rounded p-2" name="gender" id="gender-user">
                        <option value="M" name="M">Masculino</option>
                        <option value="F" name="F">Feminino</option>
                    </select>

                    <label for="height-user">Altura (cm)</label>
                    <input class="rounded p-2" name="height" type="number">

                    <label for="weigth-user">Peso (kg)</label>
                    <input class="rounded p-2" name="weight" type="number">

                    <button type="submit" class="submit-info rounded mt-4 p-2 text-white">Calcular IMC</button>
                    <small class="text-center mt-2 fw-medium">
                        Preencha as informações e clique no botão para calcular seu IMC
                    </small>
                </form>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>