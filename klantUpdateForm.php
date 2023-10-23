<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>update klant</title>
</head>
<body>
    <?php 
    require 'nav.php';
    ?>

    <div class="content">
        <div class="accountPage">
            <div class="basCard">
                <div class="accountItems">
                    <h1>Update uw account:</h1>
                    <div class="accountForm">
                        <?php
                            require 'Klant.php';
                            $klantId = $_GET['klantId'];
                            $klant1 = new Klant();
                            $klant = $klant1->findKlant($klantId);
                            // var_dump($klantId);
                        ?>
                       <form method="POST" action="klantUpdate.php">
                            <input type="hidden" name="username" value="<?php echo $klant['klantId']; ?>">
                            <label>Naam:</label>
                            <input type="text" name="email" value="<?php echo $klant['klantNaam']; ?>"><br>
                            <label>Email:</label>
                            <input type="email" name="telefoon" value="<?php echo $klant['klantEmail']; ?>"><br>
                            <label>Adres:</label>
                    
                            <div class="formEnd">
                                <input type="submit" value="Submit">                            
                                <p><a id="cancel" href="klantRead.php">Cancel</a></p>
                            </div>
                        </form>
                        <div class="question">
                            <p>Maak nieuwe klanten: <a href="klantCreateForm.php">Klant Create</a> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require 'footer.php'?>
</body>
<style>
    
input {
    margin-bottom: 5px;
    width: 200px;
    padding: 10px 15px;
    display: flex;
    justify-content: center;
    border-radius: 5px;

}
</style>
</html>