<!DOCTYPE html>
<html>
<head>
<title>Tag Manager</title>
<style type="text/css" src="styles.css"></style>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
<br/>
<center><b><a href="./">Back</a></b><br/><br/>



<p>
<img src='https://2.bp.blogspot.com/-PyuQsqOYpZQ/WMJCsAly1zI/AAAAAAAAB58/pnWgTWzrueUeyJD4mxpIPgStH9EJfKvPACLcB/s320/giphy.gif' width='100'/><br/><span style="color:green">Awesome! Tag is now ready yo use.</span>


<br/><br/>Title<br/><input id="myInput" type="text" value="<?php echo $_GET['get-title']; ?>"/>
<button onclick="myFunction()">Copy text</button>


<br/><br/>Labels<br/><input id="myInput2" type="text" value="<?php echo $_GET['get-author']; ?>, <?php echo $_GET['get-cat']; ?>, <?php echo $_GET['get-cat2']; ?>, Udemy, Free, English, <?php echo "" . date("M d Y") . ""; ?>"/>
<button onclick="myFunction2()">Copy text</button>



<br/><br/>Permalink<br/><input id="myInput3" type="text" value="<?php echo $_GET['get-perma']; ?>-udemy-course"/>
<button onclick="myFunction3()">Copy text</button><br/> <br/>


 <textarea  id="myInput4" rows="10" cols="30"><div dir="ltr"><div><?php echo $_GET['get-tag']; ?><br/>Instructed by: <a href="/search/label/<?php echo $_GET['get-author']; ?>?max-results=7"><?php echo $_GET['get-author']; ?></a>  | Subject: <a href="/search/label/<?php echo $_GET['get-cat']; ?>?max-results=7"><?php echo $_GET['get-cat']; ?></a>, <a href="/search/label/<?php echo $_GET['get-cat2']; ?>?max-results=7"><?php echo $_GET['get-cat2']; ?></a></div>
<br/>


<div class="thumbz" style="max-width:1080px;margin:0 auto;"><div style="position: relative;padding-bottom: 56.25%; height: 0; overflow: hidden;"><img border="0" src="<?php echo $_GET['get-image']; ?>/<?php echo $_GET['get-perma']; ?>.jpg" width="520" alt="<?php echo $_GET['get-title']; ?> Udemy Coupon" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; max-width: 1080px; max-height: 720px;"/></div></div><br/>



<h3>Description</h3>
<br/>&lt;/p&gt;

&lt;!-- showads --&gt;



<div class="extrocket">
@https%3A%2F%2Fwww.udemy.com%2F<?php echo $_GET['get-perma']; ?>%2F%3Futm_medium=linkshare
</div>
<br/>


<h3>Course Info</h3>
<ul><li><b><?php echo $_GET['get-l']; ?></b> Lectures</li>

<li><b><?php echo $_GET['get-h']; ?></b> Hours</li>

<li>Language: <a href="/search/label/English?max-results=7">English</a></li>

<li>Subject: <a href="/search/label/<?php echo $_GET['get-cat']; ?>?max-results=7" title="<?php echo $_GET['get-cat']; ?>"><?php echo $_GET['get-cat']; ?></a>, <a href="/search/label/<?php echo $_GET['get-cat2']; ?>?max-results=7" title="<?php echo $_GET['get-cat2']; ?>"><?php echo $_GET['get-cat2']; ?></a></li>

<li>Instructed by: <a href="/search/label/<?php echo $_GET['get-author']; ?>?max-results=7"><?php echo $_GET['get-author']; ?></a></li>

<li>Platform: <a href="/search/label/Udemy?max-results=7">Udemy</a></li>
</ul>

</div>



</textarea>

<br/>
<button onclick="myFunction4()">Copy text</button>
</p></center>

</p><br/><br/><br/><br/><br/><br/><br/><br/>

<style type="text/css">
    
body {
    font-weight: normal;
    font-size: 13px;
    font-family: Arial, sans-serif;
    margin: 0 auto;
    background-color: #FFFFFF;
    max-width:800px; border: 1px solid #C6C6C6;
    text-align: left;
    color: #7F8887;
}


fieldset {
    font-size: 1em;
    padding: 0.5em;
    border-radius: 1em;
    font-family: sans-serif;
}

label, textarea, input, select, button {
    font-size: inherit;
    padding: 0.2em;
    margin: 0.1em 0.2em;
    /* the following ensures they're all using the same box-model for rendering */
    -moz-box-sizing: content-box; /* or `border-box` */
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
}



</style>








</body>
</html>
