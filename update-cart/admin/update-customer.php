<?php
include 'includes/header.php';
// include 'includes/config.php';


?>
<?php
if (isset($_POST['update'])) {
    $customerid = $_POST['cid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    // $password = $_POST['password'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $company_name = $_POST['company_name'];
    $gst_number = $_POST['gst_no'];

    // Prepare the SQL statement
    $query = "UPDATE tbl_customer
SET name = '$name',
email_id = '$email',
phone_no = '$phone_no',
country = '$country',
    state = '$state',
    city = '$city',
    address = '$address',
    company_name = '$company_name',
    gst_number = '$gst_number'
WHERE id = $customerid;
";
    $stmt = mysqli_query($conn, $query);

    if ($stmt) {

        echo '<script>alert("Details are updated!");</script>';
        echo '<script>window.location.href = "manage-customer.php";</script>';
    } else {
        echo '<script>alert("Something went Wrong!");</script>';
        echo '<script>window.location.href = "manage-customer.php";</script>';
    }
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
        <li class="mm-active">
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
                        <h4>Update Employee</h4>
                    </div>
                    <?php
                    if (isset($_POST['update-customer'])) {
                        $customerid = $_POST['cid'];
                        $Select = 'SELECT tbl_customer.* ,
                        tbl_customer.id as uid from tbl_customer
                        WHERE tbl_customer.id = "' . $customerid . '"';
                        if ($result = mysqli_query($conn, $Select)) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // print_r($row);

                    ?>
                                    <!-- start form update customer -->
                                  

                                        <div class="mb-3 row col-12">
                                            <input type="hidden" name="cid" value="<?php echo $customerid ?>">
                                            <div class="mb-3 col-lg-12">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" aria-describedby="custmerName" name="name" value="<?php echo $row['name']; ?>">
                                            </div>

                                        </div>

                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-6">
                                                <label for="email" class="form-label">Email </label>
                                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $row['email_id']; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="phone_no" class="form-label">Phone No</label>
                                                <input type="number" class="form-control" id="phone_no" name="phone_no" value="<?php echo $row['phone_no']; ?>">
                                            </div>

                                        </div>


                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-6">
                                                <label for="company_name" class="form-label">Company Name </label>
                                                <input type="text" class="form-control" id="company_name" aria-describedby="company_name" name="company_name" value="<?php echo $row['company_name']; ?>">
                                            </div>

                                            <div class="mb-3 col-lg-6">
                                                <label for="company_name" class="form-label">GST No</label>
                                                <input type="text" class="form-control" id="company_name" aria-describedby="company_name" name="gst_no" value="<?php echo $row['gst_number']; ?>">
                                            </div>

                                        </div>

                                        <div class="mb-3 row col-12">

                                            <div class="mb-3 col-lg-6">
                                                <label for="country" class="form-label">Country </label>
                                                <input type="text" class="form-control" id="country" aria-describedby="country" name="country" value="<?php echo $row['country']; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="state" class="form-label">State </label>
                                                <input type="text" class="form-control" id="state" aria-describedby="state" name="state" value="<?php echo $row['state']; ?>">
                                            </div>
                                        </div>


                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-6">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city" aria-describedby="city" name="city" value="<?php echo $row['city']; ?>">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="address" class="form-label">Address </label>
                                                <input type="text" class="form-control" id="address" aria-describedby="address" name="address" value="<?php echo $row['address']; ?>">
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary" value="reg" name="update">Submit</button>

                                   
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