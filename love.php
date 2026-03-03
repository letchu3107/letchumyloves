<!DOCTYPE html>
<html>
<head>
<title>Love Proposal ❤️</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<style>

body{
    text-align:center;
    font-family: 'Poppins', sans-serif;
    height:100vh;
    overflow:hidden;
    background: linear-gradient(45deg, white, #880808, white);
}

.heart{
    position:absolute;
    font-size:25px;
    animation: float 6s linear infinite;
}

@keyframes float{
    0%{
        transform: translateY(100vh) rotate(0deg);
        opacity:1;
    }
    100%{
        transform: translateY(-10vh) rotate(360deg);
        opacity:0;
    }
}

button{
    font-size:22px;
    padding:12px 30px;
    margin:20px;
    border:none;
    border-radius:30px;
    cursor:pointer;
}

#yes{
    background:red;
    color:white;
}

#no{
    background:gray;
    color:white;
    position:absolute;
}

</style>
</head>

<body>

<?php
$message = "";

if(isset($_POST['yes'])){
    $message = "Yay! ❤️ I am so happy you accepted me 😊💋<br>
   Heart ah hack pannita… password = un smile 😘❤️";
}

if(isset($_POST['no'])){
    $message = "Oh no 😢 Maybe next time...";
}
?>

<h1>❤️ Will You Be My Valentine? ❤️</h1>
<h5>Enna reject panna try pannadha… No button maari escape aagum 😆💔</h5>

<form method="POST">

<button name="yes" id="yes">Yes ❤️</button>
<button type="button" id="no" onmouseover="runAway()">No 💔</button>

</form>

<h2><?php echo $message; ?></h2>

<script>

/* No button runaway */
function runAway(){
    let btn = document.getElementById("no");

    btn.style.top = Math.random()*400 + "px";
    btn.style.left = Math.random()*400 + "px";
}

/* Floating emoji background */
function createEmoji(){
    let emoji = document.createElement("div");

    let emojis = ["❤️","💋","💕","😍","💘","🌸","😘"];

    emoji.innerHTML = emojis[Math.floor(Math.random()*emojis.length)];

    emoji.classList.add("heart");

    emoji.style.left = Math.random()*100 + "vw";
    emoji.style.animationDuration = (3+Math.random()*5)+"s";

    document.body.appendChild(emoji);

    setTimeout(()=>{ emoji.remove(); },6000);
}

setInterval(createEmoji,500);

</script>

</body>
</html>