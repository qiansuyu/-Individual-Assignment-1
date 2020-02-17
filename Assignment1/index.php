
<?php
require_once("Template.php");

$page = new Template("Home Page");
$page->addHeadElement("<link rel='stylesheet' href='home.css'>");
$page->finalizeTopSection();
//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.
print $page->getTopSection();
print "
<head>
<div class='main'>
<ul>
    <li><a href='index.php'>Home</a></li>
    <li><a href='about.php'>About Us</a> </li>
    <li><a href='contact.php'>Contact Us</a></li>
</ul>
</div>
<div class='title'>
<h1>Sugar & Spice Cafe</h1>
</div>
</head>";

print $page->getBottomSection();