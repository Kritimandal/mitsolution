-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2024 at 08:22 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitsolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `phone_no`, `resume`, `position`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Criti Mandal', 'mandalcriti@gmail.com', '1234567890', 'resume202312031016571062.Final-Internship-Report.docx', 'laravel', 'ghsgh fdsgs dgfdsg fgsdf', '2023-12-03 04:31:57', '2023-12-03 04:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `alt_text`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'We Help To Achieve Your Business Goal', 'We love what we do and we do it with passion. We value the experimentation of the message and smart incentives.', 'Image-20231129041203103.our_services_banner.png', 'our service banner', 3, '2023-11-29 10:27:03', '2023-11-29 10:27:03'),
(2, 'Collaborate with Us !', 'The response we provide is your suggestion. Get professional advice on the product you want to create. Send us a little more about your thoughts, your project, and the best way to contact you. We\'ll get back to you straight away.', 'Image-20231129042513186.about_us_1.png', 'contact banner', 5, '2023-11-29 10:40:13', '2023-11-29 10:40:13'),
(3, 'You Press the Technology, <br> We Do the Rest.', 'Years of experience in financial technology, banking, and darta-chalani services can assist you in translating your ideas into a game-changing solution. We aim to give impartial recommendations that help organizations in thriving in a complicated, inter technological landscape.', 'Image-20231129042917223.home_banner_1.png', 'home banner', 1, '2023-11-29 10:44:17', '2023-11-29 10:44:17'),
(4, 'Words from CEO', 'Makalu IT Solution is a privately owned software outsourcing company from Nepal offering software development, hardware and net working services to clients in different organizations from 2068 B.S. Our software outsourcing services and solutions are designed with a focus on secure, scalable, expandable and reliable busine ss systems. Through our low cost, high quality and reliable software and hardware services, we serve our clients giving them value for money and thus client satisfaction.', 'Image-20231130071410135.rabin-sir.png', 'CEO', 6, '2023-11-30 01:29:10', '2023-11-30 01:29:10'),
(5, 'They Believe In Us', 'Our customer base have served as our main source of innovation and, most significantly, their trust has enabled us to work together to discover new opportunities.', 'Image-20231130071523607.about_us_1.png', 'our client', 7, '2023-11-30 01:30:23', '2023-11-30 01:30:23'),
(6, 'The Best And Most Trusted Service', 'Makalu IT Solution is a privately owned software outsourcing company from Nepal offering software development, hardware and networking services to clients in different organizations from 2068 B.S. Our software outsourcing services and solutions are designed with a focus on secure, scalable, expandable and reliable business systems. Through our low cost, high quality and reliable software and hardware services, we serve our clients giving them value for money and thus client satisfaction.', 'Image-20231201033935739.about_us_1.png', 'about us', 2, '2023-11-30 21:54:35', '2023-11-30 21:54:35'),
(7, 'Join Us', 'Join our IT company and be part of a dynamic team driving innovation in the industry. Explore our current job openings and apply now to help deliver cutting-edge solutions to our clients. We offer competitive compensation packages, growth opportunities, and a fun work environment.', 'Image-202312010406561053.careers_banner.png', 'careers icon', 4, '2023-11-30 22:21:56', '2023-11-30 22:21:56'),
(8, 'Boost your Professional Life in MIT', 'In order to enhance ourselves as individuals and advance our purpose of serving the global market, we are looking to recruit a visionary person that will innovate, excel, be diligent, and take ownership of the job.', 'Image-20231203091558777.careers_banner.png', 'careers icon', 13, '2023-12-03 03:30:58', '2023-12-05 02:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `board_members`
--

CREATE TABLE `board_members` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_member` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_members`
--

INSERT INTO `board_members` (`id`, `name`, `designation`, `board_member`, `image`, `content`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Kriti Mandal', 'Laravel Developer', '0', 'Image-20231205062726903.kriti.jpg', 'work smart not hard', 'kriti', '2023-12-05 00:42:26', '2023-12-05 00:42:26'),
(2, 'Ritesh Rajbhandari', 'Java Developer', '0', 'Image-20231205062810753.ritesh.png', 'Hardwork is key to success.', 'Ritesh', '2023-12-05 00:43:10', '2023-12-05 00:43:10'),
(3, 'Minesh Kafle', 'Laravel Developer', '0', 'Image-20231205063110857.minesh.png', 'Creativity is thinking up new things.', 'Minesh', '2023-12-05 00:46:10', '2023-12-05 00:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `meta_description`, `meta_title`, `meta_keywords`) VALUES
(1, 'Home', '2023-11-29 08:28:19', '2023-12-05 02:33:38', 'This is a homepage of MIT solution', 'MIT Solution Home Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development, IT company'),
(2, 'About Us', '2023-11-29 08:47:08', '2023-11-29 08:47:08', 'MIT Solution About us Page', 'MIT Solution About us Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(3, 'Services', '2023-11-29 08:47:25', '2023-11-29 08:47:25', 'MIT Solution Our Service Page', 'MIT Solution Our Service Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(4, 'Careers', '2023-11-29 08:47:43', '2023-11-29 08:47:43', 'MIT Solution Career Oportunity Page', 'MIT Solution Career Oportunity Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(5, 'Contact Us', '2023-11-29 08:47:54', '2023-11-29 08:47:54', 'MIT Solution Contact Page', 'MIT Solution Contact Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(6, 'Our Teams', '2023-11-30 01:27:17', '2023-11-30 01:27:17', 'MIT Solution Team Page', 'MIT Solution Team Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(7, 'Our Clients', '2023-11-30 01:27:38', '2023-11-30 01:27:38', 'MIT Solution Client Page', 'MIT Solution Client Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(8, 'Industries We Serve', '2023-11-30 07:43:33', '2023-11-30 07:43:33', 'MIT Solution Industries we seve Page', 'MIT Solution Industries we seve Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(9, 'Our Working Process', '2023-11-30 08:03:22', '2023-11-30 08:03:22', 'MIT Solution Working Page', 'MIT Solution Working Page', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(10, 'Benefits', '2023-11-30 22:29:38', '2023-11-30 22:29:38', 'Our Benefits', 'Our Benefits', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(11, 'How to Join', '2023-11-30 22:45:13', '2023-11-30 22:45:13', 'Join in our site', 'Join', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(12, 'Projects', '2023-12-02 08:20:52', '2023-12-02 08:20:52', 'Our projects', 'Projects', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development'),
(13, 'Application', '2023-12-03 03:29:46', '2023-12-03 03:29:46', 'our applications', 'Applications', 'mit solution, IT homepage, website development, Darta chalani, Java, HTML, Laravel development');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Rastriya Banijya Bank', 'Image-20231130040954225.rbb_logo.png', NULL, '2023-11-29 22:24:54', '2023-11-29 22:24:54'),
(2, 'Sana Kishan', 'Image-20231130041030973.sanakisan_logo.png', NULL, '2023-11-29 22:25:30', '2023-11-29 22:25:30'),
(3, 'Tewa', 'Image-202311300411241041.tewa_logo.png', NULL, '2023-11-29 22:26:24', '2023-11-29 22:26:24'),
(4, 'Citi RFM', 'Image-20231130043219984.logo.png', NULL, '2023-11-30 10:04:16', '2023-11-30 10:47:19'),
(5, 'Janaki Finance', 'Image-20231130043505435.path.png', NULL, '2023-11-30 10:50:05', '2023-11-30 10:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_27_092257_create_setting_table', 1),
(7, '2023_11_29_062444_create_contacts_table', 1),
(8, '2023_11_29_072027_create_testimonials_table', 1),
(9, '2023_11_29_072950_create_clients_table', 1),
(10, '2023_11_29_093448_create_categories_table', 1),
(11, '2023_11_29_101634_create_sub_categories_table', 1),
(12, '2023_11_29_104328_create_banners_table', 1),
(13, '2023_11_29_140727_create_posts_table', 1),
(14, '2023_11_30_043309_create_board_members_table', 1),
(15, '2023_12_01_155302_create_projects_table', 1),
(16, '2023_12_01_155421_create_tags_table', 1),
(17, '2023_12_01_155434_create_technologies_table', 1),
(18, '2023_12_03_084509_create_applications_table', 1),
(19, '2023_12_04_092037_add_meta_fields_to_categories', 1),
(20, '2023_12_13_082127_add_slug_on_post_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int UNSIGNED NOT NULL DEFAULT '0',
  `sub_category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `meta_title`, `meta_description`, `meta_keywords`, `description`, `status`, `image`, `alt_text`, `priority`, `sub_category_id`, `created_at`, `updated_at`) VALUES
(1, 'darta-chalani', 'Darta Chalani', 'Darta Chalani', 'Darta Chalani Banking Solution Application that is developed using Java by Mit Solution company. It is used in banking solutions.', 'Darta Chalani, Banking Solutions, Java application, MIT Solution, High Security banking solution, Banking solution in Nepal', '<p>\"Darta Chalani\" is a robust and innovative Java-based banking solution that I have developed as part of a comprehensive project. This cutting-edge system is designed to revolutionize the banking experience by seamlessly integrating advanced features and functionalities. </br> </br> The project encompasses a wide array of banking operations, including account management, transaction processing, and customer relationship management, all executed with the utmost efficiency and security. Darta Chalani employs the latest Java technologies to ensure a scalable and maintainable solution, allowing for future enhancements and updates. The user interface is intuitive and user-friendly, providing a smooth experience for both customers and bank staff. Security is a top priority, with robust encryption and authentication mechanisms implemented to safeguard sensitive financial information. Darta Chalani represents a significant leap forward in the realm of banking solutions, combining technological excellence with user-centric design </br></p>', '1', 'Image-20231204075749787.home_project_1.png', 'darta chalani', 1, 6, '2023-12-03 20:27:49', '2023-12-03 20:27:49'),
(2, 'software-development-service-in-nepal', 'Elevating Enterprises through Precision Software Development: A Commitment to Excellence', 'Elevating Enterprises through Precision Software Development: A Commitment to Excellence', 'At MIT Solution, we recognize the pivotal role that meticulously crafted software solutions play in driving business objectives.', 'IT company, Nepal IT company, website development, laravel website, software development in nepal, Java development, It jobs', '<p></p><h2><span style=\"color: var(--bs-heading-color); font-size: 24px; text-align: var(--bs-body-text-align);\">Introduction:</span></h2>  In the contemporary business landscape, software development is the linchpin upon which the success of enterprises hinges. At MIT Solution, we recognize the pivotal role that meticulously crafted software solutions play in driving business objectives. This article delves into the nuanced world of software development, underscoring the fusion of artistry and scientific precision in our approach at MIT Solution to deliver cutting-edge solutions for our discerning clientele.&nbsp;<p></p><p></p><h2> The Art of Software Development: </h2><p>At MIT Solution, software development transcends the realm of technicality to embody an art form. Our seasoned team of developers approaches each project with a keen sense of creativity and an unwavering commitment to design excellence. From conceptualization to execution, we view every line of code as a brushstroke, creating a bespoke masterpiece tailored to meet the unique requirements of our clients.&nbsp; Strategic User-Centric Design: Crafting an exceptional software application requires more than technical proficiency; it necessitates a profound understanding of end-user needs. We excels in implementing strategic user-centric design principles, ensuring that our solutions not only align with business objectives but also seamlessly integrate with the user\'s journey. By incorporating user feedback iteratively, we refine our software to offer an intuitive and engaging user experience.</p> <p></p><h2> Agile Methodology for Dynamic Solutions:</h2><br< <=\"\" h2=\"\">&nbsp;In the ever-evolving business landscape, adaptability is paramount. At MIT Solution, we embrace Agile methodologies, facilitating nimble responses to evolving requirements and ensuring the delivery of incremental, high-quality updates. This iterative approach not only expedites development but also guarantees that the final product is resilient, flexible, and capable of evolving alongside dynamic business environments.&nbsp;&nbsp;</br<><p></p><h2><br< <=\"\" h2=\"\">The Science of Software Development:</br<></h2><p><br< <=\"\" h2=\"\"> Beneath the veneer of artistic expression lies a foundation of scientific rigor. MIT Solution operates at the forefront of technology, leveraging the latest advancements, frameworks, and best practices. Our software development process adheres to a scientific methodology, meticulously addressing factors such as reliability, scalability, and efficiency in every aspect of the development lifecycle.<br> </br<> </p><p></p><h2>Integration of Cutting-Edge Technologies:</h2> <br< <=\"\" h2=\"\"> Remaining at the forefront of technological innovation is imperative for staying competitive. Our development team is proficient in the latest programming languages, frameworks, and tools, ensuring that our software solutions not only meet contemporary standards but also stand resilient in the face of future advancements. From artificial intelligence to blockchain, we harness cutting-edge technologies to fortify our commitment to excellence.<br></br<><h2>Rigorous Quality Assurance:</h2><br< <=\"\" h2=\"\"> A hallmark of our approach is an unwavering commitment to delivering flawless software solutions. Our dedicated quality assurance team conducts exhaustive testing, scrutinizing every facet of the software for functionality, performance, security, and scalability. This rigorous quality assurance process guarantees that our clients receive software solutions that are not only innovative but also reliable and secure.<br></br<><h2>Conclusion:</h2><br< <=\"\" h2=\"\"> Software development at MIT Solution is an intricate tapestry of art and science, where precision meets innovation. Our adept team of developers and engineers harmonize creativity, vision, and technical expertise to craft bespoke software solutions that transcend expectations. Whether initiating a new project or seeking to enhance existing applications, We stands as the epitome of professional excellence in the realm of software development. Contact us today to embark on a transformative journey toward unparalleled digital sophistication.</br<><p></p><h2><br< <=\"\" h2=\"\"><p></p></br<></h2><p></p>', '1', 'Image-202312040824141017.software-developer.jpg', 'System Development', 1, 1, '2023-12-03 20:54:14', '2024-01-09 23:48:12'),
(3, 'strategic-it-aduits-in-nepal', 'Strategic IT Audits for Robust Cybersecurity: Enhancing Digital Resilience with MIT Solution', 'Strategic IT Audits for Robust Cybersecurity: Enhancing Digital Resilience with MIT Solution', 'At MIT Solution, we take pride in delivering advanced Information Systems (IS) audit services to bolster your organization\'s cybersecurity defenses.', 'IS Audit in Nepal, Nepal IT company, IS Audit Outsource, IS Audit', '<p></p><h2>Introduction</h2>At MIT Solution, we take pride in delivering advanced Information Systems (IS) audit services to bolster your organization\'s cybersecurity defenses. Our expert team conducts meticulous assessments, evaluating your IT infrastructure to identify vulnerabilities and ensure strict compliance with industry standards.Our IS audit services transcend traditional approaches, focusing on strategic measures to fortify your digital resilience. We perform thorough risk assessments, scrutinize data integrity, and evaluate the effectiveness of your security controls.<h2>Actionable Insights for Robust Security:</h2><p><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">At MIT Solution, we don\'t just provide audit reports; we deliver tailored insights and recommendations. Empowering your organization with actionable strategies, we enable you to proactively address potential threats and stay ahead in the ever-evolving landscape of cybersecurity.  Elevate your security framework with MIT Solution – where proactive auditing meets cutting-edge cybersecurity solutions. Your digital resilience is our priority.</span></p><p></p>', '1', 'Image-2023120408435868.isaudit.jpg', 'IS Audit', 2, 13, '2023-12-03 21:13:58', '2024-01-10 00:25:05'),
(4, 'website-development-in-nepal', 'Crafting Digital Excellence: Comprehensive Website Development Solutions by MIT Solution', 'Crafting Digital Excellence: Comprehensive Website Development Solutions by MIT Solution', 'At MIT Solution, we specialize in the art of crafting digital excellence through our comprehensive website development solutions.', 'IT company, Nepal IT company, website development, laravel website, affordable web development', '<p>At MIT Solution, we specialize in the art of crafting digital excellence through our comprehensive website development solutions. Our expert team leverages cutting-edge technologies to build websites that not only meet but exceed your expectations. </br>  <h2>Tailored Development for Your Unique Needs: </h2></br> Our approach to website development goes beyond the ordinary. We tailor solutions to suit your unique business requirements, ensuring a seamless and engaging user experience. Whether it\'s a corporate website, e-commerce platform, or a custom web application, MIT Solution delivers results that resonate. We don\'t just build websites; we create strategic digital assets. MIT Solution understands the dynamic nature of the online landscape and crafts websites that are not only visually appealing but also strategically aligned with your business objectives. <h2> <br>Collaborate with Excellence: <br> </h2> Elevate your online presence by collaborating with MIT Solution – your partner in crafting digital excellence. From concept to execution, we bring your vision to life, ensuring your digital footprint reflects the innovation and uniqueness of your brand.</p>', '1', 'Image-202312040853311072.website-development.jpg', 'web development', 1, 13, '2023-12-03 21:23:31', '2023-12-03 21:23:31'),
(5, 'strategic-digital-trasnformation', 'Strategic Guidance for Digital Transformation and IT Excellence', 'Strategic Guidance for Digital Transformation and IT Excellence', 'At MIT Solution, we offer innovative IT consultation services to guide organizations through the complexities of the digital landscape.', 'Strategic Guidance for Digital Transformation, It consultation, business IT Partners, IT outsource', '<p>At MIT Solution, we offer innovative IT consultation services to guide organizations through the complexities of the digital landscape. Our seasoned consultants bring a wealth of experience, providing strategic insights to drive digital transformation and achieve IT excellence.<h2></br></br>Strategic Digital Transformation:</h2></br></br>Our IT consultation services are designed to align technology initiatives with your business goals. We offer strategic guidance on adopting the latest technologies, optimizing IT infrastructure, and enhancing overall operational efficiency.<h2></br></br>Customized Solutions for Business Success:</h2></br></br>MIT Solution goes beyond one-size-fits-all approaches. We understand that each business is unique, and our consultants provide customized solutions tailored to your specific needs. Whether it\'s streamlining processes, implementing new technologies, or enhancing cybersecurity, we\'ve got you covered.<h2></br></br>Partnering for IT Excellence:</h2></br></br> Collaborate with MIT Solution and embark on a journey towards IT excellence. Our consultants work alongside your team, offering expertise that empowers your organization to navigate digital frontiers with confidence. Elevate your IT strategy with MIT Solution – where innovation meets consultation for lasting success. <br> </p>', '1', 'Image-20231204090326831.it-consultancy.jpg', 'it consulation', 1, 13, '2023-12-03 21:33:26', '2023-12-03 21:33:26'),
(6, 'Vendor-Enlistment', 'Vendor Enlistment System', 'Vendor Enlistment', 'Vendor Enlistment', 'Vendor Enlistment, vendor enlishment system in nepal, vendor system in nepal, vendor enlishment software', '<p>Vendor Enlistment System is digitalized vendor management system in which vendor have individual profile and can update their legal documents as well as service that will be provided to the party. Organization have verifier, approver and admin profile through which organization maintain the vendors and services for the fiscal year.</p><p>The manual yearly process of maintaining vendors have been replaced by this digitalized system and about 95% to work load will be reduced by this system of administrative staff.</p>', '1', 'Image-20240110041830453.Image-20231206032110797.vendor.jpg', 'vendor enlishment system', 1, 23, '2024-01-09 22:33:30', '2024-01-09 22:33:30'),
(7, 'Valuator-Management-System', 'Valuator Management System', 'Valuator Management System', 'Valuator Management System', 'valuator Management', '<h2 style=\"margin-top: 0pt; margin-bottom: 0pt;  line-height: 24.98pt; color: rgb(0, 0, 0); direction: ltr; unicode-bidi: embed; word-break: normal;\">Introduction</h2><p style=\"margin-top: 0pt; margin-bottom: 0pt;  line-height: 24.98pt; color: rgb(0, 0, 0); direction: ltr; unicode-bidi: embed; word-break: normal;\">Valuator Management System also know as is web based system which digitalized the Valuator legal documents and services that valuator is supposed to provide. This system will provide a one-stop platform to manage all the valuator’s documents, their shareholders, as well as allocated engineer details.</p><p></p><h2 style=\"color: rgb(0, 0, 0);\">Functionalities:</h2><ul><li>End to End Management of Valuator</li><li>Legal Documents including tax clearance and Valuation limit will be managed from valuator profile and Bankers verifier and approval process.</li><li>Valuation limit upgradation and working area expansion will be performed through the system.</li><li>Security bid amount from the Valuator will be processed through the system.</li><li>Tax Clearance duration will be captured automatically.</li><li>Valuator will be listed as per province, district for the banker site.</li><li>Renewal and other legal prospects will be automated through the system.</li></ul>', '1', 'Image-20240110062514436.Image-20240109084952697.valuator.jpg', NULL, 4, 24, '2024-01-10 00:40:14', '2024-01-10 00:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `demo_url`, `image`, `status`, `priority`, `post_id`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, 'दर्ता-चलानी', '#', 'Image-20231202023958713.home_project_1.png', '1', '1', 1, 'darta chalani', '2023-12-02 03:09:58', '2023-12-02 03:09:58'),
(2, 'Vendor Enlishment', '#', 'Image-20240110042802479.Image-20231206032110797.vendor.jpg', '1', '2', 6, 'vendor enlishment system', '2024-01-09 22:43:02', '2024-01-09 22:43:02'),
(3, 'Valuator Management System', '#', 'Image-20240110062604307.Image-20240109084952697.valuator.jpg', '1', '3', 7, 'Valuator Management System', '2024-01-10 00:41:04', '2024-01-10 00:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mit Solution',
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mitsolution logo',
  `site_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `site_name`, `site_logo`, `logo_alt_text`, `site_location`, `site_phone_number`, `site_email`, `meta_description`, `meta_title`, `meta_keywords`, `facebook_link`, `linkedin_link`, `twitter_link`, `instagram_link`, `created_at`, `updated_at`) VALUES
(1, 'MIT Solution', 'Image-20231204055326592.mitsolution-logo.png', 'mitsolution logo', 'Blue Bird, Tripureshwor, Kathmandu', '1234567890', 'info@mitsolution.com.np', 'Elevate your business with MIT Solution – your go-to for custom software, website development, and comprehensive IT services. Our expert team crafts tailored solutions to enhance your digital presence. Partner with us for a seamless blend of innovation and implementation, and take your digital experience to the next level.', 'MIT Solution', 'IT company, Nepal IT company, website development, laravel website, software development in nepal, Java development, It jobs', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://twitter.com/', 'https://www.instagram.com/', '2023-12-03 18:23:26', '2023-12-04 21:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `description`, `image`, `alt_text`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'System Development', 'Together, we define, develop, and deliver different design solutions that create an unparalleled competitive advantage for Web3 companies in a sea of competition.', 'Image-20231129024935454.services_1.png', 'System Development', 3, '2023-11-29 09:04:35', '2023-11-29 09:04:35'),
(2, 'IS Audit', 'From automation to advanced analytics and seamless experiences, we can embed AI in business. We\'ll deliver new operating models and strategic intelligence for smart processes and data-driven decisions. What, Why and How?', 'Image-20231129030519595.services_2.png', 'IS Audit', 3, '2023-11-29 09:20:19', '2023-11-29 09:20:19'),
(3, 'FinTech', 'Innovative technology that aims to enhance and optimize the provision of and use of payment institutions.', 'Image-20231130013448241.fintech_icon.png', 'FinTech', 8, '2023-11-30 07:49:48', '2023-11-30 07:49:48'),
(4, 'Banking Solutions', 'We improve the banking sector by creating solutions for efficient management and client services.', 'Image-202311300139151155.banking_icon.png', 'Banking Softwares', 8, '2023-11-30 07:54:15', '2023-11-30 07:54:15'),
(5, 'Drone Aviation', 'We have created our own drone enlistment sytem and pilot registration system.', 'Image-20231130014033363.drone_icon.png', 'Drone softwares', 8, '2023-11-30 07:55:33', '2023-11-30 07:55:33'),
(6, 'Darta-Chalani', 'We create Darta Chalani system for office automation.', 'Image-20231130014214587.darta_icon.png', 'office automation software', 8, '2023-11-30 07:57:14', '2023-11-30 07:57:14'),
(7, 'Industrial', 'Designing alternatives for businesses to promote their goods through visual illustration', 'Image-202311300144411183.industrial_icon.png', 'industrial software', 8, '2023-11-30 07:59:41', '2023-11-30 07:59:41'),
(8, 'Analysis', 'We write technical specifications for development, taking into account the business processes and technologies of the customer and the needs of users.', 'Image-20231130015239666.darta_icon.png', 'Analysis', 9, '2023-11-30 08:07:39', '2023-11-30 08:07:39'),
(9, 'Design', 'We adapt the customer\'s corporate identity to the platform guidelines. We draw convenient and easy to understand interfaces.', 'Image-20231130021918329.design.png', 'design', 9, '2023-11-30 08:34:18', '2023-12-01 04:10:58'),
(10, 'Development', 'We create an extensible architecture, write clean and stable code. We integrate with client requirement technologies.', 'Image-20231130022015999.development.png', 'development', 9, '2023-11-30 08:35:15', '2023-12-01 04:12:45'),
(11, 'Support', 'We monitor the stability of the application.', 'Image-20231130022103749.support.png', 'Support', 9, '2023-11-30 08:36:03', '2023-11-30 08:36:03'),
(12, 'Website Development', 'We create custom web hosting based on your specific company requirements, allowing you to complete your upcoming project with much greater efficiency.', 'Image-202311300248231215.web-development.png', 'web development', 3, '2023-11-30 09:03:23', '2023-12-01 03:55:16'),
(13, 'IT Consultation', 'With the assistance of MIT IT consulting services, you may improve your ability to capitalize on technological innovations and establish a competitive advantage.', 'Image-2023113002491837.It-consultation.png', 'it consulation', 3, '2023-11-30 09:04:18', '2023-11-30 09:04:18'),
(14, 'Team Work', 'People can come up with answers that are beneficial and practical when they draw on one other\'s abilities and knowledge.', 'Image-20231201041633875.person_icon.png', 'team work icon', 10, '2023-11-30 22:31:33', '2023-11-30 22:31:33'),
(15, 'Secured Future', 'Attractive payment with increment on time.', 'Image-20231201041728727.re_pause_icon.png', 'secured future', 10, '2023-11-30 22:32:28', '2023-11-30 22:32:28'),
(16, 'Learning Opportunity', 'Make sure your workforce will truly take advantage of development-focused benefits before you invest time and resources in them.', 'Image-202312010418511202.graduate.png', 'learning opportunity', 10, '2023-11-30 22:33:51', '2023-11-30 22:33:51'),
(17, 'Upgrade Skills', 'Observe your supervisor at work to learn how they manage their daily activities and obligations and eventually advance at work.', 'Image-20231201042355691.graph.png', 'upgrade skill', 10, '2023-11-30 22:38:55', '2023-11-30 22:38:55'),
(18, 'Internship', 'Apply theoretical knowledge on th e real world. Boost your resume.', 'Image-20231201043501220.internship_icon.png', 'intership', 11, '2023-11-30 22:50:01', '2023-11-30 22:50:01'),
(19, 'Trainee', 'Learn about the industry through a combination of training and the opportunity to apply what you learn in the workplace.', 'Image-20231201043544133.trainee_icon.png', 'trainee', 11, '2023-11-30 22:50:44', '2023-11-30 22:50:44'),
(20, 'Direct Hire', 'Send your resume to grab our direct hire opportunities.', 'Image-202312010447351091.candidate.png', 'direct hire', 11, '2023-11-30 23:02:35', '2023-12-01 04:26:29'),
(21, 'Current Opening', 'Join our our team and contribute as well as grow your ideas, knowledge and experience with us.', 'Image-20231201044831345.current_opening_icon.png', 'current opening', 11, '2023-11-30 23:03:31', '2023-12-01 04:33:14'),
(22, 'Get Exceptional Service For Growth', 'You may be sure that we will provide outstanding, timely service given our considerable experience in IT consulting, web design, graphic design, desktop publishing solutions, computer networking, and IT equipment We value our customers. A company called Makalu IT Solutions customizes its software development process to fulfill the demands of its customers in a flexible setting. High-quality work is a necessity for every task we take on at Makalu IT Solutions since we think \"every day counts.\" And why not, given that profitable businesses frequently bring in new clients.', 'Image-20231201040950844.home_2.png', 'home banner', 1, '2023-12-01 10:24:50', '2023-12-01 10:24:50'),
(23, 'Vendor Enlishment', 'Vendor Enlistment System is digitalized vendor management system in which vendor have individual profile and can update their legal documents as well as service that will be provided to the party.', 'Image-20240110041150110.Image-20231130014033363.drone_icon.png', 'vendor enlishment system', 8, '2024-01-09 22:25:28', '2024-01-09 22:26:50'),
(24, 'Valuator Management', 'Valuator Management System also know as is web based system which digitalized the Valuator legal documents and services that valuator is supposed to provide.', 'Image-20240110062125472.Image-20240110041150110.Image-20231130014033363.drone_icon.png', 'Valuator Management', 8, '2024-01-10 00:36:25', '2024-01-10 00:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web', '2023-12-02 08:06:41', '2023-12-05 02:31:46'),
(2, 'Database', '2023-12-02 08:07:00', '2023-12-02 08:07:00'),
(3, 'Analytics', '2023-12-02 08:07:22', '2023-12-02 08:07:22'),
(4, 'Testing', '2023-12-02 08:07:32', '2023-12-02 08:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `tag_id`, `image`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 1, 'Image-20231202020159930.laravel.png', 'laravel', '2023-12-02 08:16:59', '2023-12-02 08:16:59'),
(2, 'Java Script', 1, 'Image-20231202020239833.javascript.png', 'javascript', '2023-12-02 08:17:39', '2023-12-02 08:17:39'),
(3, 'MySQL', 2, 'Image-202312030730211107.mysql.png', 'MySQL', '2023-12-03 01:45:21', '2023-12-03 01:45:21'),
(4, 'SQLite', 2, 'Image-20231203073411431.sqllite.jfif', 'Sqlite', '2023-12-03 01:49:11', '2023-12-03 01:49:11'),
(5, 'Python', 3, 'Image-20231203073703457.Python.png', 'python', '2023-12-03 01:52:03', '2023-12-03 01:52:03'),
(6, 'Junit', 4, 'Image-20231203074407164.Junit.png', 'junit', '2023-12-03 01:59:07', '2023-12-03 01:59:07'),
(7, 'Mockito', 4, 'Image-20231203074502251.mockito.png', 'mockito', '2023-12-03 02:00:02', '2023-12-03 02:00:02'),
(8, 'HTML', 1, 'Image-20231203074547587.html.png', 'html', '2023-12-03 02:00:47', '2023-12-03 02:00:47'),
(9, 'Java', 1, 'Image-20231203074639366.java.png', 'java', '2023-12-03 02:01:39', '2023-12-03 02:01:39'),
(10, 'React', 1, 'Image-20231203074654805.react.png', 'react', '2023-12-03 02:01:54', '2023-12-03 02:01:54'),
(11, 'Vue', 1, 'Image-2023120307471130.vue.png', 'vue', '2023-12-03 02:02:11', '2023-12-03 02:02:11'),
(12, 'Jest', 4, 'Image-20231203074854456.jest.png', 'jest', '2023-12-03 02:03:54', '2023-12-03 02:03:54'),
(13, 'Pandas', 3, 'Image-20231203075027117.pandas.png', 'pandas', '2023-12-03 02:05:27', '2023-12-03 02:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `rating`, `image`, `content`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Ram Krishna Shrestha', 'CEO Nepal Company', 4, 'Image-202312050815121089.person1.png', 'Thank You for your service. I am very pleased with the result. I have seen exponencial growth in my business and its all thanks to your amazing service', 'Ram Krishna Shrestha', '2023-11-29 22:12:31', '2023-12-05 02:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', NULL, '$2y$12$.5dTfjV2f2ODfUrMbFAxpOi/aj1x1Nx5itwk01DBP72WiK.cp.9MW', NULL, '2023-11-29 08:27:14', '2023-11-29 08:27:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_category_id_foreign` (`category_id`);

--
-- Indexes for table `board_members`
--
ALTER TABLE `board_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_post_id_foreign` (`post_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `technologies_tag_id_foreign` (`tag_id`);

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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `board_members`
--
ALTER TABLE `board_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `technologies`
--
ALTER TABLE `technologies`
  ADD CONSTRAINT `technologies_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
