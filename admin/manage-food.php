<?php include('partials/menu.php'); ?>

<div class="main_content">
        <div class="wrapper">
        <h1>Manage Food</h1>
        <br/> <br/>
            <!--botton to add admin -->
            <a href="#" class="tbl-primary">Add Food</a>
            <br/><br/>



            <table class="tbl-full">
                <tr>
                        <th>S.N</th>
                         <th>Title</th>
                         <th>Price</th>
                         <th>Image</th>
                         <th>Featured</th>
                         <th>Active</th>
                         <th>Actions</th>
                </tr>

                <tr>
                      <td>1.</td>
                      <td>Dumplings Specials</td>
                      <td>$5.00</td>
                      <td><img src="images/menu-momo.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                      <td>2.</td>
                      <td>Best Burger</td>
                      <td>$4.00</td>
                      <td><img src="images/menu-burger.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                      <td>3.</td>
                      <td>Smoky BBQ Pizza</td>
                      <td>$6.00</td>
                      <td><img src="images/menu-pizza.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                     <td>4.</td>
                      <td>Sadeko Momo</td>
                      <td>$6.00</td>
                      <td><img src="images/menu-momo.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                      <td>5.</td>
                      <td>Mixed Pizza</td>
                      <td>$10.00</td>
                      <td><img src="images/menu-momo.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                     <td>6.</td>
                      <td>Sed ipsum cillum in</td>
                      <td>$52.00</td>
                      <td class="img-not-add" style="color:danger">Image not Add</td>
                      <td>No</td>
                      <td>No</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>
            </table>
           
        </div>
    </div>
    
<?php include('partials/footer.php'); ?>