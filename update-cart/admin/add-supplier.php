<?php
include 'includes/header.php';
// include 'includes/config.php';


?>
<?php
if (isset($_POST['Registration'])) {
    $message = "";
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

    if ($password === $confirm_password) {

        $query = "INSERT INTO tbl_supplier(company_name,email,phone_no,whatsapp_no,address,gst_number,description,status_id,password) 
        VALUES ('$company_name','$email','$phone_no',$whatapp_no,'$address','$gst_number','$description','$status','$password')";
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
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-truck"></i>
                <span>Manage Supplier</span>
            </a>
            <ul>
                <li><a href="manage-supplier.php" class="active">Supplier</a></li>
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
                        <h4>Add Supplier</h4>
                    </div>
                    <!-- start form New employee -->
                    <form class="" method="post" action="">
                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-12">
                                <label for="conpanyName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="conpanyName" aria-describedby="companyName" name="company_name">
                            </div>

                        </div>
                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-12">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-6">
                                <label for="password" class="form-label">Password </label>
                                <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirm_password">
                            </div>
                        </div>

                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-6">
                                <label for="mobileNo" class="form-label">Phone No </label>
                                <input type="text" class="form-control" id="MobileNo" aria-describedby="emailHelp" name="phone_no">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="whatsappNo" class="form-label">Whatsapp No </label>
                                <input type="text" class="form-control" id="whatsappNo" aria-describedby="emailHelp" name="whatsapp_no">

                            </div>
                        </div>

                        <div class="mb-3 row col-12">
                            <label for="address" class="form-label">Address </label>
                            <div class="mb-3 col-12">
                                <textarea name="address" class="form-control" rows="5" id="" style="resize: none; border-color: light;"></textarea>
                            </div>

                        </div>
                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-6">
                                <label for="gstNo" class="form-label">gst No </label>
                                <input type="text" class="form-control" id="gstNo" aria-describedby="emailHelp" name="gst_no">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="status" class="form-label">Status</label>
                                <div>
                                    <select class="form-control dropdown" id="status" name="status">
                                        <option disabled="" selected="" id="status" name="status">--Choose Status -- </option>

                                        <?php
                                        $sql = 'SELECT * FROM tbl_emp_status';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['emp_status'] . "' value='" . $row['id'] . "' name='status'>" . $row['emp_status'] . "</option>";
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
                                <textarea name="description" class="form-control" rows="5" id="" style="resize: none; border-color: light;"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary" value="reg" name="Registration">Submit</button>

                    </form>
                    <!-- end of form  -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>