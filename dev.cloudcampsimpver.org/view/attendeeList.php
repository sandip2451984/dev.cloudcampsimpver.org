<div id="row2">
		<h2 class="spcr-b">Attendees List</h2>

  <?php foreach ($attendeelist as $attendee) {?>	
		<div>
			<a href="proposed-sessions.html" target="_blank">
      <h3><?php echo $attendee['first_name']."&nbsp;".$attendee['last_name']?></h3>
      </a>
      <!-- Enter Website Name -->
			<p> Website:<a href="<?php echo $attendee['website']?>"> <?php echo $attendee['website']?> </a></p>
      <p>Blog: <a href="<?php echo $attendee['blog']?>"> <?php echo $attendee['blog']?></a></p>
	
		</div>
		<?php }?>
		<hr class="clr">
	</div> <!-- end of div id row2 recently Propsed session-->
