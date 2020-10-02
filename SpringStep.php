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

        <form action="SpringStep.php" method="POST">

            <select name="Zapatos" class="form-group form-check">
                <option name="Seleccione">Seleccione</option>
                <option name="Adidas">Adidas</option>
                <option name="Nike">Nike</option>
                <option name="Venus">Venus</option>
                <option name="Converse">Converse</option>
                <option name="Colegial">Colegial</option>
                <option name="Reebook">Reebook</option>
                <option name="Croydon">Croydon</option>
            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Precio del zapato</label>
                <input type="number" name="precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Cantidad de zapatos</label>
                <input type="number" class="form-control" name="cantidad" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                
            </div>
            <button type="submit" class="btn btn-primary" name="checkout">Checkout</button>
        </form>

    <?php

    

    if (isset($_POST["checkout"]))
    {
        $cantidad= $_POST["cantidad"];
        $precio= $_POST["precio"];
        $subtotal= $cantidad*$precio;
        
        
        



        if ($cantidad<3)
        {
            $total=$subtotal-($subtotal*0.10);
            echo("El valor total de la compra es de ".$total. " pesos. Gracias por su compra");


        }
        if ($cantidad>3 && $cantidad <=8)
        {
            $total=$subtotal-($subtotal*0.20);
            echo("El valor total de la compra es de ".$total. " pesos. Gracias por su compra");


        }
        else

        if ($cantidad>8)
        {
            $total=$subtotal-($subtotal*0.50);
            echo("El valor total de la compra es de ".$total. " pesos. Gracias por su compra");


        }
    
    }
    
    
    ?>

    </div>
</body>
</html>