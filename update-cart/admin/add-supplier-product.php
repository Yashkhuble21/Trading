<?php

include 'includes/header.php';
// include 'includes/config.php';


?>
<?php
if (isset($_POST['addproduct'])) {

    $name = $_POST['product_name'];
    $category_id = $_POST['category'];
    $Volume = $_POST['Volume'];
    $Visibility = $_POST['Visibility'];
    $description = $_POST['description'];
    $file = $_FILES['img'];
    $imageName = $file['name'];
    $fileTmpPath = $_FILES["img"]["tmp_name"];
    $fileSize = $file['size'];

    // Specify the directory to which you want to save the uploaded file
    $targetDirectory = 'images/products/';

    // Generate a unique name for the file to prevent overwriting
    $newFileName = uniqid() . '_' . $imageName;
    $targetFilePath = $targetDirectory . $newFileName;
    move_uploaded_file($fileTmpPath, $targetFilePath);
    $query = "INSERT INTO tbl_product(category_id,product_name,product_description,product_image,volume_id,visibility_id) 
        VALUES ($category_id,'$name','$description','$targetFilePath',$Volume,$Visibility)";

    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script type='text/javascript'>alert('Inserted!');</script>";
        echo '<script>window.location.href = "manage-product.php";</script>';
    } else {
        echo "<script type='text/javascript'>alert('Something went Wrongh!');</script>";
        echo '<script>window.location.href = "manage-product.php";</script>';
    }
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
                <li><a href="manage-supplier.php">Supplier</a></li>
                <li><a href="supplier-product.php" class="active">Product</a></li>
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
                        <h4>Add Supplier Product</h4>
                    </div>
                    <!-- start form New Category -->
                    <form class="" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row col-12">

                            <div class="mb-3 col-lg-6">
                                <label for="Category" class="form-label">Supplier</label>
                                <div>
                                    <select class="form-control" id="category" name="category">
                                        <option disabled="" selected="">--Choose Supplier -- </option>
                                        <?php
                                        $sql = 'SELECT * FROM tbl_supplier';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['id'] . "' value='" . $row['id']  . "' name='name'>" . $row['company_name'] . "</option>";
                                            }
                                        } else {
                                            echo 'No data found.';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="Category" class="form-label">Product</label>
                                <div>
                                    <select class="form-control" id="category" name="category">
                                        <option disabled="" selected="">--Choose Product -- </option>
                                        <?php
                                        $sql = 'SELECT * FROM tbl_product';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['id'] . "' value='" . $row['id']  . "' name='product'>" . $row['product_name'] . "</option>";
                                            }
                                        } else {
                                            echo 'No data found.';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>




                        </div>
                        <button type="submit" class="btn btn-primary" value="product" name="addproduct">Submit</button>

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