-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 03:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trade_b2b`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagevisibility`
--

CREATE TABLE `pagevisibility` (
  `id` int(11) UNSIGNED NOT NULL,
  `page_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagevisibility`
--

INSERT INTO `pagevisibility` (`id`, `page_name`, `page_link`, `visibility`, `create_at`, `update_at`) VALUES
(1, ' index', ' index.php', 1, '2023-07-24 08:40:37', '2023-07-24 09:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `small_title` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt_tag` varchar(1000) NOT NULL,
  `description` mediumtext NOT NULL,
  `mission_title` varchar(100) NOT NULL,
  `mission_image` varchar(200) NOT NULL,
  `mission_description` varchar(500) NOT NULL,
  `vission_title` varchar(100) NOT NULL,
  `vission_image` varchar(200) NOT NULL,
  `vission_description` varchar(500) NOT NULL,
  `goals_title` varchar(100) NOT NULL,
  `goals_image` varchar(200) NOT NULL,
  `goals_description` varchar(500) NOT NULL,
  `map_image` varchar(300) NOT NULL,
  `map_title` varchar(300) NOT NULL,
  `map_description` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `title`, `small_title`, `image`, `alt_tag`, `description`, `mission_title`, `mission_image`, `mission_description`, `vission_title`, `vission_image`, `vission_description`, `goals_title`, `goals_image`, `goals_description`, `map_image`, `map_title`, `map_description`) VALUES
(1, 'About Prestress Steel LLP', '<span>27</span><p>Years<br/>Experience<br/>Working</p>', 'Aboutus-6050_Untitled-2.png', '', '<p>Prestress Steel LLP (Formerly Known as Prestress Wire Industries) started our business in 1994 at Silvassa , is a pioneer in manufacturing of HTGS wire and Prestressed Concrete Wires.We are a proud member of the GITA group which has diversified business across India at 30 locations.</p>\r\n<p>It is one of the largest manufacturers of high tensile galvanized (Hot Dipped Galvanized) steel wires with a vast range of tensile strength and zinc coating. It also manufactures prestressed concrete wires for various cement and concrete products like concrete poles, HUME pipes, railway sleepers and many more pre casted cement products.</p>\r\n<p>The company was started by Late Shri Rajendra Ji Gilada in 1994. The first factory was started in Silvassa. And now it is having 4 factories (2 in Silvassa, UT of Dadra &amp; Nagar Haveli, 1 is in Uttarakhand and 1 in Karnataka).</p>\r\n<p><span style=\"font-weight: 400;\">PSLLP has a processing capacity of 70000MT/annum. The company is being promoted &amp; lead by Mr. Samapat JI Gilada (Managing Director) in whose patronage it achieved a turnover of 480 crores (Approx) in Fy21-22.</span>&nbsp;</p>', 'Mission', 'Mission-3863_mission-removebg-preview.png', '<p>Our mission is to create value for all stakeholders, grow through innovation while leading good governance practices, and to use Sustainability to drive product development and enhance operational efficiencies.</p>', 'Vision', 'Vision-99629_14dcf2e24c050acc1880f06f697e490a-removebg-preview.png', '<p>Through sustainable measures, we intend to create value for the nation, enhance quality of life across the socio-economic spectrum, and aspire to be one of the global leaders in the domains where we operate.</p>', 'Goals', 'Goals-78097_achievement-icon-25.jpeg', '<p>Our goal is to develop and maintain a bond and trust with our Channel Partners and focus on continuous evolution for the long-term sustainability of the company by focusing on the strengths to deliver the promises we make.</p>', 'Aboutus-95059_newmapace.png', 'Global Footprints', '<ul class=\"list-style-one\">\r\n<li>INDIA</li>\r\n<li>AUSTRALIA</li>\r\n<li>UAE</li>\r\n<li>LONDON</li>\r\n<li>OMAN</li>\r\n<li>EUROPE</li>\r\n<li>CANADA</li>\r\n<li>MIDDLE EAST</li>\r\n<li>MANY MORE</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `small_title` varchar(300) DEFAULT NULL,
  `banner_name` varchar(255) DEFAULT NULL,
  `alt_tag` varchar(1000) DEFAULT NULL,
  `banner_desc` varchar(5000) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `btn_name` varchar(500) DEFAULT NULL,
  `btn_link` varchar(500) DEFAULT NULL,
  `position_order` int(250) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `blog_title` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category_name`, `category_image`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Mild Steel', 'mildsteel.png', 1, '2023-06-21 07:31:15', '2023-07-24 10:40:00'),
(2, 'stainless steel', 'stainlesssteel.jpg', 1, '2023-07-17 04:19:27', '2023-07-24 10:30:07'),
(3, 'Oil Seeds & Feed', 'oil&seeds.png', 1, '2023-07-24 12:19:58', '2023-07-24 12:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `phone1` int(10) DEFAULT NULL,
  `whatsapp_no` int(10) DEFAULT NULL,
  `google_map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `address`, `address1`, `email`, `email1`, `phone`, `phone1`, `whatsapp_no`, `google_map`, `description`, `title`) VALUES
(1, '280 Granite Run Drive Suite 200 Lancaster, PA 1760', '', 'trading@gmail.com', '', 1234567890, NULL, 1234567890, '', 'any description', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(190) NOT NULL,
  `email_id` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` int(10) UNSIGNED NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gst_number` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `email_id`, `password`, `phone_no`, `country`, `state`, `city`, `address`, `company_name`, `gst_number`, `created_at`, `updated_at`) VALUES
(1, 'Yash vali', 'yash@gamil.com', '123', 1234567890, 'India', 'GUJARAT', 'vapi', 'chala v2 signature', 'shahConstruction', '232dcsrcs432', '2023-06-27 04:48:05', '2023-07-25 11:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dept`
--

INSERT INTO `tbl_dept` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administration', '2023-06-14 09:31:43', NULL),
(2, 'Regesteration', '2023-06-19 13:27:25', '2023-06-20 10:04:25'),
(3, 'telcommunication', '2023-06-19 13:49:13', '2023-06-20 10:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_status`
--

CREATE TABLE `tbl_emp_status` (
  `id` int(11) UNSIGNED NOT NULL,
  `emp_status` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_emp_status`
--

INSERT INTO `tbl_emp_status` (`id`, `emp_status`) VALUES
(1, 'Active'),
(2, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs_customer`
--

CREATE TABLE `tbl_faqs_customer` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs_supplier`
--

CREATE TABLE `tbl_faqs_supplier` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_setting`
--

CREATE TABLE `tbl_footer_setting` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us_des` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_footer_setting`
--

INSERT INTO `tbl_footer_setting` (`id`, `name`, `logo`, `alt_tag`, `about_us_des`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`, `create_at`, `update_at`) VALUES
(1, 'Trading', 'Logo-11981_logo.jpg', 'logo', 'Duty the obligations of business will frequently occur that pleasure have too repudiated annoyances endures accepted.', '', '', '', '', '2023-07-01 09:01:28', '2023-07-24 07:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `id` int(11) UNSIGNED NOT NULL,
  `autogenrated_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `volume_name` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `inquiry_status_id` int(11) NOT NULL,
  `emp_assign_id` int(11) UNSIGNED DEFAULT NULL,
  `supplier_assign_id` int(11) UNSIGNED DEFAULT NULL,
  `Quotation_pdf` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`id`, `autogenrated_id`, `customer_id`, `product_id`, `quantity`, `volume_name`, `inquiry_status_id`, `emp_assign_id`, `supplier_assign_id`, `Quotation_pdf`, `created_at`, `updated_at`) VALUES
(2, '@mqr(5', 1, 1, 12, 'Kg', 1, 5, 1, 'images/quotation/coated-coils.png', '2023-06-28 13:02:25', '2023-06-29 07:25:25'),
(3, 'fz@+fr', 1, 1, 12, 'Kg', 2, 5, 1, NULL, '2023-06-28 13:11:56', '2023-06-29 09:01:55'),
(4, 'oI7AtnKyew^p', 1, 2, 12, 'MT', 2, 3, 2, NULL, '2023-06-29 06:32:10', '2023-06-29 08:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry_status`
--

CREATE TABLE `tbl_inquiry_status` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inquiry_status`
--

INSERT INTO `tbl_inquiry_status` (`id`, `status`) VALUES
(1, 'pending'),
(2, 'processing'),
(3, 'Done'),
(4, 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(11) UNSIGNED NOT NULL,
  `favicon_logo` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_alt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_logo` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_alt` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_alt` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `favicon_logo`, `fav_alt`, `header_logo`, `header_alt`, `footer_logo`, `footer_alt`, `created_at`, `updated_at`) VALUES
(1, 'Logo-59580_Logo-11981_logo.jpg', 'favicon', 'Logo-11981_logo.jpg', 'header icon', 'Logo-11981_logo.jpg', 'footer icon', '2023-07-04 04:46:47', '2023-07-04 08:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `sub_category_id` int(11) UNSIGNED DEFAULT NULL,
  `product_name` varchar(201) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_id` int(11) UNSIGNED NOT NULL,
  `visibility_id` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `add-to-cart` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category_id`, `sub_category_id`, `product_name`, `product_description`, `product_image`, `volume_id`, `visibility_id`, `created_at`, `updated_at`, `add-to-cart`) VALUES
(1, 1, NULL, 'Coated Coils', 'coated coils of mild steel.', 'coated-coils.png', 5, 1, '2023-06-23 07:17:10', '2023-07-24 12:19:45', 1),
(2, 1, NULL, 'silver blade', 'silver blade\r\n', 'coated-coils.png', 9, 1, '2023-06-29 06:27:44', '2023-07-17 06:50:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_visibility`
--

CREATE TABLE `tbl_product_visibility` (
  `id` int(11) NOT NULL,
  `product_status` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product_visibility`
--

INSERT INTO `tbl_product_visibility` (`id`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'Visible', '2023-06-23 05:41:02', NULL),
(2, 'Invisible', '2023-06-23 05:41:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 1, '2023-06-15 06:00:07', NULL),
(2, 'Admin', 1, '2023-06-20 10:05:54', '2023-06-20 10:43:26'),
(3, 'Caller ', 3, '2023-06-28 04:20:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_categories`
--

CREATE TABLE `tbl_sub_categories` (
  `id` int(11) UNSIGNED DEFAULT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_image` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int(10) NOT NULL,
  `whatsapp_no` int(10) NOT NULL,
  `address` text NOT NULL,
  `gst_number` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `company_name`, `email`, `phone_no`, `whatsapp_no`, `address`, `gst_number`, `description`, `file_pdf`, `status_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rnd steels', 'rdnsteels@gmail.com', 1234567890, 1234567890, 'vapi chala gujarat', '232dcsrcs432', 'one of best steel producer', NULL, 1, 123, '2023-06-26 04:01:50', '2023-07-18 06:07:57'),
(2, 'Shiv steels', 'shivsteels@gmail.com', 1234567891, 1234567891, 'vapi chala gujarat', '232dcsrcs431', ' steel producer in vapi', NULL, 1, 123, '2023-06-26 04:02:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_items`
--

CREATE TABLE `tbl_supplier_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `supplier_id` int(11) UNSIGNED NOT NULL,
  `category` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_products`
--

CREATE TABLE `tbl_supplier_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `supplier_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_description` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_status`
--

CREATE TABLE `tbl_supplier_status` (
  `id` int(11) UNSIGNED NOT NULL,
  `supplier_status` varchar(101) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_supplier_status`
--

INSERT INTO `tbl_supplier_status` (`id`, `supplier_status`) VALUES
(1, 'Active'),
(2, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept_id` int(11) UNSIGNED NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `description` text NOT NULL,
  `emp_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `dept_id`, `role_id`, `mobile_no`, `description`, `emp_status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123', 1, 2, 1234567891, '', 1, '2023-06-15 06:39:33', '2023-07-04 16:05:07'),
(2, 'Ravi shah', 'ravi@gmail.com', '123', 1, 2, 1234567891, 'To manage all task.', 1, '2023-06-17 07:30:56', '2023-07-03 09:49:24'),
(3, 'Yash', 'test@gmail.com', '123', 1, 2, 1234567891, 'tester', 1, '2023-06-26 04:13:42', NULL),
(5, 'Veer', 'veer@gmail.com', '123', 3, 3, 1234567892, 'To make call and ask for quatation.', 1, '2023-06-28 09:30:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volume`
--

CREATE TABLE `tbl_volume` (
  `id` int(11) UNSIGNED NOT NULL,
  `volume_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_volume`
--

INSERT INTO `tbl_volume` (`id`, `volume_name`, `created_at`, `updated_at`) VALUES
(1, 'Kg', '2023-06-23 05:06:12', NULL),
(2, 'MT', '2023-06-23 05:06:12', NULL),
(3, 'Nos', '2023-06-23 05:06:12', NULL),
(4, 'Ltr', '2023-06-23 05:06:12', NULL),
(5, 'Kg MT', '2023-06-23 05:06:12', NULL),
(6, 'Kg MT Ltr Nos', '2023-06-23 05:06:12', NULL),
(7, ' Kg Nos', '2023-06-23 05:06:12', NULL),
(8, 'Ltr Kg MT', '2023-06-23 05:06:12', NULL),
(9, 'Nos MT Tin Kg', '2023-06-23 05:06:12', NULL),
(10, 'Ltr Nos', '2023-06-23 05:06:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagevisibility`
--
ALTER TABLE `pagevisibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_emp_status`
--
ALTER TABLE `tbl_emp_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faqs_customer`
--
ALTER TABLE `tbl_faqs_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faqs_supplier`
--
ALTER TABLE `tbl_faqs_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer_setting`
--
ALTER TABLE `tbl_footer_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inquiry_status`
--
ALTER TABLE `tbl_inquiry_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_visibility`
--
ALTER TABLE `tbl_product_visibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_deptcn` (`dept_id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier_items`
--
ALTER TABLE `tbl_supplier_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier_products`
--
ALTER TABLE `tbl_supplier_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier_status`
--
ALTER TABLE `tbl_supplier_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_dept` (`dept_id`),
  ADD KEY `emp_role` (`role_id`);

--
-- Indexes for table `tbl_volume`
--
ALTER TABLE `tbl_volume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagevisibility`
--
ALTER TABLE `pagevisibility`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_emp_status`
--
ALTER TABLE `tbl_emp_status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_faqs_customer`
--
ALTER TABLE `tbl_faqs_customer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faqs_supplier`
--
ALTER TABLE `tbl_faqs_supplier`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_footer_setting`
--
ALTER TABLE `tbl_footer_setting`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_inquiry_status`
--
ALTER TABLE `tbl_inquiry_status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product_visibility`
--
ALTER TABLE `tbl_product_visibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_supplier_items`
--
ALTER TABLE `tbl_supplier_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_supplier_products`
--
ALTER TABLE `tbl_supplier_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_supplier_status`
--
ALTER TABLE `tbl_supplier_status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_volume`
--
ALTER TABLE `tbl_volume`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD CONSTRAINT `role_deptcn` FOREIGN KEY (`dept_id`) REFERENCES `tbl_dept` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `emp_dept` FOREIGN KEY (`dept_id`) REFERENCES `tbl_dept` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emp_role` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
