<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Boeking Inzien</title>
</head>
<body>
    <?php require_once 'inlogCheck.php'?>
    <?php require 'nav.php'?>
    <div class="content">
        <div class="accountPage">
            <div class="basCard">
                <div class="CardContent">
                    <h1>Boekingen inzien voor <?php echo $_SESSION['username']; ?></h1>
                    <div class="divRead">
                        <div class="readContainer">
                            <div class="read">
                                <?php 
                                    require 'Classes/Boeking.php';
                                    $boekingRead = new Boeking();
                                    $boekingRead->readBoeking($_SESSION['klantId']);
                                ?>
                                <div id="messagePHP"><?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                                ?>
                            </div>
                        </div>
                            <div class="redirect">
                                <a href="boekingCreateForm.php"><i class='bx bx-plus-circle'></i> Nieuwe boeking aanmaken</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require 'footer.php'?>
</body>
<style>

    .deleteButton {
        color: red;
        background-color: transparent;
    }

    .updateButton {
        background-color: transparent;
    }
    
input {
    margin-bottom: 5px;
    width: 200px;
    padding: 10px 15px;
    display: flex;
    justify-content: center;
    border-radius: 5px;

}
.redirect a:hover {
    color: black;
}

.redirect a {
    font-weight: bold;
}

#messagePHP {
    color: white;
}

a {
    margin: 5px;
    padding: 5px;
    border-radius: 5px;
}
a:hover {
    background-color: white;
    color: black;
}
.CardContent {
    padding: 10px;
    margin: 10px;
}

</style>

<script>
</script>
</html>