-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 04:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargomoverscanada`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about us', '<h4 class=\"Font-h4\">How does Rojgar Bharat News use information about me?</h4>\r\n<p>We use information about you to deliver, improve, update and enhance the services we provide to you. For example, we use information about you to create your account, deliver our services (including websites and mobile applications), and detect and prevent fraud and abuse. Refer to our Privacy Policy for more details.</p>\r\n<h4 class=\"Font-h4\">We use the information we collect in various ways, including to:</h4>\r\n<ul>\r\n<li>Provide, operate, and maintain our Services;</li>\r\n<li>Improve, personalize, and expand our Services;</li>\r\n<li>Understand and analyze how you use our Services;</li>\r\n<li>Develop new products, services, features, and functionality;</li>\r\n<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the Service, and for marketing and promotional purposes;</li>\r\n<li>Process your transactions;</li>\r\n<li>Send you text messages and push notifications;</li>\r\n<li>Find and prevent fraud; and</li>\r\n<li>For compliance purposes, including enforcing our Terms of Service, or other legal rights, or as may be required by applicable laws and regulations or requested by any judicial process or governmental agency.</li>\r\n</ul>', '2019-06-08 05:16:49', '2019-06-07 23:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_child` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `product_slug` text COLLATE utf8mb4_unicode_ci,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `aboutauthors` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_cover` text COLLATE utf8mb4_unicode_ci,
  `publish_year` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latest` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `book_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toc` text COLLATE utf8mb4_unicode_ci,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_tag_title` text COLLATE utf8mb4_unicode_ci,
  `meta_tag_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tag_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `top` int(11) DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcatname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `shortdescription` text COLLATE utf8mb4_unicode_ci,
  `meta_tag_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tag_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(11) DEFAULT '1',
  `order_by_cat` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `top`, `category_name`, `subcatname`, `slug`, `p_id`, `image`, `homeimage`, `description`, `shortdescription`, `meta_tag_title`, `seo_keyword`, `meta_tag_description`, `meta_tag_keyword`, `isActive`, `order_by_cat`, `created_at`, `updated_at`) VALUES
(1, 1, 'services', 'services', 'services', 0, '0', NULL, NULL, 'Cargo Movers Canada offers professional moving &amp; packing services in Regina, Winnipeg, Canada with in-house trained staff. Ring us or email us today.', 'services', NULL, 'services', 'services', 1, '1', '2019-10-22 06:29:45', '2019-11-29 08:19:56'),
(2, 1, 'Moving', 'Moving Services', 'moving', 1, '/Category/thumb_57469_1575014659.png', NULL, '<h2>Moving Services You Cannot Afford To Miss</h2>\r\n<p>Moving to a new location is one of the most exciting changes, but it   is challenging as well. Being the best movers Vancouver, Cargo Movers   has got you fully covered if you are seeking services of long-distance   movers Calgary. We are shouldering your burden. And, the enormous   efforts as well as the preparation that was once your part of the job,   are now ours. Our company is based in the region of Calgary, and we   offer customers with professional commercial and residential moving   services Canada in and across the country.</p>\r\n<h3>Choosing Our Moving Services in Canada Can Be the Best Decision You Make</h3>\r\n<p>Most of the companies may employ highly efficient and knowledgeable   staffs who render moving and packing services. But, we at Cargo Movers   Canada make sure that your belongings are in the safest hands. We are   one of the premier moving companies Calgary that arrive with floor   runners, clean blankets for moving, wardrobe boxes, couch-wrap, bed   bags, tools and other types of equipment that are needed for safely   protecting the property and belongings during the move.</p>\r\n<p>Since we are professional office movers Calgary, we understand our   customer\'s values and therefore are dedicated to completing the task   bang on time. As per individual expectations, we discharge our duties   with absolute finesse. Our ability for upholding the promises has made   us one of the leading moving companies Edmonton.</p>\r\n<h3>One of the Economical and Hassle-Free Moving Companies in Calgary</h3>\r\n<p>The packing staff at our end is dependable and professional. We are   known to treat the personal belongings of our customers with respect and   sensitivity. Our professional office movers Calgary assure you an   outstanding experience of moving that is tight schedule-wise and light   budget-wise, besides peace of mind.</p>\r\n<p>Learn more about us on our storage and packing services tab.</p>\r\n<p>If you are doing your packing, expect to get further discounts on the moving services so that you can save more.</p>\r\n<h3>About Us</h3>\r\n<p>Cargo Movers began as a local enterprise in Calgary, but now we are   slowly growing to be one of the leading companies of moving. It is our   mission to provide services with attention and professionalism to every   minute detail and concern for the properties and belongings of our   customers.</p>', 'Hire the best movers for long distance &amp; offices in Vancouver, Calgary, Edmonton, Canada named as Cargo Movers for professional services &amp; effective prices.', 'Moving Services', NULL, 'Moving Services', 'Moving Services', 1, '1', '2019-10-22 06:31:20', '2019-11-29 08:21:35'),
(3, 1, 'Packing', 'Packing Services', 'packing', 1, '/Category/thumb_56216_1575014692.png', NULL, '<h2>Home Packing Services at Modest Costs in Canada</h2>\r\n<p>Cargo Movers offers one of the best packing services in Regina at   affordable prices. As a residential and commercial company of moving to   Canada, we care both for our customers and their prized possessions.</p>\r\n<p>Our home packing services Calgary keep your floor/carpet protected.   We use protection rolls made of nylon that is neoprene-covered.   Moreover, for your clothes, we offer the wardrobe boxes.</p>\r\n<p>Chairs, Couches and Love seats are wrapped in protective bags before   moving, and then they are stretch-wrapped. Also, the glasses, tabletops,   and wood-shelves are covered in the moving blankets.</p>\r\n<h3>Best Packers Services in Winnipeg</h3>\r\n<p>At Cargo Movers, we are here to pack as little or as much you require   for your business home move next. It is completely your call. Our   packing services in Regina are available even if you are not moving.   Businesses that are looking for packing assistance can stay assured that   our efficiently professional teams can get your job done while   abolishing your employee\'s downtime. Our moving teams may be through   professionals but so is our packing tea. Each of the members who are   part of the packing group has undergone extensive training. This has   helped our teams to keep your belongings secure and safe. Clothes,   dishes, pictures or specialty items, we protect each and everything   during the moving process.</p>\r\n<p>So, are leaning towards packing all your stuff by yourself? Do not   bother, because we are here to get your job done right. Superlative   Packing Techniques by Cargo Movers Canada</p>\r\n<p>Moving pads secure the furniture on mattresses and trucks while the   box springs are placed inside protective bags. Through these packing   methods, our packer\'s services in Winnipeg ensure that your beds and   furniture stay clean and protected. Worried about your mirrors and   artworks? We, place your mirrors in specially designed moving boxes.</p>', 'Home Packing &amp; Packer Services by Cargo Movers Canada makes your work easier with 100% customer satisfaction in Calgary, Winnipeg, Regina. Call us @ 1-855-206-9407.', 'Packing Services', NULL, 'Packing Services', 'Packing Services', 1, '2', '2019-10-22 06:31:58', '2019-11-29 08:22:05'),
(4, 1, 'Storage', 'Storage Services', 'storage', 1, '/Category/thumb_35183_1575014701.png', NULL, '<h2>Nominal-Cost Storage Services in Calgary</h2>\r\n<p>With Cargo Movers, you can be assured of getting matchless storage   services in Winnipeg for all types of storage demands. It does not   matter if you have commercial or residential tasks for us, because we   store everything.</p>\r\n<p>Cargo Movers presents a one-stop destination for your storage and   moving solutions. Our rates are competitive while the storage facilities   are secure and clean.</p>\r\n<h3>We Wrap and Tag Your Goods with Our Storage Services in Winnipeg</h3>\r\n<p>Whether your belongings are residential or commercial, we provide   storage services in Winnipeg for all your valuable belongings. Right   from the options of long-term storage to overnight storage facility, we   offer everything. You can sit free from stress knowing that your goods   are with us. All your belongings are meticulously wrapped and tagged to   ensure safety and protection.</p>\r\n<h3>Free Storage</h3>\r\n<p>Make the most of free storage services in Calgary with us for thirty   days, for long-distance moves and discounted storage facilities for   storage of sixty days. We do not self-store and belongings are not   accessible to the customers as we use licensed and reliable third-party   facilities of storage. But, you can be well assured that the storage   units are weather and rodent proof. You have to provide a notice prior   to the removal of goods from the storage units and this is dependent on   our availability at that given moment. Storage units may not be   climate-controlled but are gated secure facilities with high-security   video surveillance and locking systems.</p>\r\n<p>Free offer for is storage is subject to your availability: Storage   free of cost is available for a month (thirty days), and for   long-distance moves.</p>\r\n<p>Rates are discounted: a discount of up to fifty percent you can   enjoy. After ninety days, we reserve rights for hiking the rates.</p>', 'Hire the best storage services provider in Calgary, Winnipeg named as Cargo Movers Canada. Get reliable solutions for both residential and commercial goods.', 'Storage Services', NULL, 'Storage Services', 'Storage Services', 1, '3', '2019-10-22 06:32:46', '2019-11-29 08:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `display_on_header` int(2) DEFAULT NULL,
  `display_on_footer` int(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `slug`, `description`, `image`, `banner`, `meta_title`, `meta_description`, `meta_keyword`, `isActive`, `display_on_header`, `display_on_footer`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<p>Cargo Movers canada started as a local business and now we are growing as one of the leading moving companies in Calgary. Our mission is to provide our services with professionalism, attention to each and every specific detail, and concern for the safety of our customer&rsquo;s properties and belongings.</p>', '/cms/thumb_64070_1575015518.png', 'cmsbanner/1575015518.jpg', 'simply dummy text of', 'simply dummy text of', NULL, 1, 0, 1, '2019-11-29 08:20:30', '2019-11-29 02:50:30'),
(4, 'Terms & Conditions', 'terms-conditions', '<p>Edtech Press is an independent international publisher of science, technology and medicine. The company was founded by a group of publishing professionals who are dedicated to publish the best in various topical areas for the scholarly and professional communities worldwide. At Edtech Press, we believe in delivering quality content. We believe in leveraging on the latest publishing technology to deliver quality products and services for the benefit of our customers and partners. With decades of publishing experience, we understand and anticipate the needs of authors, librarians and book distribution partners, and we continuously challenge ourselves to provide the highest level of products and services.</p>', NULL, NULL, 'Edtech Press is an independent international publisher of science,', 'Edtech Press is an independent international publisher of science,', 'Edtech Press is an independent international publisher of science,', 1, 0, 1, '2019-08-13 12:47:44', '2019-08-13 12:47:44'),
(5, 'Privacy Policy', 'privacy-policy', '<p>Edtech Press is an independent international publisher of science, technology and medicine. The company was founded by a group of publishing professionals who are dedicated to publish the best in various topical areas for the scholarly and professional communities worldwide. At Edtech Press, we believe in delivering quality content. We believe in leveraging on the latest publishing technology to deliver quality products and services for the benefit of our customers and partners. With decades of publishing experience, we understand and anticipate the needs of authors, librarians and book distribution partners, and we continuously challenge ourselves to provide the highest level of products and services.</p>', NULL, NULL, 'Edtech Press is an independent international publisher of science, technology and medicine.', 'Edtech Press is an independent international publisher of science, technology and medicine.', 'Edtech Press is an independent international publisher of science, technology and medicine.', 1, 0, 1, '2019-08-13 12:48:45', '2019-08-13 12:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Amit', 'nag@gmail.com', '8745953255', 'test', '2019-05-17 23:11:32', '2019-05-17 23:11:32'),
(2, 'Himanshu', 'himanshu02877@gmail.com', '8745953255', 'test', '2019-05-17 23:20:58', '2019-05-17 23:20:58'),
(3, 'Raj', 'rajendrasharma.bca1@gmail.com', '8745953255', 'test', '2019-05-17 23:21:53', '2019-05-17 23:21:53'),
(4, 'Mohit', 'himanshu02877@gmail.com', '8745953255', 'tsdfsd sdfsdf', '2019-05-17 23:22:43', '2019-05-17 23:22:43'),
(5, 'Raj', 'himanshu02877@gmail.com', '8745953255', 'test', '2019-05-17 23:25:38', '2019-05-17 23:25:38'),
(6, 'Raj', 'nag@gmail.com', '8745953255', 'sdfsd', '2019-05-17 23:26:04', '2019-05-17 23:26:04'),
(7, 'Raj', 'nag@gmail.com', '8745953255', 'sdsadf', '2019-05-17 23:26:47', '2019-05-17 23:26:47'),
(8, 'Raj', 'nag@gmail.com', '8745953255', 'czxc', '2019-05-17 23:27:06', '2019-05-17 23:27:06'),
(9, 'Amit', 'nag@gmail.com', '8745953255', 'sdfsdf', '2019-05-25 06:51:30', '2019-05-25 06:51:30'),
(10, 'Amit', 'nag@gmail.com', '8745953255', 'sdfsdf', '2019-05-25 06:52:02', '2019-05-25 06:52:02'),
(11, 'Amit', 'nag@gmail.com', '8745953255', 'sdfsdf', '2019-05-25 06:54:43', '2019-05-25 06:54:43'),
(12, 'Amit', 'nag@gmail.com', '8745953255', 'sdfsdf', '2019-05-25 06:56:11', '2019-05-25 06:56:11'),
(13, 'Amit', 'himanshu02877@gmail.com', '8745953255', 'test', '2019-06-09 22:01:36', '2019-06-09 22:01:36'),
(14, 'Amit', 'himanshu02877@gmail.com', '8745953255', 'test', '2019-06-09 22:08:09', '2019-06-09 22:08:09'),
(15, 'Amit', 'himanshu02877@gmail.com', '8745953255', 'fdsfg', '2019-06-09 22:11:31', '2019-06-09 22:11:31'),
(16, 'Amit', 'himanshu02877@gmail.com', '8745953255', 'fdsfg', '2019-06-09 22:12:24', '2019-06-09 22:12:24'),
(17, 'Amit', 'himanshu02877@gmail.com', '8745953255', 'asdasd', '2019-06-09 22:18:42', '2019-06-09 22:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `home_clients`
--

CREATE TABLE `home_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_ep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_clients`
--

INSERT INTO `home_clients` (`id`, `slider_image`, `head_line`, `title`, `description`, `isActive`, `created_at`, `updated_at`, `price_ep`, `price_cp`, `ep_status`, `cp_status`) VALUES
(1, 'HomeClients/1575013154.png', NULL, 'Barry Tim', '<div class=\"fusion-layout-column fusion_builder_column fusion_builder_column_1_2 fusion-builder-column-2 fusion-one-half fusion-column-first fusion-blend-mode fusion-animated 1_2\" data-animationtype=\"slideInLeft\" data-animationduration=\"0.6\" data-animationoffset=\"100%\">\r\n<div class=\"fusion-column-wrapper\" data-bg-url=\"\">\r\n<div class=\"fusion-column-content-centered\">\r\n<div class=\"fusion-column-content\">\r\n<div class=\"fusion-text\">\r\n<p>&ldquo;We got the service of Cargo Movers for our moving on Aug 2018. We are extremely happy about their service. Mike and the team did a professional work. They did everything very nicely, efficiently and timely. We will hire them again if want to move. They quoted the minimum of 3 h + 1 h for transport and they did everything within 4+1 h. Thanks Guys!!!&rdquo;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"fusion-clearfix\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"fusion-layout-column fusion_builder_column fusion_builder_column_1_2 fusion-builder-column-3 fusion-one-half fusion-column-last fusion-blend-mode fusion-animated 1_2\" data-animationtype=\"slideInLeft\" data-animationduration=\"0.6\" data-animationoffset=\"100%\">&nbsp;</div>', 1, '2019-11-29 02:09:14', '2019-11-29 02:09:14', NULL, NULL, NULL, NULL),
(2, 'HomeClients/1575013170.png', NULL, 'Lisa Storey', '<div class=\"fusion-layout-column fusion_builder_column fusion_builder_column_1_2 fusion-builder-column-3 fusion-one-half fusion-column-last fusion-blend-mode fusion-animated 1_2\" data-animationtype=\"slideInLeft\" data-animationduration=\"0.6\" data-animationoffset=\"100%\">\r\n<div class=\"fusion-column-wrapper\" data-bg-url=\"\">\r\n<div class=\"fusion-column-content-centered\">\r\n<div class=\"fusion-column-content\">\r\n<div class=\"fusion-text\">\r\n<p>&ldquo;The pick up was very smooth and with ease. Unfortunately, I haven&rsquo;t heard back in regards to when my things will get to the final destination and where exactly the storage is going to be. A little more detailed communication between the movers and the client will be very helpful.&rdquo;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"fusion-clearfix\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"fusion-layout-column fusion_builder_column fusion_builder_column_1_2 fusion-builder-column-4 fusion-one-half fusion-column-first fusion-animated 1_2\" data-animationtype=\"slideInRight\" data-animationduration=\"0.6\" data-animationoffset=\"100%\">&nbsp;</div>', 1, '2019-11-29 02:09:30', '2019-11-29 02:09:30', NULL, NULL, NULL, NULL),
(3, 'HomeClients/1575013206.png', NULL, 'Leonardo H', '<p>&ldquo;I have used Cargo Movers for big office moves. They were professional, affordable, responsive, and friendly. They have been wonderful, and I would not consider using another company ever again. Highly recommend.&rdquo;</p>', 1, '2019-11-29 02:10:06', '2019-11-29 02:10:06', NULL, NULL, NULL, NULL),
(4, 'HomeClients/1575013228.png', NULL, 'Calvin Steffen', '<div class=\"fusion-layout-column fusion_builder_column fusion_builder_column_1_2 fusion-builder-column-6 fusion-one-half fusion-column-first fusion-blend-mode fusion-animated 1_2\" data-animationtype=\"slideInRight\" data-animationduration=\"0.6\" data-animationoffset=\"100%\">\r\n<div class=\"fusion-column-wrapper\" data-bg-url=\"\">\r\n<div class=\"fusion-column-content-centered\">\r\n<div class=\"fusion-column-content\">\r\n<div class=\"fusion-text\">\r\n<p>&ldquo;Absolute nightmare. I cannot stress how they do not care even remotely if you have a concern or need information of any kind (even dates, estimates, anything at all) They lost some of my furniture and basically disregarded my follow-up because it was out of the claim range. I do not want a claim. I want to know what happened to the rest of my bed! That was the whole reason I chose to use a mover instead of getting new stuff.&rdquo;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"fusion-clearfix\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"fusion-layout-column fusion_builder_column fusion_builder_column_1_2 fusion-builder-column-7 fusion-one-half fusion-column-last fusion-blend-mode fusion-animated 1_2\" data-animationtype=\"slideInLeft\" data-animationduration=\"0.6\" data-animationoffset=\"100%\">&nbsp;</div>', 1, '2019-11-29 02:10:28', '2019-11-29 02:10:28', NULL, NULL, NULL, NULL),
(5, 'HomeClients/1575013252.png', NULL, 'Kendra Santos', '<p>&ldquo;A special thank you to Cargo Movers team for always going above and beyond. Caner and his team go above and beyond, even in difficult situations they maintain a positive attitude and have helped us achieve numerous successful moves over the years. Cargo Movers will always be our first moving &amp; storage company we call to get the job done right and on time. Thanks for all the hard work you have provided to Us. Kendra Santos!&rdquo;</p>', 1, '2019-11-29 02:10:52', '2019-11-29 02:10:52', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_faqss`
--

CREATE TABLE `home_faqss` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cattype` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_ep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_faqss`
--

INSERT INTO `home_faqss` (`id`, `slider_image`, `head_line`, `title`, `cattype`, `description`, `isActive`, `created_at`, `updated_at`, `price_ep`, `price_cp`, `ep_status`, `cp_status`) VALUES
(1, NULL, NULL, 'Are you fully insured?', 1, '<p>Yes, we are fully insured.</p>', 1, '2019-10-22 06:53:41', '2019-10-22 06:57:16', NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'Do you transport plants or animals?', 2, '<p>No, we do not. It is best for you to keep plants and animals with you during your trip as we cannot guarantee the life of the plants, to be in the same condition as received and we can definitely take no animals.</p>', 1, '2019-10-22 06:56:40', '2019-10-22 06:57:40', NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'Is there an extra charge for door to door service?', 2, '<p>No, our door to door and room to room services is free of charge in order to make your pick up and delivery stress free.</p>', 1, '2019-10-22 06:59:09', '2019-11-29 02:30:36', NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'Do you offer storage services?', 2, '<p>Yes, we do offer storage services.</p>', 1, '2019-10-22 06:59:09', '2019-10-22 06:59:09', NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'Do you offer any discounts?', 2, '<p>Yes, we do. We offer Students (upon receival of student status proof), Seniors (65+ and upon receival of government issued ID), and veterans ( upon receival of government issued ID)</p>', 1, '2019-10-22 06:59:09', '2019-10-22 06:59:09', NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'Will my belongings be mixed up with other customers contents?', 2, '<p>No, at the time of pick up, the movers will put stickers on each of your items. The stickers each have a different lot number and every customer has a different colour. The movers also prepare an inventory list of your items that correspond to the tags and labels that your furniture has been marked with. A copy of the inventory list will be provided to you so that you know exactly how many pieces are being shipped.</p>', 1, '2019-10-22 06:59:09', '2019-10-22 06:59:09', NULL, NULL, NULL, NULL),
(7, NULL, NULL, 'Are your quotes no obligation?', 3, '<p>No we are very much clear and transparent with our terms and policies. We never ask for any hidden charges from our clients at any time of the moving, packing and storing of goods.</p>', 1, '2019-10-22 06:59:09', '2019-10-22 06:59:09', NULL, NULL, NULL, NULL),
(8, NULL, NULL, 'What type of payments do you accept?', 3, '<p>We accept Credit Card payments (Visa, Mastercard, or a Certified Bank Draft Cheque).</p>', 1, '2019-10-22 06:59:09', '2019-10-22 06:59:09', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_news`
--

CREATE TABLE `home_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortdescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_ep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_news`
--

INSERT INTO `home_news` (`id`, `slider_image`, `head_line`, `title`, `slug`, `shortdescription`, `description`, `isActive`, `created_at`, `updated_at`, `price_ep`, `price_cp`, `ep_status`, `cp_status`) VALUES
(1, 'HomeNews/1569318305.jpg', NULL, 'Sed ut perspiciatis unde omnis', 'Sed-ut-perspiciatis-unde-omnis', '<p>The only thing bad about the place was the time they .took to provide us with our food</p>', '<p>The only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with</p>\r\n<p>our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our foodThe only thing bad about the place was the time they .took to provide us with our food</p>', 1, '2019-09-23 06:34:54', '2019-11-02 09:35:44', NULL, NULL, NULL, NULL),
(2, 'HomeNews/1569318305.jpg', NULL, 'Sed ut perspiciatis unde omnis', 'Sed-ut-perspiciatis-unde-omnis2', '<p>The only thing bad about the place was the time they .took to provide us with our food</p>', '<h4 data-fontsize=\"20\" data-lineheight=\"30\"><strong>Cargo Movers</strong></h4>\r\n<p>We understand that change can be a very stressful whether its moving with in the city, or across the province. Let us help you with this major life transition. Cargo Movers is a professional, reliable and, cost efficient moving and storage company based in Calgary AB, available for both your local or across the country move. Our movers and staff in the company bring over 30 years of experience and skills to the table. In addition to our&nbsp;<a href=\"category-list/services/moving\">moving services in Canada</a>, we offer packing, unpacking and storage locations in Richmond, Toronto, and Calgary so that your belongings will be safe while we help you move.</p>\r\n<h4 data-fontsize=\"20\" data-lineheight=\"30\"><strong>Commitment</strong></h4>\r\n<p>Cargo Movers is committed to offering quality services at a cost-efficient price, so that your move does not cost you a fortune! Our&nbsp;<a href=\"category-list/services/moving\">best movers in Vancouver</a>&nbsp;are dedicated, and promise to work quickly, with quality and carefully ensuring that your cherished belongings get to your new destination in the same condition that they had left. We appreciate the trust that you give us, to not just relocate your furniture, but as well as memories, family histories, and as well as other precious invaluable contents. For Calgary movers that you can count on,&nbsp;<a href=\"../../../../../../../../contactus/\">contact</a>&nbsp;us today to get a quote for your move!</p>\r\n<h4 data-fontsize=\"20\" data-lineheight=\"30\"><strong>Our Long-Distance Move&rsquo;s</strong></h4>\r\n<p>Cargo Movers is more experienced to meet all your long distance moving needs! The cost of your move will be based on the total weight of your household goods (in pounds) and the exact location of your move (City). We, as&nbsp;<a href=\"https://cargomoverscanada.com/moving-services/\">long distance movers in Calgary</a>&nbsp;and other areas also offer our packing, unpacking and storage moves with this moving service, at extra affordable rates!</p>\r\n<p>When letting us assist you with your move, you can rest assured that your move will be done by professional movers who are committed to protecting your belongings from damage. Our trucks are equipped with secure equipment&rsquo;s to make your move more quicker and safer.</p>\r\n<p>Cargo Movers is proudly offering 4-6 weeks of FREE storage with any long-distance move, and having no extra charges for the following:</p>\r\n<ul>\r\n<li>Pickup and delivery</li>\r\n<li>Door to Door and Room to Room Services</li>\r\n<li>Loading and Unloading</li>\r\n<li>Holidays or Weekend moves</li>\r\n<li>Fuel Surcharge</li>\r\n</ul>\r\n<p>Please do not hesitate to ask us about any of our services mentioned above, or any other services that we may be providing during our promotional times!</p>\r\n<h4 data-fontsize=\"20\" data-lineheight=\"30\"><strong>Our Local Move&rsquo;s</strong></h4>\r\n<p>With Cargo Movers, relocation has never been easier and more cost effective. Our drivers and movers will do everything they can to make sure your move goes as smoothly, quickly and efficiently as possible. If you&rsquo;re moving within Calgary, it&rsquo;s considered a local move and we&rsquo;re happy to offer free estimates right in the comfort of your own home. Just schedule an appointment for an estimate, and then, when the time comes for your big move, you&rsquo;ll have a fully equipped truck and a moving team to make your transition that much easier. Estimates are not done for local moves, only long distance moves from Calgary</p>\r\n<p>Cargo Movers provides packing and unpacking services at your request for a great deal! Our professional movers always take care of your household goods while loading, unloading, packing or unpacking. Our movers also arrive with following materials, available at an affordable price if needed or requested for your move.</p>\r\n<ul>\r\n<li>2 Cu Ft Boxes</li>\r\n<li>4 Cu Ft Boxes</li>\r\n<li>5 Cu Ft Boxes</li>\r\n<li>Picture frame boxes</li>\r\n<li>China Boxes</li>\r\n<li>Wardrobe Boxes</li>\r\n<li>Packing Paper</li>\r\n<li>Packing Tape</li>\r\n<li>Bubble Wrap</li>\r\n<li>Flat TV Boxes</li>\r\n<li>Mattress Covers</li>\r\n<li>Sofa Covers</li>\r\n</ul>\r\n<p>We promise to ensure that your precious contents are safe during your big move, locally and across the country. Even without our full or partial packing options, we will still use our heavy duty moving blankets for extra wrapping. This way we can deliver everything in the same conditions as received.</p>\r\n<p>Learn more about our&nbsp;<a href=\"../../../../../../../../category-list/services/packing\">Packing</a>,&nbsp;<a href=\"../../../../../../../../category-list/services/moving\">Moving</a>&nbsp;and&nbsp;<a href=\"../../../../../../../../category-list/services/storage\">Storage</a>&nbsp;services.</p>', 1, '2019-09-23 06:34:54', '2019-11-29 02:25:02', NULL, NULL, NULL, NULL),
(3, 'HomeNews/1569318305.jpg', NULL, 'OUTSTANDING QUALITY', 'Sed-ut-perspiciatis-unde-omni3', '<p>Packing is something EVERYONE dreads when moving. You&rsquo;re distracted by things you find from years ago,</p>', '<p>Packing is something EVERYONE dreads when moving. You&rsquo;re distracted by things you find from years ago, it is too much work and too little time, or you just simply wish you did not have to do it yourself. What is important is, that when you are packing you are not wasting too much time on things that you don&rsquo;t need, so while moving is such a hassle and a pain, the good thing is that you can get a little &ldquo;spring&rdquo; cleaning out of it too! Here are some tips on how you can turn your old into gold!</p>\r\n<p>Like all things in life, its important to plan your move ahead of time. This means, booking your move early and making sure you get a good deal for being an early bird! This way you are ensuring you have enough time to get rid of somethings that you don&rsquo;t really need. The easiest way to do this, is either set up a fun garage sale or post an add on Kijiji.</p>\r\n<p><strong>Tips for a Successful Garage Sale:</strong></p>\r\n<p>Although garage sales seem like they are a lot of work, but they can get easier when you take the time to plan them, which is why it is important to plan your move ahead of time. This way everything isn&rsquo;t scrambled together on your move date. Things to keep in mind for planning your garage sale are the following:</p>\r\n<ul>\r\n<li>Timing</li>\r\n<li>Organization</li>\r\n<li>Getting the word out</li>\r\n<li>Gathering Supplies</li>\r\n<li>Sorting and Setting Prices</li>\r\n<li>Sell!</li>\r\n<li>Plan B</li>\r\n</ul>\r\n<p><strong>Timing</strong></p>\r\n<p>Have you ever seen a garage sale during the winter? &ndash; No. Unless you are living where the sun is beautifully shining everyday. But if you live where most of us Canadians live, and experience our awesome winters, then there is a reason winter garage sale aren&rsquo;t common. It&rsquo;s always about timing, and late Spring to early Fall is the ideal time of year for a successful garage sale. As for the days of the week, you can have better luck during holidays, long weekends, and regular weekends that start from Fridays to Sundays. Both Saturday and Sundays are good options. If you schedule it on a Saturday, you have the option to extend it to Sunday if things don&rsquo;t sell as quickly a you expect. If you are occupied during the weekends and are wishing for a weekday sale, then aim for a late afternoon period where most people are not at work and can enjoy your merchandise!</p>\r\n<p><strong>Organization</strong></p>\r\n<p>Now that you have an idea for your date, lets talk about what you will actually sell. You can think of this process as your pre-move organization. Grab a container or box and go through your home, one room at a time. As you go through your things, think about how often you use each item, and or how you use it. If you haven&rsquo;t used it in months (or even years!) then its time to toss it. While you&rsquo;re bound to come across a few things that you will need to toss, there is a great chance that you can get some value from it before its completely gone from your possession. People will buy just about anything from old electronics and clothing to furniture and trinkets. You can always donate or recycle anything that doesn&rsquo;t end up selling.</p>\r\n<p><strong>Getting the Word Out</strong></p>\r\n<p>The next step is to let the neighborhood know what you&rsquo;re up to! Most people make signs to post around the community. While doing so is great it is important to include all the significant details like where it is, the date, hours, and include a short and general list of some items you will have for sale. This helps people decide if your sale is interesting enough for a visit. This is also a good time to make some on-site- signs. These can be larger in size to catch the attention of people passing by and making it easier for them to find your sale!</p>\r\n<p>As we now are so involved with technology, you can also create an online add, post on Facebook (asking friends and family to share it). Social media is especially great for spreading the word.</p>\r\n<p><strong>Gathering Supplies</strong></p>\r\n<p>It is important to display all your merchandise properly. Gather up any portable tables and lawn chairs that you can use to set up your sale. If you are selling a lot of clothes, you can use or borrow a garment rack to hang them on. You will also need some price stickers, tags, or tape in order to attach the prices to your contents.</p>\r\n<p>You should also ensure there is cash with you so that you can give change back to your customers. It&rsquo;s a good idea to have a mix of smaller bills and coins ready on hand. Going to the bank a day before the sale can be helpful to avoid any last-minute chaos.</p>\r\n<p><strong>Sorting and Setting Prices</strong></p>\r\n<p>Sorting out your items in categories can help your organization process run smoothly. Its easiest to group items like clothes and shoes together, and kitchen goods and electronics together. Once you have grouped them, you can start pricing your items, but try not to over price them considering that they are used, and your merchandise is not in an actual market. Keep in mind people like to negotiate, and you need to be realistic about how much people would actually pay.</p>\r\n<p><strong>SELL SELL SELL!</strong></p>\r\n<p>As mentioned, people always like to bargain at events such as yard sales and garage sales. Just expect it to happen. Remember, the goal is to make it easier for you to get rid of the things you don&rsquo;t want or need to take with you, so don&rsquo;t get hung up on price. Consider how much of a hassle it would if you gave to get rid of it yourself &ndash; and that too, without a value. So, it might be worth it to accept a lower offer just to get it off of your hands.</p>\r\n<p><strong>Plan B</strong></p>\r\n<p>Truthfully, you will probably end up with a few things that wont sell. You should always have a PLAN B. You can take a picture of those that didn&rsquo;t sell, and offer your price for them on Kijiji, and if they don&rsquo;t sell there you can donate it to a charity. But remember, only do so if you have a lot of time on your hands. If time is not your best friend in this scenario, then its best to just drive straight to the closest Good Will or Value Village near you.</p>\r\n<p>We hope this Blog turned some of your old into gold. If you&rsquo;re an early bird also searching for a quote, click here to get a free quote now.</p>', 1, '2019-09-23 06:34:54', '2019-11-29 02:16:32', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_ep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ep_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mess` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PageImage/page_default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `mess`, `page_slug`, `page_description`, `page_image`, `created_at`, `updated_at`) VALUES
(1, 'Himanshu', 'Raj', 'aims', 'I am help for poor family', 'PageImage/1549168916.jpg', NULL, '2019-02-02 23:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('himanshu02877@gmail.com', '$2y$10$ROE3f26ymlPcxk.JwWvadOZWxvxPNINnlscK0vrOAX2MI7hUCDeF.', '2019-06-09 22:30:02'),
('himanshu@biddr.com', '$2y$10$7qP7DOwPCkWS35HxhNgdB.VTQtCh3abHSnZ170JzbV93hP9Ud0J6C', '2019-06-09 22:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `related_books`
--

CREATE TABLE `related_books` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `related_book_id` int(11) NOT NULL,
  `related_book_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `title`, `description`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'HomeSlider/1549163496.jpg', 'fsdfsdf sdfsdfsdfsdfdfsdf', '<p>sdfsdfsdfsdfsdfsdfsdf</p>', 1, '2019-02-02 21:41:36', '2019-04-16 12:43:46'),
(2, 'HomeSlider/1549163518.jpg', NULL, NULL, 0, '2019-02-02 21:41:58', '2019-02-02 21:41:58'),
(3, 'HomeSlider/1555245274.jpeg', 'Nice twinkling', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam rutrum nunc sit amet pretium. Vivamus consectetur vestibulum nulla. Aenean nec molestie lorem, at luctus arcu. In fermentum, lorem id varius lacinia, erat metus semper tortor, id bibendum quam augue at est. Nulla facilisi. Sed tempus id magna ut rhoncus. Cras sed mauris porta, accumsan dui non, varius purus.</p>\r\n<p>Donec ullamcorper magna id ligula mattis, non ornare urna mollis. Mauris auctor condimentum dictum. Proin vehicula bibendum hendrerit. Phasellus condimentum lorem vitae consequat venenatis. Praesent pretium, elit in feugiat blandit, lacus ligula auctor dui, in mattis nisi massa at neque. Fusce arcu felis, porta sed facilisis non, elementum et felis. Pellentesque fringilla diam sed urna venenatis, ac suscipit purus ullamcorper. In hac habitasse platea dictumst. Curabitur vulputate fermentum sodales. Phasellus vitae rutrum dui.</p>', 1, '2019-04-13 23:32:29', '2019-04-16 12:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UserImage/user-default.jpg',
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_of_allow_user` int(11) DEFAULT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `randompass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_number`, `address`, `role_id`, `user_image`, `institute_name`, `subject`, `num_of_allow_user`, `institute_id`, `isActive`, `email_verified_at`, `password`, `randompass`, `remember_token`, `created_at`, `updated_at`, `ip_address`, `admin_id`) VALUES
(3, 'Admin', 'admin@gmail.com', '8745953255', NULL, 1, 'UserImage/user-default.jpg', '2', NULL, 0, NULL, 1, NULL, '$2y$10$d8lQqIXlpv8kdQ4ALjXh6u2QOKi2kXoqRzsUF6qWdhE6IbWHjQsvu', NULL, 'PyLts8KNooef05A21IXn17r13IBphmVOg7ADFaQLbryYky6BDRhzf0w6LMxX', '2019-05-24 22:36:51', '2019-05-25 06:38:02', NULL, NULL),
(36, 'test', 'sagar@gmail.com', '87456666', 'New Delhi', 2, 'UserImage/user-default.jpg', 'National Academy Of Agriculture Science1', NULL, 123, NULL, 1, NULL, '$2y$10$CFnDy97nEKb..1PIXNRB1ebq6XHG6tQyN5KH3OvE9QOKdkSnrdJES', NULL, 'aWZ2rSJ6n8Lg34Yn7Rse5cmcsQTPPEdvIRNDFpJfE7xePEtTbRilGDQt476e', '2019-07-02 04:36:29', '2019-07-16 06:57:09', NULL, NULL),
(37, 'loknath', 'loknath@siplind.com', '9711248040', '4850/24', 2, 'UserImage/user-default.jpg', 'loknath institute', NULL, 10000, NULL, 1, NULL, '$2y$10$S9n5Vpl1y8EpGFjur8Yo2uvUXOop0dXCgOwlP.EkmBDd8tX6mcBde', NULL, NULL, '2019-07-04 06:09:48', '2019-08-02 07:48:25', NULL, NULL),
(59, 'Himanshu kumar', 'admsdfsfisdfsdn@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, 'History', NULL, 36, 1, NULL, '$2y$10$6wqX.NiOFnLVKV76ujOcxeUiQ0QwrEPO3n9osGgRZM42JR42ZuLVK', NULL, NULL, '2019-07-19 01:14:24', '2019-07-19 01:14:24', NULL, NULL),
(62, 'Rajiv', 'rajiv@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, NULL, NULL, 36, 1, NULL, '$2y$10$xqPxEJBrdxG9rc8RQPC.n.ZUpuDPYxkH8OIfxm7sMkpVvclw9qbWW', NULL, NULL, '2019-07-19 01:19:05', '2019-07-19 01:19:05', NULL, NULL),
(63, 'Himanshu kumar12', 'ff@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, 'History', NULL, 36, 1, NULL, '$2y$10$ahbd.x8eyWVCnY64lji08.yx0IpTggazCjYIHI/cwcdY6hvOuBRY2', NULL, 'GXkbhWGlwUpC2fnAmXtNaDro52yW4aRgSElr2OnV5UeJdEbPNb2j1bpqcmNt', '2019-07-19 01:27:29', '2019-07-19 02:53:55', NULL, NULL),
(65, 'pawan', 'pawan@siplind.com', '9800098099', NULL, 3, 'UserImage/user-default.jpg', NULL, 'MEDICAL', NULL, 36, 1, NULL, '$2y$10$tTmC0fCYeJeJzSgn69jcA.GSjDqmi3MeNjteRrkswZMdipuhnUyZa', NULL, NULL, '2019-07-22 09:33:18', '2019-07-22 09:33:18', NULL, NULL),
(66, 'Tapesh singh', 'tapesh@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, 'Test', NULL, 36, 1, NULL, '$2y$10$.FBVrX0x5fjElfRXQ3T8r.f/NGPoiAGi6Kir826w00kDvyaJhgYny', NULL, 'cJ27t22VP64CA6FlJpKZ3GHwfja20of9kVOVzHgC79erRidWmw542PTDquEr', '2019-07-25 06:35:43', '2019-07-25 06:35:43', NULL, NULL),
(67, 'account', 'accounts@siplind.com', '9711218040', 'dfafa', 3, 'UserImage/user-default.jpg', NULL, 'medical', NULL, 36, 1, NULL, '$2y$10$6VsR8Dznnu3qUNdWCH017uLqyF1HYweko2qxD0XYkI61fLrF9Xw/i', NULL, 'YELRcAYlUEjatcku2033pSKa9aP85dCiVJrE4JmgROUSMMY5Hi1zmflQH66B', '2019-07-26 11:37:02', '2019-07-26 11:37:02', NULL, NULL),
(68, 'raj', 'raj@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, 'history', NULL, 36, 1, NULL, '$2y$10$M.6ZrnSAeE2.A.54UwTGCOh/w0NsqrGVxEpvjDQT56rI.hGrVOZW.', NULL, 'v139onfWmIdJUMbiGUrjhzYVnOeUJZFpmbm2ZfU20aWw0XxdRQv0QIwyxgJb', '2019-08-01 10:26:10', '2019-08-01 10:26:10', NULL, NULL),
(69, 'Himanshu Kumasr', 'ramesh@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, NULL, NULL, 36, 1, NULL, '$2y$10$3dZk079z5E28qBG6KDc6NuIxHSR3ibu9qv/kg618/pt2LkekY5vxC', NULL, NULL, '2019-08-01 10:32:07', '2019-08-24 06:16:57', NULL, NULL),
(70, 'ram', 'ram@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$9rFaXkrGdvhVb6QoBo.6nep/yMACQmcyEydINarpKFxB.ioXx2mTa', 'dmMn5qq5ohNMqxDR', 'MDvtcn5TJsyRX7e08iB3ZDXlKEfy4hRc41oOBmLpSQaY3vIkWGI7KPAKob4g', '2019-08-16 10:46:57', '2019-08-23 09:32:17', NULL, 3),
(71, 'Sahil', 'sahil@gmail.com', '8745953255', 'New Delhi', 3, 'UserImage/user-default.jpg', NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$TnxQTbdsg5jN53TouQ4kXOonLqPc1Fkhdup0u7MgHdt.aOosVqWuy', 'dmMn5qq5ohNMqxDR', NULL, '2019-08-23 09:32:17', '2019-08-23 09:32:17', NULL, 3),
(72, 'sipl', 'info@edtechpress.co.uk', '9711248040', 'New Delhi', 2, 'UserImage/user-default.jpg', 'education institue college', NULL, 123, NULL, 1, NULL, '$2y$10$7vJySsJnHlChiOZhF2PZ.eGQIjwPPszcm4WbeOxVAixH2dnuOZxTi', 'rdYwSBgrUxE9uqDv', NULL, '2019-08-29 11:21:17', '2019-08-29 11:21:17', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_clients`
--
ALTER TABLE `home_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_faqss`
--
ALTER TABLE `home_faqss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_news`
--
ALTER TABLE `home_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `related_books`
--
ALTER TABLE `related_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home_clients`
--
ALTER TABLE `home_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_faqss`
--
ALTER TABLE `home_faqss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_news`
--
ALTER TABLE `home_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `related_books`
--
ALTER TABLE `related_books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
