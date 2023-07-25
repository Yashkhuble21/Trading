<?php
include 'includes/header.php';
// include 'includes/config.php';


?>
<?php
if (isset($_POST['update'])) {

    $current_email = $_POST['email_id'];
    $userId = $_SESSION['admin_id'];
    $select = "SELECT email FROM tbl_user WHERE id !='$userId'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
    $row['email'];
    if ($current_email !=  $row['email']) {

        $password = $_POST['password'];
        $name = $_POST['name'];

        $update = "UPDATE tbl_user SET name='$name',email = '$current_email',password='$password'  WHERE id='$userId'";
        $result = mysqli_query($conn, $update);
        if ($result) {
            echo "<script type='text/javascript'>alert('updated!');</script>";
            echo '<script>window.location.href = "home.php";</script>';
        } else {
            echo "<script type='text/javascript'>alert('Something went Wrong!');</script>";
            echo '<script>window.location.href = "home.php";</script>';
        }
    } else {
        echo "<script type='text/javascript'>alert('Email Id already exist!');</script>";
        echo '<script>window.location.href = "home.php";</script>';
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
                        <h4>Profile Setting</h4>
                    </div>
                    <!-- start form New Category -->
                    <form class="" method="post">
                        <?php
                        $userId = $_SESSION['admin_id'];

                        $select = 'SELECT * FROM tbl_user WHERE id = "' . $userId . '" LIMIT 1';
                        $result = mysqli_query($conn, $select);
                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="mb-3 row col-12">
                                <input type="hidden" class="form-control" id="admin_id" aria-describedby="admin_id" name="admin_id" value="<?php echo $row['id']; ?>">

                                <div class="mb-3 col-lg-6">
                                    <label for="name" class="form-label">Name </label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?php echo $row['name']; ?>">
                                </div>
                            </div>

                            <div class="mb-3 row col-12">
                                <div class="mb-3 col-lg-6">
                                    <label for="email_id" class="form-label">Email Id</label>
                                    <input type="text" class="form-control" id="email_id" aria-describedby="email_id" name="email_id" value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                            <div class="mb-3 row col-12">
                                <div class="mb-3 col-lg-6">
                                    <label for="password" class="form-label"> Password </label>
                                    <input type="text" class="form-control" id="password" aria-describedby="password" name="password" value="<?php echo $row['password']; ?>">
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary" value="update" name="update">Submit</button>
                    </form>
                    <!-- end of form  -->

                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>