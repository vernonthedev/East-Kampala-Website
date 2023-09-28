-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 10:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventweb_ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(10) NOT NULL,
  `admin_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_role`) VALUES
(1, 'kali', 'kali123', 0),
(2, 'Vernon', 'vernon123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audio_uploads`
--

CREATE TABLE `audio_uploads` (
  `id` int(11) NOT NULL,
  `audio_name` varchar(1000) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio_uploads`
--

INSERT INTO `audio_uploads` (`id`, `audio_name`, `file_path`, `time_stamp`) VALUES
(4, 'ANNOTINGA-KENNEDY.mp3', 'uploads/audios/', '2023-09-22 00:32:44'),
(7, 'Whitney Houston - I Look to You - Piano Karaoke Instrumental Cover with Lyrics_GV-OP4bBqn4.mp3', 'uploads/audios/', '2023-09-27 21:50:59'),
(8, 'vlc-record-2023-09-25-12h09m58s-Best of Radiance Acappella, Top 10 Songs-.mp3', 'uploads/audios/', '2023-09-27 21:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `banner_slider`
--

CREATE TABLE `banner_slider` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_content` varchar(250) NOT NULL,
  `banner_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_slider`
--

INSERT INTO `banner_slider` (`id`, `banner_title`, `banner_content`, `banner_img`) VALUES
(21, 'We  Are A Family Of God', 'Come worship with us every Saturday, Wednesday and Friday.', 'bannerEkc.png'),
(22, 'A Christian Journey', 'Ask Jesus Christ for Strength and He will lead you through.', 'wallpaperflare.com_wallpaper (69).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bulletin_qrcodes`
--

CREATE TABLE `bulletin_qrcodes` (
  `bq_id` int(10) NOT NULL,
  `bq_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulletin_qrcodes`
--

INSERT INTO `bulletin_qrcodes` (`bq_id`, `bq_image`) VALUES
(2, 'devotions.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiry`
--

CREATE TABLE `contact_inquiry` (
  `c_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_phone` bigint(15) NOT NULL,
  `c_subject` varchar(100) NOT NULL,
  `c_massage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_inquiry`
--

INSERT INTO `contact_inquiry` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_subject`, `c_massage`) VALUES
(6, 'vernon', 'vernonthedev@yahoo.com', 723452435, 'Prayer request', 'Can you help my daughter.'),
(7, 'james bond', 'james@emil.com', 345243523, 'New order', 'Can you help me'),
(8, 'vernon', 'vernonthedev@yahoo.com', 723452435, 'Prayer request', 'lora'),
(9, 'joan', 'james@emil.com', 723452435, 'Prayer request', 'I pray for my sister'),
(10, 'david', 'vernonthedev@yahoo.com', 723452435, 'Prayer request', 'pray for my brother'),
(13, 'Tr. Angella Kawooya', 'angella@gmail.com', 763436475, 'Suggestion', 'Can you please change the website color pallates. \r\nAnd maybe you can decide on who is going to run the admin panel. yeah.\r\nBut thanks alot for the work'),
(14, 'joan', 'james@emil.com', 761347316, 'Prayer request', 'Am sick pray for me'),
(15, 'sleeping tom', 'sleep@madon.co', 723452435, 'Suggestion', 'Please add us more food, as long as you can.'),
(16, 'vernon', 'vernonthedev@yahoo.com', 723452435, 'Prayer request', 'am sick'),
(17, 'Kato Lubwama', 'kato@gmail.com', 76525283, 'Prayer Request', 'Please pray for my brother, he is barely breathing here on the hospital.'),
(18, 'vernonr', 'james@emil.com', 723452435, 'Prayer request', 'nn'),
(19, 'vernon', 'vernonthedev@yahoo.com', 723452435, 'Prayer request', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE `event_list` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_place` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_content` varchar(1000) NOT NULL,
  `event_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_list`
--

INSERT INTO `event_list` (`event_id`, `event_title`, `event_place`, `event_date`, `event_content`, `event_img`) VALUES
(13, 'car wash', 'Church Grounds', '2023-09-22', 'wdwqefqfadsfafasd', 'aleksandar-popovski-OZezOrOR9PQ-unsplash.jpg'),
(17, 'Youth Corner', 'Church Auditorium', '2023-09-21', 'Please come in big numbers', '77kLebA-gamer-wallpaper.jpg'),
(18, 'Bible Readings', 'Church Grounds', '2023-09-23', 'Come with a friend', 'nkuZyrq-gamer-wallpaper.jpg'),
(19, 'Church At Study', 'Church Grounds', '2023-09-30', 'Please we shall come as a family', 'wallpaperflare.com_wallpaper (42).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(100) NOT NULL,
  `gallery_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`gallery_id`, `gallery_title`, `gallery_img`) VALUES
(3, 'Senior Youth', 'IMG-20230804-WA0001.jpg'),
(4, 'Senior Youth', 'IMG-20230901-WA0038.jpg'),
(7, 'Senior Youth', 'IMG-20230901-WA0051.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE `member_list` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_title` varchar(100) NOT NULL,
  `member_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`member_id`, `member_name`, `member_title`, `member_img`) VALUES
(8, 'Joan', 'Youth Leader', 'youth_leader.jpg'),
(9, 'Joshua', 'Sabbath School Reporter', 'senior.jpg'),
(10, 'Dennis', 'Public address system manager', 'pa.jpg'),
(11, 'Elijah', 'Youth Mobilizer', 'eli.jpg'),
(12, 'Dr. Mukasa Robert', 'Outreach ministry leader', 'morken.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `news_place` varchar(100) NOT NULL,
  `news_type` text NOT NULL,
  `news_content` varchar(1000) NOT NULL,
  `news_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_place`, `news_type`, `news_content`, `news_img`) VALUES
(6, 'Trust the Holy One', '2023-09-21', 'EKC', 'Love and Care', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet doloribus explicabo omnis eaque quos harum officia consectetur placeat, fugit repellat exercitationem. Suscipit beatae eligendi et placeat fuga dolor enim mollitia quidem, vero impedit voluptate quasi aut, sunt ratione repellendus quisquam fugiat debitis vitae qui ex laborum iste dicta rerum eius? Nam vitae voluptates blanditiis eius sapiente aliquam quia dolores consequuntur laborum tempora, obcaecati, accusantium, atque enim earum optio saepe temporibus deleniti. Reiciendis cum porro excepturi quia, necessitatibus consequatur voluptatem sed incidunt voluptate eum minus animi magnam doloribus possimus quidem eveniet nam atque corrupti, deleniti nisi odio voluptatum. Consequatur, quis cupiditate!', 'samantha-sophia-NaWKMlp3tVs-unsplash.jpg'),
(7, 'Grace and Grace Alone', '2023-09-23', 'East Kampala Church', 'Grace', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet doloribus explicabo omnis eaque quos harum officia consectetur placeat, fugit repellat exercitationem. Suscipit beatae eligendi et placeat fuga dolor enim mollitia quidem, vero impedit voluptate quasi aut, sunt ratione repellendus quisquam fugiat debitis vitae qui ex laborum iste dicta rerum eius? Nam vitae voluptates blanditiis eius sapiente aliquam quia dolores consequuntur laborum tempora, obcaecati, accusantium, atque enim earum optio saepe temporibus deleniti. Reiciendis cum porro excepturi quia, necessitatibus consequatur voluptatem sed incidunt voluptate eum minus animi magnam doloribus possimus quidem eveniet nam atque corrupti, deleniti nisi odio voluptatum. Consequatur, quis cupiditate!', 'samuel-martins-3U7HcqkIbb4-unsplash.jpg'),
(8, 'Trust the Holy One', '2023-09-08', 'East Kampala Church', 'Love and Care', 'For further questions, including partnership opportunities, please email hello@creative-tim.com or contact using our contact form.', 'channels4_profile.jpg'),
(10, 'Trust the Holy Onehh', '2023-09-27', 'EKC', 'Love and Care', 'khjbhj', 'logo.png'),
(11, 'Love and care', '2023-09-16', 'East Kampala Church', 'popular', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet doloribus explicabo omnis eaque quos harum officia consectetur placeat, fugit repellat exercitationem. Suscipit beatae eligendi et placeat fuga dolor enim mollitia quidem, vero impedit voluptate quasi aut, sunt ratione repellendus quisquam fugiat debitis vitae qui ex laborum iste dicta rerum eius? Nam vitae voluptates blanditiis eius sapiente aliquam quia dolores consequuntur laborum tempora, obcaecati, accusantium, atque enim earum optio saepe temporibus deleniti. Reiciendis cum porro excepturi quia, necessitatibus consequatur voluptatem sed incidunt voluptate eum minus animi magnam doloribus possimus quidem eveniet nam atque corrupti, deleniti nisi odio voluptatum. Consequatur, quis cupiditate!', 'wallpaperflare.com_wallpaper (15).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(255) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `folder_path` varchar(100) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `filename`, `folder_path`, `time_stamp`) VALUES
(1, 'INV-D-2023-Q3-L07.pdf', 'uploads/', '2023-09-20 23:27:55'),
(2, 'INV-D-2023-Q3-L06.pdf', 'uploads/files/', '2023-09-21 22:31:35'),
(4, 'INV-D-2023-Q3-L10.pdf', 'uploads/files/', '2023-09-23 17:34:57'),
(5, 'INV-D-2023-Q3-L05.pdf', 'uploads/files/', '2023-09-25 21:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(100) NOT NULL,
  `video_location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`video_id`, `video_title`, `video_location`) VALUES
(2, 'Food Donate', 'julia-m-cameron.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `audio_uploads`
--
ALTER TABLE `audio_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_slider`
--
ALTER TABLE `banner_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulletin_qrcodes`
--
ALTER TABLE `bulletin_qrcodes`
  ADD PRIMARY KEY (`bq_id`);

--
-- Indexes for table `contact_inquiry`
--
ALTER TABLE `contact_inquiry`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `event_list`
--
ALTER TABLE `event_list`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `audio_uploads`
--
ALTER TABLE `audio_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banner_slider`
--
ALTER TABLE `banner_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bulletin_qrcodes`
--
ALTER TABLE `bulletin_qrcodes`
  MODIFY `bq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_inquiry`
--
ALTER TABLE `contact_inquiry`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event_list`
--
ALTER TABLE `event_list`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
