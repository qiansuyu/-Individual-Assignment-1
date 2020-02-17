<?php
require_once("Template.php");

$page = new Template("AboutUsPage");
$page->addHeadElement("<link rel='stylesheet' href='about.css'>");
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
<h1>OUR STORY</h1>
</div>
<div class='button'>
    <a href='#' class='btn'>WATCH VIDEO</a>";
print $page->getBottomSection();