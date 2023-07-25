<?php
include 'includes/header.php';
// include 'includes/config.php';


?>
<?php
if (isset($_POST['update'])) {
    $supplierId = $_POST['sid'];
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone_no = $_POST['phone_no'];
    $whatapp_no = $_POST['whatsapp_no'];
    $address = $_POST['address'];
    $gst_number = $_POST['gst_no'];
    $description = $_POST['description'];
    $status = $_POST['status'];


    $query = "UPDATE 
    tbl_supplier SET  company_name='$company_name',
    email='$email',phone_no=$phone_no,whatsapp_no=$whatapp_no,
    address='$address',gst_number='$gst_number',
    description='$description', status_id='$status',
    password='$password' WHERE id='$supplierId' ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script type='text/javascript'>alert('Inserted!');</script>";
        echo '<script>window.location.href = "manage-supplier.php";</script>';
    } else {
        echo "<script type='text/javascript'>alert('Something went!');</script>";
        echo '<script>window.location.href = "manage-supplier.php";</script>';
    }
} else {
    echo "<script type='text/javascript'>alert('password and confirm password not matched!');</script>";
    echo '<script>window.location.href = "manage-supplier.php";</script>';
}

?>
<!--add-employees -->
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
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-box"></i>
                <span>Manage Products</span>
            </a>
            <ul>
                <li><a href="manage-category.php">Categorys</a></li>
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
                        <h4>Updation Supplier</h4>
                    </div>
                    <?php
                    if (isset($_POST['update-supplier'])) {
                        $supplierid = $_POST['sid'];
                        $Select = 'SELECT tbl_supplier.* , tbl_supplier.id as sid FROM tbl_supplier
                        WHERE tbl_supplier.id = "' . $supplierid . '"';
                        if ($result = mysqli_query($conn, $Select)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // print_r($row);

                    ?>
                                    <!-- start form New supplier -->
                                    <form class="" method="post" action="">
                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-12">
                                                <input type="hidden" value="<?php echo $supplierid; ?>" name="sid">
                                                <label for="conpanyName" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="conpanyName" aria-describedby="companyName" name="company_name" value="<?php echo $row['company_name']; ?>">
                                            </div>

                                        </div>
                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-12">
                                                <label for="email" class="form-label">Email </label>
                                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-12">
                                                <label for="password" class="form-label">Password </label>
                                                <input type="password" class="form-control" id="password" aria-describedby="password" name="password" value="<?php echo $row['password']; ?>">
                                            </div>
                                        </div> -->

                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-6">
                                                <label for="mobileNo" class="form-label">Phone No </label>
                                                <input type="text" class="form-control" id="MobileNo" aria-describedby="phone_no" name="phone_no" value="<?php echo $row['phone_no']; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="whatsappNo" class="form-label">Whatsapp No </label>
                                                <input type="text" class="form-control" id="whatsappNo" aria-describedby="whatsapp_no" name="whatsapp_no" value="<?php echo $row['whatsapp_no']; ?>">

                                            </div>
                                        </div>

                                        <div class="mb-3 row col-12">
                                            <label for="address" class="form-label">Address </label>
                                            <div class="mb-3 col-12">
                                                <textarea name="address" class="form-control" rows="5" id="" style="resize: none; border-color: light;"><?php echo $row['address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-6">
                                                <label for="gstNo" class="form-label">gst No </label>
                                                <input type="text" class="form-control" id="gstNo" aria-describedby="gst_no" name="gst_no" value="<?php echo $row['gst_number']; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="status" class="form-label">Status</label>
                                                <div>
                                                    <select class="form-control dropdown" id="status" name="status">
                                                        <option disabled="" selected="" id="status" name="status">--Choose Status -- </option>

                                                        <?php
                                                        $sql = 'SELECT * FROM tbl_supplier_status';
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result && mysqli_num_rows($result) > 0) {

                                                            while ($rows = mysqli_fetch_assoc($result)) {
                                                                if ($row['status_id'] === $rows['id']) {
                                                                    echo "<option selected='' id='" . $rows['supplier_status'] . "' value='" . $rows['id'] . "' name='status'>" . $rows['supplier_status'] . "</option>";
                                                                } else {

                                                                    echo "<option id='" . $rows['supplier_status'] . "' value='" . $rows['id'] . "' name='status'>" . $rows['supplier_status'] . "</option>";
                                                                }
                                                            }
                                                        } else {
                                                            echo 'No data found.';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row col-12">
                                            <label for="description" class="form-label">Description </label>
                                            <div class="mb-3 col-12">
                                                <textarea name="description" class="form-control" rows="5" id="" style="resize: none; border-color: light;"><?php echo $row['description']; ?></textarea>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary" value="update" name="update">Submit</button>

                                    </form>
                                    <!-- end of form  -->
                    <?php
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>