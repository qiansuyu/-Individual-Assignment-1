<?php
require_once("Template.php");

$page = new Template("Thankyou Page");
$page->addHeadElement("<link rel='stylesheet' href='thankyou.css'>");
$page->finalizeTopSection();
//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.
print $page->getTopSection();


print "<div class=\"header\">
<ul>
        <li><a href='index.php'>Home</a></li>
       
    </ul>
    </div>
  <div class='title'>
<h1>THANK YOU FOR YOUR SUBMISSION!</h1>
<h2>one of our experts will contact your shortly.</h2>
</div>

 
";
print $page->getBottomSection();