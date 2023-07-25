<?php
include 'includes/header.php';
// include 'includes/config.php';


?>
<?php
if (isset($_POST['addCategory'])) {

    $file = $_FILES['img'];
    $imageName = $file['name'];
    $fileTmpPath = $_FILES["img"]["tmp_name"];
    $fileSize = $file['size'];
    $category = $_POST['name'];
    // Specify the directory to which you want to save the uploaded file
    $targetDirectory = 'images/categories/';
    $Select = "SELECT COUNT(*) AS find FROM tbl_categories WHERE category_name = '$category' ";
    $res = mysqli_fetch_assoc(mysqli_query($conn, $Select));
    if ($res['find'] == 0) {
        // Generate a unique name for the file to prevent overwriting

        $targetFilePath = $targetDirectory . $imageName;
        if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
            $query = "INSERT INTO tbl_categories(category_name,category_image) VALUES ('$category',' $imageName')";
            $result = mysqli_query($conn, $query);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script type='text/javascript'>alert('Inserted!');</script>";
                echo '<script>window.location.href = "manage-category.php";</script>';
            } else {
                echo "<script type='text/javascript'>alert('Something went Wrongh!');</script>";
                echo '<script>window.location.href = "manage-category.php";</script>';
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('Already present');</script>";
        // echo '<script>window.location.href = "manage-category.php";</script>';

        echo $res['find'];

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
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <i class="fas fa-box"></i>
                <span>Manage Products</span>
            </a>
            <ul>
                <li><a href="manage-category.php" class="active">Categorys</a></li>
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
                        <h4>Add Category</h4>
                    </div>
                    <!-- start form New Category -->
                    <form class="" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-6">
                                <label for="CategoryName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="CategoryName" aria-describedby="category" name="name" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="CategoryImagy" class="form-label">Image </label>
                                <input type="file" class="form-control" id="CategoryImagy" aria-describedby="image" name="img" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" value="category" name="addCategory">Submit</button>

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