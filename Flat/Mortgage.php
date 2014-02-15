<?php
session_start();
include('Utils.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gauge</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="Script.js"></script>
</head>

<body>
<header>
    <div id="logo"><a href="Home.php"><img src="img/Logo_Design1.png"></a></div>
    <nav>
        <ul>
            <li><a href="#">Mortgage</a></li>
            <li><a href="Budget.html#link">Budget</a></li>
            <li><a href="Account.php">Account</a></li>
        </ul>
    </nav>
</header>
<div class="cover"><a id="link" class="link"></a></div>
<div id="content">
    <section>
        <p>Let us help you to <span class="bold">Calculate</span> your mortgage.</p>
        <form id="mortgage_calculator" method="post" action="">
            <p><label>Property Value</label><input type="text" class="input" name="property" id="form_property" value="200000"></p>
            <p><label>Deposit Amount</label><input type="text" class="input" name="deposit" id="form_deposit" placeholder="10000"></p>
            <p><label>Term</label><input type="text" class="input" name="term" id="form_term" placeholder="25"></p>
            <p><label>Interest Rate</label><input type="text" class="input" name="subject" id="form_subject" placeholder="5"></p>
            <p><label>Fees</label><input type="text" class="input" name="fees" id="form_fees" placeholder=""></p>
            <input type="submit" id="mortgage_submit_Button" value="Calculate">
        </form>
    </section>
</div>
<footer><p>Made by Nyakeh Rogers</p></footer>
</body>
</html>