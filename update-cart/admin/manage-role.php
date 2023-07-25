<?php
include 'includes/header.php';
// include 'includes/config.php';

if (isset($_POST['del'])) {
    $del = $_POST['roleId'];
    $roleDelete = 'DELETE FROM tbl_role WHERE id = "' . $del . '"';

    $rows = mysqli_query($conn, $roleDelete);

    if (mysqli_num_rows($rows) > 0) {
        echo '<script type="text/javascript">alert("Deleted") </script>';
    }
}

?>
<!-- include 'includes/side-bar.php';-->
<?php
$select = "SELECT * FROM tbl_footer_setting WHERE id = 1";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
?>
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="./images/footer/Logo-11981_logo.jpg ?>" height="70" width="70" alt="<?php echo $row['alt_tag']; ?>"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="" href="home.php" aria-expanded="false">

                <img src="assets/img/menu-icon/1.svg" alt>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fa fa-users"></i>
                <span>Manage Employee</span>
            </a>
            <ul>
                <li><a href="manage-employee.php">Employees</a></li>
                <li><a href="manage-department.php">Departments</a></li>
                <li><a href="manage-role.php" class="active">Roles</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-box"></i>
                <span>Manage Products</span>
            </a>
            <ul>
                <li><a href="manage-category.php">Categorys</a></li>
                <!-- <li><a href="manage-sub-category">Sub-Categorys</a></li> -->
                <li><a href="manage-product.php">Products</a></li>

            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-truck"></i>
                <span>Manage Supplier</span>
            </a>
            <ul>
                <li><a href="manage-supplier.php">Supplier</a></li>
                <li><a href="supplier-product.php">Product</a></li>
            </ul>
        </li>
        <li class>
            <a class="" href="manage-customer.php" aria-expanded="false">
                <i class="fa fa-users"></i>
                <span>Manage Customer</span>
            </a>
            <!-- <ul>
                <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul> -->
        </li>
        <li class>
            <a class="" href="manage-inquiry.php" aria-expanded="false">
                <i class="fas fa-clipboard-list"></i>
                <span>Manage Inquiry</span>
            </a>
            <!-- <ul>
                <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul> -->
        </li>


        <li class>
            <a class="" href="contact-us-setting.php" aria-expanded="false">
                <i class="fas fa-address-book"></i>
                <span>Contact Us</span>
            </a>
            <!-- <ul>
                <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul> -->
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-file"></i>
                <span>Manage Pages</span>
            </a>
            <ul>
                <li><a href="header-setting.php">Header setting</a></li>
                <li><a href="footer_setting.php">Footer Setting</a></li>
                <li><a href="logos.php">Logo</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php include 'includes/top-bar.php';
?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4>Roles</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search content here..." class="search-table-data">
                                    </div>
                                </div>
                            </div>
                            <div class="add_button ms-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn_1" data-bs-toggle="modal" data-bs-target="#role">
                                    ADD NEW
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table ">
                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Name</th>
                                    <!-- <th scope="col">Department</th>
                                    <th scope="col">role</th> -->
                                    <!-- <th scope="col"></th> -->
                                    <!-- <th scope="col">Price</th> -->
                                    <!-- <th scope="col">Status</th>-->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = 'SELECT * FROM tbl_role';
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $cno = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {


                                ?>
                                        <tr>
                                            <th scope="row"> <a href="#" class="question_content"><?php echo $cno ?></a></th>


                                            <td><?php echo $row['name'] ?></td>

                                            <td><!-- visiblity -->
                                                <!-- <form class="d-inline" action="employee.php" method="post">
                                                    
                                                    <input type="hidden" value="<?php echo $row['id'] ?>" />
                                                    <button type="submit" name="status" id="" class="fas fa-eye text-success border border-0 bg-white">
                                                </form> -->
                                                <form class="d-inline" action="manage-role.php" method="post">
                                                    <!-- delete -->
                                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="roleId" />
                                                    <button type="submit" name="del" id="" class="fas fa-trash-alt text-danger border border-0 bg-white" onclick=" return confirm('Are you sure you want to delete this data?')">
                                                </form>&nbsp&nbsp
                                                <form class="d-inline" action="update-role.php" method="post">
                                                    <!-- update -->
                                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="roleId" />
                                                    <button type="submit" name="update-role" id="" class="fas fa-edit  border border-0 bg-white">
                                                </form>

                                            </td>
                                        </tr>

                                <?php
                                        $cno++;
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add role -->
<div class="modal fade" id="role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" method="post" id="role" action="./data.php">
                    <div class="mb-3 row col-12">
                        <div class="mb-3 col-lg-12">
                            <label for="name mb-2" class="form-label">Role</label>
                            <input type="text" class="form-control" aria-describedby="name" name="role">
                            <span id="dept-erro"></span>
                        </div>
                    </div>
                    <div class="mb-3 row col-12">
                        <div class="mb-3 col-lg-12">
                            <label for="name mb-2" class="form-label">Department</label>
                            <select class="form-control" id="dept1" name="dept1">
                                <option disabled="" selected="">--Choose Department -- </option>
                                <?php
                                $sql = 'SELECT * FROM tbl_dept';
                                $result = mysqli_query($conn, $sql);
                                if ($result && mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option id='" . $row['id'] . "' value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                    }
                                } else {
                                    echo 'No data found.';
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="reg" name="addrole" id="addrole">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>