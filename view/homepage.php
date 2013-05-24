<!DOCTYPE html>
<html lang="en">
<?php require_once ('header.php') ?>
<body>
<noscript>
For optimal site interaction, please turn javascript on in your browser. For Firefox, 
go to Tools &rsaquo; Options &rsaquo; Content. For Internet Explorer, go to Tools &rsaquo;
 Internet Options &rsaquo; Security &rsaquo; Internet &rsaquo; Custom Level &rsaquo;
  Enable Active Scripting.<br>Otherwise, please visit our 
<a href="#sitemap">sitemap</a> for easier navigation.</noscript>
<div id="wrapper-ht">
	<div id="header-mp"> <!-- begin header -->
	 <?php require_once ('navigational.php')?>
	</div> <!-- end header -->
	
	<br class="clr">
	
	<div id="content">
    <?php require_once('main_content.php')?>			
	</div> <!-- end content -->	
	<div class="push"></div>
</div><!-- end wrapper-ht -->

<a name="sitemap"></a>
<div id="footer">
	<?php require_once('footer.php')?>
</div><!-- end footer -->

<script type="text/javascript" src="<?php echo WEB_PATH?>js/google_analytics.js">
		
</body>
</html>

<!--<html>
<head></head>

<body>

<table>
	<tr><td>Title</td><td>Author</td><td>Description</td></tr>-->
	<?php /*

		foreach ($books as $title => $book)
		{
			echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
		}

	*/?>
<!--</table>

</body>
</html>-->