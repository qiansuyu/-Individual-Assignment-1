<!DOCTYPE html>
<html>
<body>
<script src="email-validation.js"> </script>
<link rel="stylesheet" type="text/css" href="myfile.css">
<div class="header">
    <ul>
        <li><a href='index.php'>Home</a></li>

    </ul>
    <h1>Contact Us</h1>
    <p></p>
</div>

</div>
<div class="content">
    <form onsubmit="return checkReqFields()" action="thankyou.php" method="post">

        <input name="name" type="text" class="form-control" placeholder="Your name" id="name">
        <span id="reqTxtName" class="reqError"></span><br>
        <input name="email" type="text" class="form-control" placeholder="Your email" id="email">
        <span id="reqTxtEmail" class="reqError"></span><br>
        <textarea name="message" class="form-control" placeholder="Message" row="4" id="message"></textarea><br>
        <span id="reqTxtMessage" class="reqError"></span><br>

        <input type="submit"  value="SEND IT">
</form>
</div>
</body>
</html>