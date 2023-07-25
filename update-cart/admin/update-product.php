<?php
include 'includes/header.php';
// include 'includes/config.php';

?>
<?php
if (isset($_POST['updateProduct'])) {

    $productId = $_POST['pId'];
    $productId;
    $name = $_POST['product_name'];
    $category_id = $_POST['category'];
    $Volume = $_POST['Volume'];
    $Visibility = $_POST['Visibility'];
    $description = $_POST['description'];

    if ($_FILES['img']['size'] != 0) {
        $file = $_FILES['img'];
        $imageName = $file['name'];
        $fileTmpPath = $_FILES["img"]["tmp_name"];
        $fileSize = $file['size'];
        $targetDirectory = 'images/products/';
        $img_res = mysqli_query($conn, 'SELECT product_image FROM tbl_product WHERE id=' . $_POST['pId'] . '');
        $img_res_row = mysqli_fetch_assoc($img_res);

        if ($img_res_row['product_image'] != "") {
            unlink('images/products/' . $img_res_row['product_image']);
        }
        // Generate a unique name for the file to prevent overwriting
        // $newFileName = uniqid() . '_' . $imageName;
        $targetFilePath = $targetDirectory . $imageName;
        if (move_uploaded_file($fileTmpPath, $targetFilePath)) {

            $query = "UPDATE tbl_product
            SET category_id = $category_id ,
            product_name = '$name',
            product_description = '$description',
            product_image = '$targetFilePath',
            volume_id = $Volume,
            visibility_id = $Visibility
            WHERE id = $productId";

            $stmt = mysqli_query($conn, $query);

            if ($stmt) {

                echo '<script>alert("Product Detail updated!");</script>';
                echo '<script>window.location.href = "manage-product.php";</script>';
            } else {
                echo '<script>alert("Something went Wrong!");</script>';
                echo '<script>window.location.href = "manage-product.php";</script>';
            }
        }
    } else {
        echo 'no image';
        // if image not set
        $query = "UPDATE tbl_product
            SET category_id = $category_id ,
            product_name = '$name',
            product_description = '$description',
            volume_id = $Volume,
            visibility_id = $Visibility
            WHERE id = $productId";
        $stmt = mysqli_query($conn, $query);

        if ($stmt) {

            echo '<script>alert("Product Detail updated!");</script>';
            echo '<script>window.location.href = "manage-product.php";</script>';
        } else {
            echo '<script>alert("Something went Wrong!");</script>';
            echo '<script>window.location.href = "manage-product.php";</script>';
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
        <li class>
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
                <li><a href="manage-category.php">Categorys</a></li>
                <!-- <li><a href="manage-sub-category">Sub-Categorys</a></li> -->
                <li><a href="manage-product.php" class="active">Products</a></li>
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
                        <h4>Update Product</h4>
                    </div>
                    <?php
                    if (isset($_POST['update-product']) && isset($_POST['pId'])) 
                    {
                        $productId = $_POST['pId'];

                        $Select = 'SELECT tbl_product.* ,tbl_product.id as pId, 
                        tbl_categories.category_name as categoryName , 
                        tbl_volume.volume_name as volumeName,
                        tbl_product_visibility.product_status as visibilityName
                        from  tbl_product 
                        join tbl_categories on tbl_product.category_id = tbl_categories.id 
                        join tbl_volume on tbl_product.volume_id = tbl_volume.id 
                        join tbl_product_visibility on tbl_product.visibility_id = tbl_product_visibility.id 
                        WHERE tbl_product.id = "' . $productId . '"';
                        if ($result = mysqli_query($conn, $Select)) 
                        {
                            if (mysqli_num_rows($result) > 0) {
                                while ($rows = mysqli_fetch_assoc($result)) {

                                    $oldImage = $rows['product_image'];

                    ?>
                                    <!-- start form update product -->
                                    <form class="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3 row col-12">
                                            <div class="mb-3 col-lg-12">
                                                <input type="hidden" class="form-control" id="productId" aria-describedby="productId" name="pId" value="<?php echo $productId; ?>">

                                                <label for="productName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="productName" aria-describedby="product" name="product_name" value="<?php echo $rows['product_name']; ?>">
                                            </div>

                                            <div class="mb-3 col-lg-6">
                                                <label for="Category" class="form-label">Category</label>
                                                <div>
                                                    <select class="form-control" id="category" name="category">
                                                        <option disabled="" selected="">--Choose Category -- </option>
                                                        <?php
                                                        $sql = 'SELECT * FROM tbl_categories';
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result && mysqli_num_rows($result) > 0) {

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                if ($row['id'] == $rows['category_id']) {
                                                                    echo "<option  selected= '' id='" . $row['id'] . "' value='" . $row['id']  . "' name='category'>" . $row['category_name'] . "</option>";
                                                                } else
                                                                    echo "<option id='" . $row['id'] . "' value='" . $row['id']  . "' name='category'>" . $row['category_name'] . "</option>";
                                                            }
                                                        } else {
                                                            echo 'No data found.';
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 col-lg-6">
                                                <label for="Volume" class="form-label">Volume</label>
                                                <div>
                                                    <select class="form-control" id="Volume" name="Volume">
                                                        <option disabled="" selected="">--Choose Volume -- </option>
                                                        <?php
                                                        $sql = 'SELECT * FROM tbl_volume';
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result && mysqli_num_rows($result) > 0) {

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                if ($row['id'] == $rows['volume_id']) {
                                                                    echo "<option selected= '' id='" . $row['id'] . "' value='" . $row['id']  . "' name='Volume'>" . $row['volume_name'] . "</option>";
                                                                } else {
                                                                    echo "<option id='" . $row['id'] . "' value='" . $row['id']  . "' name='Volume'>" . $row['volume_name'] . "</option>";
                                                                }
                                                            }
                                                        } else {
                                                            echo 'No data found.';
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="ProductImagy" class="form-label">Image </label>
                                                <img src="images/products/<?php echo  $rows['product_image']; ?>" alt="product" height="200" width="200">
                                                <input type="file" class="form-control" id="ProductImagy" aria-describedby="image" name="img">
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label for="Visibility" class="form-label">Visibility</label>
                                                <div>
                                                    <select class="form-control dropdown" id="Visibility" name="Visibility">
                                                        <option disabled="" selected="" id="Visibility" name="Visibility">--Choose Visibility -- </option>

                                                        <?php
                                                        $sql = 'SELECT * FROM tbl_product_visibility';
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result && mysqli_num_rows($result) > 0) {

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                if ($row['id'] == $rows['visibility_id']) {
                                                                    echo "<option selected= '' id='" . $row['product_status'] . "' value='" . $row['id'] . "' name='Visibility'>" . $row['product_status'] . "</option>";
                                                                } else {
                                                                    echo "<option id='" . $row['product_status'] . "' value='" . $row['id'] . "' name='Visibility'>" . $row['product_status'] . "</option>";
                                                                }
                                                            }
                                                        } else {
                                                            echo 'No data found.';
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 col-12">
                                                <label for="Description" class="form-label">Description </label>
                                                <textarea name="description" class="form-control" rows="5" id="" style="resize: none; border-color: light;"><?php echo $rows['product_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" value="product" name="updateProduct">Submit</button>

                                    </form>
                                    <!-- end of form  -->
                    <?php
                                }
                            }
                        }
                    }else{
                        echo '<script>window.location.href = "manage-product.php";</script>';
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