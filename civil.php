<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php 

include 'include.php';







?>

<style>

#loader {
	margin-left: 39em;
	margin-top: 19em;
}

	
@font-face {
		font-family: bat;
		src: url("dkr.ttf");
	}

	body {
		background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("bat.jpg");
		background-position: left 5px;
	

	}
	#head {
		font-size: 100px;

	}

#back {

font-family: bat;
color: white;
}
#message {
	padding: 17px;
	border-left: 5px solid #eee;
	border-right: inset 5px solid #eee;


	border-bottom: 1px solid #eee;
}


















@charset "utf-8";
body {
	font-family:verdana, helvetica, arial, sans-serif;
	font-size: 12px;
	color: #000;
	
	background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(bat.jpg);

	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	width: 1024px;
	padding: 0px;
	
}

h1, h2, h3 {
	padding: 5;
	font-weight: normal;
	color: #F00;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 0;
	margin-left: 8;
}

h1 {
	font-size: 2em;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 2px;
	margin-left: 0px;
	color: #F00;
	border-bottom-width: 2px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: inset;
	border-left-style: none;
	border-bottom-color: #0FF;
}

h2 {
	font-size: 1.6em;
	margin-top: 12px;
	margin-right: 0px;
	margin-bottom: 6px;
	margin-left: 0px;
	border-bottom-width: 4px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-bottom-color: #79C7EC;
}

h3 {
	font-size: 1.6em;
}

p, ul, ol {
	margin-top: 0;
	line-height: 180%;
}

ul, ol {
}

a {
	text-decoration: none;
	color: #2E9F13;
}

a:hover {
	text-decoration: underline;
}

img.border {
	border: 6px solid #5599EC;
}

img.alignleft {
	float: left;
	margin-right: 25px;
}

img.alignright {
	float: right;
}

img.aligncenter {
	margin: 0px auto;
}

#wrapper {
	margin: 0 auto;
	padding: 0;
	background: 
}

/* Header */

#header-wrapper {
	height: 240px;
}

#header {
	width: 960px;
	height: 240px;
	margin: 0 auto;
}

/* Logo */

#logo {
	float: left;
	height: 100px;
	margin: 0;
	padding: 0px;
	color: #1A1A1A;
}

#logo h1, #logo p {
	margin: 0;
	padding: 0;
}

#logo h1 {
	float: left;
	padding-top: 100px;
	padding-left: 30px;
	letter-spacing: -1px;
	text-transform: lowercase;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 64px;
	color: #1A1A1A;
}

#logo p {
	margin: 0;
	padding: 30px 0 0 34px;
	text-shadow: #808080 -1px 1px 2px;
	font: normal 18px Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}

#logo a {
	border: none;
	background: none;
	text-decoration: none;
	color: #1A1A1A;
}

/* Search */

#search {
	float: right;
	width: 280px;
	height: 100px;
	padding: 0;
}

#search form {
	height: 41px;
	margin: 0;
	padding: 60px 0 0 30px;
}

#search fieldset {
	margin: 0;
	padding: 0;
	border: none;
}

#search-text {
	width: 195px;
	padding: 6px 10px;
	border: none;
	background: #FFFFFF;
	text-transform: lowercase;
	font: normal 11px Arial, Helvetica, sans-serif;
	color: #7F7F81;
}

#search-submit {
	display: none;
}

/* Menu */

#menu {
	width: 960px;
	height: 40px;
	margin: 0 auto;
	padding: 0;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 4px;
	list-style: none;
	line-height: normal;
}

#menu li {
	float: left;
}

#menu a {
	display: block;
	margin-right: 1px;
	padding: 13px 20px 10px 20px;
	text-decoration: none;
	text-transform: uppercase;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	color: #4E5B64;
	border: none;
}

#menu .current_page_item a {
}

#menu a:hover {
	text-decoration: none;
}

/* Page */

#page {
	width: 1024px;
	padding: 0;
	border-top: 1px solid #D0D0D0;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	background-image: url(../fireworks/secondbody/fb2.gif);
	background-repeat: repeat-y;
}

#page-bgtop {
}

#page-bgbtm {
	margin: 0px;
	padding-top: 0px;
	padding-right: 30px;
	padding-bottom: 0px;
	padding-left: 15px;
}

/* Content */

#content {
	float: left;
	width: 975px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 10px;
}

.post {
	clear: both;
	padding-top: 0px;
	padding-bottom: 10px;
}

.post .title {
	padding-top: 0px;
	letter-spacing: -1px;
	border-top-width: 0px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: solid;
	border-top-color: #D0D0D0;
	border-bottom-color: #D0D0D0;
	text-transform: capitalize;
}

.post .title a {
	color: #1A1A1A;
	border: none;
}

.post .meta {
	padding-bottom: 10px;
	text-align: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	border-bottom: 1px solid #D0D0D0;
}

.post .meta a {
}

.post .entry {
	text-align: justify;
	margin-bottom: 5px;
	padding-top: 2px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}

.links {
	display: block;
	width: 96px;
	padding: 2px 0px 2px 0px;
	background: #A53602;
	text-align: center;
	text-transform: uppercase;
	font-size: 10px;
	color: #FFFFFF;
}

/* Sidebar */

#sidebar {
	float: right;
	width: 240px;
	padding: 0px 0px 0px 0px;
}

#sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#sidebar li {
	margin: 0;
	padding: 0;
}

#sidebar li ul {
	margin: 0px 15px;
	padding-bottom: 30px;
}

#sidebar li li {
	padding-left: 20px;
	line-height: 30px;
	background-color: #09C;
	background-image: url(../bullet_red.png);
	background-repeat: no-repeat;
	background-position: left 12px;
	color: #FF0;
	text-align: justify;
}

#sidebar li li span {
	display: block;
	margin-top: -20px;
	padding: 0;
	font-size: 11px;
	font-style: italic;
}

#sidebar h2 {
	height: 30px;
	margin-bottom: 5px;
	letter-spacing: -1px;
	font-size: 20px;
	color: #FFF;
	padding-top: 0px;
	padding-right: 0;
	padding-bottom: 0;
	padding-left: 5px;
	border-bottom-width: 3px;
	border-bottom-style: solid;
	border-bottom-color: #CF3;
}

#sidebar p {
	margin: 0 0px;
	padding: 0px 20px 20px 20px;
	text-align: justify;
	color: #FFF;
	line-height: 140%;
}

#sidebar a {
	border: none;
}

#sidebar a:hover {
	text-decoration: underline;
	font-weight: bold;
	color: #FFF;
}

/* Calendar */

#calendar {
}

#calendar_wrap {
	padding: 20px;
}

#calendar table {
	width: 100%;
}

#calendar tbody td {
	text-align: center;
}

#calendar #next {
	text-align: right;
}

/* Footer */

#footer {
	width: 960px;
	height: 55px;
	margin: 0px auto 40px auto;
	border-top: 1px solid #D0D0D0;
	font-family: Arial, Helvetica, sans-serif;
}

#footer p {
	margin: 0;
	padding-top: 18px;
	line-height: normal;
	font-size: 10px;
	text-transform: uppercase;
	text-align: center;
	color: #676767;
}

#footer a {
	color: #676767;
}
.mainmenu {
	padding: 0px;
	width: 1024px;
	height: auto;
	margin: 0px;
}
#wrapper #page #top {
	width: 1024px;
	background-image: url(../fireworks/stripimages/top.png);
	background-repeat: no-repeat;
	margin: 0px;
	padding: 0px;
	height: 20px;
}
#wrapper #page #bottom {
	margin: 0px;
	padding: 0px;
	width: 1024px;
	background-image: url(bottom.png);
}
#bottom {
	background-image: url(fireworks/stripimages/bottom.png);
	background-repeat: no-repeat;
	padding: 0px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	height: 18px;
	width: 1024px;
}
#wrapper #page #page-bgtop #page-bgbtm #sidebar ul li ul li a {
	font-weight: normal;
	color: #FFF;
}


#wrapper #page #page-bgtop #page-bgbtm #content .post .entry table {
	background-repeat: repeat-x;
	border: 1px none #000;
}
#wrapper #page #page-bgtop #page-bgbtm #content .post .entry 



table,th,td,input,textarea
{
font-size:100%;
}

table.example
{
color:#000000;
background-color:#e5eecc;
padding-top:8px;
padding-bottom:8px;
padding-left:10px;
padding-right:10px;
border:1px solid #d4d4d4;
background-image:url(../bgfadegreen.gif);
background-repeat:repeat-x;
}

table#customers
{
color:#000000;
background-color:#e5eecc;
padding-top:8px;
padding-bottom:8px;
padding-left:10px;
padding-right:10px;
border:1px solid #d4d4d4;
background-image:url(../bgfadegreen.gif);
background-repeat:repeat-x;
}
#wrapper #page #page-bgtop #page-bgbtm #content .title {
	border-top-width: thick;
	border-right-width: thick;
	border-bottom-width: thick;
	border-left-width: thick;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #9FC;
	border-right-color: #9FC;
	border-bottom-color: #0074AF;
	border-left-color: #9FC;
	padding-top: 8px;
	padding-right: 0px;
	padding-bottom: 3px;
	padding-left: 0px;
	font-family: Arial, Helvetica, sans-serif;
	color: #1D5964;
	font-size: 24px;
	font-weight: 600;
}

</style>

<div id="content">
<?php 

ini_set('display_errors', 1);


$style = '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<style>

#loader {
	margin-left: 39em;
	margin-top: 19em;
}

	
@font-face {
		font-family: bat;
		src: url("dkr.ttf");
	}

	body {
background-color: #fff;	

	}
	#head {
		font-size: 100px;

	}

#back {

font-family: bat;
color: white;
}
#message {
	padding: 17px;
	border-left: 5px solid #eee;
	border-right: inset 5px solid #eee;


	border-bottom: 1px solid #eee;
}


















@charset "utf-8";
body {
	font-family:verdana, helvetica, arial, sans-serif;
	font-size: 12px;
	color: #000;
	
background-color: #fff;

	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	width: 1024px;
	padding: 0px;
	
}

h1, h2, h3 {
	padding: 5;
	font-weight: normal;
	color: #F00;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 0;
	margin-left: 8;
}

h1 {
	font-size: 2em;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 2px;
	margin-left: 0px;
	color: #F00;
	border-bottom-width: 2px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: inset;
	border-left-style: none;
	border-bottom-color: #0FF;
}

h2 {
	font-size: 1.6em;
	margin-top: 12px;
	margin-right: 0px;
	margin-bottom: 6px;
	margin-left: 0px;
	border-bottom-width: 4px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-bottom-color: #79C7EC;
}

h3 {
	font-size: 1.6em;
}

p, ul, ol {
	margin-top: 0;
	line-height: 180%;
}

ul, ol {
}

a {
	text-decoration: none;
	color: #2E9F13;
}

a:hover {
	text-decoration: underline;
}

img.border {
	border: 6px solid #5599EC;
}

img.alignleft {
	float: left;
	margin-right: 25px;
}

img.alignright {
	float: right;
}

img.aligncenter {
	margin: 0px auto;
}

#wrapper {
	margin: 0 auto;
	padding: 0;
	background: 
}

/* Header */

#header-wrapper {
	height: 240px;
}

#header {
	width: 960px;
	height: 240px;
	margin: 0 auto;
}

/* Logo */

#logo {
	float: left;
	height: 100px;
	margin: 0;
	padding: 0px;
	color: #1A1A1A;
}

#logo h1, #logo p {
	margin: 0;
	padding: 0;
}

#logo h1 {
	float: left;
	padding-top: 100px;
	padding-left: 30px;
	letter-spacing: -1px;
	text-transform: lowercase;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 64px;
	color: #1A1A1A;
}

#logo p {
	margin: 0;
	padding: 30px 0 0 34px;
	text-shadow: #808080 -1px 1px 2px;
	font: normal 18px Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}

#logo a {
	border: none;
	background: none;
	text-decoration: none;
	color: #1A1A1A;
}

/* Search */

#search {
	float: right;
	width: 280px;
	height: 100px;
	padding: 0;
}

#search form {
	height: 41px;
	margin: 0;
	padding: 60px 0 0 30px;
}

#search fieldset {
	margin: 0;
	padding: 0;
	border: none;
}

#search-text {
	width: 195px;
	padding: 6px 10px;
	border: none;
	background: #FFFFFF;
	text-transform: lowercase;
	font: normal 11px Arial, Helvetica, sans-serif;
	color: #7F7F81;
}

#search-submit {
	display: none;
}

/* Menu */

#menu {
	width: 960px;
	height: 40px;
	margin: 0 auto;
	padding: 0;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 4px;
	list-style: none;
	line-height: normal;
}

#menu li {
	float: left;
}

#menu a {
	display: block;
	margin-right: 1px;
	padding: 13px 20px 10px 20px;
	text-decoration: none;
	text-transform: uppercase;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	color: #4E5B64;
	border: none;
}

#menu .current_page_item a {
}

#menu a:hover {
	text-decoration: none;
}

/* Page */

#page {
	width: 1024px;
	padding: 0;
	border-top: 1px solid #D0D0D0;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	background-image: url(../fireworks/secondbody/fb2.gif);
	background-repeat: repeat-y;
}

#page-bgtop {
}

#page-bgbtm {
	margin: 0px;
	padding-top: 0px;
	padding-right: 30px;
	padding-bottom: 0px;
	padding-left: 15px;
}

/* Content */

#content {
	float: left;
	width: 975px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 10px;
}

.post {
	clear: both;
	padding-top: 0px;
	padding-bottom: 10px;
}

.post .title {
	padding-top: 0px;
	letter-spacing: -1px;
	border-top-width: 0px;
	border-bottom-width: 1px;
	border-top-style: none;
	border-bottom-style: solid;
	border-top-color: #D0D0D0;
	border-bottom-color: #D0D0D0;
	text-transform: capitalize;
}

.post .title a {
	color: #1A1A1A;
	border: none;
}

.post .meta {
	padding-bottom: 10px;
	text-align: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	border-bottom: 1px solid #D0D0D0;
}

.post .meta a {
}

.post .entry {
	text-align: justify;
	margin-bottom: 5px;
	padding-top: 2px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}

.links {
	display: block;
	width: 96px;
	padding: 2px 0px 2px 0px;
	background: #A53602;
	text-align: center;
	text-transform: uppercase;
	font-size: 10px;
	color: #FFFFFF;
}

/* Sidebar */

#sidebar {
	float: right;
	width: 240px;
	padding: 0px 0px 0px 0px;
}

#sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#sidebar li {
	margin: 0;
	padding: 0;
}

#sidebar li ul {
	margin: 0px 15px;
	padding-bottom: 30px;
}

#sidebar li li {
	padding-left: 20px;
	line-height: 30px;
	background-color: #09C;
	background-image: url(../bullet_red.png);
	background-repeat: no-repeat;
	background-position: left 12px;
	color: #FF0;
	text-align: justify;
}

#sidebar li li span {
	display: block;
	margin-top: -20px;
	padding: 0;
	font-size: 11px;
	font-style: italic;
}

#sidebar h2 {
	height: 30px;
	margin-bottom: 5px;
	letter-spacing: -1px;
	font-size: 20px;
	color: #FFF;
	padding-top: 0px;
	padding-right: 0;
	padding-bottom: 0;
	padding-left: 5px;
	border-bottom-width: 3px;
	border-bottom-style: solid;
	border-bottom-color: #CF3;
}

#sidebar p {
	margin: 0 0px;
	padding: 0px 20px 20px 20px;
	text-align: justify;
	color: #FFF;
	line-height: 140%;
}

#sidebar a {
	border: none;
}

#sidebar a:hover {
	text-decoration: underline;
	font-weight: bold;
	color: #FFF;
}

/* Calendar */

#calendar {
}

#calendar_wrap {
	padding: 20px;
}

#calendar table {
	width: 100%;
}

#calendar tbody td {
	text-align: center;
}

#calendar #next {
	text-align: right;
}

/* Footer */

#footer {
	width: 960px;
	height: 55px;
	margin: 0px auto 40px auto;
	border-top: 1px solid #D0D0D0;
	font-family: Arial, Helvetica, sans-serif;
}

#footer p {
	margin: 0;
	padding-top: 18px;
	line-height: normal;
	font-size: 10px;
	text-transform: uppercase;
	text-align: center;
	color: #676767;
}

#footer a {
	color: #676767;
}
.mainmenu {
	padding: 0px;
	width: 1024px;
	height: auto;
	margin: 0px;
}
#wrapper #page #top {
	width: 1024px;
	background-image: url(../fireworks/stripimages/top.png);
	background-repeat: no-repeat;
	margin: 0px;
	padding: 0px;
	height: 20px;
}
#wrapper #page #bottom {
	margin: 0px;
	padding: 0px;
	width: 1024px;
	background-image: url(bottom.png);
}
#bottom {
	background-image: url(fireworks/stripimages/bottom.png);
	background-repeat: no-repeat;
	padding: 0px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	height: 18px;
	width: 1024px;
}
#wrapper #page #page-bgtop #page-bgbtm #sidebar ul li ul li a {
	font-weight: normal;
	color: #FFF;
}


#wrapper #page #page-bgtop #page-bgbtm #content .post .entry table {
	background-repeat: repeat-x;
	border: 1px none #000;
}
#wrapper #page #page-bgtop #page-bgbtm #content .post .entry 



table,th,td,input,textarea
{
font-size:100%;
}

table.example
{
color:#000000;
background-color:#e5eecc;
padding-top:8px;
padding-bottom:8px;
padding-left:10px;
padding-right:10px;
border:1px solid #d4d4d4;
background-image:url(../bgfadegreen.gif);
background-repeat:repeat-x;
}

table#customers
{
color:#000000;
background-color:#e5eecc;
padding-top:8px;
padding-bottom:8px;
padding-left:10px;
padding-right:10px;
border:1px solid #d4d4d4;
background-image:url(../bgfadegreen.gif);
background-repeat:repeat-x;
}
#wrapper #page #page-bgtop #page-bgbtm #content .title {
	border-top-width: thick;
	border-right-width: thick;
	border-bottom-width: thick;
	border-left-width: thick;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #9FC;
	border-right-color: #9FC;
	border-bottom-color: #0074AF;
	border-left-color: #9FC;
	padding-top: 8px;
	padding-right: 0px;
	padding-bottom: 3px;
	padding-left: 0px;
	font-family: Arial, Helvetica, sans-serif;
	color: #1D5964;
	font-size: 24px;
	font-weight: 600;
}';




if (isset($_POST['regno'])) {


if (!empty($_POST['regno'])) {

echo '
<div class="text-center col-sm-12" id="back">
<h4>do you like us? <br/><br/><div id="head">@</div> <br/><br/>bat hates to be liked</h4> 
</div>';




$i = 1;

$part1 = $r['url'];

$part3 = '&submit=submit';

$special = "ac14uce00";

while ($i < 10) {




 $part = $part1.$special.$i.$part3;



$request = file_get_contents($part) or die("an unexpected error occupied our localhost");


$string = $request;

$php = ".html";

$reg = "archives/";

$file = fopen($reg.$special.$i.$php,"w");
echo fwrite($file, $style.$string);
fclose($file);

$i = $i + 1;

}



$j = 10;

$part1 = $r['url'];

$part3 = '&submit=submit';

$special = "ac14uce0";

while ($j < 100) {


echo $part = $part1.$special.$j.$part3;



$request = file_get_contents($part) or die("an unexpected error occupied our localhost");


$string = $request;

$php = ".html";

$reg = "archives/";

$file = fopen($reg.$special.$j.$php,"w");
echo fwrite($file, $style.$string);
fclose($file);

$j = $j + 1;

}


$k = 100;

$part1 = $r['url'];

$part3 = '&submit=submit';

$special = "ac14uce";

while ($k < 285) {




echo $part = $part1.$special.$k.$part3;



$request = file_get_contents($part) or die("an unexpected error occupied our localhost");


$string = $request;

$php = ".html";

$reg = "archives/";

$file = fopen($reg.$special.$k.$php,"w");
echo fwrite($file, $style.$string);
fclose($file);

$k = $k + 1;



}
















}
else {

	echo "please enter a reg no";
}

}

else {


}

?>

</div>


