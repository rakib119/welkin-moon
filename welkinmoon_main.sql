-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2022 at 03:04 AM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welkinmoon_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `user_id`, `details`, `father_details`, `mother_details`, `created_at`, `updated_at`) VALUES
(1, 2, 'a:46:{s:6:\"_token\";s:40:\"muivM6mFMfptWcAwcg05sGQHGjcG8xSEf99pfYVM\";s:9:\"firstname\";s:6:\"Raitul\";s:8:\"lastname\";s:5:\"Islam\";s:5:\"phone\";s:11:\"01727338602\";s:5:\"email\";s:18:\"raitul45@gmail.com\";s:6:\"gender\";s:4:\"male\";s:8:\"birthday\";s:10:\"1999-01-09\";s:7:\"address\";s:64:\"VILLAGE : FULKHALI, UNION :\r\nCHOTOBAISHDIA, UPAZILA :\r\nRANGABALI\";s:8:\"paddress\";s:64:\"VILLAGE : FULKHALI, UNION :\r\nCHOTOBAISHDIA, UPAZILA :\r\nRANGABALI\";s:5:\"photo\";s:14:\"1640457528.png\";s:3:\"idp\";s:5:\"88978\";s:8:\"idphotof\";s:16:\"Screenshot_1.png\";s:8:\"idphotob\";s:16:\"Screenshot_1.png\";s:8:\"maritial\";s:7:\"married\";s:10:\"idattested\";s:16:\"Screenshot_1.png\";s:3:\"zip\";s:4:\"8640\";s:11:\"eduattested\";s:16:\"Screenshot_1.png\";s:10:\"occupation\";s:1:\"S\";s:8:\"religion\";s:2:\"hg\";s:3:\"nst\";s:16:\"Screenshot_1.png\";s:6:\"police\";s:6:\"ghbhjg\";s:7:\"policen\";s:5:\"bnbnb\";s:4:\"fire\";s:3:\"ASF\";s:5:\"firen\";s:3:\"ASS\";s:3:\"uph\";s:4:\"6565\";s:4:\"uphn\";s:3:\"786\";s:6:\"f_name\";s:2:\"AS\";s:7:\"f_phone\";s:11:\"01711104630\";s:9:\"f_address\";s:15:\"Dhaka\r\nMogbazar\";s:10:\"f_paddress\";s:15:\"Dhaka\r\nMogbazar\";s:6:\"f_advf\";s:16:\"Screenshot_1.png\";s:5:\"f_dob\";s:10:\"2022-01-11\";s:5:\"f_nid\";s:6:\"889789\";s:4:\"f_oc\";s:4:\"hhhj\";s:5:\"f_pic\";s:14:\"1640457528.png\";s:12:\"f_idattested\";s:8:\"icon.png\";s:6:\"m_name\";s:5:\"GHFGF\";s:7:\"m_phone\";s:11:\"01711104630\";s:9:\"m_address\";s:15:\"Dhaka\r\nMogbazar\";s:10:\"m_paddress\";s:15:\"Dhaka\r\nMogbazar\";s:6:\"m_advf\";s:16:\"Screenshot_1.png\";s:5:\"m_dob\";s:10:\"2022-01-11\";s:5:\"m_nid\";s:3:\"979\";s:4:\"m_oc\";s:3:\"HGH\";s:5:\"m_pic\";s:8:\"icon.png\";s:12:\"m_idattested\";s:16:\"Screenshot_1.png\";}', '', '', '2022-01-20 12:41:16', '2022-01-20 12:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_04_135148_create_teams_table', 1),
(6, '2021_12_05_092513_add_new_fields_to_users_table', 1),
(7, '2021_12_15_165219_create_sliders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `key`, `data`, `created_at`, `updated_at`) VALUES
(1, 'ccd_message', '<p><strong>I hope you are all well.</strong><br />We are thinking of unemployed brothers, sisters and students in our country and evaluating their leisure and idle time to find out a simple source of income for them.<br />Many people are wasting a lot of time online on social media which is not good for them. &nbsp;We are trying to make your life more beautiful by using the lazy time of every day with that in mind. &nbsp;There are many students in the country who are losing their meaning in life due to economic pressure. &nbsp;We are thinking of them and giving them a way out of their misery through easy way. Our company is working alongside the unemployed brothers and sisters who are unable to continue their education due to lack of money.</p>', '2022-01-08 13:43:32', '2022-01-16 16:08:48'),
(2, 'ccd_image', '1642349012.png', '2022-01-16 16:03:32', '2022-01-16 16:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Slider 1', '<p><strong><br /><iframe style=\"width: 376px; height: 211px;\" src=\"https://www.youtube.com/embed/laXMlDe8aC8\" width=\"492\" height=\"276\" allowfullscreen=\"allowfullscreen\"></iframe><br /><br /><span style=\"font-size: 18pt;\">১. কোম্পানির বিস্তারিত...???</span></strong><br /><br /><span style=\"font-size: 12pt; font-family: \'times new roman\', times, serif;\"><strong>আমাদের প্রতিষ্ঠানের নাম <span style=\"font-size: 14pt;\">Welkin Moon Company</span>. কোম্পানির প্রতিষ্ঠাতা ও পরিচালক জনাব মোঃ তৌহিদ উর রহমান। এ কোম্পানিটি প্রতিষ্ঠিত হয়েছে ২০২০ সালের ১৪ই মে । এটি একটি অনলাইন প্লাটফর্ম।</strong></span><em><strong><br /></strong></em><br />আমাদের কোম্পানি মূলত অনলাইন বিভিন্ন ইন্টারন্যাশনাল সাইটে ও কোম্পানির নিজস্ব সাইটে কাজ করার সুযোগ করে দেয় এবং কাজ শেখায়। কোম্পানির মেম্বাররা যেন&nbsp; ফ্রিল্যান্সিং করতে পারে তাই তাদের প্রশিক্ষণ দিয়ে দক্ষ করার দায়িত্ব কোম্পানির। অনলাইনে যাবতীয় প্রায় সকল কোর্স আমরা প্রদান করে থাকি। এ সকল কোর্স থেকে আপনি নিজের পছন্দ অনুয়ায়ী কোর্স করে ফ্রিল্যান্সিং ক্যারিয়ার গড়তে পারবেন। কোম্পানির সাথে যুক্ত হলে, আপনি এই সকল কোর্স গুলো সম্পূর্ণ বিনামূল্যে করতে পারবেন।<br /><br />তবে প্রতিটা মেম্বারকে আমাদের নির্দেশনা অনুয়ায়ী কাজ করতে হবে। <span style=\"font-size: 14pt;\"><strong>Welkin Moon </strong></span>কোম্পানি আপনাকে বিশেষ সুযোগ দিচ্ছে, অনলাইনে কাজ করে আয় করা টাকা থেকে কোর্স ফি পরিশোধ করার । এছাড়াও আমরা প্রায় ২৪ ঘন্টা সাপোর্ট দিয়ে থাকি শুধু তাই নয় আমাদের কোম্পানির সাথে কাজ করলে প্রথম <strong>(১,০০০ জন লাইফটাইম সাপোর্ট পাবেন)</strong>।<br /><br /><strong>সুতরাং</strong><br />যারা কিছু করবেন বলে ভাবছেন,বেকার বসে আছেন অথবা চাকরি করছেন পাশাপাশি কিছু করতে চান সেই সকল ভাই-বোনদের শেষ ভরসাস্থল/আশ্রয়স্থল হিসেবে আমাদের <span style=\"font-size: 14pt;\"><strong>Welkin Moon</strong></span> কোম্পানিকে বেছে নিতে পারেন।<br /><br /><span style=\"font-size: 18pt;\"><strong>২. মেম্বারদের সুযোগ সুবিধাগুলো কি...???</strong></span><br /><br /><strong>ফ্রী মেম্বারদের <span style=\"font-size: 12pt;\">সুযোগ </span>বিশেষ সুবিধা সমূহঃ</strong><br /><br />★ যেকোনো কাজ কেউ আমাদের ফ্রী শেখায় না। আমাদের কোম্পানিই আপনাকে একটা বিশেষ সুবিধা দিচ্ছে সেটা হলো আপনি কাজ করে রেজিষ্ট্রেশন ফি পরিশোধ করার সুযোগ পাচ্ছেন।<br />★ আপনি আমাদের কোম্পানি থেকে প্রায় ২৪ ঘন্টা লাইভ সাপোর্ট পাবেন ।<br />★ আপনি আমাদের কোম্পানি থেকে লোকাল এবং প্রফেশনাল কাজ দুটোই শিখতে পারবেন। যা আমাদের কোম্পানির বিশেষ সুযোগের একটা।<br />★ আমাদের সার্ভিস অনুযায়ী আমাদের রেজিষ্ট্রেশন ফি তুললামূলক অনেক কম।<br />★ এখানে মোবাইল ব্যবহারকারীদের কথা ভেবে সেই ভাবে আমরা সার্ভিসটি দিয়ে থাকি,মোবাইল দিয়েও করতে পারবেন।<br />★ আমাদের কাজের কোনো নির্দিষ্ট সময় নেই আপনি যখন খুশি তখন কাজ করতে পারবেন।<br /><br /><strong>পেইড &nbsp;মেম্বারদের বিশেষ সুবিধা সমূহঃ</strong><br /><br />★ আপনি আমাদের কোম্পানি থেকে &nbsp;২৪ ঘন্টা লাইভ সাপোর্ট পাবেন ।<br />★ আপনি আমাদের কোম্পানি থেকে লোকাল এবং প্রফেশনাল কাজ দুটোই শিখতে পারবেন। যা আমাদের কোম্পানির বিশেষ সুযোগের মধ্যে একটা। তবে &nbsp;আপনি &nbsp;লোকাল &nbsp;কাজ &nbsp;করে &nbsp;ট্রেনিং ফি পরিশোধ করে প্রফেশনাল কাজগুলো &nbsp;করতে পারবেন।<br />প্রফেশনাল কাজ শিখতে আপনাকে আর কোনো টাকা &nbsp;পরিশোধ করতে &nbsp;হচ্ছে না ।<br />★ &nbsp;প্রফেশনাল কাজ &nbsp;শিখতে &nbsp;আপনাদের &nbsp;যতো &nbsp;টুলস ব্যবহারের &nbsp;প্রয়োজন &nbsp;হবে তা সব কোম্পানি &nbsp;থেকে &nbsp;পাবেন &nbsp;।<br />তার জন্য কোনো &nbsp;টাকা দিতে হবে না ।<br />★ফ্রী মেম্বারদের তুলনায় আপনি বেশি কাজ করার সুযোগ পাবেন।<br />যে কারণে ফ্রী মেম্বারদের তুলনায় আপনার ইনকামও বেশি হবে।<br />★ এখানে মোবাইল ব্যবহারকারীদের কথা ভেবে, সেই ভাবে আমরা সার্ভিসটি দিয়ে থাকি, আমাদের কাজ গুলো আপনি মোবাইল দিয়েও&nbsp; করতে পারবেন। তবে প্রফেশনাল কাজের জন্য একটা ভালো মানের ল্যাপটপ/ডেস্কটপ প্রয়োজন। <span style=\"font-size: 14pt;\"><strong>Welkin Moon</strong> </span>কোম্পানির বিশেষ সুবিধার মধ্যে আরেকটি সুবিধাও আপনি পাবেন, যদি কোম্পানির সকল শর্ত মেনে এবং সুন্দর ভাবে কাজ করেন ভালো মানের একটা আয় পাবেন। যদি ল্যাপটপ/ডেস্কটপ নেওয়ার সময় আপনার আর্থিক সাহায্যের প্রয়োজন হয় সেক্ষেত্রেও কোম্পানি আপনাকে সাহায্য করবে।<br />★পেইড মেম্বার হলে আপনি কয়েক মাসের মধ্যে ভালো মানের একটা ল্যাপটপ/ডেস্কটপ নিয়ে প্রফেশনাল কাজগুলো শুরু করতে পারবেন। কোন সমস্যা হলে অথবা সাহায্যের প্রয়োজন হলে সেক্ষেত্রে কোম্পানি আপনাকে বিশেষ ভাবে সাহায্য করবে।<br />★কোম্পানির নির্দেশনা অনুয়ায়ী কাজ করলে পেইড মেম্বার<strong> (৩০+ হাজার টাকা) </strong>আয় করতে পারবে।<br />এছাড়াও যদি আপনি কোম্পানির বিশ্বাস অর্জন করতে পারেন তাহলে আপনাকে অ্যাফিলিয়েট মার্কেটিং করার সুযোগ দেওয়া হবে। যেখান থেকে মাসে আপনি এক্সট্রা আরো <strong>(২০ থেকে ২৫ হাজার টাকা)</strong> আয় করতে পারবেন।<br />★ আমাদের কাজের কোনো নির্দিষ্ট সময় নেই আপনি যখন খুশি তখন কাজগুলো &nbsp;করতে পারবেন।<br />★ নতুন &nbsp;কাজ আসলে সবার আগে পেইড মেম্বাররা কাজ করার &nbsp;সুযোগ পাবে।<br /><br /><strong>এডমিনদের</strong> <strong>সুযোগ সুবিধাঃ</strong><br /><br />★ ফ্রি মেম্বার এবং পেইড মেম্বার যে সকল সুযোগ সুবিধা পাচ্ছে সেসব সুযোগ সুবিধা গুলো আপনিও পাবেন।<br />★আমাদের কোম্পানির প্রায় সকল কাজে যুক্ত থাকতে পারবেন।<br />★আমাদের কোম্পানির নিয়মকানুন অনুয়ায়ী কাজ করলে ভালো পরিমাণের আয় করতে পারবেন। যদি সঠিক ভাবে কাজ করেন তাহলে মাসিক <strong>(৫০ হাজার+) </strong>আয় হয়ে যাবে।<br />★এডমিন হলে আপনি অ্যাফিলিয়েট মার্কেটিং করার সুযোগ পাবেন। যেখান থেকে আপনি এক্সট্রা <strong>(৪০ থেকে ৫০ হাজার টাকা)</strong> আয় করতে পারবেন।<br />★ এডমিন হলে আপনার সম্মান ও মর্যাদা অন্যান্যদের তুলনায় বেশি থাকবে। কারণ পরিচালক স্যার ও তার ব্যক্তিগত সহকারীর পরেই এডমিনের অবস্থান।<br />★আপনাকে লিড করার সুযোগ দেওয়া হবে।<br />★আপনাকে দক্ষ ফ্রিল্যান্সার হিসেবে গড়ে তোলা হবে।<br />★আপনাকে কোম্পনির নিজস্ব সাইট পরিচালনা করার সুযোগ দেওয়া হবে।<br /><br /><strong>এডমিনদের আরও অনেক সুবিধা রয়েছে, বিস্তারিত জানতে আমাদের <span style=\"font-size: 14pt;\">Whtasapp</span> নাম্বারে মেসেজ করতে পারেন।<br /><br /></strong>&nbsp;&nbsp;<br /><strong>01) Company Personal Assistant Boy\'s :<br />Name : Md. Rashedul Islam<br />WhatsApp Link : <a href=\"https://wa.me/message/WDH6HUMAPIOBD1\" target=\"_blank\" rel=\"noopener\">Click Here</a><br /></strong><strong>&nbsp;<br />02) Company &nbsp;Managing Director :<br />Name : Md. Al-Mamun<br />WhatsApp Link : <a href=\"https://wa.me/message/YFHKCHCTYB4EB1\" target=\"_blank\" rel=\"noopener\">Click Here</a><br /></strong><br /><strong>03) Deputy Managing Director :<br />Name : Md. Shaheenur<br />WhatsApp Link : <a href=\"https://wa.me/message/A3E4IBY2KVKSO1\" target=\"_blank\" rel=\"noopener\">Click Here</a></strong><br /><br /><span style=\"font-size: 18pt;\"><strong>৩. কি কি ধরণের কাজ...???</strong></span><br /><br /><span style=\"color: #ba372a;\"><strong><span style=\"font-size: 14pt;\">Welkin Moon Company </span>সাধারণত ৩ ধরণের কাজের ট্রেনিং দিয়ে থাকে...</strong></span><br /><br /><strong>১.</strong>লোকাল কাজ<br /><strong>২.</strong>প্রফেশনাল কাজ<br /><strong>৩.</strong>অন্যান্য ক্যাটাগরির কাজ<br /><br /><span style=\"background-color: #ffffff; color: #383adb;\"><strong>লোকাল কাজ :</strong></span><br /><br />ফেসবুক<br />ইউটিউব<br />টুইটার<br />ইন্সট্রাগ্রাম<br />জিমেইল<br />অ্যাপ্লিকেশন ডাউনলোড<br />গেমস ডাউনলোড<br />সার্ভে এবং ডাটা এন্ট্রি ইত্যাদি।<br /><br /><span style=\"background-color: #ffffff; color: #383adb;\"><strong>প্রফেশনাল কাজ....</strong></span><br /><br /><span style=\"color: #e03e2d;\"><strong>ওয়েব এবং অ্যাপ ক্যাটাগরিঃ</strong></span><br />&nbsp;Web Development, Web Design, Android App Development, WPT Theme Development, Laravel ইত্যাদি।<br /><br /><span style=\"color: #e03e2d;\"><strong>গ্রাফিক ও ভিডিও ক্যাটাগরিঃ</strong></span><br />Graphic Design, T-shirt Design Course, Video Editing, 3D Studio Max and VFX, Auto Cad 2D and 3D ইত্যাদি।<br /><br /><span style=\"color: #e03e2d;\"><strong>ডিজিটাল এবং অনলাইন মার্কেটিং ক্যাটাগরিঃ</strong></span><br />Complete Digital Marketing, Advanced SEO, CPA Marketing, Affiliate Marketing, Social Media Marketing, E-Commerce Business Development<br /><br /><br /><span style=\"font-size: 18pt;\"><strong>৪. কিভাবে জয়েন হবো?</strong></span><br /><br /><span style=\"color: #e03e2d;\"><strong>আমাদের এইখানে জয়েনিং পদ্ধতি ২টি :</strong></span><br /><br /><strong>১. ফ্রি এবং পেইড মেম্বারদের &nbsp;ক্ষেত্রে ১০০ টাকা ওয়ান টাইম রেজিষ্ট্রেশন ফি দিতে হবে।</strong><br /><br /><span style=\"font-size: 14pt;\"><strong>বি.দ্র:</strong></span> আমাদের এখানে রেজিস্ট্রেশন ফি (১০,০০০) টাকা। কিন্তু আপনি আমাদের এইখানে কাজ করে টাকা গুলো পর্যায়ক্রমে পরিশোধ করতে পারবেন। প্রথম মাসে আপনার আয়/ইনকাম থেকে (২৫%) অর্থাৎ (২,৫০০) টাকা কোম্পানিকে দিতে হবে, দ্বিতীয় মাসের টাকা পুরোটাই আপনি পাবেন এবং পরবর্তী মাস থেকে বাকি (৫০%) করে বাকি ৭,৫০০ টাকা আপনার আয় করা টাকা থেকে পরিশোধ করতে হবে। কোর্স ফি পরিশোধ হয়ে গেলে তারপর থেকে সম্পূর্ণ টাকা আপনি পাবেন।<br /><br /><strong>২. পেইড মেম্বার অথবা এডমিন.<br /></strong><br /><span style=\"font-size: 14pt;\"><strong>i )</strong></span> ছাত্র-ছাত্রী &nbsp;এবং অবিবাহিত হলে ৩০ বছরের নিচে মোট রেজিস্ট্রেশন ফি (১০,০০০ এর ২৫% অর্থাৎ ২,৫০০ টাকা) পরিশোধ করতে হবে । প্রথম (২৫% অর্থাৎ ২,৫০০ টাকা) পরিশোধ করার পর , দ্বিতীয় মাস থেকে আপনার মোট ইনকাম থেকে (৫০%) করে ধাপে ধাপে আপনার বাকী (৭৫% অর্থাৎ ৭,৫০০ টাকা) কেটে নেয়া হবে।<br /><br /><br /><span style=\"font-size: 14pt;\"><strong>ii )</strong></span> বিবাহিত&nbsp; হলে মোট রেজিস্ট্রেশন ফি (১০,০০০ এর ৩৫% অর্থাৎ ৩,৫০০ টাকা) পরিশোধ করতে হবে। প্রথম (৩৫% অর্থাৎ ৩,৫০০ টাকা) পরিশোধ করার পর , দ্বিতীয় মাস থেকে আপনার মোট ইনকাম থেকে (৫০%) করে ধাপে ধাপে আপনার বাকী (৬৫% অর্থাৎ ৬,৫০০ টাকা) কেটে নেয়া হবে।<br /><br /><br /><span style=\"font-size: 14pt;\"><strong>iii )</strong></span> বিবাহিত এবং ৩০ বছরের বেশি হলে মোট রেজিস্ট্রেশন ফি (১০,০০০ এর &nbsp;৫০% অর্থাৎ ৫,০০০ টাকা) পরিশোধ করতে হবে। প্রথম (৫০% অর্থাৎ &nbsp;৫,০০০ টাকা) পরিশোধ করার পর , দ্বিতীয় মাস থেকে আপনার মোট ইনকাম থেকে (৫০%) করে ধাপে ধাপে আপনার বাকী (৫০% অর্থাৎ ৫,০০০ টাকা) কেটে নেয়া হবে।<br /><br /><br />যে &nbsp;জয়েন হবে তাকে এই নিয়ম অনুযায়ী আমাদের অফিসিয়াল বিকাশ, রকেট, নগদ যেকোনো নম্বরের টাকা পরিশোধ করতে হবে।<br /><br /><span style=\"font-size: 18pt;\"><strong>৫. পেমেন্ট পাবো কিভাবে?<br /></strong></span><br />সাধারণত ফ্রিল্যান্সিং করা হয় বিভিন্ন অনলাইন সাইটে।<span style=\"text-decoration: underline;\"> </span>ফ্রিল্যান্সিং সাইটগুলি বিশ্বব্যাপী কাজ করে ফলে সেখানে বেশিরভাগ পেমেন্ট মেথড Paypal/Payoneer ব্যবহার করা হয়। তবে বেশ কয়েকটি বিশ্বব্যাপী পেমেন্ট সিস্টেম রয়েছে যেগুলির মাধ্যমে আপনি আপনার উপার্জেনের টাকা নিজের কারেন্সিতে নিজের ব্যাংক একাউন্টে পেয়ে যাবেন। <span style=\"font-size: 14pt;\"><strong>Welkin Moon</strong></span> কোম্পানিতে কাজ করার ফলে আপনাকে টাকা উঠানো নিয়ে কোন ঝামেলায় পড়তে হবে না। আপনারা নিজের ব্যাংক একাউন্ট অথবা মোবাইল ব্যাংকিংয়ের মাধ্যেমে যেমনঃ বিকাশ, নগদ, রকেট যেকোন একাউন্টে টাকা নিতে পারবেন।<br /><br /><span style=\"font-size: 18pt;\"><strong>৬. কাজের সাইট কেমন হবে?</strong></span><br /><br /><span style=\"color: #e03e2d;\"><strong>কাজের সাইট সম্পর্কে ধারণা :</strong></span><br /><br /><strong>লোকাল কাজের ক্ষেত্রে</strong><br /><br /><strong>1. </strong>Rapid Workers<br /><strong>2. </strong>Pico Workers<br /><strong>3. </strong>Micro Workers<br /><strong>4. </strong>Job Boy<br /><strong>5.</strong> People Per Hour<br /><br />এছাড়াও রয়েছে অসংখ্য ইন্টারন্যাশনাল সাইট :<br /><br /><strong>প্রফেশনাল কাজের ক্ষেত্রে</strong><br /><br /><strong>1.</strong> Freelancer<br /><strong>2.</strong> Upwork<br /><strong>3. </strong>Fiverr<br /><strong>4. </strong>Guru<br /><br />এছাড়াও আপনারা এখান থেকে ট্রেনিং শেষ করে দেশি এবং বিদেশি অনেকগুলো কোম্পানিতে জব করতে পারবেন এবং সর্বোপরি আমাদের কোম্পানির নিজস্ব অনেকগুলো প্লাটফর্মে কাজ করতে পারবেন।<br /><br /><span style=\"font-size: 18pt;\"><strong>৭. কাজ স্থায়ী নাকি অস্থায়ী হবে?</strong></span><br /><br />অবশ্যই কাজ স্থায়ী হবে। পৃথিবীতে যতগুলো দেশ আছে প্রায় সব দেশের মানুষ অনলাইন কাজ এবং অনলাইন ব্যবসার দিকে মনোযোগ দিচ্ছে। কারণ এখানে কাজের কোন সীমা নেই। পুরো পৃথিবীতে ১৯৫ টি দেশ আছে। যেহেতু প্রায় সব দেশের মানুষ অনলাইন কাজের দিকে ঝুকছে , তাই এতগুলো দেশের মানুষের কাজের চাহিদা বাড়বে কিন্তু কমবে না। যার দরুণ,আপনার কাজের অভাব হবে না।<br />তবে একটা কথা মাথায় রাখবেন, যে কোন কাজে দক্ষ না হলে আপনি কাজ পাবেন না। মানুষ যদি আপনার কাজ পছন্দই না করে, তাহলে তো কাজ পাওয়ার সম্ভাবনাই নেই।<br />আর আপনি কাজে পারদর্শী হয়ে গেলে কাজের স্থায়ীত্ব হবে দীর্ঘস্থায়ী।<br /><br /><span style=\"font-size: 18pt;\"><strong>৮.কেন কাজ করবো...???</strong></span><br /><br />বর্তমান বিশ্বে বেকারত্ব এক অন্যতম সমস্যা। তাই পড়াশোনা বা চাকরির চেষ্টার পাশাপাশি ঘরে বসে পার্ট টাইমে সৎভাবে উপার্জনের জন্য ফ্রিল্যান্সিং অত্যন্ত ভালো একটি উপায়।<br /><br />যদি আপনি ইতিমধ্যে কোনো কাজের সাথে যুক্ত থেকে থাকেন সেক্ষেত্রেও অতিরিক্ত আয়ের উৎস হিসেবে ফ্রিল্যান্সিং কে বেছে নিতেই পারেন।<br />আমাদের <span style=\"font-size: 14pt;\"><strong>Welkin Moon</strong></span> কোম্পানি আয় করার আগে কোর্স ফি নেয় না। অর্থাৎ, আপনি আয় করার পর ধাপে ধাপে কোর্স ফি দিতে পারবেন। আয় করার দারুণ একটা সুযোগ পাচ্ছেন,আপনি আয় করলেই আমাদের সার্থকতা। আমরা চাই, বেকার মুক্ত বাংলাদেশ।<br /><br /><span style=\"font-size: 18pt;\"><strong>৯. সময় কতক্ষণ দিতে হবে?</strong></span><br /><br />এটায় ধরাবাধা সময় নেই। কথায় আছে,সময় যত বেশি দিবেন তত সুন্দর ফল পাবেন । ফ্রিল্যান্সিং করার জন্য নির্দিষ্ট সময়সীমা থাকে না। তাই আপনি যখন ইচ্ছা তখন কাজ করতে পারবেন। কিন্তু প্রতিদিন নির্দিষ্ট পরিমাণ কাজ না করলে ভালোমানের আয় করতে পারবেন না।<br />তাই বলা যায়, কাজে ফোকাস যত দিবেন তত আপনার স্কিল বাড়বে, আর স্কিল বেড়ে যাওয়া মানেই আপনি কাজ পাবেন। কাজ পেলেই টাকাও পাবেন।<br /><br /><span style=\"font-size: 18pt;\"><strong>১০.মাসে কি পরিমাণ আয় হবে?</strong></span><br /><br />এটি আপনার কাজের উপর নির্ভর করবে। আপনি কি ধরনের কাজ করবেন সেটায় মূলত আয়ের পরিমাণ নির্ধারণ করবে। <strong>তবে ফ্রিল্যান্সিং করে র্নিম্ন সর্বনিম্ন ১০০ থেকে সর্বোচ্চ ১০,০০০ ডলার পর্যন্ত আয় করা যায়</strong>। বিশেষ করে আপনার যে বিষয়ে আগ্রহ সেই বিষয়ে কাজ শিখলে ফ্রিল্যান্সিং করে ভাল আয় করতে পারবেন।<br /><br />কিন্তু সব কথার মূল কথা আপনাকে কাজ জানতে হবে, প্রাকটিস করতে হবে এবং সেটার প্রয়োগ করতে হবে। তাহলেই এটা সম্ভব।<br /><br /><strong><span style=\"font-size: 18pt;\">১১. সর্বনিম্ন কি পরিমাণ টাকা উঠানো যাবে?</span><br /></strong><br /><strong>সর্বনিম্ন ১৫ ডলার/১,০০০ টাকা তুলতে পারবেন।</strong> সবকিছুর একটা নির্দিষ্ট নিয়ম থাকে। এর থেকে কম এমাউন্ট উঠানো যাবে না।<br /><br /><span style=\"background-color: #ffffff; color: #e03e2d;\"><strong>কোম্পানিতে যুক্ত হওয়ার যোগ্যতা কি?</strong></span><br /><br /><strong>ফ্রি মেম্বার<br /></strong><br /><strong>১. </strong>নূন্যতম এসএসসি পাশ হতে হবে অথবা পড়ালেখা চলমান থাকলেও হবে।<br /><strong>২. </strong>মোবাইল ফোন সাথে ইন্টারনেট কানেকশন/মোবাইল ডাটা দিয়েও কাজ করতে পারবেন।<br /><strong>৩. </strong>অভিজ্ঞতার প্রয়োজন নেই।<br /><strong>৪. </strong>কাজ করার ইচ্ছা, ধৈর্য ধরে কাজ করার মনোভাব থাকতে হবে।<br /><br /><strong>পেইড এবং এডমিনঃ<br /></strong><br /><strong>১. </strong>নূন্যতম এসএসসি পাস হতে হবে।<br /><strong>২. </strong>মোবাইল ফোন সাথে ভালো মানের ইন্টারনেট কানেকশন থাকতে হবে।<br /><strong>৩.</strong> সকলের সাথে ভালো ব্যবহার করা বাধ্যতামূলক।<br /><strong>৪.</strong> কোম্পানিতে নির্দিষ্ট কয়েক ঘন্টা সময় দিতে হবে।<br /><strong>৫.</strong> টিম ওয়ার্ক করার মন মানসিকতা থাকতে হবে।<br /><strong>৬.</strong> কাজ করার ইচ্ছা, ধৈর্য ধরে কাজ করার মনোভাব থাকতে হবে।</p>\r\n<div class=\"yj6qo ajU\"><br /><br /><br /></div>', 'slider1', '2021-12-15 11:37:15', '2021-12-23 11:57:28'),
(2, 'Slider 2', '<p><span style=\"font-size: 14pt;\"><strong><br /><br />(1)</strong></span><strong> ফ্রি মেম্বার দের জন্য &nbsp; !!!<br /></strong><br /><strong>i)</strong>&nbsp; প্রথম ১০ জনের জন্য ল্যাবটপ ।<br /><strong>ii)</strong> দ্বিতীয় ১০ জনের জন্য মোবাইল ফোন ।<br />&nbsp;<br /><br /><strong>বিস্তরিত---</strong><br /><br />যাহারা আগামী ৫ ডিসেম্বর থেকে &nbsp;ফ্রি মেম্বার &nbsp;হিসেবে যুক্ত হয়ে আগামী, ৩০ ই মার্চের মধ্যে কোম্পানির সম্পূর্ণ কোর্স ফী পরিশোধ করবে&nbsp;।<br /><br />তাদের &nbsp;প্রথম ১০ জনকে কোম্পানির পক্ষ থেকে একটি করে আকর্ষণীয় ল্যাপটপ প্রদান করা হবে ,, তার ভবিষ্যৎ ক্যারিয়ার এর জন্য।<br />এবং দ্বিতীয় ১০ জনকে কাজের &nbsp;জন্য একটি করে &nbsp;স্মার্ট ফোন দেয়া হবে।<br /><br /><strong>শর্ত সাপেক্ষে</strong><br /><br /><br /><span style=\"font-size: 14pt;\"><strong>(2) </strong></span><strong>পেইড মেম্বার / এডমিনদের জন্য &nbsp; !!!</strong><br /><br />যে সকল পেইড মেম্বার / এডমিন কোম্পানির দেওয়া টার্গেট ৫ মাসের মধ্যেই পূরণ করতে সক্ষম হবে, &nbsp;তারা প্রত্যেকে একটি করে ল্যাপটপ ও স্মার্টফোন পাবে !!!!<br /><br /><strong>শর্ত সাপেক্ষে<br /><br /><br />বিস্তারিত জানতে---<br /><br />01) Company Personal Assistant Boy\'s :<br />Name : Md. Rashedul Islam<br />WhatsApp Link : <a href=\"https://wa.me/message/WDH6HUMAPIOBD1\" target=\"_blank\" rel=\"noopener\">Click Here</a><br />&nbsp;<br />02) Company &nbsp;Managing Director :<br />Name : Md. Al-Mamun<br />WhatsApp Link : <a href=\"https://wa.me/message/YFHKCHCTYB4EB1\" target=\"_blank\" rel=\"noopener\">Click Here</a><br /><br />03) Deputy Managing Director :<br />Name : Md. Shaheenur<br />WhatsApp Link : <a href=\"https://wa.me/message/A3E4IBY2KVKSO1\" target=\"_blank\" rel=\"noopener\">Click Here</a><br /></strong></p>', 'slider2', '2021-12-15 11:37:30', '2021-12-21 08:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` int(10) NOT NULL DEFAULT 0,
  `in_home` int(10) NOT NULL DEFAULT 0,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `type`, `img`, `post`, `is_featured`, `in_home`, `description`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(5, 'Md Touhid Ur Rahman', 'left', '1640457528.png', 'Chief Director', 1, 0, '<p><strong>I hope you are all well.</strong><br />We are thinking of unemployed brothers, sisters and students in our country and evaluating their leisure and idle time to find out a simple source of income for them.<br />Many people are wasting a lot of time online on social media which is not good for them. &nbsp;We are trying to make your life more beautiful by using the lazy time of every day with that in mind. &nbsp;There are many students in the country who are losing their meaning in life due to economic pressure. &nbsp;We are thinking of them and giving them a way out of their misery through easy way. Our company is working alongside the unemployed brothers and sisters who are unable to continue their education due to lack of money.</p>', 'https://www.facebook.com/mdtouhid12345', 'https://twitter.com/mdtouhid20021', 'https://www.linkedin.com/in/mdtouhid20021', '2021-12-23 08:07:39', '2021-12-25 18:38:48'),
(7, 'Md Rashedul Islam', 'left', '1640247172.png', 'Personal Assistant Boy', 1, 0, '<p><strong>I hope you are all well.</strong><br />Many people are frustrated and helpless when they fail to reach the goal of success but when they cannot succeed. You may be very hardworking but you are not spending your hard work in any work. If you can earn income by spending a little time online, then your hard work will turn into money. &nbsp;Moreover, there are many who want to establish themselves in the online world by using their skills and hard work, but they face financial problems while learning the job. The main goal is to make our company completely self-sufficient by teaching free jobs to poor, helpless, unemployed and hardworking students. Here with the right direction and hard work you can create a luxurious bright future.&nbsp;</p>', 'https://www.facebook.com/rashedulislam2022', 'https://twitter.com/MRashed2023', 'https://www.linkedin.com/in/rashedulislam2022', '2021-12-23 08:12:52', '2021-12-23 09:40:58'),
(16, 'Sumaiya Akter', 'left', '1640457459.jpg', 'Chief Executive Officer', 0, 0, '<p>Hello! <br />I Am Sumaiya Akter Of Welkin Moon Company Chief Executive Officer.</p>', 'https://www.facebook.com/sumaiyaislam2021', 'https://twitter.com/SumaiyaAkterKh1', 'https://twitter.com/SumaiyaAkterKh1', '2021-12-24 17:09:06', '2022-01-19 18:45:48'),
(17, 'Md. Rubel Hasanur', 'left', '1640366850.jpg', 'Company Online Admin', 0, 0, '<p>Hello! I Am Md. Rubel Hasanur Of Welkin Moon Company Online Admin</p>', 'https://www.facebook.com/profile.php?id=100076446996080', 'https://twitter.com/mdrubelhasanur', 'https://www.linkedin.com/in/md-rubel-islam', '2021-12-24 17:27:30', '2022-01-19 18:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `is_admin`, `phone`, `firstname`, `lastname`, `birthday`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Developer Inocop', 'developer@inocop.com', '2021-12-15 11:13:32', 'devinocop', '1', '01323583286', 'Developer', 'Inocop', '1990-01-01', 'male', '$2y$10$0hiu/4aSV.20O49JF/o8begcLiOXX2gegmifyGeVyVcCPC38Y3wnG', 'CnMtUqyHemRU7LdpZuYSez4WNFzCFLMFERPUIfz6gHaRpa90WIvXpx6D7IRb', '2021-12-15 11:13:11', '2021-12-15 11:13:11'),
(2, 'Raitul Islam', 'raitul45@gmail.com', NULL, 'raitul', '0', '01727338602', 'Raitul', 'Islam', '1999-01-09', 'male', '$2y$10$MK/cRZObZ52hIV8lcCtjNOfZyKHI008Yx5O/FK03zNpwtijzSBFTi', 'ac1SgDG2QtSgBr3lUmGxiTQihzboKR9TsTgwjMS4Xkrp6LvduhB6rafGqH5n', '2021-12-15 11:21:13', '2021-12-15 11:21:13'),
(3, 'v b', 'test@gmail.com', NULL, 'test', '0', '12345678912', 'v', 'b', '2021-12-19', 'male', '$2y$10$CT3YNnnLLsG1XSlqtF8emOmrJy23E.erH5Sak6IBcmW9gYN.m6HE6', NULL, '2021-12-19 13:27:08', '2021-12-19 13:27:08'),
(4, 'a a', 'aa@gmail.com', NULL, 'aaa', '0', '123456789000', 'a', 'a', '2021-12-15', 'male', '$2y$10$tnYg1ky6Vfpn0v9rbvdSyepDrPve405rM5i.NS9/rN3eOGZMZe.by', NULL, '2021-12-21 10:39:15', '2021-12-21 10:39:15'),
(5, 'Md Touhid Rahman', 'info.mdtouhidrahmanzishad@gmail.com', '2021-12-23 08:50:33', 'touhid2002', '1', '01643963258', 'Md Touhid', 'Rahman', '2002-10-06', 'male', '$2y$10$Y3ERjNMDJ/hKIf39Q5agZ.bJGL1rBcN7DJU3sJT4.mRUeIIhZt9Iu', 'UxUS7Xgx25lJiHHZRjtseF2Bs165bCDx47rguwre1lxj86DA8uvOeEkrOtkh', '2021-12-23 08:47:16', '2021-12-23 08:47:16'),
(6, 'Saiful Sheikh', 'taskinsany01959@gmail.com', NULL, 'Sany', '0', '01879200053', 'Saiful', 'Sheikh', '2002-07-29', 'male', '$2y$10$Lg8/bb8OAxapoqgCYb0awubMmOr8Btt.zbjNaamN9RdGPBjy/2WMC', NULL, '2021-12-26 10:43:59', '2021-12-26 10:43:59'),
(7, 'Ratul Hassan', 'matubberr304@gmail.com', NULL, 'Ratul140', '0', '01310819266', 'Ratul', 'Hassan', '2003-01-16', 'male', '$2y$10$OXvfiQpV/.TUnKxM13aeDOjQsJ6Vjgm6ggUbZo.qsVg.M8qlwmgR6', NULL, '2021-12-26 11:55:51', '2021-12-26 11:55:51'),
(8, 'Md Afsan Jani Adnan Adnan', 'kabboadnan78@gmail.com', NULL, 'Mdadnan', '0', '01708697136', 'Md Afsan Jani Adnan', 'Adnan', '2003-02-17', 'male', '$2y$10$77NTIRMcAIN3DaTOHnkkCunL7jzyfQkU5poW3Ysb9rTz0OK36bePu', NULL, '2021-12-27 16:40:43', '2021-12-27 16:40:43'),
(9, 'Anik Kumar Dey', 'Anik.dey8717@gmail.com', NULL, 'AnikKumardey', '0', '01648231273', 'Anik', 'Kumar Dey', '2001-06-15', 'male', '$2y$10$AuSWi18uC1zm4Ipl96w/T.6XBnIzulb59PAH96yLn7l24qLMkx34u', NULL, '2021-12-27 16:52:29', '2021-12-27 16:52:29'),
(10, 'Afser Uddin Arafat', 'afserarafat@gmail.com', NULL, 'afserarafat', '0', '01637814190', 'Afser Uddin', 'Arafat', '2004-06-07', 'male', '$2y$10$HkBPsYb8kOtYxkTVCWmbvedVGgzeVWYPyMelUkK9itE0.O4s2RmIG', NULL, '2021-12-29 14:07:10', '2021-12-29 14:07:10'),
(11, 'md touhid rahman', 'md.zishadrahmann@gmail.com', NULL, 'touhid', '0', '02414104012', 'md touhid', 'rahman', '2021-12-09', 'female', '$2y$10$OepDv5yVF3kuIRix2PnX5uqgMIJR.HtaXYHfJfJ4ZLRvkhspPUI2C', NULL, '2021-12-30 09:14:47', '2021-12-30 09:14:47'),
(12, 'Md Touhid Rahman', 'info@welkinmoon.com', NULL, 'touhid2021', '0', '01712528784', 'Md Touhid', 'Rahman', '2022-01-06', 'male', '$2y$10$il/gXxFaXGZn3yCc90mZj.TR6hVVrsTjCACae4zBlstdOR8P4t1Tm', NULL, '2022-01-05 20:09:30', '2022-01-05 20:09:30'),
(13, 'Md Touhid Rahman', 'info.welkinmoon20@gmail.com', NULL, 'touhid20252', '0', '058421068420148', 'Md Touhid', 'Rahman', '2022-01-06', 'female', '$2y$10$cZTXIVMXFQTD4cononOVxOoBaZAFcjA.eDC3bQo75izn0wMwMxz9a', NULL, '2022-01-05 20:30:24', '2022-01-05 20:30:24'),
(14, 'Suraiya Sharmin Siza', 'sizasuraiyasharmin@gmail.com', NULL, 'Siza786', '0', '+8801762160046', 'Suraiya', 'Sharmin Siza', '2003-09-26', 'female', '$2y$10$5ZG6APFg54wH4fVn73WvGO6joHpGPATgOdeUc4x3Ko3tLc0/FQMUG', 'p8P1ckTqh2sGdCaLa8xIDd49RsgdmvX7FLNtW2dXxHgM8143afAd70yvsrr6', '2022-01-06 14:42:37', '2022-01-06 14:42:37'),
(15, 'Nihana Nihita', 'nihananihita@gmail.com', NULL, 'Nihana', '0', '01872498408', 'Nihana', 'Nihita', '2001-01-01', 'female', '$2y$10$VJNsv0vKvvyiO8s4FJMiaujFo/rKPYLEbVYKwsdc/9sLjWSsYjpwq', NULL, '2022-01-07 15:50:59', '2022-01-07 15:50:59'),
(16, 'Rayhan kobir Repon', 'kobir01751@gmail.com', NULL, 'kobir01751', '0', '01868303832', 'Rayhan kobir', 'Repon', '1995-10-11', 'male', '$2y$10$1ztZTv.Am1w5YBwh6KV.N.vTqYdMLv7WhLJZ65cU2luM49HfqBuE2', NULL, '2022-01-08 16:09:16', '2022-01-08 16:09:16'),
(17, 'Md Touhid Rahman', 'info.mdtouhidrahmanzishadr@gmail.com', NULL, 'touhid20212', '0', '552005632853', 'Md Touhid', 'Rahman', '2002-06-08', 'male', '$2y$10$RmdGXdoDS7O9mV1vxaV.ReqHUQFuCdCKaDjMEBQY5HoYhSPUU8Lyy', NULL, '2022-01-08 17:29:30', '2022-01-08 17:29:30'),
(18, 'Riaz Ahmed', 'riazahmed24.riaz@gmail.com', NULL, 'Riazahmed24', '0', '+8801928201333', 'Riaz', 'Ahmed', '1998-09-17', 'male', '$2y$10$Ol/pK7hi9yX4qhSEFHfEg.j62id0ZKSx1zyZkngI2oUFMc0VCVwUy', NULL, '2022-01-09 18:00:03', '2022-01-09 18:00:03'),
(19, 'Md Touhid Rahman', 'info.mdtouhidrahmanzishadzishad@gmail.com', NULL, 'touhid20021', '0', '017120528784', 'Md Touhid', 'Rahman', '2022-01-10', 'male', '$2y$10$5BqiRMtEbsk4J6nY/YcMCuZnRk3VeZ7j7bES6Wr6Tz3zlbjvFhENO', NULL, '2022-01-10 16:34:31', '2022-01-10 16:34:31'),
(20, 'Md Roni', 'mdroni60645@gmail.com', NULL, 'mdroni60645', '0', '01714820824', 'Md', 'Roni', '2022-01-14', 'male', '$2y$10$OVtdCdH7Kx6CerTKweqgG.Lg68ZaqJtzVwTQV70uIn9wWOUjrygmO', NULL, '2022-01-14 11:42:39', '2022-01-14 11:42:39'),
(21, 'Jim azom', 'mdjim43@gmail.com', NULL, 'Jim', '0', '01739696694', 'Jim', 'azom', '2002-10-22', 'male', '$2y$10$PEFJURFa7OZAgUosXfshMeIZg6NLDw8opZDaiK81q9V1tvjxLoZyy', NULL, '2022-01-14 13:09:28', '2022-01-14 13:09:28'),
(22, 'hjdsfg fdgdfg', 'info.mdtouhidrahmanzishadnn@gmail.com', NULL, 'touhid453245', '0', '01764895137', 'hjdsfg', 'fdgdfg', '2021-12-29', 'female', '$2y$10$6jt3aDVy3ml2XrqyDy13wuGlhtt74WCt9jYaHzQV7zvYkxsWnAEVC', NULL, '2022-01-20 14:17:08', '2022-01-20 14:17:08'),
(23, 'gggg Shhdd', 'hshshhshs@gmail.com', NULL, 'touhid2002hsh', '0', '01643963223', 'gggg', 'Shhdd', '2022-01-19', 'male', '$2y$10$uJ5CjR/lAOlnG8dHtr40/O28UEp15/o7yk0fNsxK.zV00yV8Q.Ssu', NULL, '2022-01-22 11:44:31', '2022-01-22 11:44:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
