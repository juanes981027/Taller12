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


    <form method="POST" action="calculadora.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Numero 1</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese un numero" name="number1" aria-describedby="emailHelp">
    </div>
    <select class="form-group" name="operacion" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <div class="form-group">
        <label for="exampleInputPassword1">Numero 2</label>
        <input type="number" class="form-control" placeholder="Ingrese un numero" name="number2" id="exampleInputPassword1">
    </div>
    

    

    <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>

    </form>

    <br>

    <?php


    if (isset($_POST["calcular"]))
    {
        
        $number1= $_POST["number1"];

        $number2=$_POST["number2"];

        $operator=$_POST["operacion"];

       

        

        switch($operator)
        {
            case "+":
                $result=$number1+$number2;
                echo("La suma es ".$result);
            break;

            case "-":
                $result=$number1-$number2;
                echo("La resta es ".$result);
            break;
            case "*":
                $result=$number1*$number2;
                echo("La multiplicacion es ".$result);
            break;
            case "/":
                $result=$number1/$number2;
                echo("La division es ".$result);
            

        }

        

        
    }



    

     
    




?>
</div>



    
</body>
</html>