<?php
session_start() ;
include __DIR__ . "/functions.php" ;
 
$title= '"Strong" password generator' ;

$length = $_GET["psw-length"] ?? "" ;
  
  if($length) {
    $pswCharacters = "abcdefghilmnoABCDEFGHILMNO1234567890$%&/@" ;
    $pswFinal = randomPswGenerator($length, $pswCharacters) ;
    $_SESSION["pswFinal"] = $pswFinal ;

    if(!empty($_SESSION["pswFinal"])) {
      echo $_SESSION["pswFinal"] ;
      header('Location: ./result.php');
      exit();
  }
}
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Andrea Coggio" />
    <meta name="description" content="new exercise" />
    <!-- title -->
    <title>PHP Psw Generator</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <!-- custom style -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer></script>
</head>

<body data-bs-theme="dark">
    <div class="container mt-5">
        <div class="card p-4">
            <h1 class="card-title">
                <?php echo $title ?>
            </h1>
            <form method="GET">
                <label for="psw-length" class="form-label">Password Length</label>
                <div>
                    <input name="psw-length" type="number" id="psw-length" class="w-30 mb-3 form-control" min="5"
                        max="30">
                    <button class=" btn btn-primary"> Send </button>
                </div>
            </form>
        </div>


    </div>
</body>

</html>