<?php
   $count=0;
  include('./../dbcon.php');
              $result = mysql_query("SELECT * FROM product");
              while($row = mysql_fetch_array($result))
                
                {

                   $count++;
                }?>

  <div class="col-sm-3" style = "width: 18%">

          <div class="left-sidebar">
            <font face = "ubuntu" color = "red"><h3><div style = "padding-left: 4%">Menu</div></h3></font>  <br> 
                         <div class="list-group" style="font-family: ubuntu;">
                               <a href="admin_product.php" class="list-group-item"><i class="fa fa-sort-amount-asc"></i> View All<span class="badge badge-primary"><font face = 'sans-serif'><?php echo $count; ?></font></span></a>   
                               <a href="pro_search.php" class="list-group-item"><i class="fa fa-search"></i> Search</a>
                               <a href="admin_pro_add.php" class="list-group-item"><i class="fa  fa-plus-square"></i> Add Product</a>
                              <a href="admin_pro_update.php" class="list-group-item"><i class="fa fa-edit"></i> Update Product</a>                                                                                                                     
                            </div>
                            <form action = "logout.php">
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                               <input type="submit" name="submit" value="Logout" class="button" />
                            </div>
                            </form>
                        </div>
                        </div>