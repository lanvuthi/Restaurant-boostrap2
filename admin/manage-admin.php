<?php include('partials/menu.php'); ?>

    <div class="main_content">
        <div class="wrapper">
            <h1>Manage Users</h1>
            <br/>
            <!--botton to add admin -->
            <a href="add-admin.php" class="tbl-primary">Add New User</a>
            <br/><br/>

            <table class="tbl-full">
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>UserName</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Jussten</td>
                    <td>Jussteen201</td>
                    <td>
                        <a href="#" class="tbl-info">Change Password</a>
                        <a href="#" class="tbl-secondary">Update Admin</a> 
                        <a href="#" class="tbl-danger">Delete Admin</a>
                        
                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>selena gomez</td>
                    <td>selena</td>
                    <td>
                        <a href="#" class="tbl-info">Change Password</a>
                        <a href="#" class="tbl-secondary">Update Admin</a> 
                        <a href="#" class="tbl-danger">Delete Admin</a>
                        
                    </td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>vajjako</td>
                    <td>vaijako</td>
                    <td>
                        <a href="#" class="tbl-info">Change Password</a>
                        <a href="#" class="tbl-secondary">Update Admin</a> 
                        <a href="#" class="tbl-danger">Delete Admin</a>
                        
                    </td>
                </tr>
            </table>

        </div>
    </div>
    
<?php include('partials/footer.php'); ?>