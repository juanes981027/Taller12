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

            <form action="postobon.php" method="POST">
                <h1>Calculadora de pago semanal</h1> 

                
                <div class="form-group">
                    <label for="exampleInputEmail1">Ingrese numero de horas trabajadas esta semana</label>
                    <input type="number" name="horas" class="form-control" id="exampleInputEmail1" placeholder="Maximo 40 horas" aria-describedby="emailHelp">
                
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ingrese numero de horas extra trabajadas esta semana</label>
                    <input type="number" name="extra" class="form-control" id="exampleInputEmail1" placeholder="Solo ingrese en esta casilla las horas extra despues de las 40 reglamentarias" aria-describedby="emailHelp">
                
                </div>
                
                
                <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
            </form>

            <?php
            
            if (isset($_POST["calcular"]))
            {
                $horas=$_POST["horas"];
                $extra=$_POST["extra"];

                if ($horas<=40)
                {
                    $salario=$horas*20000;
                    echo("Como usted trabajo ".$horas. " horas"." su pago es ".$salario);

                }

                if($extra>0)
                {
                    $salario=$horas*20000;
                    $totalex=$extra*25000;
                    $total=$salario+$totalex;

                    echo(". Ademas, usted trabajo ". $extra. " horas extra". ". Su pago total es de es ".$total);

                }



            }
            
            ?>

    </div>
</body>
</html>