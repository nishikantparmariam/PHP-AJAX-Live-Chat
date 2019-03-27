<?php
	$conn_error="Sorry! Could not connect to the database.";	
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='';
	$mysql_db='niks_chat';
	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);
	mysqli_select_db($conn,$mysql_db); 			
	if(isset($_GET['message'])&&!empty($_GET['message']))/*&&$_GET['message']!='bydefault'&&!empty($_GET['message'])*/
	{
		$message=htmlentities(htmlspecialchars($_GET['message']));
		$id=time();
		$time_now=mktime(date('h')+3,date('i')+30,date('s'));
		$day=date("l");
		$time=date("h:ia", $time_now);	
		//echo $message;	
		
		$q="INSERT INTO `chats` VALUES('$id','niks','$message','$day','$time')"; 
		if($q_r=mysqli_query($conn,$q)) 
		{
			$q="SELECT `name`, `message`,`id` FROM `chats` ORDER BY `id` DESC";
			if($qr=mysqli_query($q)) 
			{	
				if(mysqli_num_rows($qr)==0) 
				{
					echo 'Start a chat...';
				}
				else 
				{
					while($qrow=mysqli_fetch_assoc($qr))
					{
						$id=$qrow['id'];
						$name=$qrow['name'];
						$message=$qrow['message'];

						echo '<div>					
													<div id="message_div">
														'.$message.'<br>
														<div id="below_message_div">
															'.$time. ',&nbsp;&nbsp;'.$day.'
														</div>
													</div>
										</div>	
											<br>';
					}
				
				}
				
			} 
			else 
			{
				echo "Can not load.";
			}
		}           
		else 
		{
			echo 'Can not insert.';
		}                  		
	} //else echo "Didnt GET message";
	else 
	{
					$q="SELECT `name`, `message`,`id`,`time`,`day` FROM `chats` ORDER BY `id` DESC";
						if($qr=mysqli_query($conn,$q)) 
						{	
							if(mysqli_num_rows($qr)==0) 
							{
								echo '<div id="start_chat"><div>Start a chat...</div>Hey! Begin the chat, go for it.</div>';
							}
							else 
							{
								while($qrow=mysqli_fetch_assoc($qr))
								{
									$id=$qrow['id'];
									$name=$qrow['name'];
									$message=$qrow['message'];
									$time=$qrow['time'];
									$day=$qrow['day'];

									echo '<div>		
													<div id="message_div">

														'.$message.'<br>
														<div id="below_message_div">
															'.$time. ',&nbsp;&nbsp;'.$day.'
														</div>
													</div>
										</div>	
											<br>';

								}
							}
							
						} 
						else 
						{
							echo "Can not load.";
						}
	}			

?>
