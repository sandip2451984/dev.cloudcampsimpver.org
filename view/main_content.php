  <?php require_once ('right_content.php')?>
  <div id="row1">
  <div class="cBx1">
  <h2>MarketingCamp Unconference</h2>
  
  <table summary="MarketingCamp unConference Info" class="tblStyle">
  <tbody>
  <tr>
  <td width="35%"><strong>DATE:</strong></td>
  <td width="65%"><?php echo date('d/m/y',strtotime($event_data[0]['from_date'])) ."-".date('d/m/y',strtotime($event_data[0]['to_date'])) ?> </td>
  </tr>
  <tr>
  <td><strong>TIME:</strong></td>
  <td><?php echo date('h:s',strtotime($event_data[0]['from_date'])) ."-".date('h:s',strtotime($event_data[0]['to_date'])) ?> </td>
  </tr>
  <tr>
  <td><strong>LOCATION:</strong></td>
  <td><?php echo $event_data[0]['address']."<br>".$event_data[0]['city'].", ". $event_data[0]['state'].", ".$event_data[0]['country']."- " .$event_data[0]['zipcode'] ?></td>
	</tr>
  </tbody>
  </table>
  
  <p class="right spcr-t"><a href="register.php"  class="btnLg">Register Now > </a> </p>
  </div> <!-- end of div class cBx1 -->
  
  <!-- For Map -->
  
  <div class="cBx2">
  <?php require_once('eventMap.php');?>
  </div>
  <!-- end of class cBx2 -->
  
  </div>  <!-- end of div id Row1-->
  
  <?php require_once('attendeeList.php'); ?>
  
  <br class="clr">