<?php
include 'includes/header.php';
if (isset($_POST['delinq']) && isset($_POST['inq_id'])) {
    $del = $_POST['inq_id'];
    deleteRecord('tbl_inquiry', 'id=' . $del);
}


?>
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
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fa fa-users"></i>
                <span>Manage Employee</span>
            </a>
            <ul>
                <li><a href="manage-employee.php">Employees</a></li>
                <li><a href="manage-department.php">Departments</a></li>
                <li><a href="manage-role.php">Roles</a></li>
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
        <li class="mm-active">
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
        <!-- <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="assets/img/menu-icon/4.svg" alt>
                <span>UI Component</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="dropdown.html">Dropdowns</a></li>
                        <li><a href="Badges.html">Badges</a></li>
                        <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                    </ul>
                </li>
                <li><a href="#">Components</a>
                    <ul>
                        <li><a href="notification.html">Notifications</a></li>
                        <li><a href="progress.html">Progress Bar</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="cards.html">cards</a></li>
                        <li><a href="Pagination.html">Pagination</a></li>
                    </ul>
                </li>
            </ul>
        </li> -->
        <!-- <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="assets/img/menu-icon/5.svg" alt>
                <span>Widgets</span>
            </a>
            <ul>
                <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                <li><a href="profilebox.html">Profile Box</a></li>
            </ul>
        </li> -->
        <!-- <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="assets/img/menu-icon/6.svg" alt>
                <span>Forms</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="data_table.html">Data Tables</a></li>
                        <li><a href="bootstrap_table.html">Grid Tables</a></li>
                        <li><a href="datepicker.html">Date Picker</a></li>
                    </ul>
                </li>
                <li><a href="#">Widgets</a>
                    <ul>
                        <li><a href="Input_Selects.html">Input Selects</a></li>
                        <li><a href="Input_Mask.html">Input Mask</a></li>
                    </ul>
                </li>
            </ul>
        </li> -->
        <!-- <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="assets/img/menu-icon/7.svg" alt>
                <span>Charts</span>
            </a>
            <ul>
                <li><a href="chartjs.html">ChartJS</a></li>
                <li><a href="apex_chart.html">Apex Charts</a></li>
                <li><a href="chart_sparkline.html">chart sparkline</a></li>
            </ul>
        </li> -->
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
                        <h4>Product Inqueries</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search content here..." class="search-table-data">
                                    </div>
                                </div>
                            </div>
                            <div class="add_button ms-2">
                                <a href="add-inquiry.php" class="btn_1">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table ">

                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">transactionId</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Assigned Employee</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = 'SELECT tbl_inquiry.*,tbl_customer.name as cust_name, tbl_inquiry.id as inq_id,tbl_user.name as employee_name,tbl_supplier.company_name as sup_name,tbl_inquiry_status.status as status_name
                                FROM tbl_inquiry 
                                 JOIN tbl_customer on tbl_inquiry.customer_id = tbl_customer.id
                                 JOIN tbl_product on tbl_inquiry.product_id = tbl_product.id
                                 JOIN tbl_inquiry_status on tbl_inquiry.inquiry_status_id = tbl_inquiry_status.id
                                 JOIN tbl_user on tbl_inquiry.emp_assign_id = tbl_user.id
                                 JOIN tbl_supplier on tbl_inquiry.supplier_assign_id = tbl_supplier.id';

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $cno = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {


                                ?>
                                        <tr>
                                            <th scope="row"> <a href="#" class="question_content"><?php echo $cno ?></a></th>


                                            <td><?php echo $row['autogenrated_id'] ?></td>
                                            <td><?php echo $row['cust_name'] ?></td>
                                            <td><?php echo $row['employee_name'] ?></td>
                                            <td><?php echo $row['sup_name'] ?></td>
                                            <td><?php echo $row['status_name'] ?></td>
                                            <!-- <td> -->
                                            <!-- <div class="form-check form-switch">
                                                    <input class="form-check-input" <?php if ($row['emp_status'] == 1) {
                                                                                        echo "checked";
                                                                                    } ?> type="checkbox" role="switch" id="status" onclick="toggleStatus(<?php echo $row['uid']; ?>);">
                                                    <label class="form-check-label" for="status"></label>
                                                </div> -->
                                            <!-- <?php $status =  $row['emp_status'];

                                                    if ($status == 1) { ?>
                                                     <a href="#" class="status_btn">Active</a>
                                                 <?php
                                                    } else {
                                                    ?> <a href="#" class="status_btn bg-danger">Inactive</a>
                                                 <?php }
                                                    ?> -->
                                            <!-- </td> -->
                                            <td>

                                                <!-- visiblity -->
                                                <!-- <input type="hidden" value="<?php echo $row['inq_id'] ?>"  name="catId" />
                                                 <button type="submit" name="status" id="status" class="fas fa-eye text-success border border-0 bg-white"> -->

                                                <form class="d-inline" method="post">
                                                    <!-- delete -->
                                                    <input type="hidden" value="<?php echo $row['inq_id'] ?>" name="inq_id" />
                                                    <button type="submit" name="delinq" id="" class="fas fa-trash-alt text-danger border border-0 bg-white" onclick=" return confirm('Are you sure you want to delete this data?')">
                                                </form>&nbsp&nbsp
                                                <form class="d-inline" action="update-inquiry.php" method="post">
                                                    <!-- update -->
                                                    <input type="hidden" value="<?php echo $row['inq_id'] ?>" name="inq_id" />
                                                    <button type="submit" name="update-inquiry" id="" class="fas fa-edit  border border-0 bg-white">
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
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <option disabled="" selected="">-- Choose Department -- </option>
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