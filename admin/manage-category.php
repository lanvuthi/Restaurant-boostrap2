<?php include('partials/menu.php'); ?>

    <div class="main_content">
        <div class="wrapper">
        <h1>Manage Category</h1>
        <br/> <br/>
            <!--botton to add admin -->
            <a href="#" class="tbl-primary">Add Category</a>
            <br/><br/>

            <table class="tbl-full">
                <tr>
                        <th>S.N</th>
                         <th>Title</th>
                         <th>Image</th>
                         <th>Featured</th>
                         <th>Active</th>
                         <th>Actions</th>
                </tr>

                <tr>
                      <td>1.</td>
                      <td>Pizza</td>
                      <td><img src="images/menu-pizza.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                      <td>2.</td>
                      <td>Burger</td>
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
                      <td>Momo</td>
                      <td><img src="images/menu-momo.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>

                <tr>
                     <td>4.</td>
                      <td>Quia est ipsum id id</td>
                      <td><img src="images/php-mysql.jpg" style="height:100px" alt=""></td>
                      <td>Yes</td>
                      <td>Yes</td>
                      <td>
                           <a href="#" class="tbl-secondary">Update Food</a> 
                           <a href="#" class="tbl-danger">Delete Food</a>
                      </td>
                </tr>
            </table>
           
        </div>
    </div>
    
<?php include('partials/footer.php'); ?>