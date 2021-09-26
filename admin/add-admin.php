<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class=" wrapper">
        <h1>Add Admin</h1>
        <br/>
        <form action="" methor="Post">
            <table class="tbl-nhapten">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="fullname" placeholder="Nhập tên của bạn"></td>
                </tr>

                <tr>
                    <td>User Name: </td>
                    <td>
                        <input type="text" name="username" placeholder="Nhập tên người dùng">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" valuse="Add Admin" class="tbl-secondary">
                    </td>
                </tr>
            </table>

        </form>


    </div>
</div>

<?php include('partials/footer.php'); ?>
