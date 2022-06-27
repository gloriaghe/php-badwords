<?php
$word = $_GET["name"];
$text= 'Cat ipsum dolor sit amet, ut ipsa. Minima laboris proident. Perspiciatis quia, quis cat. Excepteur. Quam minima adipisicing ab but nihil velit. Quaerat mollit do lorem irure and incididunt. Dolorem sint. Ab incidunt aut or qui but lorem. Dolor. Velitesse odit cat. Nulla enim amet exercitationem cat quis quam. Nequeporro ab. Et irure. Quaerat doloremque numquam or eius esse sit for mollit. Dolores cupidatat eius consectetur or omnis. Beatae nesciunt or dolore si so architecto for aperiam cat dolor. Aute aliquip nulla unde laboris. Si iure for incididunt but aperiam but voluptate or modi ad cat. Natus molestiae, qui, ad autem ipsa for ipsa cat dolor.';
// $replaced_text = str_replace($word, '***', $text, $replaced_text );
$replaced_text = str_replace($word, '<span>***</span>', $text, $replaced_text );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- gestiamo colore css -->
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <h3><?= $text?></h3>
        <div>Lunghezza testo: <?php echo strlen($text) ?></div>
    </div>

    <form action="" method="get">
        <label for="name">Parola da sostituire: </label>
        <input type="text" name="name" id="name">
        <button>Invia</button>
    </form>

    <div>
        <h1>Testo sostituito:</h1>
        <h3><?= $replaced_text ?></h3>
        <div>Lunghezza testo sostituito: <?php echo strlen($replaced_text) ?></div>
    </div>

</body>
</html>