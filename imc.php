<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">

    


        <form method="POST" action="imc.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Ingrese su peso</label>
                <input type="number" class="form-control" name="weight" id="exampleInputEmail1" placeholder="Ingrese su peso" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ingrese su altura</label>
                <input type="number" step="0.001" class="form-control" name="height" placeholder="Ingrese altura con comas" id="exampleInputPassword1">
            </div>


            <button type="submit" name="calcular" class="btn btn-primary">Calcular IMC</button>
        </form>

        <?php

        if (isset($_POST["calcular"])) {
            $weight = $_POST["weight"];
            $height = $_POST["height"];

            $imc = $weight / ($height * $height);



            if ($imc < 18.5) {
                echo ("Su imc es: $imc. Su Clasificacion es: Peso insuficiente");
            }

            if ($imc > 18.5 && $imc < 24.9) {
                echo ("Su imc es: $imc. Su Clasificacion es: Normopeso");
            }

            if ($imc > 25 && $imc < 26.9) {
                echo ("Su imc es: $imc. Su Clasificacion es: Sobrepeso grado I");
            }


            if ($imc > 27 && $imc < 29.9) {
                echo ("Su imc es: $imc. Su Clasificacion es:Sobrepeso grado II(preobesidad)");
            }
            if ($imc > 30 && $imc < 34.9) {
                echo ("Su imc es: $imc. Su Clasificacion es:Obesidad tipo I");
            }

            if ($imc > 35 && $imc < 39.9) {
                echo ("Su imc es: $imc. Su Clasificacion es:Obesidad tipo II");
            }

            if ($imc > 40 && $imc < 49.9) {
                echo ("Su imc es: $imc. Su Clasificacion es:Obesidad tipo III(morbida)");
            }

            if ($imc > 50) {
                echo ("Su imc es: $imc. Su Clasificacion es:Obesidad tipo IV(extrema)");
            }
        }




        ?>

    </div>



</body>

</html>