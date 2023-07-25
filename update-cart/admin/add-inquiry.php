<?php
include 'includes/header.php';
?>
<?php
if (isset($_POST['add-inquiry'])) {

    $transactionId = generateUniqueID();
    $customer_id = $_POST['customer_company'];
    $product_id = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $volume_id = $_POST['volume'];
    $inquiry_status = $_POST['inquiry_status'];
    $assign_employee = $_POST['assign_employee'];
    $assign_supplier = $_POST['supplier_company'];


    if ($_FILES['quotation']['size']) {

        $file = $_FILES['quotation'];
        $imageName = $file['name'];
        $fileTmpPath = $_FILES["quotation"]["tmp_name"];
        $fileSize = $file['size'];

        // Specify the directory to which you want to save the uploaded file
        $targetDirectory = 'images/quotation/';

        // Generate a unique name for the file to prevent overwriting

        $targetFilePath = $targetDirectory . $imageName;
        if (move_uploaded_file($fileTmpPath, $targetFilePath)) {

            $query = "INSERT INTO tbl_inquiry(autogenrated_id,customer_id,product_id,quantity,volume,inquiry_status_id,emp_assign_id,supplier_assign_id,Quotation_pdf) VALUES 
            ('$transactionId',$customer_id,$product_id,$quantity,$volume_id,$inquiry_status,$assign_employee,$assign_supplier,'$imageName')";

            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script type='text/javascript'>alert('Inserted!');</script>";
                echo '<script>window.location.href = "manage-inquiry.php";</script>';
            } else {
                echo "<script type='text/javascript'>alert('Something went!');</script>";
                echo '<script>window.location.href = "manage-inquiry.php";</script>';
            }
        }
    } else {


        $query = "INSERT INTO tbl_inquiry(autogenrated_id,customer_id,product_id,quantity,volume,inquiry_status_id,emp_assign_id,supplier_assign_id) VALUES 
        ('$transactionId',$customer_id,$product_id,$quantity,$volume_id,$inquiry_status,$assign_employee,$assign_supplier)";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script type='text/javascript'>alert('Inserted!');</script>";
            echo '<script>window.location.href = "manage-inquiry.php";</script>';
        } else {
            echo "<script type='text/javascript'>alert('Something went!');</script>";
            echo '<script>window.location.href = "manage-inquiry.php";</script>';
        }
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
                        <h4>Add Inquiry</h4>
                    </div>
                    <!-- start form New inquiry -->
                    <form class="" method="post" action="add-inquiry.php" enctype="multipart/form-data">

                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Company</label>
                                <div>
                                    <select class="form-control dropdown" id="customer_company" name="customer_company" required>
                                        <option disabled="" selected="">--Choose company -- </option>

                                        <?php
                                        $sql = 'SELECT * FROM tbl_customer';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['email_id'] . "' value='" . $row['id'] . "' name='customer_company'>" . $row['company_name'] . "</option>";
                                            }
                                        } else {
                                            echo 'No data found.';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Product</label>
                                <div>
                                    <select class="form-control dropdown" id="product_name" name="product_name" required>
                                        <option disabled="" selected="">-- Choose Product -- </option>

                                        <?php
                                        $sql = 'SELECT * FROM tbl_product';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['product_name'] . "' value='" . $row['id'] . "' name='product_name'>" . $row['product_name'] . "</option>";
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
                            <div class="mb-3 col-lg-6">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" aria-describedby="quantity" name="quantity" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleInputPassword1" class="form-label">In</label>
                                <select class="form-control dropdown" id="volume" name="volume" required>
                                    <option disabled="" selected="" id="volume" name="volume">--Choose type ---</option>
                                </select>
                            </div>
                        </div>



                        <div class="mb-3 row col-12">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Assign employee</label>
                                <div>
                                    <select class="form-control dropdown" id="assign_employee" name="assign_employee">
                                        <option disabled="" selected="" id="assign_employee" name="assign_employee">--Choose employee -- </option>

                                        <?php
                                        $sql = 'SELECT * FROM tbl_user';
                                        $result = mysqli_query($conn, $sql);

                                        // $sql = 'SELECT name FROM tbl_user
                                        // JOIN tbl_dept on tbl_user.dept_id = tbl_dept.id
                                        //  WHERE tbl_dept.name Not in() ';
                                        // $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['name'] . "' value='" . $row['id'] . "' name='employee'>" . $row['name'] . "</option>";
                                            }
                                        } else {
                                            echo 'No data found.';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Select Supplier</label>
                                <div>
                                    <select class="form-control dropdown" id="supplier_company" name="supplier_company">
                                        <option disabled="" selected="" id="supplier_company" name="supplier_company">--Choose supplier -- </option>

                                        <?php
                                        $sql = 'SELECT * FROM tbl_supplier';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['company_name'] . "' value='" . $row['id'] . "' name='supplier_company'>" . $row['company_name'] . "</option>";
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
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Inquiry status</label>
                                <div>
                                    <select class="form-control dropdown" id="inquiry_status" name="inquiry_status">
                                        <option disabled="" selected="" id="inquiry_status" name="inquiry_status">--Choose status -- </option>

                                        <?php
                                        $sql = 'SELECT * FROM tbl_inquiry_status';
                                        $result = mysqli_query($conn, $sql);
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option id='" . $row['status'] . "' value='" . $row['id'] . "' name='inquiry_status'>" . $row['status'] . "</option>";
                                            }
                                        } else {
                                            echo 'No data found.';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">quotation</label>
                                <input type="file" class="form-control" name="quotation" id="quotation">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary" name="add-inquiry">Submit</button>

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