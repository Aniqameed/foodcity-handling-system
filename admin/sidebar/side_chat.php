<?php
   $count=0;
    $count1=0;
    $count4=0;
   $feed=0;
	include('./../dbcon.php');
							$result = mysqli_query($conn,"SELECT * FROM chat WHERE Type = 'contact'");
							while($row = mysqli_fetch_array($result))
								
								{

									 $count++;
								}

                  $result1 = mysqli_query($conn,"SELECT * FROM chat WHERE Type = 'contact' AND To_Status = 'Not Read'");
              while($row1 = mysqli_fetch_array($result1))
                
                {
                   $count1++;
                }

          

            
                $result8 = mysqli_query($conn,"SELECT * FROM feedback");
              while($row = mysqli_fetch_array($result8))
                
                {

                   $feed++;
                }

                

                // mysql_query("UPDATE chat SET To_Status='Read'");

                ?>

	<div class="col-sm-3" style = "width: 22%">

					<div class="left-sidebar">
						<font face = "ubuntu" color = "red"><h3><div style = "padding-left: 4%">Menu</div></h3></font>	<br> 
    	                   <div class="list-group" style="font-family: ubuntu;">
                               <a href="admin_chat.php" class="list-group-item"><i class="fa fa-envelope fa-lg"></i> Inbox<span class="badge badge-primary"><font face = 'sans-serif'><?php echo $count; ?></font></span>
                                <?php if($count1 == 0){}else{?>
                                <span class="badge badge-danger"><font face = 'sans-serif'><?php echo $count1; ?> Unread</font></span>
                              <?php }?>
                              </li>
                               </a>   
                               <a href="feed.php" class="list-group-item"><i class="fa  fa-comments"></i> Manage Feedbacks<span class="badge badge-primary"><font face = 'sans-serif'><?php echo $feed; ?></font></span>
                                
                               
                        
                               </a>
                                                                                                                                                      
                            </div>
                            <form action = "logout.php">
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                               <input type="submit" name="submit" value="Logout" class="button" />
                            </div>
                            </form>
                        </div>
                        </div>