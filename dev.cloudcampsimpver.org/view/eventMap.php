<!--<iframe width="364" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="http://maps.google.com/maps?oe=utf-8&amp;client=firefox-a&amp;channel=fflb&amp;q=1355+Sansome+St,+San+Francisco,+CA&amp;ie=UTF8&amp;hq=&amp;hnear=1355+Sansome+St,+San+Francisco,+California+94111&amp;gl=us&amp;t=m&amp;z=14&amp;ll=37.802716,-122.403427&amp;output=embed">
</iframe>
<br>
<a href="http://maps.google.com/maps?oe=utf-8&amp;client=firefox-a&amp;channel=fflb&amp;q=1355+Sansome+St,+San+Francisco,+CA&amp;ie=UTF8&amp;hq=&amp;hnear=1355+Sansome+St,+San+Francisco,+California+94111&amp;gl=us&amp;t=m&amp;z=14&amp;ll=37.802716,-122.403427&amp;source=embed" class="smtxt right">View Larger Map &rsaquo;</a>			
-->
<iframe width="364" height="170" scrolling="no" marginheight="0" marginwidth="0" 
   src="http://maps.google.com/maps?f=q&amp;geocode=&amp;q=<?php echo $locationData['formatted_address'];?>&amp;ie=UTF8&amp;ll=<?php echo $locationData['geometry']['lat'].",".$locationData['geometry']['lng']?>&amp;output=embed">
   </iframe>
   <div style="float:left">
<a href="http://maps.google.com/maps?hl=en&amp;q=<?php echo $locationData['formatted_address']?>&amp;ie=UTF8&amp;hq=<?php echo $locationData['formatted_address']?>&amp;t=m&amp;ll=<?php echo $locationData['geometry']['lat'].",".$locationData['geometry']['lng']?>&amp;spn=0.016084,0.006295&amp;source=embed" class="smtxt right" target=_BLANK>View Larger Map &rsaquo;</a>
</div>