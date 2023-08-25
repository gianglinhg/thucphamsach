-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 06, 2023 lúc 10:13 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `farmapp3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `title`, `img`, `status`) VALUES
(12, 'Trái cây', 'cate_4.jpg', 0),
(13, 'Thịt tươi', 'cate_3.jpg', 1),
(14, 'Trứng và bơ', 'cate_1.jpg', 1),
(15, 'Rau củ', 'cate_5.jpg', 1),
(16, 'Nước ép', 'cate_6.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_news`
--

CREATE TABLE `category_news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_news`
--

INSERT INTO `category_news` (`id_news`, `title`) VALUES
(18, 'Rau củ'),
(19, 'Gà rns');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `createdAd` date DEFAULT cfarmapp3farmapp3farmapp3urdate(),
  `news_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` longtext NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `createdAd`, `news_id`, `user_id`, `content`, `createdAt`) VALUES
(5, '2022-04-11', 10, 1, 'dâdad', '2022-04-11'),
(10, '2022-04-11', 10, 1, 'bài  viết rất hày và bổ ích có những lời khuyên thú vị ', '2022-04-11'),
(11, '2022-04-12', 10, 0, 'fsfs', '2022-04-12'),
(12, '2022-04-13', 12, 3, 'ádksakjdlasjdljasd', '2022-04-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite`
--

CREATE TABLE `favorite` (
  `favorite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `favorite`
--

INSERT INTO `favorite` (`favorite_id`, `user_id`, `product_id`) VALUES
(8, 0, 46),
(17, 0, 49),
(18, 0, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `intro`
--

CREATE TABLE `intro` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `intro`
--

INSERT INTO `intro` (`id`, `content`) VALUES
(1, '<p>Trong chiều ng&agrave;y 14/04 (giờ Việt Nam), trận B&aacute;n kết c&ograve;n lại của&nbsp;<a href=\"https://gamek.vn/lpl-mua-xuan-2022.htm\" target=\"_blank\" title=\"LPL MÙA XUÂN 2022 \">LPL M&ugrave;a Xu&acirc;n 2022</a>&nbsp;đ&atilde; diễn ra với cuộc đối đầu giữa &quot;Binh đo&agrave;n ho&agrave;ng gia&quot;&nbsp;<a href=\"https://gamek.vn/royal-never-give-up.htm\" target=\"_blank\" title=\"royal never give up \">Royal Never Give Up</a>&nbsp;v&agrave; JD Gaming. Một b&ecirc;n l&agrave; tập thể d&ugrave; được đặt nhiều niềm tin, c&oacute; cả DNA nh&agrave; v&ocirc; địch nhưng trụ cột&nbsp;<a href=\"https://gamek.vn/xiaohu.htm\" target=\"_blank\" title=\"Xiaohu \">Xiaohu</a>&nbsp;lại vướng rắc rối hậu trường. Trong khi đ&oacute;, b&ecirc;n c&ograve;n lại l&agrave; JDG đang c&oacute; phong độ cực tốt, lại vừa hủy diệt cả Weibo Gaming của&nbsp;<a href=\"https://gamek.vn/sofm.htm\" target=\"_blank\" title=\"sofm\">SofM</a>&nbsp;trong thế trận &aacute;p đảo ho&agrave;n to&agrave;n.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-1-16499131647891451078018.jpg\" target=\"_blank\" title=\"Trận đấu rất được mong chờ thuộc khuôn khổ Bán kết LPL Mùa Xuân 2022: RNG - JDG\"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 1.\" id=\"img_438930417009938432\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-1-16499131647891451078018.jpg\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 1.\" /></a></p>\r\n\r\n<p>Trận đấu rất được mong chờ thuộc khu&ocirc;n khổ B&aacute;n kết LPL M&ugrave;a Xu&acirc;n 2022: RNG - JDG</p>\r\n\r\n<p>V&agrave; thực tế, thế trận ở 2 game đầu phản &aacute;nh đ&uacute;ng những lo ngại của fan RNG khi JDG kh&ocirc;ng gặp qu&aacute; nhiều kh&oacute; khăn để hủy diệt RNG. Nhưng khi &quot;Binh đo&agrave;n ho&agrave;ng gia&quot; r&uacute;t ngắn tỉ số ở v&aacute;n 3, kh&aacute;n giả LPL bắt đầu cảm thấy &quot;c&oacute; g&igrave; đ&oacute; kh&ocirc;ng ổn&quot;. V&agrave; kh&ocirc;ng c&oacute; g&igrave; phải nghi ngờ nữa khi kịch bản &quot;lật k&egrave;o&quot; như trận Victory Five - Top Esports đ&atilde; t&aacute;i hiện. RNG thắng liền một mạch 3 game li&ecirc;n tiếp v&agrave; khiến JDG phải xuống nh&aacute;nh thua đ&aacute;nh với V5 trong ho&agrave;n cảnh kh&ocirc;ng kh&aacute;c g&igrave; Rookie v&agrave; c&aacute;c đồng đội.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-2-16499132502621920178777.jpg\" title=\"Và kết quả cũng như diễn biến không khác gì trận V5 - TES khi RNG cũng để JDG dẫn trước 2 game rồi \"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 2.\" id=\"img_438930769884745728\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-2-16499132502621920178777.jpg\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 2.\" /></a></p>\r\n\r\n<p>V&agrave; kết quả cũng như diễn biến kh&ocirc;ng kh&aacute;c g&igrave; trận V5 - TES khi RNG cũng để JDG dẫn trước 2 game rồi &quot;lật k&egrave;o&quot;</p>\r\n\r\n<p>Chứng kiến 2 trận B&aacute;n kết LPL M&ugrave;a Xu&acirc;n 2022 đều kết th&uacute;c y hệt nhau về mặt tỉ số cả diễn biến, cộng đồng LMHT xứ Trung cũng v&ocirc; c&ugrave;ng bực tức. Nhiều kh&aacute;n giả thẳng thắn cho rằng, BTC LPL đ&atilde; &quot;l&ecirc;n kịch bản&quot; để c&aacute;c trận đấu hấp dẫn, k&eacute;o đủ 5 game để khai th&aacute;c lượng view tối đa. Thậm ch&iacute;, một thuyết &acirc;m mưu được dựng l&ecirc;n rằng trận B&aacute;n kết n&agrave;y c&ograve;n c&oacute; &quot;nhiệm vụ tẩy trắng&quot; cho Xiaohu khi &quot;Tiểu Hổ&quot; l&agrave; tuyển thủ thi đấu nổi bật nhất. C&ograve;n những th&agrave;nh vi&ecirc;n JDG, cứ thấy Xiaohu l&agrave; ngay lập tức &quot;bật mode choke&quot;.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-3-16499137369711536464071.png\" title=\"Một trang báo xứ Trung đặt vấn đề về \"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 3.\" id=\"img_438932818268397568\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-3-16499137369711536464071.png\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 3.\" /></a></p>\r\n\r\n<p>Một trang b&aacute;o xứ Trung đặt vấn đề về &quot;kịch bản của 2 trận B&aacute;n kết&quot;</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-4-16499137369971830575354.png\" title=\"2 màn \"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 4.\" id=\"img_438932812169359360\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-4-16499137369971830575354.png\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 4.\" /></a></p>\r\n\r\n<p>2 m&agrave;n &quot;lật k&egrave;o&quot; li&ecirc;n tiếp. LPL thực sự qu&aacute; hoang d&atilde;</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-5-16499137370261858556520.png\" title=\"Một ngày \"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 5.\" id=\"img_438932809650278400\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-5-16499137370261858556520.png\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 5.\" /></a></p>\r\n\r\n<p>Một ng&agrave;y &quot;lật k&egrave;o&quot; kh&aacute;c. LPL playoffs thực sự l&agrave; qu&aacute; kinh khủng</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-6-1649913737068913837875.png\" title=\"2 màn \"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 6.\" id=\"img_438932815106908160\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-6-1649913737068913837875.png\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 6.\" /></a></p>\r\n\r\n<p>2 m&agrave;n &quot;lật k&egrave;o&quot; li&ecirc;n tiếp. C&oacute; thuyết &acirc;m mưu g&igrave; kh&ocirc;ng đấy</p>\r\n\r\n<p>Tuy vậy, tất cả mọi ph&acirc;n t&iacute;ch hay b&igrave;nh luận của cộng đồng LMHT đều chỉ nằm ở mức suy đo&aacute;n v&agrave; những thuyết &acirc;m mưu. RNG đ&atilde; c&oacute; m&agrave;n comeback kh&aacute; tốt trong trận B&aacute;n kết vừa qua v&agrave; JDG đ&atilde; kh&ocirc;ng thể hiện được bản lĩnh của đội c&oacute; thể th&aacute;ch thức ngai v&agrave;ng của ch&iacute;nh RNG. Nhưng với thể thức nh&aacute;nh thắng - thua, JDG vẫn sẽ c&ograve;n cơ hội. Chỉ c&oacute; điều, trước mặt họ l&agrave; V5 cũng đang khao kh&aacute;t chiến thắng sau khi thua tức tưởi TES ở trận B&aacute;n kết đầu ti&ecirc;n.</p>\r\n\r\n<p>C&ograve;n về phần RNG, họ đ&atilde; &quot;tho&aacute;t hiểm&quot; trong gang tấc. Tuy nhi&ecirc;n, TES cũng l&agrave; đội đ&atilde; c&oacute; kinh nghiệm &quot;lội ngược d&ograve;ng&quot; v&agrave; trận đấu giữa 2 c&aacute;i t&ecirc;n vừa c&oacute; m&agrave;n comeback ngoạn mục n&agrave;y sẽ rất đ&aacute;ng ch&uacute; &yacute;, khi m&agrave; Knight hay Xiaohu tỏa s&aacute;ng sẽ c&oacute; thể quyết định kết quả của trận thư h&ugrave;ng.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/14/rng-lpl-kichban-7-16499139460711157572143.jpg\" target=\"_blank\" title=\"\"><img alt=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 7.\" id=\"img_438933691272015872\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/14/rng-lpl-kichban-7-16499139460711157572143.jpg\" title=\"RNG lại lật kèo trước JDG, cộng đồng LMHT tố loạt trận Bán kết LPL Mùa Xuân đã được lên kịch bản - Ảnh 7.\" /></a></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `nameNews` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `nameNews`, `image`, `content`, `createdAt`, `updatedAt`, `category_id`) VALUES
(10, 'Đi chợ online: Xu hướng lên ngôi mùa dịch Covid-19', 't6.jpg', '<p>&ldquo;Mua h&agrave;ng online th&igrave; cũng chủ yếu mua ở những nơi quen, tin tưởng. Book online rồi nhận v&agrave;o những giờ cố định như sau giờ đi l&agrave;m. Hoặc như tuần n&agrave;y l&agrave;m việc ở nh&agrave; th&igrave; m&igrave;nh cũng sẽ lựa chọn l&agrave; book h&agrave;ng online sau đ', NULL, NULL, 19),
(12, 'sdsada', '', '<p><strong>1.&nbsp;Amnesia: The Dark Descent</strong></p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/13/photo-1-1649787820408260865958.jpg\" target=\"_blank\"><img alt=\"Loạt game hay ho dùng ánh sáng trở thành cơ chế trong game - Ảnh 1.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/13/photo-1-1649787820408260865958.jpg\" /></a></p>\r\n\r\n<p>Amnesia: The Dark Descent l&agrave; một tựa game theo dạng h&agrave;nh động l&eacute;n l&uacute;t pha trộn kinh dị. Bạn bị đẩy v&agrave;o trong một t&ograve;a l&acirc;u đ&agrave;i tối tăm, đ&aacute;ng sợ v&agrave; chẳng c&oacute; đến một tấc sắt trong tay. Những con qu&aacute;i vật trong game gần như l&agrave; kh&ocirc;ng thể ngăn cản nếu bạn bị ph&aacute;t hiện, v&agrave; bạn thậm ch&iacute; cũng chẳng biết tại sao m&igrave;nh bị ph&aacute;t hiện nữa.</p>\r\n\r\n<p>Nỗi sợ h&atilde;i ch&iacute;nh l&agrave; động lực của bạn, v&igrave; bạn phải đối mặt với những thứ c&oacute; thể hủy diệt bạn chỉ trong một nốt nhạc, v&agrave; bạn chẳng bao giờ biết ch&uacute;ng từ đ&acirc;u đến cả. Trong trường hợp đ&oacute;, gameplay l&eacute;n l&uacute;t l&agrave; một điều bắt buộc khi m&agrave; bạn phải cẩn thận với từng bước ch&acirc;n, từng h&agrave;nh động d&ugrave; l&agrave; nhỏ nhất của m&igrave;nh.</p>\r\n\r\n<p>Trong Amnesia, những con qu&aacute;i vật &quot;đ&ugrave;a giỡn&quot;&nbsp;game thủ bằng c&aacute;ch phủ c&aacute;c m&agrave;n chơi bằng sự tối tăm gh&ecirc; rợn. Khi đứng trong b&oacute;ng tối c&agrave;ng l&acirc;u m&agrave; kh&ocirc;ng c&oacute; &aacute;nh s&aacute;ng, sự tỉnh t&aacute;o của bạn sẽ bị giảm xuống rất nhanh, v&agrave; n&atilde;o bạn sẽ bắt đầu tạo ra h&igrave;nh cảnh của những con qu&aacute;i vật kh&aacute;t m&aacute;u. Tuy nhi&ecirc;n, n&oacute;i thế kh&ocirc;ng c&oacute; nghĩa l&agrave; bạn n&ecirc;n ở những khu vực c&oacute; &aacute;nh s&aacute;ng qu&aacute; l&acirc;u. Mặc d&ugrave; n&oacute; gi&uacute;p bạn tăng được sự tỉnh t&aacute;o, nhưng n&oacute; cũng thu h&uacute;t sự ch&uacute; &yacute; của những con qu&aacute;i vật m&agrave; bạn đ&atilde; tạo ra v&agrave; mang n&oacute; tới thế giới n&agrave;y.</p>\r\n\r\n<p><strong>2. Darkest Dungeon</strong></p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/13/photo-1-16498269778971330222169.jpg\" target=\"_blank\"><img alt=\"Loạt game hay ho dùng ánh sáng trở thành cơ chế trong game - Ảnh 2.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/13/photo-1-16498269778971330222169.jpg\" /></a></p>\r\n\r\n<p>Kh&aacute;m ph&aacute; căn hầm b&iacute; mật trong một biệt thự bỏ hoang ở khung cảnh cảnh đen tối v&agrave; kh&aacute; gh&ecirc; rợn. Bạn sẽ điều khiển nhiều nh&acirc;n vật kh&aacute;c nhau để c&ugrave;ng nhau vượt qua lũ qu&aacute;i vật v&agrave; sống s&oacute;t trong căn ngục. Điểm khiến Darkest Dungeon l&agrave; những nh&acirc;n vật đều c&oacute; chỉ số t&acirc;m l&yacute;, nếu họ c&agrave;ng căng thẳng th&igrave; họ sẽ nảy sinh nhiều &yacute; đồ kỳ lạ, đ&ocirc;i khi l&agrave; đen tối.</p>\r\n\r\n<p>Thử th&aacute;ch khả năng quản l&yacute; cũng như đem lại một cảm gi&aacute;c r&ugrave;ng rợn, kỳ dị m&agrave; bối cảnh của tựa game mang lại. V&agrave; tất nhi&ecirc;n t&iacute;nh năng Permadeath l&agrave; một t&iacute;nh năng ho&agrave;n hảo cho một tựa game như thế n&agrave;y, v&agrave; đ&ocirc;i l&uacute;c bạn sẽ muốn sử dụng t&iacute;nh năng n&agrave;y l&ecirc;n một số nh&acirc;n vật của m&igrave;nh đấy.</p>\r\n\r\n<p>Trong&nbsp;Darkest Dungeon, c&aacute;c nh&acirc;n vật khi v&agrave;o hầm ngục sẽ cầm theo những b&oacute; đuốc thắp s&aacute;ng, nhưng lại bị&nbsp;tắt dần theo thời gian. Một ngọn đuốc s&aacute;ng sẽ gi&uacute;p c&aacute;c bạn tăng cơ hội n&eacute; đ&ograve;n, trinh s&aacute;t c&aacute;c dungeon, v&agrave; giảm nguy cơ bị phục k&iacute;ch, đồng thời tăng chiến lợi phẩm nhận được, v&agrave; đương nhi&ecirc;n khi ngọn đuốc b&eacute; dần th&igrave; c&aacute;c điều tr&ecirc;n cứ thế m&agrave; bị đảo ngược lại.</p>\r\n\r\n<p><strong>3.&nbsp;Alan Wake</strong></p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2022/4/13/photo-1-16497879612141947511971.jpg\" target=\"_blank\"><img alt=\"Loạt game hay ho dùng ánh sáng trở thành cơ chế trong game - Ảnh 3.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2022/4/13/photo-1-16497879612141947511971.jpg\" /></a></p>\r\n\r\n<p>Đ&atilde; n&oacute;i đến những tựa game lấy &aacute;nh s&aacute;ng l&agrave;m yếu tố độc đ&aacute;o th&igrave; chắc chắn kh&ocirc;ng thể thiếu Alan Wake được. Trong tựa game kinh dị n&agrave;y, &aacute;nh s&aacute;ng vừa đ&oacute;ng vai tr&ograve; t&ocirc; điển cho phong c&aacute;ch nghệ thuật, vừa l&agrave; một cơ chế quan trọng trong lối chơi. C&oacute; thể n&oacute;i rằng bản th&acirc;n tựa game n&agrave;y kh&ocirc;ng thể t&aacute;ch rời yếu tố &aacute;nh s&aacute;ng của n&oacute;, nếu kh&ocirc;ng n&oacute; sẽ chảng c&ograve;n l&agrave; Alan Wake.</p>\r\n\r\n<p>Trong game, &aacute;nh s&aacute;ng được sử dụng để điểm mặt kẻ địch kh&ocirc;ng cho ch&uacute;ng ẩn th&acirc;n, đồng thời đ&acirc;y cũng l&agrave; một cơ chế kh&oacute;a mục ti&ecirc;u lu&ocirc;n. Ngo&agrave;i ra th&igrave; c&aacute;ch c&aacute;ch m&agrave; b&oacute;ng tối trong game x&acirc;m lấn mọi kh&ocirc;ng gian ng&oacute;c ng&aacute;ch xung quanh bạn cũng sẽ khiến cho chiếc đ&egrave;n pin trong tay bạn trở n&ecirc;n v&ocirc; c&ugrave;ng qu&yacute; gi&aacute;.</p>\r\n', NULL, NULL, 19),
(13, 'ó kìa', '', '<p>sấdsaaddaadsaddsa</p>\r\n', NULL, NULL, 1),
(14, 'ó kìa', '', '<p>sadasdasdasd</p>\r\n', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `stat` tinyint(5) NOT NULL,
  `code` varchar(20) NOT NULL,
  `total` float NOT NULL,
  `note` varchar(200) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `transport_fee` double NOT NULL,
  `promotion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `address`, `phone`, `stat`, `code`, `total`, `note`, `createdAt`, `transport_fee`, `promotion`) VALUES
(24, 1, 'aaaaa', 'tp hồ chí minh', 'erwrwrwr', 3, '1430', 0, 'Ghi chú', '2022-04-09', 0, 0),
(25, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '7577', 0, 'Ghi chú', '2022-04-11', 0, 0),
(26, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '4851', 0, 'Ghi chú', '2022-04-12', 0, 0),
(27, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '9446', 0, 'Ghi chú', '2022-04-12', 0, 0),
(28, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '6253', 0, 'Ghi chú', '2022-04-12', 0, 0),
(29, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '6611', 0, 'Ghi chú', '2022-04-12', 0, 0),
(30, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '8798', 0, 'Ghi chú', '2022-04-12', 0, 0),
(31, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '5795', 0, 'Ghi chú', '2022-04-13', 0, 0),
(32, 0, 'Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 0, '6663', 0, 'Ghi chú', '2022-04-13', 0, 0),
(33, 0, 'Thi Vũ', '437 Lý Thường Kiệt phường 8 Quận Tân Bình', '0707935913', 1, '2198', 0, 'Ghi chú', '2022-04-13', 0, 0),
(34, 0, 'Thi Vũ', '437 Lý Thường Kiệt phường 8 Quận Tân Bình', '0707935913', 0, '6640', 0, 'Ghi chú', '2022-04-13', 0, 0),
(35, 0, 'Thi Vũ', '437 Lý Thường Kiệt phường 8 Quận Tân Bình', '0707935913', 0, '8447', 0, 'Ghi chúsadadsasdads', '2022-04-13', 0, 0),
(36, 3, 'Thi Vũ', '437 Lý Thường Kiệt phường 8 Quận Tân Bình', '0707935913', 0, '6990', 0, 'Ghi chúhjvhjkhvkhkh', '2022-04-13', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `unit_price` float NOT NULL,
  `order_code` varchar(20) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `order_id`, `total`, `amount`, `status`, `unit_price`, `order_code`, `product_image`, `product_name`) VALUES
(11, 45, 24, 0, 1, '', 138000, '1430', 'sp3.jpg', 'Dâu tây'),
(12, 44, 25, 0, 1, '', 27600, '7577', 'sp2.jpg', 'Đào đỏ Mỹ'),
(13, 47, 25, 0, 6, '', 12420, '7577', 'sp5.jpg', 'Trái cam mậ'),
(14, 44, 26, 0, 3, '', 27600, '4851', 'sp2.jpg', 'Đào đỏ Mỹ'),
(15, 46, 26, 0, 5, '', 25000, '4851', 'sp6.jpg', 'Chanh tươi vỏ xanh'),
(16, 49, 26, 0, 1, '', 177600, '4851', 'sp9.jpg', 'Nho đen'),
(17, 54, 26, 0, 1, '', 5000, '4851', 'sp29.jpg', 'Trứng gà công nghiệp'),
(18, 56, 26, 0, 30, '', 50000, '4851', 'sp20.jpg', 'Cà chua'),
(19, 44, 27, 0, 2, '', 27600, '9446', 'sp2.jpg', 'Đào đỏ Mỹ'),
(20, 47, 27, 0, 1, '', 12420, '9446', 'sp5.jpg', 'Trái cam mậ'),
(21, 45, 28, 0, 1, '', 138000, '6253', 'sp3.jpg', 'Dâu tây'),
(22, 46, 29, 0, 1, '', 25000, '6611', 'sp6.jpg', 'Chanh tươi vỏ xanh'),
(23, 54, 30, 0, 1, '', 5000, '8798', 'sp29.jpg', 'Trứng gà công nghiệp'),
(24, 54, 31, 0, 1, '', 5000, '5795', 'sp29.jpg', 'Trứng gà công nghiệp'),
(25, 54, 32, 0, 1, '', 5000, '6663', 'sp29.jpg', 'Trứng gà công nghiệp'),
(26, 44, 33, 0, 4, '', 27600, '2198', 'sp2.jpg', 'Đào đỏ Mỹ'),
(27, 46, 33, 0, 3, '', 25000, '2198', 'sp6.jpg', 'Chanh tươi vỏ xanh'),
(28, 48, 33, 0, 1, '', 150000, '2198', 'sp4.jpg', 'Táo xanh'),
(29, 45, 34, 0, 8, '', 136620, '6640', 'sp3.jpg', 'Dâu tây'),
(30, 52, 34, 0, 1, '', 350000, '6640', 'sp26.jpg', 'Thịt gà'),
(31, 44, 35, 0, 1, '', 27600, '8447', 'sp2.jpg', 'Đào đỏ Mỹ'),
(32, 45, 35, 0, 1, '', 136620, '8447', 'sp3.jpg', 'Dâu tây'),
(33, 44, 36, 0, 2, '', 27600, '6990', 'sp2.jpg', 'Đào đỏ Mỹ'),
(34, 45, 36, 0, 4, '', 136620, '6990', 'sp3.jpg', 'Dâu tây'),
(35, 46, 36, 0, 6, '', 25000, '6990', 'sp6.jpg', 'Chanh tươi vỏ xanh'),
(36, 54, 36, 0, 1, '', 5000, '6990', 'sp29.jpg', 'Trứng gà công nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price_output` float NOT NULL DEFAULT 0,
  `price_intput` float NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `summary` longtext NOT NULL,
  `sales` int(20) NOT NULL DEFAULT 0,
  `createdAt` date NOT NULL,
  `slug` varchar(100) NOT NULL,
  `product_discount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price_output`, `price_intput`, `image`, `content`, `summary`, `sales`, `createdAt`, `slug`, `product_discount`) VALUES
(44, 12, 'Đào đỏ Mỹ', 30000, 40000, 'sp2.jpg', '<p>Đ&agrave;o (danh ph&aacute;p khoa học: Prunus persica) l&agrave; một lo&agrave;i c&acirc;y được trồng để lấy quả hay hoa. N&oacute; l&agrave; một lo&agrave;i c&acirc;y sớm rụng l&aacute;, th&acirc;n gỗ nhỏ, c&oacute; thể cao tới 5&ndash;10 m. L&aacute; của n&oacute; c&oacute; h&igrave;nh mũi m&aacute;c, d&agrave;i 7&ndash;15 cm v&agrave; rộng 2&ndash;3 cm. Hoa nở v&agrave;o đầu m&ugrave;a xu&acirc;n, trước khi ra l&aacute;; hoa đơn hay c&oacute; đ&ocirc;i, đường k&iacute;nh 2,5&ndash;3 cm, m&agrave;u hồng với 5 c&aacute;nh hoa. Quả đ&agrave;o c&ugrave;ng với quả của anh đ&agrave;o, mận, mơ l&agrave; c&aacute;c loại quả hạch.Quả của n&oacute; c&oacute; một hạt giống to được bao bọc trong một lớp vỏ gỗ cứng (gọi l&agrave; &quot;hột&quot;), c&ugrave;i thịt m&agrave;u v&agrave;ng hay &aacute;nh trắng, c&oacute; m&ugrave;i vị thơm ngon v&agrave; lớp vỏ c&oacute; l&ocirc;ng tơ mềm như nhung.</p>\r\n\r\n<p>T&ecirc;n gọi khoa học persica c&oacute; lẽ c&oacute; từ niềm tin ban đầu của người ch&acirc;u &Acirc;u cho rằng đ&agrave;o c&oacute; nguồn gốc ở khu vực Ba Tư (Persia), nay l&agrave; Iran. Sự đồng thuận lớn trong giới c&aacute;c nh&agrave; thực vật học ng&agrave;y nay đ&atilde; cho rằng n&oacute; c&oacute; nguồn gốc từ Trung Quốc v&agrave; được đưa v&agrave;o Ba Tư cũng như khu vực Địa Trung Hải theo con đường tơ lụa v&agrave;o khoảng thời gian ban đầu của lịch sử nh&acirc;n loại, c&oacute; lẽ v&agrave;o khoảng thi&ecirc;n ni&ecirc;n kỷ 2 TCN (Huxley v&agrave; những người kh&aacute;c, 1992).</p>\r\n\r\n<p>C&aacute;c giống đ&agrave;o trồng được chia th&agrave;nh hai loại l&agrave; &quot;hột rời&quot; v&agrave; &quot;hột d&iacute;nh&quot;, phụ thuộc v&agrave;o việc hột c&oacute; d&iacute;nh với c&ugrave;i thịt hay kh&ocirc;ng; cả hai loại n&agrave;y đều c&oacute; c&ugrave;i thịt trắng hay v&agrave;ng. Quả đ&agrave;o với c&ugrave;i thịt trắng th&ocirc;ng thường c&oacute; vị rất ngọt v&agrave; &iacute;t vị chua, trong khi loại c&oacute; c&ugrave;i thịt m&agrave;u v&agrave;ng th&ocirc;ng thường c&oacute; vị chua k&egrave;m theo vị ngọt, mặc d&ugrave; điều n&agrave;y cũng c&oacute; sự dao động lớn. Cả hai m&agrave;u th&ocirc;ng thường đều c&oacute; c&aacute;c vệt đỏ trong lớp thịt của ch&uacute;ng. Loại đ&agrave;o c&ugrave;i trắng, &iacute;t chua l&agrave; phổ biến nhất tại Trung Quốc</p>\r\n', '', 2, '2022-03-30', 'Tiết kiệm: 28.000₫ so với giá thị trường  Đào (danh pháp khoa học: Prunus persica) là một loài cây đ', 8),
(45, 12, 'Dâu tây', 138000, 0, 'sp3.jpg', '<p>D&acirc;u t&acirc;y (danh ph&aacute;p khoa học: Fragaria) hay c&ograve;n gọi l&agrave; d&acirc;u đất l&agrave; một chi thực vật hạt k&iacute;n v&agrave; lo&agrave;i thực vật c&oacute; hoa thuộc họ Hoa hồng (Rosaceae) cho quả được nhiều người ưa chuộng. D&acirc;u t&acirc;y xuất xứ từ ch&acirc;u Mỹ v&agrave; được c&aacute;c nh&agrave; l&agrave;m vườn ch&acirc;u &Acirc;u cho lai tạo v&agrave;o thế kỷ 18 để tạo n&ecirc;n giống d&acirc;u t&acirc;y được trồng rộng r&atilde;i hiện nay. Lo&agrave;i n&agrave;y được (Weston) Duchesne mi&ecirc;u tả khoa học đầu ti&ecirc;n năm 1788&nbsp;</p>\r\n\r\n<p>D&acirc;u t&acirc;y được trồng lấy tr&aacute;i ở v&ugrave;ng &ocirc;n đới. Với m&ugrave;i thơm hấp dẫn c&ugrave;ng vị d&acirc;u ngọt lẫn chua n&ecirc;n d&acirc;u t&acirc;y được ưa chuộng.</p>\r\n\r\n<p>Ở Việt Nam, kh&iacute; hậu m&aacute;t mẻ của miền n&uacute;i Đ&agrave; Lạt l&agrave; m&ocirc;i trường th&iacute;ch hợp với việc canh t&aacute;c d&acirc;u n&ecirc;n loại tr&aacute;i c&acirc;y n&agrave;y được xem l&agrave; đặc sản của v&ugrave;ng cao nguy&ecirc;n nơi đ&acirc;y.</p>\r\n\r\n<p>Quả d&acirc;u t&acirc;y thường được sử dụng để l&agrave;m c&aacute;c m&oacute;n tr&aacute;ng miệng. D&acirc;u t&acirc;y gi&agrave;u vitamin C v&agrave; l&agrave; nguồn cung cấp dồi d&agrave;o c&aacute;c chất flavonoit cần thiết cho cuộc sống của ch&uacute;ng ta</p>\r\n', '', 4, '2022-04-13', 'Tiết kiệm: 100.000₫ so với giá thị trường Dâu tây (danh pháp khoa học: Fragaria) hay còn gọi là dâu ', 1),
(46, 12, 'Chanh tươi vỏ xanh', 25000, 0, 'sp6.jpg', '<p>Chanh l&agrave; một số lo&agrave;i thực vật cho quả nhỏ, thuộc chi Cam chanh (Citrus), khi ch&iacute;n c&oacute; m&agrave;u xanh hoặc v&agrave;ng, thịt quả c&oacute; vị chua. Quả chanh được sử dụng l&agrave;m thực phẩm tr&ecirc;n khắp thế giới - chủ yếu d&ugrave;ng nước &eacute;p của n&oacute;, thế nhưng phần cơm (c&aacute;c m&uacute;i của chanh) v&agrave; vỏ (zest) cũng được sử dụng, chủ yếu l&agrave; trong nấu ăn v&agrave; nướng b&aacute;nh. Nước &eacute;p chanh chứa khoảng 5% (khoảng 0,3 mol / l&iacute;t) axit citric, điều n&agrave;y gi&uacute;p chanh c&oacute; vị chua, v&agrave; độ pH của chanh từ 2-3. Điều n&agrave;y l&agrave;m cho nước &eacute;p chanh kh&ocirc;ng đắt, c&oacute; thể sử dụng thay ax&iacute;t cho c&aacute;c th&iacute; nghiệm khoa học trong gi&aacute;o dục. Bởi v&igrave; c&oacute; vị chua, nhiều thức uống v&agrave; kẹo c&oacute; m&ugrave;i vị đ&atilde; xuất hiện, bao gồm cả nước chanh.</p>\r\n', '', 6, '2021-05-03', 'Tiết kiệm: 8.000₫ so với giá thị trường Chanh là một số loài thực vật cho quả nhỏ, thuộc chi Cam cha', 0),
(47, 12, 'Trái cam mật', 13800, 0, 'FAPAS BLACK TIGER POLO SHIRT - Cốc Cốc 1_17_2022 3_48_00 PM (2).png', '<p>Cam (danh ph&aacute;p hai phần: Citrus &times; sinensis) l&agrave; lo&agrave;i c&acirc;y ăn quả c&ugrave;ng họ với bưởi. N&oacute; c&oacute; quả nhỏ hơn quả bưởi, vỏ mỏng, khi ch&iacute;n thường c&oacute; m&agrave;u da cam, c&oacute; vị ngọt hoặc hơi chua. Lo&agrave;i cam l&agrave; một c&acirc;y lai được trồng từ xưa, c&oacute; thể lai giống giữa lo&agrave;i bưởi (Citrus maxima) v&agrave; qu&yacute;t (Citrus reticulata). Đ&acirc;y l&agrave; c&acirc;y nhỏ, cao đến khoảng 10 m, c&oacute; c&agrave;nh gai v&agrave; l&aacute; thường xanh d&agrave;i khoảng 4-10 cm. Cam bắt nguồn từ Đ&ocirc;ng Nam &Aacute;, c&oacute; thể từ Ấn Độ, Việt Nam hay miền nam Trung Quốc</p>\r\n', '', 1, '2022-04-13', 'Cam (danh pháp hai phần: Citrus × sinensis) là loài cây ăn quả cùng họ với bưởi.', 1),
(48, 12, 'Táo xanh', 150000, 0, 'sp4.jpg', '<p>- Vị M&Aacute;T, CHUA, THANH THANH của T&Aacute;O XANH mang đến sức sống của thi&ecirc;n nhi&ecirc;n</p>\r\n\r\n<p>- Tan trong dầu, giữ m&ugrave;i trong thỏi son handmade l&acirc;u hơn.</p>\r\n', '', 1, '2022-03-01', 'ngon bổ rẻ', 0),
(49, 12, 'Nho đen', 222000, 0, 'sp9.jpg', '<p>Nho l&agrave; một loại quả mọng lấy từ c&aacute;c lo&agrave;i c&acirc;y th&acirc;n leo thuộc chi Nho (Vitis). Quả nho mọc th&agrave;nh ch&ugrave;m từ 6 đến 300 quả, ch&uacute;ng c&oacute; m&agrave;u đen, lam, v&agrave;ng, lục, đỏ-t&iacute;a hay trắng. Khi ch&iacute;n, quả nho c&oacute; thể ăn tươi hoặc được sấy kh&ocirc; để l&agrave;m nho kh&ocirc;, cũng như được d&ugrave;ng để sản xuất c&aacute;c loại rượu vang, thạch nho, nước quả, mật nho, dầu hạt nho. Trong tiếng Trung, n&oacute; được gọi l&agrave; bồ đ&agrave;o&nbsp; v&agrave; khi người ta n&oacute;i đến rượu bồ đ&agrave;o tức l&agrave; rượu sản xuất từ quả nho. Tuy nhi&ecirc;n, c&aacute;c lo&agrave;i nho dại lại bị coi l&agrave; một loại cỏ dại g&acirc;y nhiều phiền to&aacute;i, do ch&uacute;ng che phủ c&aacute;c lo&agrave;i thực vật kh&aacute;c với tốc độ tăng trưởng rất nhanh của m&igrave;nh. Nho bị ấu tr&ugrave;ng của một số lo&agrave;i c&ocirc;n tr&ugrave;ng thuộc bộ Lepidoptera ph&aacute; hại - xem th&ecirc;m tại Danh s&aacute;ch c&aacute;c lo&agrave;i c&aacute;nh vẩy ph&aacute; hại nho.</p>\r\n', '', 1, '2022-03-12', 'Nho là một loại quả mọng lấy từ các loài cây thân leo thuộc chi Nho (Vitis).', 20),
(50, 13, 'Thịt bò', 1500000, 0, 'sp12.jpg', '<p>Thịt b&ograve; l&agrave; thịt của con b&ograve; (th&ocirc;ng dụng l&agrave; loại b&ograve; thịt). Đ&acirc;y l&agrave; thực phẩm gia s&uacute;c phổ biến tr&ecirc;n thế giới, c&ugrave;ng với thịt lợn, được chế biến v&agrave; sử dụng theo nhiều c&aacute;ch, trong nhiều nền văn ho&aacute; v&agrave; t&ocirc;n gi&aacute;o kh&aacute;c nhau, c&ugrave;ng với thịt lợn v&agrave; thịt g&agrave;, thịt b&ograve; l&agrave; một trong những loại thịt được con người sử dụng nhiều nhất.</p>\r\n\r\n<p>Lợi &iacute;ch</p>\r\n\r\n<p>Thịt b&ograve; l&agrave; một trong những thực phẩm c&oacute; gi&aacute; trị dinh dưỡng cao v&agrave; c&oacute; chứa nhiều amino acid cần thiết, c&aacute;c chất b&eacute;o, chất kho&aacute;ng, vitamin.</p>\r\n\r\n<p>Protein trong thịt b&ograve; ch&iacute;nh l&agrave; một trong những nguồn dưỡng chất gi&uacute;p cơ thể khỏe mạnh, bảo đảm cho xương chắc khỏe v&agrave; ph&aacute;t triển c&aacute;c hormon c&oacute; lợi cho cơ thể.Kho&aacute;ng chất carnitin c&oacute; trong c&aacute;c loại thịt m&agrave;u đỏ như thịt b&ograve; rất cần thiết cho sự c&acirc;n bằng của c&aacute;c hoạt động của tai.Tăng cường cơ bắp: Thịt b&ograve;, nhất l&agrave; bắp b&ograve; rất gi&agrave;u axit amoniac, cao hơn cả so với bất k&igrave; loại thực phẩm n&agrave;o kh&aacute;c, c&oacute; t&aacute;c dụng l&agrave;m tăng cơ bắp, đặc biệt l&agrave; tăng cường sức khỏe cơ thể. Thịt b&ograve; rất gi&agrave;u vitamin B6 v&agrave; protein: Trong thịt b&ograve; c&oacute; lượng vitamin B6 v&agrave; protein lớn n&ecirc;n cần được tăng cường trong chế đồ ăn.Thịt b&ograve; c&oacute; chứa đủ vitamin B6 c&oacute; thể gi&uacute;p bạn x&acirc;y dựng khả năng miễn dịch, protein gi&uacute;p chuyển h&oacute;a v&agrave; tổng hợp thức ăn, g&oacute;p phần phục hồi cơ thể sau khi những hoạt động cường độ cao.Thịt b&ograve; c&oacute; kho&aacute;ng chất carnitine v&agrave; nồng độ sarcosine (một chất c&oacute; li&ecirc;n quan đến ung thư) rất thấp.Carnitine được sử dụng chủ yếu để hỗ trợ qu&aacute; tr&igrave;nh chuyển h&oacute;a chất b&eacute;o, chuỗi amino acid để giữ cho cơ thể được c&acirc;n đối, c&aacute;c amino acid rất tốt trong việc tạo c&aacute;c cơ bắp. Nhiều kali: Trong thịt b&ograve; chứa nhiều kho&aacute;ng chất như protein, kali, m&agrave; hai kho&aacute;ng chất n&agrave;y lại kh&ocirc;ng thể thiếu trong chế độ dinh dưỡng.Nhiều dầu thực phẩm: H&agrave;m lượng acid b&eacute;o trong thịt b&ograve; thấp nhưng lại gi&agrave;u axit linoleic tổng hợp, c&oacute; hiệu quả chống lại c&aacute;c chất chống oxy h&oacute;a c&oacute; khả năng ph&aacute;t t&aacute;c khi tập c&aacute;c m&ocirc;n thể thao như cử tạ g&acirc;y tổn thương m&ocirc;.Mức độ kali thấp ức chế tổng hợp protein cũng như sản xuất hormone tăng trưởng, sẽ ảnh hưởng đến sự ph&aacute;t triển của cơ bắp.Thịt b&ograve; cũng rất gi&agrave;u magi&ecirc; v&agrave; kẽm: Magi&ecirc; v&agrave; kẽm g&oacute;p phần tổng hợp protein v&agrave; chất chống oxy h&oacute;a để th&uacute;c đẩy tăng trưởng cơ bắp.Muối của axit glutamic v&agrave; vitamin B6 v&agrave; kẽm tương t&aacute;c với nhau tăng cường hệ thống miễn dịch v&agrave; quan trọng hơn c&oacute; thể l&agrave;m tăng hiệu quả của sự trao đổi chất insulin. Thịt b&ograve; rất gi&agrave;u chất sắt, m&agrave; sắt lại l&agrave; kho&aacute;ng chất cần thiết cho m&aacute;u, bổ sung lượng m&aacute;u cho cơ thể v&agrave; ph&ograve;ng tr&aacute;nh cơ thể bị thiếu m&aacute;u. thịt b&ograve; chứa nhiều vitamin B12: Vitamin B12 cần thiết cho c&aacute;c tế b&agrave;o, nhất l&agrave; c&aacute;c tế b&agrave;o m&aacute;u đỏ mang oxy đến c&aacute;c m&ocirc; cơ. Chất b&eacute;o c&oacute; trong thịt b&ograve; rất gi&agrave;u linoleic v&agrave; palmiotelic, hai loại axit đặc biệt gi&uacute;p con người chống lại căn bệnh ung thư, c&aacute;c loại vi r&uacute;t v&agrave; mầm bệnh.Vitamin B12 th&uacute;c đẩy nh&aacute;nh chuỗi amino acid chuyển h&oacute;a, do đ&oacute; cung cấp năng lượng cần thiết cho cơ thể trong những hoạt động cường độ cao.</p>\r\n', '', 0, '2022-03-18', 'thơm ngon mời bạn ăn nha', 5),
(51, 13, 'Cá hồi', 200000, 0, 'sp10.jpg', '<p>C&aacute; hồi l&agrave; t&ecirc;n chung cho nhiều lo&agrave;i c&aacute; thuộc họ Salmonidae. Nhiều loại c&aacute; kh&aacute;c c&ugrave;ng họ được gọi l&agrave; trout (c&aacute; hồi); sự kh&aacute;c biệt thường được cho l&agrave; c&aacute; hồi salmon di cư c&ograve;n c&aacute; hồi trout kh&ocirc;ng di cư, nhưng sự ph&acirc;n biệt n&agrave;y kh&ocirc;ng ho&agrave;n to&agrave;n ch&iacute;nh x&aacute;c. C&aacute; hồi sống dọc c&aacute;c bờ biển tại cả Bắc Đại T&acirc;y Dương (c&aacute;c họ di cư Salmo salar) v&agrave; Th&aacute;i B&igrave;nh Dương (khoảng s&aacute;u họ của giống Oncorhynchus), v&agrave; cũng đ&atilde; từng được đưa tới Hồ lớn ở Bắc Mỹ. C&aacute; hồi được sản xuất nhiều trong ng&agrave;nh nu&ocirc;i trồng thủy sản ở nhiều nơi tr&ecirc;n thế giới.</p>\r\n\r\n<p>Về đặc trưng, c&aacute; hồi l&agrave; c&aacute; ngược s&ocirc;ng để sinh sản: ch&uacute;ng sinh ra tại khu vực nước ngọt, di cư ra biển, sau đ&oacute; quay trở lại v&ugrave;ng nước ngọt để sinh sản. Tuy nhi&ecirc;n, c&oacute; nhiều con thuộc nhiều lo&agrave;i sống cả đời tại v&ugrave;ng nước ngọt. Truyền thống d&acirc;n gian cho rằng lo&agrave;i c&aacute; n&agrave;y trở về đ&uacute;ng nơi ch&uacute;ng được sinh ra để đẻ trứng; những cuộc nghi&ecirc;n cứu đ&atilde; cho thấy điều n&agrave;y l&agrave; ch&iacute;nh x&aacute;c, v&agrave; h&agrave;nh động quay lại nơi ra đời n&agrave;y đ&atilde; được thể hiện phụ thuộc v&agrave;o k&yacute; ức khứu gi&aacute;c</p>\r\n', '', 0, '2022-03-18', 'thơm ngon', 0),
(52, 13, 'Thịt gà', 500000, 0, 'sp26.jpg', '<p>Thịt g&agrave; c&oacute; thể được chế biến theo nhiều c&aacute;ch kh&aacute;c nhau t&ugrave;y theo mục đ&iacute;ch của ch&uacute;ng, bao gồm bỏ l&ograve;, nướng, quay, chi&ecirc;n hoặc luộc, c&ugrave;ng nhiều phương ph&aacute;p kh&aacute;c. Kể từ nửa sau của thế kỷ 20, thịt g&agrave; chế biến sẵn đ&atilde; trở th&agrave;nh một mặt h&agrave;ng chủ yếu của d&ograve;ng thực phẩm thức ăn nhanh. Loại thịt n&agrave;y đ&ocirc;i khi được coi l&agrave; tốt cho sức khỏe hơn thịt đỏ, trong đ&oacute; nồng độ cholesterol v&agrave; chất b&eacute;o b&atilde;o h&ograve;a thấp hơn hẳn.</p>\r\n\r\n<p>Ng&agrave;nh c&ocirc;ng nghiệp chăn nu&ocirc;i g&agrave; tồn tại dưới nhiều h&igrave;nh thức kh&aacute;c nhau tr&ecirc;n khắp thế giới. Ở c&aacute;c nước ph&aacute;t triển, g&agrave; thường được nu&ocirc;i theo phương ph&aacute;p th&acirc;m canh, trong khi c&aacute;c khu vực k&eacute;m ph&aacute;t triển hơn th&igrave; nu&ocirc;i g&agrave; bằng c&aacute;c kỹ thuật chăn nu&ocirc;i truyền thống. Li&ecirc;n hợp quốc ước t&iacute;nh rằng c&oacute; đến 19 tỷ con g&agrave; tr&ecirc;n Tr&aacute;i đất, nhiều gấp hơn hai lần so với d&acirc;n số lo&agrave;i người.</p>\r\n\r\n<p>Lợi &iacute;ch<br />\r\nThịt g&agrave; c&oacute; nhiều phần nạc v&agrave; tương đối &iacute;t mỡ, n&ecirc;n chứa một h&agrave;m lượng protein cao v&agrave; đa dạng. Ch&iacute;nh v&igrave; vậy, bổ sung c&aacute;c m&oacute;n ăn từ g&agrave; v&agrave;o thực đơn h&agrave;ng ng&agrave;y sẽ mang lại cho người ti&ecirc;u d&ugrave;ng nhiều lợi &iacute;ch về sức khỏe, từ ph&aacute;t triển cơ bắp cho đến giảm c&acirc;n hiệu quả. Ăn thịt g&agrave; c&oacute; thể gi&uacute;p mang tới một h&agrave;m răng v&agrave; xương chắc khỏe. Bởi trong thịt g&agrave; c&oacute; rất nhiều Photpho &ndash; chất c&oacute; lợi cho răng v&agrave; xương. Ngo&agrave;i ra, chất n&agrave;y c&ograve;n g&oacute;p phần đảm bảo c&aacute;c chức năng của c&aacute;c bộ phận như thận, gan, thần kinh trung ương,&hellip; gi&uacute;p ch&uacute;ng hoạt động tốt hơn. Đ&acirc;y l&agrave; một trong những th&agrave;nh phần ch&iacute;nh c&oacute; trong thịt g&agrave;. Kho&aacute;ng chất n&agrave;y rất cần thiết trong việc trao đổi chất trong cơ thể. Nhờ đ&oacute;, tuyến gi&aacute;p được cải thiện tốt v&agrave; hoạt động tốt hơn, gi&uacute;p tăng cường hệ miễn dịch trong cơ thể. Ngo&agrave;i ra, trong thịt g&agrave; c&ograve;n chứa một h&agrave;m lượng amino acid được gọi l&agrave; tryptophan. Chất n&agrave;y c&oacute; t&aacute;c dụng l&agrave;m dịu hệ thần kinh căng thẳng sau một ng&agrave;y l&agrave;m việc vất vả, cũng như mang lại giấc ngủ ngon.</p>\r\n', '', 1, '2022-03-24', 'sản xuất tại indolnexia', 30),
(53, 13, 'Thịt lợn', 1000000, 0, 'cate_3.jpg', '<p>Thịt heo / thịt lợn l&agrave; thịt từ heo, l&agrave; một loại thực phẩm rất phổ biến tr&ecirc;n thế giới, ti&ecirc;u thụ thịt heo của người Việt chiếm tới 73,3%, thịt gia cầm l&agrave; 17,5% v&agrave; chỉ 9,2% c&ograve;n lại l&agrave; thịt c&aacute;c loại (thịt b&ograve;, thịt tr&acirc;u, thịt d&ecirc;..., điều n&agrave;y xuất ph&aacute;t từ truyền thống ẩm thực của người Việt thường ăn thịt heo v&agrave; thịt g&agrave; nhiều hơn c&aacute;c loại thịt kh&aacute;c</p>\r\n\r\n<p>Thịt lợn chứa h&agrave;m lượng protein cao c&ugrave;ng nhiều vitamin v&agrave; kho&aacute;ng chất. Thịt lợn nạc l&agrave; một thực phẩm tuyệt vời cho chế độ ăn uống l&agrave;nh mạnh. N&oacute; chứa tất cả c&aacute;c amino acid thiết yếu cho sự tăng trưởng v&agrave; duy tr&igrave; cơ thể khỏe mạnh. Mỡ lợn đ&ocirc;i khi được sử dụng như l&agrave; một chất b&eacute;o trong nấu ăn. Giống như c&aacute;c loại thịt đỏ, thịt lợn chủ yếu gồm c&aacute;c chất b&eacute;o b&atilde;o h&ograve;a v&agrave; chất b&eacute;o kh&ocirc;ng b&atilde;o h&ograve;a với h&agrave;m lượng tương đương nhau.Vitamin B12 trong thịt lợn rất quan trọng cho sự h&igrave;nh th&agrave;nh m&aacute;u v&agrave; chức năng của n&atilde;o. Thiếu hụt vitamin B12 c&oacute; thể g&acirc;y thiếu m&aacute;u v&agrave; tổn hại đến tế b&agrave;o thần kinh. Vitamin B6 quan trọng đối với sự h&igrave;nh th&agrave;nh của c&aacute;c tế b&agrave;o m&aacute;u đỏ.</p>\r\n\r\n<p>Thịt lợn đặc biệt gi&agrave;u thiamin, một trong những vitamin nh&oacute;m B đ&oacute;ng một vai tr&ograve; thiết yếu trong c&aacute;c chức năng của cơ thể. Thịt lợn cũng chứa nhiều selenium, kẽm l&agrave; chất cần thiết cho một bộ n&atilde;o v&agrave; hệ thống miễn dịch khỏe mạnh.Creatine trong thịt l&agrave; một nguồn năng lượng cho cơ bắp. Nhiều nghi&ecirc;n cứu chỉ ra rằng n&oacute; c&oacute; thể cải thiện sự tăng trưởng v&agrave; duy tr&igrave; cơ bắp.Vitamin B3 rất quan trọng cho sự tăng trưởng v&agrave; chuyển h&oacute;a. Phốt pho cần thiết cho sự tăng trưởng v&agrave; duy tr&igrave; cơ thể khỏe mạnh.</p>\r\n\r\n<p>Thịt lợn cũng được xem l&agrave; một nguồn cung cấp sắt dồi d&agrave;oTaurine được t&igrave;m thấy trong c&aacute; v&agrave; thịt, taurine l&agrave; một amino acid chống oxy h&oacute;a, c&oacute; vai tr&ograve; quan trọng đối với tim v&agrave; c&aacute;c chức năng cơ bắp.Carnosine l&agrave; một chất rất quan trọng cho chức năng cơ bắp. Mức độ arnosine trong cơ bắp của con người li&ecirc;n quan tới việc giảm mệt mỏi v&agrave; cải thiện hiệu suất lao động.Thịt lợn c&oacute; chứa nhiều chất dinh dưỡng l&agrave;nh mạnh c&oacute; lợi cho cơ bắp bao gồm ưtaurie, creatine, v&agrave; beta-alanine. Beta-alanine l&agrave; một amino acid, được sử dụng để sản xuất carnosine trong cơ thể.</p>\r\n', '', 0, '2022-03-19', 'sản xuất từ bộ phận ai cập', 0),
(54, 14, 'Trứng gà công nghiệp', 5000, 0, 'sp29.jpg', '<p>Trứng (miền Nam gọi l&agrave; hột) l&agrave; sản phẩm động vật từ c&aacute;c loại gia cầm, chim ch&oacute;c đẻ ra, thường được sử dụng l&agrave;m nguồn thức ăn cung cấp protein cho người. Bề ngo&agrave;i của trứng thường c&oacute; h&igrave;nh bầu dục, hai đầu kh&ocirc;ng c&acirc;n bằng, một to một nhỏ. C&aacute;c loại trứng phổ biến nhất l&agrave; trứng g&agrave;, trứng vịt (trứng lộn), trứng chim c&uacute;t (trứng c&uacute;t) ngo&agrave;i ra c&ograve;n c&oacute; trứng ngỗng, trứng đ&agrave; điểu.</p>\r\n\r\n<p>Dinh dưỡng</p>\r\n\r\n<p>Chất lipit c&oacute; trong l&ograve;ng đỏ, triglixerit 62,3%, photpholipit 32,8% v&agrave; cholesterol 4,9% với một &iacute;t aminolipit. Vỏ cứng chứa: cacbonat canxi khoảng 98,43%, cacbonat magi&ecirc; 0,84% v&agrave; photphat canxi 0,73% theo trọng lượng. C&ograve;n x&eacute;t tổng thể quả trứng, phần nước chiếm khoảng 65,7%, protit 12%, lipit 10,6%, gluxit 0,8% v&agrave; kho&aacute;ng chất 10,9% về trọng lượng.</p>\r\n\r\n<p>Trứng c&oacute; nguồn chất b&eacute;o Lecithin theo c&aacute;c nghi&ecirc;n cứu gần đ&acirc;y cho thấy n&oacute; c&oacute; t&aacute;c dụng điều h&ograve;a lượng cholesterol, ngăn ngừa t&iacute;ch lũy cholesterol, th&uacute;c đẩy qu&aacute; tr&igrave;nh ph&acirc;n t&aacute;ch chất n&agrave;y v&agrave; b&agrave;i xuất c&aacute;c th&agrave;nh phần thu được ra khỏi cơ thể. Ngo&agrave;i ra lượng cholesterol trong trứng kh&ocirc;ng l&agrave;m tăng mức cholesterol trong m&aacute;u khi ăn v&igrave; n&oacute; giảm việc sản xuất cholesterol của cơ thể.[1]</p>\r\n\r\n<p>Chế biến</p>\r\n\r\n<p>Trứng c&oacute; thể l&agrave;m nhiều m&oacute;n ăn, hoặc sử dụng to&agrave;n bộ quả trứng hoặc chỉ sử dụng l&ograve;ng trắng hay l&ograve;ng đỏ. C&aacute;c m&oacute;n sử dụng trứng l&agrave;m nguy&ecirc;n liệu ch&iacute;nh th&ocirc;ng dụng nhất thường gặp l&agrave; trứng luộc, trứng ốp la (trứng r&aacute;n), trứng muối.</p>\r\n\r\n<p>Lợi &iacute;ch</p>\r\n\r\n<p>Ngo&agrave;i cung cấp c&aacute;c chất dinh dưỡng như những số liệu n&ecirc;u tr&ecirc;n, trứng g&agrave; c&ograve;n gi&uacute;p l&agrave;m đẹp v&agrave; chữa c&aacute;c bệnh th&ocirc;ng dụng như kiết lỵ, đau dạ d&agrave;y...</p>\r\n', '', 1, '2022-04-05', 'nơi bán tại nhà phân phối', 0),
(55, 15, 'Hành tây', 10000, 0, 'sp7.jpg', '<p>Dinh dưỡng</p>\r\n\r\n<p>H&agrave;nh t&acirc;y vừa được xem l&agrave; một loại gia vị vừa như một loại rau rất gi&agrave;u Kali, Selen, Vitamin C v&agrave; Quercetin. Trong củ h&agrave;nh đỏ rất gi&agrave;u c&aacute;c hợp chất v&agrave; nh&oacute;m lưu huỳnh như DMS, DDS, DTS &amp; DTTS g&acirc;y m&ugrave;i cay nồng.</p>\r\n', '', 0, '2022-03-17', 'nhà pân hoi', 0),
(56, 15, 'Cà chua', 50000, 0, 'sp20.jpg', '<p>C&agrave; chua (danh ph&aacute;p hai phần: Solanum lycopersicum), thuộc họ C&agrave; (Solanaceae), l&agrave; một loại rau quả l&agrave;m thực phẩm. Quả ban đầu c&oacute; m&agrave;u xanh, ch&iacute;n ngả m&agrave;u từ v&agrave;ng đến đỏ. C&agrave; chua c&oacute; vị hơi chua v&agrave; l&agrave; một loại thực phẩm bổ dưỡng, gi&agrave;u vitamin C v&agrave; A, đặc biệt l&agrave; gi&agrave;u lycopeme tốt cho sức khỏe.</p>\r\n\r\n<p>C&agrave; chua thuộc họ C&agrave;, c&aacute;c loại c&acirc;y trong họ n&agrave;y thường ph&aacute;t triển từ 1 đến 3 m&eacute;t chiều cao, c&oacute; những c&acirc;y th&acirc;n mềm b&ograve; tr&ecirc;n mặt đất hoặc d&acirc;y leo tr&ecirc;n th&acirc;n c&acirc;y kh&aacute;c, v&iacute; dụ nho. Họ c&acirc;y n&agrave;y l&agrave; một loại c&acirc;y l&acirc;u năm trong m&ocirc;i trường sống bản địa của n&oacute;, nhưng nay n&oacute; được trồng như một loại c&acirc;y h&agrave;ng năm ở c&aacute;c v&ugrave;ng kh&iacute; hậu &ocirc;n đới v&agrave; nhiệt đới.</p>\r\n', '', 30, '2555-05-21', 'Cà chua (danh pháp hai phần: Solanum lycopersicum), thuộc họ Cà (Solanaceae), là một loại rau quả là', 0),
(57, 15, 'Ớt chuông vàng', 25000, 0, 'sp19.jpg', '<p>Ớt chu&ocirc;ng, hay c&ograve;n gọi l&agrave; ớt ngọt (gọi l&agrave; pepper ở Vương quốc Li&ecirc;n hiệp Anh v&agrave; Bắc Ireland, Canada, Ireland hay capsicum ở Ấn Độ, Bangladesh, &Uacute;c, Singapore v&agrave; New Zealand), l&agrave; quả của một nh&oacute;m c&acirc;y trồng, lo&agrave;i Capsicum annuum. C&acirc;y trồng của lo&agrave;i n&agrave;y cho ra tr&aacute;i với m&agrave;u sắc kh&aacute;c nhau, bao gồm m&agrave;u đỏ, v&agrave;ng, cam, xanh lục, s&ocirc;-c&ocirc;-la / n&acirc;u, vanilla / trắng, v&agrave; m&agrave;u t&iacute;m. Ớt chu&ocirc;ng đ&ocirc;i khi được xếp v&agrave;o nh&oacute;m ớt &iacute;t cay m&agrave; c&ugrave;ng loại với ớt ngọt. Ớt chu&ocirc;ng c&oacute; nguồn gốc ở Mexico, Trung Mỹ, v&agrave; ph&iacute;a Bắc Nam Mỹ. Phần khung v&agrave; hạt b&ecirc;n trong ớt chu&ocirc;ng c&oacute; thể ăn được, nhưng một số người sẽ cảm nhận được vị đắng.&nbsp; Hạt ớt chu&ocirc;ng được mang đến T&acirc;y Ban Nha v&agrave;o năm 1493 v&agrave; từ đ&oacute; lan rộng khắp c&aacute;c nước Ch&acirc;u &Acirc;u, Ch&acirc;u Phi, v&agrave; Ch&acirc;u &Aacute;. Ng&agrave;y nay, Trung Quốc l&agrave; nước xuất khẩu ớt chu&ocirc;ng lớn nhất thế giới, theo sau l&agrave; Mexico v&agrave; Indonesia.</p>\r\n\r\n<p>Điều kiện trồng ớt chu&ocirc;ng l&yacute; tưởng bao gồm đất ấm, khoảng từ 21 đến 29 độ C (70 đến 84 độ F), v&agrave; lu&ocirc;n giữ ẩm nhưng kh&ocirc;ng để &uacute;ng nước. Ớt chu&ocirc;ng rất nhạy cảm với độ ẩm v&agrave; nhiệt độ cao vượt mức.</p>\r\n\r\n<p>Gi&aacute; trị dinh dưỡng<br />\r\nỚt chu&ocirc;ng rất gi&agrave;u c&aacute;c chất chống oxy h&oacute;a v&agrave; vitamin C. So với ớt chu&ocirc;ng xanh, ớt chu&ocirc;ng đỏ c&oacute; nhiều vitamin v&agrave; dưỡng chất hơn.[8] Lượng carotene, giống như lycopene, trong ớt chu&ocirc;ng đỏ cao gấp 9 lần. Ớt chu&ocirc;ng đỏ c&ograve;n chứa gấp đ&ocirc;i lượng vitamin C so với ớt chu&ocirc;ng xanh.&nbsp;</p>\r\n\r\n<p>Cả ớt chu&ocirc;ng đỏ v&agrave; xanh đều c&oacute; chứa nhiều axit para coumaric</p>\r\n\r\n<p>Đặc t&iacute;nh thơm của ớt chu&ocirc;ng xanh l&agrave; do hợp chất 3-iso Butyl-2-methoxypyrazine (IBMP). Ngưỡng ph&aacute;t hiện trong nước của n&oacute; l&agrave; khoảng 2 ng/L.&nbsp;</p>\r\n', '', 0, '2022-03-17', 'Ớt chuông, hay còn gọi là ớt ngọt (gọi là pepper ở Vương quốc Liên hiệp Anh và Bắc Ireland, Canada, ', 0),
(58, 15, 'Ớt chuông xanh', 25000, 0, 'sp17-2.jpg', '<p>Ớt chu&ocirc;ng, hay c&ograve;n gọi l&agrave; ớt ngọt (gọi l&agrave; pepper ở Vương quốc Li&ecirc;n hiệp Anh v&agrave; Bắc Ireland, Canada, Ireland hay capsicum ở Ấn Độ, Bangladesh, &Uacute;c, Singapore v&agrave; New Zealand), l&agrave; quả của một nh&oacute;m c&acirc;y trồng, lo&agrave;i Capsicum annuum. C&acirc;y trồng của lo&agrave;i n&agrave;y cho ra tr&aacute;i với m&agrave;u sắc kh&aacute;c nhau, bao gồm m&agrave;u đỏ, v&agrave;ng, cam, xanh lục, s&ocirc;-c&ocirc;-la / n&acirc;u, vanilla / trắng, v&agrave; m&agrave;u t&iacute;m. Ớt chu&ocirc;ng đ&ocirc;i khi được xếp v&agrave;o nh&oacute;m ớt &iacute;t cay m&agrave; c&ugrave;ng loại với ớt ngọt. Ớt chu&ocirc;ng c&oacute; nguồn gốc ở Mexico, Trung Mỹ, v&agrave; ph&iacute;a Bắc Nam Mỹ. Phần khung v&agrave; hạt b&ecirc;n trong ớt chu&ocirc;ng c&oacute; thể ăn được, nhưng một số người sẽ cảm nhận được vị đắng.&nbsp; Hạt ớt chu&ocirc;ng được mang đến T&acirc;y Ban Nha v&agrave;o năm 1493 v&agrave; từ đ&oacute; lan rộng khắp c&aacute;c nước Ch&acirc;u &Acirc;u, Ch&acirc;u Phi, v&agrave; Ch&acirc;u &Aacute;. Ng&agrave;y nay, Trung Quốc l&agrave; nước xuất khẩu ớt chu&ocirc;ng lớn nhất thế giới, theo sau l&agrave; Mexico v&agrave; Indonesia.</p>\r\n\r\n<p>Điều kiện trồng ớt chu&ocirc;ng l&yacute; tưởng bao gồm đất ấm, khoảng từ 21 đến 29 độ C (70 đến 84 độ F), v&agrave; lu&ocirc;n giữ ẩm nhưng kh&ocirc;ng để &uacute;ng nước. Ớt chu&ocirc;ng rất nhạy cảm với độ ẩm v&agrave; nhiệt độ cao vượt mức.</p>\r\n\r\n<p>Gi&aacute; trị dinh dưỡng<br />\r\nỚt chu&ocirc;ng rất gi&agrave;u c&aacute;c chất chống oxy h&oacute;a v&agrave; vitamin C. So với ớt chu&ocirc;ng xanh, ớt chu&ocirc;ng đỏ c&oacute; nhiều vitamin v&agrave; dưỡng chất hơn.[8] Lượng carotene, giống như lycopene, trong ớt chu&ocirc;ng đỏ cao gấp 9 lần. Ớt chu&ocirc;ng đỏ c&ograve;n chứa gấp đ&ocirc;i lượng vitamin C so với ớt chu&ocirc;ng xanh.&nbsp;</p>\r\n\r\n<p>Cả ớt chu&ocirc;ng đỏ v&agrave; xanh đều c&oacute; chứa nhiều axit para coumaric</p>\r\n\r\n<p>Đặc t&iacute;nh thơm của ớt chu&ocirc;ng xanh l&agrave; do hợp chất 3-iso Butyl-2-methoxypyrazine (IBMP). Ngưỡng ph&aacute;t hiện trong nước của n&oacute; l&agrave; khoảng 2 ng/L.&nbsp;</p>\r\n', '', 0, '2022-03-18', 'Ớt chuông, hay còn gọi là ớt ngọt (gọi là pepper ở Vương quốc Liên hiệp Anh và Bắc Ireland, Canada, ', 0),
(59, 15, 'Rau củ xanh', 17000, 0, 'sp14.jpg', '<p>Nấm ăn chỉ về c&aacute;c loại nấm c&oacute; thể ăn được, d&ugrave;ng l&agrave;m thực phẩm, nguy&ecirc;n li&ecirc;u cho nấu ăn. Hầu hết nấm ăn được sử dụng rộng r&atilde;i l&agrave;m thực phẩm, ch&uacute;ng c&oacute; thể sử dụng trong rất nhiều m&oacute;n ăn, ở nhiều nền ẩm thực kh&aacute;c nhau. Nấm l&agrave; thực phẩm c&oacute; gi&aacute; trị dinh dưỡng cao, c&oacute; độ đạm cao v&agrave; &iacute;t chất b&eacute;o, chứa nhiều vitamin nh&oacute;m B v&agrave; C. D&ugrave; nấm kh&ocirc;ng phải l&agrave; nguốn vitamin D đ&aacute;ng kể, nhưng h&agrave;m lượng vitamin D c&oacute; thể tăng l&ecirc;n khi được phơi với &aacute;nh s&aacute;ng (nhất l&agrave; tia cực t&iacute;m) d&ugrave; điều n&agrave;y l&agrave;m thẫm lớp vỏ của ch&uacute;ng. Nấm cũng chứa nhiều nguy&ecirc;n tố vi lượng, như sắt, selen, natri, kali, magi&ecirc; v&agrave; phốt pho.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; danh s&aacute;ch c&aacute;c loại nấm ăn.B&ocirc;ng cải xanh (hoặc s&uacute;p lơ xanh, cải b&ocirc;ng xanh, Broccoli) l&agrave; một loại c&acirc;y thuộc lo&agrave;i Cải bắp dại, c&oacute; hoa lớn ở đầu, thường được d&ugrave;ng như rau. B&ocirc;ng cải xanh thường được chế biến bằng c&aacute;ch luộc hoặc hấp, nhưng cũng c&oacute; thể được ăn sống như l&agrave; rau sống trong những đĩa đồ nguội khai vị.<br />\r\nDinh dưỡng<br />\r\nB&ocirc;ng cải xanh c&oacute; chứa nhiều Vitamin A, Vitamin C, Vitamin K, chất xơ,&nbsp;Quercetin. N&oacute; cũng chứa nhiều chất dinh dưỡng c&oacute; khả năng chống ung thư như Myrosinase, Sulforaphane, Di-indolyl m&ecirc;tan v&agrave; một lượng nhỏ selen.</p>\r\n\r\n<p>T&aacute;c dụng chữa bệnh<br />\r\nVi&ecirc;m xương khớp<br />\r\nMột nghi&ecirc;n cứu của Anh cho thấy b&ocirc;ng cải xanh c&oacute; chứa một hợp chất gọi l&agrave; Sulforaphane c&oacute; thể gi&uacute;p chống lại vi&ecirc;m xương khớp (osteoarthritis) - sulforaphane c&oacute; thể chặn c&aacute;c enzyme ph&aacute; hủy sụn bằng c&aacute;ch chặn một ph&acirc;n tử g&acirc;y vi&ecirc;m.</p>\r\n\r\n<p>Chống oxi h&oacute;a<br />\r\nB&ocirc;ng cải xanh vẫn được biết đến l&agrave; c&oacute; th&agrave;nh phần chống ung thư, ngo&agrave;i ra ch&iacute;nh n&oacute; c&ograve;n gi&uacute;p cải thiện hệ miễn dịch ở người gi&agrave; v&agrave; l&agrave;m chậm qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a. Sulforaphane c&oacute; khả năng hoạt h&oacute;a những gene v&agrave; enzyme chống oxi h&oacute;a trong tế b&agrave;o miễn dịch. Những th&agrave;nh phần n&agrave;y sẽ ngăn c&aacute;c gốc tự do hủy hoại tế b&agrave;o. Tiến tr&igrave;nh chuyển h&oacute;a trong cơ thể sinh ra c&aacute;c sản phẩm phụ l&agrave; gốc tự do, nếu kh&ocirc;ng ngăn ngừa hoạt động của gốc tự do n&agrave;y c&oacute; thể g&acirc;y tổn hại m&ocirc; dẫn tới bệnh tật v&agrave; sự l&atilde;o ho&aacute;</p>\r\n\r\n<p>Bệnh tim mạch v&agrave;nh<br />\r\nNghi&ecirc;n cứu th&agrave;nh phần h&oacute;a học trong b&ocirc;ng cải xanh tại trường &ETH;ại Học Y Khoa Warwick đ&atilde; ph&aacute;t hiện hợp chất sulforaphane đ&atilde; l&agrave;m cho cơ thể tăng cường h&igrave;nh th&agrave;nh c&aacute;c enzyme bảo vệ c&aacute;c mạch m&aacute;u, giảm c&aacute;c loại ph&acirc;n tử g&acirc;y tổn hại tế b&agrave;o. Chất sulforaphane c&oacute; trong b&ocirc;ng cải xanh c&oacute; thể chống lại sự ph&aacute;t triển bệnh mạch m&aacute;u do tiểu đường.</p>\r\n\r\n<p>Kết quả nghi&ecirc;n cứu tr&ecirc;n động vật của trường &ETH;ại Học Connecticut cho thấy, những động vật ăn b&ocirc;ng cải xanh cải thiện được chức năng tim v&agrave; &iacute;t bị tổn thương về cơ tim hơn khi thiếu oxy. C&aacute;c nh&agrave; nghi&ecirc;n cứu cho rằng những lợi &iacute;ch của b&ocirc;ng cải xanh ch&iacute;nh l&agrave; việc n&oacute; bổ sung c&aacute;c chất m&agrave; gi&uacute;p tăng cường c&aacute;c protein bảo vệ tim c&oacute; t&ecirc;n l&agrave; thioredoxin. Một chế độ ăn nhiều b&ocirc;ng cải xanh sẽ mang lại lợi &iacute;ch cho tim mạch.</p>\r\n\r\n<p>Đau bao tử</p>\r\n\r\n<p>Thử nghiệm trong ph&ograve;ng th&iacute; nghiệm cho thấy, th&agrave;nh phần sulforaphane trong b&ocirc;ng cải xanh v&agrave; mầm của n&oacute; c&oacute; thể ti&ecirc;u diệt vi khuẩn helicobacter pylori (HP) đ&acirc;y l&agrave; loại vi khuẩn ch&iacute;nh g&acirc;y lo&eacute;t dạ d&agrave;y v&agrave; phần lớn t&aacute;c nh&acirc;n g&acirc;y ung thư ở đ&acirc;y. &nbsp;Khi nghi&ecirc;n cứu tr&ecirc;n chuột, c&aacute;c nh&agrave; khoa học tại &ETH;ại Học Johns Hopkins ph&aacute;t hiện thấy, sulforaphane ti&ecirc;u diệt được cả vi khuẩn HP vẫn kh&aacute;ng lại kh&aacute;ng sinh th&ocirc;ng thường. H&oacute;a chất n&agrave;y c&oacute; thể t&igrave;m v&agrave; diệt vi khuẩn nằm ngo&agrave;i lẫn nằm trong tế b&agrave;o. &ETH;iều n&agrave;y rất quan trọng v&igrave; th&ocirc;ng thường, HP hay nằm trong c&aacute;c tế b&agrave;o l&oacute;t của ni&ecirc;m mạc dạ d&agrave;y, khiến bệnh kh&oacute; l&agrave;nh. H&agrave;m lượng sulforaphane được d&ugrave;ng trong th&iacute; nghiệm c&oacute; thể nhận thấy được bằng c&aacute;ch ăn b&ocirc;ng cải xanh hay mầm của n&oacute;.</p>\r\n\r\n<p>Ung thư<br />\r\nKhi kh&ocirc;ng nấu ch&iacute;n, loại thực phẩm n&agrave;y chứa một lượng nhỏ chất c&oacute; khả năng bảo vệ ADN trước sự tấn c&ocirc;ng của c&aacute;c enzyme oxi h&oacute;a - t&aacute;c nh&acirc;n g&acirc;y ung thư. &ETH;&acirc;y l&agrave; th&agrave;nh quả nghi&ecirc;n cứu mới nhất của &ETH;ại Học Illinois. Khi nhai, c&aacute;c tế b&agrave;o b&ocirc;ng cải xanh bị đứt g&atilde;y v&agrave; giải ph&oacute;ng một loại enzyme đặc biệt. Nhờ enzyme n&agrave;y, một chất h&oacute;a học gọi l&agrave; sulphoraphanes được h&igrave;nh th&agrave;nh. Một số ph&acirc;n tử hợp chất mới n&agrave;y được gắn th&ecirc;m một nguy&ecirc;n tử sulphur, c&oacute; t&aacute;c dụng hoạt động cơ chế đối kh&aacute;ng c&aacute;c độc tố sinh ung thư. B&ecirc;n cạnh đ&oacute;, trong b&ocirc;ng cải xanh c&ograve;n c&oacute; th&ecirc;m protein ESP với nhiệm vụ tạo ra sự c&acirc;n bằng cho c&aacute;c sulphoraphane k&eacute;m sulphur.</p>\r\n\r\n<p>Ung thư dạ d&agrave;y: ti&ecirc;u diệt vi khuẩn helicobacter pylori (HP) đ&acirc;y l&agrave; loại vi khuẩn ch&iacute;nh g&acirc;y lo&eacute;t dạ d&agrave;y v&agrave; phần lớn t&aacute;c nh&acirc;n g&acirc;y ung thư ở đ&acirc;y.<br />\r\nUng thư da: Bảo vệ l&agrave;n da của bạn chống lại c&aacute;c t&aacute;c động của tia cực t&iacute;m - b&ocirc;ng cải xanh c&oacute; thể gi&uacute;p ngăn ngừa ung thư da, kh&ocirc;ng ăn n&oacute; mặc d&ugrave;, nhưng bằng c&aacute;ch &aacute;p dụng n&oacute; trực tiếp l&ecirc;n da. Một b&agrave;i viết trong Kỷ yếu của Viện h&agrave;n l&acirc;m Khoa học ph&aacute;t hiện ra rằng c&aacute;c t&aacute;c hại của bức xạ tia UV (tia cực t&iacute;m) c&oacute; thể được giảm đ&aacute;ng kể với việc b&ocirc;i tại chỗ chiết xuất b&ocirc;ng cải xanh.[11]<br />\r\nUng thư b&agrave;ng quang: C&aacute;c nghi&ecirc;n cứu tại &ETH;ại Học Ohio State v&agrave; &ETH;ại Học Harvard cho biết: một nh&oacute;m chất từ b&ocirc;ng cải xanh c&oacute; khả năng ngăn ngừa v&agrave; l&agrave;m chậm ph&aacute;t triển của bệnh ung thư b&agrave;ng quang. Nghi&ecirc;n cứu cho biết những người ăn từ 2 bữa b&ocirc;ng cải xanh mỗi tuần c&oacute; tỷ lệ mắc ung thư b&agrave;ng quang thấp hơn 44% so với những người ăn kh&ocirc;ng qu&aacute; 1 bữa/tuần. &nbsp;Hợp chất n&agrave;y c&oacute; t&ecirc;n l&agrave; glucosinolate từ mầm b&ocirc;ng cải xanh. Trong qu&aacute; tr&igrave;nh th&aacute;i nhỏ, nhai v&agrave; ti&ecirc;u h&oacute;a, chất n&agrave;y sẽ chuyển th&agrave;nh chất isothiocyanate, c&oacute; vai tr&ograve; ngăn ngừa ung thư. Thử nghiệm trong ph&ograve;ng th&iacute; nghiệm, isothiocyanate ngăn chặn ph&aacute;t triển của c&aacute;c tế b&agrave;o ung thư b&agrave;ng quang.</p>\r\n', '', 0, '2022-03-08', 'Nấm ăn chỉ về các loại nấm có thể ăn được, dùng làm thực phẩm, nguyên liêu cho nấu ăn.', 0),
(60, 15, 'Nấm', 80000, 0, 'sp15.jpg', '<p>Nấm ăn chỉ về c&aacute;c loại nấm c&oacute; thể ăn được, d&ugrave;ng l&agrave;m thực phẩm, nguy&ecirc;n li&ecirc;u cho nấu ăn. Hầu hết nấm ăn được sử dụng rộng r&atilde;i l&agrave;m thực phẩm, ch&uacute;ng c&oacute; thể sử dụng trong rất nhiều m&oacute;n ăn, ở nhiều nền ẩm thực kh&aacute;c nhau. Nấm l&agrave; thực phẩm c&oacute; gi&aacute; trị dinh dưỡng cao, c&oacute; độ đạm cao v&agrave; &iacute;t chất b&eacute;o, chứa nhiều vitamin nh&oacute;m B v&agrave; C. D&ugrave; nấm kh&ocirc;ng phải l&agrave; nguốn vitamin D đ&aacute;ng kể, nhưng h&agrave;m lượng vitamin D c&oacute; thể tăng l&ecirc;n khi được phơi với &aacute;nh s&aacute;ng (nhất l&agrave; tia cực t&iacute;m) d&ugrave; điều n&agrave;y l&agrave;m thẫm lớp vỏ của ch&uacute;ng. Nấm cũng chứa nhiều nguy&ecirc;n tố vi lượng, như sắt, selen, natri, kali, magi&ecirc; v&agrave; phốt pho.</p>\r\n', '', 0, '2022-02-28', 'rất tốt cho dạ dày', 0),
(61, 15, 'Khoai tây', 25000, 0, 'sp30.jpg', '<p>Khoai t&acirc;y (danh ph&aacute;p hai phần: Solanum tuberosum), thuộc họ C&agrave; (Solanaceae). Khoai t&acirc;y l&agrave; lo&agrave;i c&acirc;y n&ocirc;ng nghiệp ngắn ng&agrave;y, trồng lấy củ chứa tinh bột. Ch&uacute;ng l&agrave; loại c&acirc;y trồng lấy củ rộng r&atilde;i nhất thế giới v&agrave; l&agrave; loại c&acirc;y trồng phổ biến thứ tư về mặt sản lượng tươi - xếp sau l&uacute;a, l&uacute;a m&igrave; v&agrave; ng&ocirc;[1]. Lưu trữ khoai t&acirc;y d&agrave;i ng&agrave;y đ&ograve;i hỏi bảo quản trong điều kiện lạnh.</p>\r\n\r\n<p>Dinh dưỡng</p>\r\n\r\n<p>Khoai t&acirc;y c&oacute; chứa c&aacute;c vitamin, kho&aacute;ng chất v&agrave; một loạt c&aacute;c h&oacute;a chất thực vật như c&aacute;c carotenoit v&agrave; phenol tự nhi&ecirc;n. Ax&iacute;t chlorogenic cấu th&agrave;nh đến 90% của phenol trong khoai t&acirc;y. C&aacute;c hợp chất kh&aacute;c trong khoai t&acirc;y l&agrave; axit 4-O-caffeoylquinic (axit crypto-clorogenic), axit 5-O-caffeoylquinic (axit neo-clorogenic), axit 3,4-dicaffeoylquinic v&agrave; 3,5-dicaffeoylquinic.[33] Trong một củ khoai t&acirc;y c&ograve;n vỏ c&oacute; k&iacute;ch thước trung b&igrave;nh 150 g, cung cấp 27 mg vitamin C (45% gi&aacute; trị h&agrave;ng ng&agrave;y), 620 mg kali (18%), o,2 mg vitamin B6(10%) v&agrave; một lượng rất nhỏ thiamin, riboflavin, folate, niacin, magie, photpho, sắt v&agrave; kẽm.</p>\r\n\r\n<p>Khoai t&acirc;y chứa khoảng 26 g cacbohydrat trong một củ trung b&igrave;nh. C&aacute;c h&igrave;nh thức chủ yếu của cacbonhydrat n&agrave;y l&agrave; tinh bột. Một phần nhỏ trong đ&oacute; c&oacute; khả năng chống ti&ecirc;u ho&aacute; từ enzym trong dạ d&agrave;y v&agrave; ruột non. Tinh bột kho&aacute;ng n&agrave;y được coi l&agrave; c&oacute; hiệu ứng sinh l&yacute; v&agrave; lợi &iacute;ch cho sức khỏe giống chất xơ: l&agrave; chống ung thư ruột kết, tăng khả năng nạp glucose, giảm nồng độ cholesterol v&agrave; chất b&eacute;o trung t&iacute;nh trong huyết tương, tăng cảm gi&aacute;c no, thậm ch&iacute; n&oacute; c&oacute; thể l&agrave;m giảm chất b&eacute;o t&iacute;ch trữ trong cơ thể.[34][35][36] C&aacute;ch chế biến khoai t&acirc;y c&oacute; thể l&agrave;m thay đổi đ&aacute;ng kể h&agrave;m lượng dinh dưỡng. V&iacute; dụ khoai t&acirc;y nấu ch&iacute;n chứa 7% tinh bột kho&aacute;ng, khi l&agrave;m nguội đi th&igrave; n&oacute; tăng l&ecirc;n 13%.[37]</p>\r\n\r\n<p>Khoai t&acirc;y được xếp v&agrave;o loại thức ăn c&oacute; chỉ số Glycemic(GI) cao, do đ&oacute; n&oacute; thường bị loại trừ ra khỏi chế độ ăn của những người cố gắng theo chế độ ăn uống với GI thấp. Trong thực tế chỉ số GI t&ugrave;y thuộc mỗi loại khoai t&acirc;y kh&aacute;c nhau l&agrave; kh&aacute;c nhau.[38]</p>\r\n\r\n<p>Do chứa nhiều cacbonhydrat, khoai t&acirc;y được cho l&agrave; khiến cho người bị b&eacute;o ph&igrave; dư thừa nhiều hơn chất b&eacute;o. Tuy nhi&ecirc;n, nghi&ecirc;n cứu của Đại học California, Davis v&agrave; Trung t&acirc;m Quốc gia về An to&agrave;n Thực phẩm v&agrave; C&ocirc;ng nghệ, Viện C&ocirc;ng nghệ Illinois chứng minh rằng mọi người c&oacute; thể đưa khoai t&acirc;y v&agrave;o chế độ ăn uống của họ v&agrave; vẫn giảm c&acirc;n.</p>\r\n', '', 0, '2022-01-19', 'sắc đẹp', 0),
(62, 16, 'Nước ép bơ', 50000, 0, 'ne7.jpg', '<p>Gi&agrave;u vitamin v&agrave; kho&aacute;ng chất, bơ l&agrave; một trong những loại quả cung cấp nhiều chất dinh dưỡng cho cơ thể nhất. Đặc biệt, bơ c&ograve;n c&oacute; t&aacute;c dụng l&agrave;m đẹp da, rất th&iacute;ch cho c&aacute;nh chị em. M&oacute;n tr&aacute;ng miệng với nước bơ &eacute;p sữa tươi được Food4tots giới thiệu dưới đ&acirc;y sẽ khiến bạn y&ecirc;u th&iacute;ch.</p>\r\n', '', 0, '2022-03-27', 'giải khát', 0),
(63, 16, 'Nước ép cà chua', 60000, 0, 'ne6.jpg', '<p>C&agrave; chua l&agrave; một trong những loại tr&aacute;i c&acirc;y gi&agrave;u chất dinh dưỡng m&agrave; chắc hẳn ai trong ch&uacute;ng ta cũng biết tới loại quả n&agrave;y. Kh&ocirc;ng chỉ l&agrave; một loại quả đơn thuần, c&agrave; chua được sử dụng hằng ng&agrave;y trong c&aacute;c bữa ăn của mọi gia đ&igrave;nh. Kh&ocirc;ng những thế c&agrave; chua cũng được biết đến nhiều qua những t&aacute;c dụng chữa bệnh hay nữa, c&agrave; chua c&oacute; thể được chế biến nhiều c&aacute;ch kh&aacute;c nhau để c&oacute; những m&oacute;n ăn ngon, v&agrave; c&ograve;n được d&ugrave;ng &eacute;p lấy nước uống rất bổ dưỡng, một loại nước &eacute;p ngon v&agrave; hấp dẫn nhưng việc&nbsp;<em><strong>Uống nước &eacute;p c&agrave; chua mỗi ng&agrave;y c&oacute; tốt kh&ocirc;ng?</strong></em>&nbsp;vẫn l&agrave; một c&acirc;u hỏi rất nhiều người quan t&acirc;m, v&agrave; h&ocirc;m nay&nbsp;&nbsp;sẽ đem tới cho bạn những c&acirc;u trả lời xung quanh vấn đề n&agrave;y, h&atilde;y c&ugrave;ng theo d&otilde;i phần b&agrave;i viết b&ecirc;n dưới nh&eacute;.</p>\r\n', '', 0, '2022-03-25', 'giải khát', 0),
(64, 16, 'Nước ép xoài ', 200000, 0, 'ne5.png', '<p>Nước &eacute;p xo&agrave;i Sanga Calamango 30 g&oacute;i l&agrave; một thức uống ngon, tốt cho sức khỏe, lại c&oacute; thể gi&uacute;p hỗ trợ giảm c&acirc;n, detox, giảm mỡ thừa, ổn định v&oacute;c d&aacute;ng</p>\r\n', '', 0, '2022-03-27', 'giải khát', 0),
(65, 16, 'Nước ép dưa hấu', 580000, 0, 'ne2.png', '<p>Dưa hấu c&oacute; t&iacute;nh h&agrave;n c&oacute; thể d&ugrave;ng l&agrave;m thức ăn giải nhiệt trong những ng&agrave;y h&egrave; n&oacute;ng nực. Kh&ocirc;ng chỉ l&agrave; một loại&nbsp;<a href=\"https://www.bachhoaxanh.com/trai-cay-noi\" target=\"_blank\">tr&aacute;i c&acirc;y</a>&nbsp;để ăn trong những ng&agrave;y h&egrave; n&oacute;ng bức m&agrave; n&oacute; c&ograve;n l&agrave; một loại thức uống dinh dưỡng rất tốt cho cơ thể. Loại nước ép dưa h&acirc;́u có màu sắc rực rỡ cùng với vị ngọt nhẹ đã khi&ecirc;́n cho kh&ocirc;ng chỉ người lớn tu&ocirc;̉i mà đ&ecirc;́n cả các bé cũng r&acirc;́t thích.</p>\r\n', '', 0, '2022-03-09', 'giải khát', 0),
(66, 12, 'Nước ép cam', 250, 0, 'ne4.png', '<p><strong>Nước cam &eacute;p</strong>&nbsp;nguy&ecirc;n chất được y&ecirc;u th&iacute;ch bởi hương vị thơm ngon v&agrave; nhiều lợi &iacute;ch cho sức khỏe, đặc biệt l&agrave; tốt cho l&agrave;n da v&agrave; tăng cường sức đề kh&aacute;ng.&nbsp;<a href=\"https://www.huongnghiepaau.com/cach-lam-nuoc-cam-ep\" target=\"_blank\"><strong>C&aacute;ch l&agrave;m nước cam &eacute;p</strong></a>&nbsp;lại đơn giản, nguy&ecirc;n liệu dễ t&igrave;m n&ecirc;n bạn c&oacute; thể tự pha tại nh&agrave; để thưởng thức. Tham khảo ngay b&agrave;i viết dưới đ&acirc;y để học b&iacute; quyết pha nước &eacute;p tr&aacute;i c&acirc;y ngon.</p>\r\n', '', 0, '2022-03-10', 'giải khát', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_rate`
--

CREATE TABLE `product_rate` (
  `rate_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_rate`
--

INSERT INTO `product_rate` (`rate_id`, `rate`, `reason`, `product_id`, `user_id`) VALUES
(0, 3, 'khá ngon', 65, 1),
(0, 2, '', 65, 1),
(0, 1, '', 65, 1),
(0, 1, '', 65, 1),
(0, 4, '', 44, 1),
(0, 4, 'cà chua khá tươi , ngon ', 56, 1),
(0, 4, '', 57, 1),
(0, 1, '', 46, 0),
(0, 3, 'khá ngon', 65, 1),
(0, 2, '', 65, 1),
(0, 1, '', 65, 1),
(0, 1, '', 65, 1),
(0, 4, '', 44, 1),
(0, 4, 'cà chua khá tươi , ngon ', 56, 1),
(0, 4, '', 57, 1),
(0, 1, '', 46, 0),
(0, 4, '', 45, 4),
(0, 5, 'chó hải', 44, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variant`
--

CREATE TABLE `product_variant` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `grams` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `option` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `modified_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistic`
--

CREATE TABLE `statistic` (
  `id_statistic` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `createdAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_name`, `address`, `phone`, `email`, `avatar`, `token`, `password`, `user_id`) VALUES
('Thành Đạt', '380 phạm văn chiêu Quận Gò Vấp Tp Hồ Chí Minh', '0386352313', 'dat2@gmail.com', NULL, '589aeddb7fedf65ae68ae6fc1f2567e1', '20014d066fab8337ce1c0861d24bfa59', 1),
('aaaaa', 'tp hồ chí minh', '098899011', 'dat@gmail.com', NULL, '1eea4422274d95c46bb095b1be12b01d', '12345678', 2),
('Thi Vũ', '437 Lý Thường Kiệt phường 8 Quận Tân Bình', '0707935913', 'vuphungthi2@gmail.com', NULL, '22fc79904d4a6f6929f2167b6b0fa970', 'ad7892229a17d954302ffad9e94bfae2', 3),
('Giang Văn Linh', 'HCM', '0337229661', 'linhbq89@gmail.com', NULL, '', '595d715c7fb174152c0a467731c58040', 4),
('Giang Văn Linh', 'HCM', '0559229661', 'giangvanlinhbq89@gmail.com', NULL, '', '3b176d67a2270d72e3c90c432fe3dc83', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_admin`
--

CREATE TABLE `user_admin` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passadmin` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `level` varchar(500) NOT NULL,
  `ava` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_admin`
--

INSERT INTO `user_admin` (`fullname`, `username`, `passadmin`, `id`, `level`, `ava`) VALUES
('Vũ Phụng Thi', 'admin', '0707935913', 7, 'Admin', '278269071_3246883278864697_330293408855710692_n.jpg'),
('Hoàng Dũ', 'hoangvu', 'Nhom321', 8, 'Nhân viên', 'localhost _ 127.0.0.1 _ farm _ user_admin _ phpMyAdmin 5.1.1 - Personal - Microsoft​ Edge 3_27_2022 9_50_26 AM.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product_rate`
--
ALTER TABLE `product_rate`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id_statistic`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
