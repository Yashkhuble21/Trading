<?php
    include 'includes/header.php';
    // include 'includes/config.php';
    if (isset($_POST['del'])) {
        $del = $_POST['hid'];


        deleteRecord('visibility', 'id=' . $del);
    }

    ?>
<?php
$select = "SELECT * FROM tbl_footer_setting WHERE id = 1";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
?>
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="./images/footer/Logo-11981_logo.jpg ?>" height="70" width="70"
                alt="<?php echo $row['alt_tag']; ?>"></a>
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
        <li >
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fa fa-users"></i>
                <span>Manage Employee</span>
            </a>
            <ul>
                <li><a href="manage-employee.php" >Employees</a></li>
                <li><a href="manage-department.php">Departments</a></li>
                <li><a href="manage-role.php">Roles</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-box"></i>
                <span>Manage Products</span>
            </a>
            <ul>
                <li><a href="manage-category.php">Category</a></li>
                <!-- <li><a href="manage-department.php">Sub-Categorys</a></li> -->
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

        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-file"></i>
                <span>Manage Pages</span>
            </a>
            <ul>
                <li><a href="header-setting.php" class="active">Header setting</a></li>
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
                        <h4>Header Setting</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">

                                    <div class="search_field">
                                        <input type="text" placeholder="Search content here..."
                                            class="search-table-data">
                                    </div>


                                </div>
                            </div>
                            <div class="add_button ms-2">
                                <a href="add-page.php" class="btn_1">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table ">

                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = 'SELECT * FROM pagevisibility';
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $cno = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"><?php echo $cno ?></a></th>


                                    <td><?php echo $row['page_name'] ?></td>
                                  
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" <?php if ($row['visibility'] == 1) {
                                                                                            echo "checked";
                                                                                        } ?> type="checkbox"
                                                role="switch" id="status"
                                                onclick="toggleStatus('pagevisibility','visibility',<?php echo $row['id']; ?>);">
                                            <label class="form-check-label" for="status"></label>
                                        </div>
                                        <!-- <?php $status =  $row['visibility'];

                                                        if ($status == 1) { ?>
                                                     <a href="#" class="status_btn">Active</a>
                                                 <?php
                                                        } else {
                                                    ?> <a href="#" class="status_btn bg-danger">Inactive</a>
                                                 <?php }
                                                    ?> -->
                                    </td>
                                    <td>

                                        <!-- visiblity -->
                                        <!-- <input type="hidden" value="<?php echo $row['uid'] ?>" />
                                                 <button type="submit" name="status" id="status" class="fas fa-eye text-success border border-0 bg-white"> -->

                                        <form class="d-inline" action="header-setting.php" method="post">
                                            <!-- delete -->
                                            <input type="hidden" name="hid" value="<?php echo $row['id'] ?>" />
                                            <button type="submit" name="delete" id=""
                                                class="fas fa-trash-alt text-danger border border-0 bg-white">
                                        </form>&nbsp&nbsp
                                        <form class="d-inline" action="update-header.php" method="get">
                                            <!-- update -->
                                            <input type="hidden" value="<?php echo $row['id'] ?>" name="hid" />
                                            <button type="submit" name="update-header" id="update-header"
                                                class="fas fa-edit  border border-0 bg-white">
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

<?php
    include 'includes/footer.php';
    ?>