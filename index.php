<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
session_start();
    
        $username = $_SESSION["username"];

        if (!isset($username)) {
            header("Location: login.php");
        }


    ?>
    <div id="sohbetlistesi">
        <div class="header">
        <div class="logotext">
            <h1><?php echo $_SESSION["username"];?></h1>
        </div>
        <div class="nav">
            <div>
            <h2>New</h2>
            </div>
            <div>
            <h2>3dot</h2>
            </div>
        </div>
        </div>
        <div class="inputclass">
        <input type="text" placeholder="Search..">
        </div>
        <div class="archived">
            <h1>Arcived</h1>
        </div>
        <div class="chat">
            <h2>ChatName</h2>
            <p>LastMessage</p>
        </div>
        <div class="chat">
            <h2>ChatName</h2>
            <p>LastMessage</p>
        </div>
        <div class="chat">
            <h2>ChatName</h2>
            <p>LastMessage</p>
        </div>
    </div>
    <div id="sohbettarafi">
        <div class="headerchat">
            <div class="name">
                <h1>Iburamin</h1>
            </div>
            <div class="navchat">
                <h1>V</h1>
                <h1>S</h1>
                <h1>S</h1>
            </div>
        </div>
        <div class="asilchat">
            <?php
            include("./settings/connection.php");

            $sql = "SELECT * FROM `chatmessages`";
            $database = mysqli_query($conn, $sql);

            while ($insert = mysqli_fetch_array($database)) {
                if($insert["username"] == $_SESSION["username"]) {
                    $benmiyim = "me";
                } else {
                    $benmiyim="";
                }

                echo "<div class='sohbettarzi ". $benmiyim ."'>";
                echo "<h3>".$insert["username"]."</h3>";
                echo "<h1>".$insert["text"]."</h1>";
                echo "</div>";
            }

            ?>
        </div>
        <form class="forminput" action="./determination/textgonder.php" method="GET">
            <input type="text" name="gonderilecektext" placeholder="Yazi yazin">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>

<!-- 
    class
    id

 -->