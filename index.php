<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Aula PHP</title>
    <style>
        .container {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <h1>Meu titulo</h1>
    <?php $meuconteudo =  "<button type=button' onclick='minhafuncao();' class='btn btn-primary'>Primary</button>";  ?>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero quisquam quo accusamus dolorum optio totam beatae hic ipsa nemo quidem velit provident, ratione esse et sit consectetur ab saepe architecto.</p>
    <?php echo $meuconteudo;
    $meuconteudo = " oi ";
    for ($i = 0; $i < 10; $i++) {
        echo $meuconteudo;
    }
    $x = "4";
    $y = "6";
    $r = $x + $y;
    echo "<br>" . $r . " O reusltado foi " . $r;
    var_dump($x);
    $a = 1.77;
    var_dump($a);
    ?>
    <hr>
    <?php
    $conteudo = "<div class='container'>";
    for ($i = 0; $i < 1000; $i++) {
        if($i % 2 ==0){
            $conteudo .= "<div class='alert alert-primary' role='alert'>
            A simple primary alert—check it out! =>" .  $i ."
            </div>";
        }else{        
            $conteudo .=  "<div class='alert alert-danger' role='alert'>
                A simple danger alert—check it out! =>" .  $i ."
            </div>";
        }
    }

    $conteudo .= "</div>";
 echo $conteudo;

    ?>
</body>
<script>
    function minhafuncao() {
        alert("Eu cliquei");
    }
</script>

</html>