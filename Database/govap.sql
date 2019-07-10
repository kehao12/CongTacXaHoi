-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2019 at 09:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govap`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `idBV` int(6) NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `TacGia` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `TomTat` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `NgayTao` date NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `NoiDung` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `SoLanXem` int(11) NOT NULL,
  `TrangThai` int(2) NOT NULL,
  `idTL` int(6) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`idBV`, `TieuDe`, `TacGia`, `TomTat`, `NgayTao`, `HinhAnh`, `NoiDung`, `SoLanXem`, `TrangThai`, `idTL`, `TaiKhoan`) VALUES
(17, 'NÂNG CAO HIỆU QUẢ HOẠT ĐỘNG PHÒNG CHÁY VÀ CHỮA CHÁY TẠI CƠ SỞ THEO PHƯƠNG CHÂM ', 'Gò Vấp', '(WEBGOVAP) - Tiếp tục nâng cao hiệu quả hoạt động của lực lượng Phòng cháy và chữa cháy tại cơ sở theo phương châm 5 tại chỗ: “Chỉ huy tại chỗ, phương tiện tại chỗ, lực lượng tại chỗ; vật tư, hậu cần tại chỗ và phương án tại chỗ”, tuần qua Công an Quận đã', '2019-05-26', '1.jpg', '<p><em>Nhiều t&igrave;nh huống ch&aacute;y giả định được đưa ra tr&ecirc;n cơ sở t&igrave;nh h&igrave;nh ch&aacute;y, nổ c&oacute; thể xảy ra tr&ecirc;n thực tế tại c&aacute;c cơ sở, như: Ng&acirc;n h&agrave;ng (tại Ng&acirc;n h&agrave;ng TMCP Đầu tư v&agrave; Ph&aacute;t triển Việt Nam (BIDV) - Chi nh&aacute;nh Trường Sơn - 316 Nguyễn Th&aacute;i Sơn - Phường 4); Chung cư (tại Chung cư Gia Ph&aacute;t Square - 117 - 117A L&ecirc; Đức Thọ - Phường 6); cơ sở gi&aacute;o dục (tại Trường Tiểu học Nguyễn Thượng Hiền - 36 Nguyễn Thượng Hiền - Phường 1; Trường Tiểu học Trần Văn Ơn - 90 Nguyễn Th&aacute;i Sơn, Phường 3; Trường mầm non Hồng Nhung - 27 Nguyễn Văn Bảo - Phường 4; Cơ sở gi&aacute;o dục quốc tế Aki Việt Nam - Chi nh&aacute;nh G&ograve; Vấp - 226/11 Nguyễn Th&aacute;i Sơn - Phường 4); cơ sở sản xuất, kinh doanh (tại Doanh nghiệp tư nh&acirc;n xăng dầu số 8 Gia Định - 458 Phạm Văn Chi&ecirc;u - Phường 9; C&ocirc;ng ty cổ phần &ocirc; t&ocirc; Trường Hải - 499/44/6D Quang Trung - Phường 10; X&iacute; nghiệp may đo Tổng C&ocirc;ng ty 26 - 216R Quang Trung - Phường 10; C&ocirc;ng ty TNHH may mặc xuất nhập khẩu Long L&acirc;n - 256/105 Phan Huy &Iacute;ch - Phường 12; X&iacute; nghiệp TNHH MTV may Minh Hồng Ph&uacute;c - 21 - 23 Nguyễn Tư Giản - Phường 12; C&ocirc;ng ty TNHH in bao b&igrave; Ng&acirc;n H&agrave; - 52/5 đường số 3 - Phường 15) v&agrave; Si&ecirc;u thị (tại Si&ecirc;u thị Co.op Mart - 543/1 Phan Văn Trị - Phường 7).</em></p>\r\n\r\n<p><em><img alt=\"\" src=\"/thuctap1/resources/img/images/6.jpg\" style=\"height:496px; width:1048px\" /></em></p>\r\n\r\n<p><em>Việc tổ chức thực tập phương &aacute;n chữa ch&aacute;y v&agrave; cứu nạn, cứu hộ h&agrave;ng năm gi&uacute;p cho lực lượng Cảnh s&aacute;t PCCC v&agrave; CNCH v&agrave; lực lượng PCCC cơ sở nắm r&otilde; đặc điểm t&igrave;nh h&igrave;nh của đơn vị cơ sở, x&aacute;c định c&aacute;c điểm cấp nước chữa ch&aacute;y, th&ocirc;ng thạo đường đi lối lại trong v&agrave; ngo&agrave;i cơ sở, tăng cường sự phối hợp để chủ động tổ chức chữa ch&aacute;y c&oacute; hiệu quả. Đồng thời gi&uacute;p cho lực lượng PCCC tại chỗ v&agrave; c&aacute;n bộ, c&ocirc;ng nh&acirc;n vi&ecirc;n của c&aacute;c cơ sở c&oacute; thể sử dụng th&agrave;nh thạo c&aacute;c phương tiện, dụng cụ chữa ch&aacute;y, ph&aacute;t huy tốt phương ch&acirc;m bốn tại chỗ để dập tắt đ&aacute;m ch&aacute;y l&uacute;c ban đầu ngay từ mới ph&aacute;t sinh.</em></p>\r\n\r\n<p><em>Dưới đ&acirc;y l&agrave; h&igrave;nh ảnh tuy&ecirc;n truyền v&agrave; thực tập tại một số cơ sở:</em></p>\r\n\r\n<p><em><img alt=\"\" src=\"/thuctap1/resources/img/images/1.jpg\" style=\"height:786px; width:1048px\" /></em></p>\r\n\r\n<p><em><img alt=\"\" src=\"/thuctap1/resources/img/images/__thumbs/2.jpg/2__760x1013.jpg\" style=\"height:1397px; width:1048px\" /></em></p>\r\n', 23, 1, 25, 'admin01'),
(22, 'TẬP HUẤN CHÍNH SÁCH CHUYỂN DỊCH CƠ CẤU NÔNG NGHIỆP ĐÔ THỊ', '(WEBGOVAP) ', '(WEBGOVAP) - Ngày 24.4, Chi cục Phát triển Nông thôn Thành phố thuộc Sở Nông nghiệp và Phát triển nông thôn Thành phố phối hợp UBND Quận tổ chức tập huấn cho hơn 100 hội viên sinh vật cảnh, thanh niên, phụ nữ, cựu chiến binh, các đoàn thể chính trị - xã h', '2019-05-29', 'tin.jpg', '<p>Đại diện Chi cục Ph&aacute;t triển N&ocirc;ng th&ocirc;n Th&agrave;nh phố đ&atilde; th&ocirc;ng tin về nội dung c&aacute;c ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch chuyển dịch cơ cấu n&ocirc;ng nghiệp đ&ocirc; thị tr&ecirc;n địa b&agrave;n Th&agrave;nh phố giai đoạn 2017 &ndash; 2020 được ban h&agrave;nh theo Nghị quyết số 10/2017/NQ-HĐND ng&agrave;y 7.12.2017 của Hội N&ocirc;ng d&acirc;n Th&agrave;nh phố v&agrave; Quyết định số 655/QĐ-UBND ng&agrave;y 12.2.2018 của UBND Th&agrave;nh phố; triển khai Nghị định số 1956/QĐ-TTg ng&agrave;y 27.11.2009 của Thủ tướng Ch&iacute;nh phủ&nbsp;<em>(ảnh)</em>.</p>\r\n\r\n<p>Nội dung c&aacute;c ch&iacute;nh s&aacute;ch ban h&agrave;nh nhằm khuyến kh&iacute;ch c&aacute;c th&agrave;nh phần kinh tế đầu tư để chuyển dịch cơ cấu n&ocirc;ng nghiệp Th&agrave;nh phố theo hướng hiện đại, ph&aacute;t triển hiệu quả v&agrave; bền vững; x&acirc;y dựng n&ocirc;ng th&ocirc;n mới tr&ecirc;n địa b&agrave;n Th&agrave;nh phố c&oacute; kết cấu hạ tầng kinh tế x&atilde; hội hiện đại. Tất cả c&aacute;c hộ gia đ&igrave;nh, chủ trang trại, c&aacute; nh&acirc;n, tổ hợp t&aacute;c, hợp t&aacute;c x&atilde;, doanh nghiệp được hưởng c&aacute;c ch&iacute;nh s&aacute;ch &aacute;p dụng trong c&aacute;c trường hợp trồng trọt, chăn nu&ocirc;i, nu&ocirc;i trồng thủy sản; sản xuất n&ocirc;ng nghiệp tốt v&agrave; sản xuất n&ocirc;ng nghiệp ứng dụng c&ocirc;ng nghệ cao được cấp chứng nhận; l&acirc;m nghiệp, di&ecirc;m nghiệp, ph&aacute;t triển ng&agrave;nh nghề n&ocirc;ng th&ocirc;n sử dụng nguy&ecirc;n vật liệu từ n&ocirc;ng nghiệp; sơ chế, chế biến v&agrave; ti&ecirc;u thụ c&aacute;c sản phẩm n&ocirc;ng nghiệp tr&ecirc;n địa b&agrave;n Th&agrave;nh phố; nu&ocirc;i v&agrave; khai th&aacute;c tổ yến theo quy hoạch, khai th&aacute;c đ&aacute;nh bắt thủy sản kh&ocirc;ng mang t&iacute;nh lạm s&aacute;t.</p>\r\n\r\n<p>Buổi tập huấn gi&uacute;p hội vi&ecirc;n c&oacute; hoạt động kinh doanh n&ocirc;ng nghiệp n&acirc;ng cao kiến thức trồng trọt, nắm được những m&ocirc; h&igrave;nh tiềm năng ph&aacute;t triển b&ecirc;̀n vững ph&ugrave; hợp với điều kiện địa phương; c&aacute;ch tiếp cận c&aacute;c nguồn vốn vay, h&ocirc;̃ trợ lãi vay, hướng chuyển đổi cơ cấu n&ocirc;ng nghiệp đ&ocirc; thị để đạt hiệu quả kinh tế cao nhất.</p>\r\n', 22, 1, 21, 'admin'),
(23, 'LỄ VÍA BÀ CHÚA XỨ MÁI ĐÌNH CỔ NHẤT NAM BỘ', '(WEBGOVAP)', 'Sáng nay, Ban quản lý Đình Thông Tây Hội - Di tích kiến trúc nghệ thuật Quốc gia đã tổ chức trọng thể Lễ Vía Bà Chúa Xứ - một Lễ hội mang bản sắc văn hóa dân tộc đậm nét diễn ra hàng năm vào ngày 24.4 âm lịch, trong đó chứa đựng nhiều màu sắc địa phương N', '2019-05-29', '1559123900906b0cf3b1b7ae49fbac6f5.jpg', '<p><img alt=\"\" src=\"/thuctap1/resources/img/images/1559123900906b0cf3b1b7ae49fbac6f5.jpg\" style=\"height:589px; width:1048px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/thuctap1/resources/img/images/1559123902953bbe6b800e5ff00a159ee.jpg\" style=\"height:589px; width:1048px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/thuctap1/resources/img/images/1559123903578e2d6a7abe554000a5945.jpg\" style=\"height:589px; width:1048px\" /></p>\r\n', 6, 0, 22, 'admin'),
(24, 'KHAI MẠC TRỌNG THỂ HỘI THAO QUỐC PHÒNG QUẬN GÒ VẤP NĂM 2019', 'WEBGOVAP', '(WEBGOVAP) - Sớm nay, ngày 5.4.2019, Lễ khai mạc Hội thao đã tổ chức trọng thể. Đến dự có các đồng chí: Thượng tá Phan Văn Điền - Phó Tham mưu trưởng - Bộ Tư lệnh Thành phố, Thân Trọng Minh - UVTV Quận ủy - Phó Chủ tịch Thường trực HĐND Quận, cùng các đồn', '2019-05-30', '1554443900155Hoi thao QP 2019.jpg', '<p><img alt=\"Thượng tá Nguyễn Ngọc Thạch - UVTV Quận ủy - Chủ huy trưởng Ban chỉ huy Quân sự Quận phát biểu khai mạc Hội thao\" src=\"/thuctap1/resources/img/images/1554443896186_MG_9370%20copy.jpg\" style=\"height:699px; width:1048px\" /></p>\r\n\r\n<p><em>Ph&aacute;t biểu khai mạc, Thượng t&aacute; Nguyễn Ngọc Thạch - UVTV Quận ủy - Chủ huy trưởng Ban chỉ huy Qu&acirc;n sự Quận n&ecirc;u r&otilde; mục đ&iacute;ch của Hội thao nhằm đ&aacute;nh gi&aacute; chất lượng c&ocirc;ng t&aacute;c huấn luyện qu&acirc;n sự, c&ocirc;ng t&aacute;c gi&aacute;o dục ch&iacute;nh trị tư tưởng trong c&aacute;n bộ, chiến sỹ lực lượng vũ trang địa phương, đ&uacute;c r&uacute;t kinh nghiệm thực tiễn trong l&atilde;nh đạo, chỉ đạo c&ocirc;ng t&aacute;c qu&acirc;n sự - quốc ph&ograve;ng địa phương trong thời gian tới, g&oacute;p phần n&acirc;ng cao chất lượng sẵn s&agrave;ng chiến đấu, sẵn s&agrave;ng cơ động, xử tr&iacute; c&aacute;c t&igrave;nh huống nếu c&oacute; thể xảy ra, giữ vững an ninh ch&iacute;nh trị, trật tự an to&agrave;n x&atilde; hội tr&ecirc;n địa b&agrave;n. Đồng thời, biểu dương sức mạnh của lực lượng vũ trang v&agrave; nền quốc ph&ograve;ng to&agrave;n d&acirc;n địa phương, n&ecirc;u cao tinh thần cảnh gi&aacute;c c&aacute;ch mạng, thường xuy&ecirc;n củng cố thế trận an ninh Nh&acirc;n d&acirc;n vững chắc, đ&aacute;p ứng y&ecirc;u cầu nhiệm vụ trong t&igrave;nh h&igrave;nh mới. Qua hội thao sẽ tuyển chọn những tập thể, c&aacute; nh&acirc;n đạt th&agrave;nh t&iacute;ch cao tham gia Hội thao quốc ph&ograve;ng lực lượng vũ trang Th&agrave;nh phố.</em></p>\r\n\r\n<p><em><img alt=\"\" src=\"/thuctap1/resources/img/images/1554443898171_MG_9386%20copy.jpg\" style=\"height:699px; width:1048px\" /></em></p>\r\n\r\n<p><em>Ph&aacute;t biểu chỉ đạo, đồng ch&iacute; Th&acirc;n Trọng Minh - UVTV Quận ủy - Ph&oacute; Chủ tịch Thường trực HĐND Quận ghi nhận kết quả tham mưu của Đảng ủy - Ban chỉ huy qu&acirc;n sự Quận v&agrave; 16 Phường trong thời gian qua đ&atilde; t&iacute;ch cực triển khai đồng bộ, to&agrave;n diện v&agrave; thực hiện c&oacute; hiệu quả c&aacute;c nhiệm vụ qu&acirc;n sự - quốc ph&ograve;ng địa phương, đảm bảo thế trận v&agrave; tiềm lực quốc ph&ograve;ng - an ninh Nh&acirc;n d&acirc;n ng&agrave;y c&agrave;ng vững chắc. C&ocirc;ng t&aacute;c x&acirc;y dựng lực lượng, x&acirc;y dựng đơn vị vững mạnh to&agrave;n diện, nề nếp ch&iacute;nh quy đảm bảo tốt. Hầu hết c&aacute;n bộ, chiến sỹ c&aacute;c đơn vị đều ho&agrave;n th&agrave;nh tốt nhiệm vụ gi&aacute;o dục, huấn luyện, diễn tập sẵn s&agrave;ng chiến đấu. &nbsp;Đặc biệt, Đảng ủy Qu&acirc;n sự Quận tập trung l&atilde;nh đạo, chỉ đạo &nbsp;thực hiện nghi&ecirc;m t&uacute;c, hiệu quả c&aacute;c Nghị quyết, Chỉ thị của Đảng, qu&aacute;n triệt s&acirc;u sắc Nghị quyết số 28-NQ/TW của Ban Chấp h&agrave;nh Trung ương Đảng Kh&oacute;a XI về &quot;Chiến lược bảo vệ Tổ quốc trong t&igrave;nh h&igrave;nh mới&quot;, gắn với đẩy mạnh thực hiện &ldquo;Học tập v&agrave; l&agrave;m theo tấm gương đạo đức Hồ Ch&iacute; Minh&rdquo;. Thực hiện c&oacute; hiệu quả Kế hoạch số 18/KH-QU ng&agrave;y 7.1.2016 của Ban Thường vụ Quận ủy về thực hiện Chỉ thị số 37-CT/TU của Ban Thường vụ Th&agrave;nh ủy về tăng cường sự l&atilde;nh đạo của Đảng đối với c&ocirc;ng t&aacute;c bảo đảm an ninh, trật tự trong t&igrave;nh h&igrave;nh mới theo tinh thần Chỉ thị 46-CT/TW của Bộ Ch&iacute;nh trị (Kh&oacute;a XI); Nghị định 77 v&agrave; Nghị định 133 của Ch&iacute;nh phủ, bảo vệ an to&agrave;n c&aacute;c cao điểm Lễ - Tết v&agrave; c&aacute;c sự kiện ch&iacute;nh trị quan trọng của đất nước, giữ vững an ninh ch&iacute;nh trị - trật tự an to&agrave;n x&atilde; hội tr&ecirc;n địa b&agrave;n. Đồng thời tổ chức thực h&agrave;nh diễn tập ph&ograve;ng chống khủng bố, biểu t&igrave;nh, bạo loạn kết hợp diễn tập chiến đấu ph&ograve;ng thủ tr&ecirc;n địa b&agrave;n Quận đạt mục đ&iacute;ch, y&ecirc;u cầu đề ra. N&acirc;ng cao chất lượng huấn luyện qu&acirc;n sự, gi&aacute;o dục ch&iacute;nh trị cho c&aacute;c đối tượng theo phương ch&acirc;m &ldquo;Cơ bản, thiết thực, vững chắc&rdquo;, coi trọng huấn luyện đồng bộ, chuy&ecirc;n s&acirc;u, nắm chắc v&agrave; sử dụng thuần thục hiệu quả vũ kh&iacute;, kh&iacute; t&agrave;i mới, l&agrave;m chủ vũ kh&iacute;, trang bị kỹ thuật hiện c&oacute; trong bi&ecirc;n chế, t&iacute;ch cực ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin v&agrave;o huấn luyện v&agrave; diễn tập; tăng cường huấn luyện thể lực, huấn luyện theo t&igrave;nh huống, s&aacute;t thực tế chiến đấu, đối tượng t&aacute;c chiến. 100% c&aacute;n bộ chiến sĩ được huấn luyện đ&uacute;ng thực chất theo ph&acirc;n cấp; duy tr&igrave; nghi&ecirc;m chế độ sẵn s&agrave;ng chiến đấu, bảo vệ vững chắc mục ti&ecirc;u được giao. Thực hiện tốt c&aacute;c chỉ ti&ecirc;u gi&aacute;o dục, bồi dưỡng, cập nhập kiến thức quốc ph&ograve;ng - an ninh cho c&aacute;c đối tượng theo ph&acirc;n cấp.</em></p>\r\n\r\n<p><em>Đồng ch&iacute; y&ecirc;u cầu trong thời gian tới, Đảng ủy - BCH Qu&acirc;n sự Quận cần tiếp tục nắm chắc t&igrave;nh h&igrave;nh, địa b&agrave;n, kịp thời tham mưu đề xuất c&aacute;c Cấp ủy - Ch&iacute;nh quyền địa phương đảm bảo thế chủ động, kh&ocirc;ng bị bất ngờ trong mọi t&igrave;nh huống, thực hiện tốt nhiệm vụ Qu&acirc;n sự - Quốc ph&ograve;ng, x&acirc;y dựng Đảng bộ Qu&acirc;n sự Quận trong sạch, vững mạnh, đ&oacute;ng g&oacute;p t&iacute;ch cực v&agrave;o việc ph&aacute;t triển kinh tế - văn h&oacute;a - x&atilde; hội, đảm bảo quốc ph&ograve;ng - an ninh của địa phương. Đồng ch&iacute; tin tưởng c&aacute;c vận động vi&ecirc;n tham gia Hội thao ph&aacute;t huy truyền thống vẻ vang của lực lượng vũ trang địa phương, thi đấu hết m&igrave;nh, đo&agrave;n kết, trung thực, cao thượng, phấn đấu đạt th&agrave;nh t&iacute;ch cao nhất, đảm bảo Hội thao th&agrave;nh c&ocirc;ng tốt đẹp.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Dưới đ&acirc;y l&agrave; một số h&igrave;nh ảnh Lễ khai mạc Hội thao. Trong điều kiện thời tiết mưa tầm t&atilde; nhưng 21 đơn vị tham gia hội thao vẫn đều bước qu&acirc;n h&agrave;nh v&agrave; thực h&agrave;nh t&aacute;c chiến, v&otilde; thuật...</em></p>\r\n', 1, 1, 23, 'admin01'),
(25, 'PHƯỜNG 15 PHÁT HUY SỨC MẠNH HỆ THỐNG CHÍNH TRỊ TRONG ĐẤU TRANH PHÒNG CHỐNG TỘI PHẠM VÀ TỆ NẠN XÃ HỘI', 'WEBGOVAP', '(WEBGOVAP) – Ngày 19.4.2019, Ủy ban Nhân dân Phường 15 – Ban chỉ đạo 138 Phường đã tổ chức hội nghị tổng kết công tác đấu tranh phòng chống tội phạm và tệ nạn xã hội, xây dựng phong trào “Toàn dân bảo vệ an ninh Tổ quốc” năm 2018, triển khai nhiệm vụ năm ', '2019-05-30', '1556072542827P15BVANTQ (2).jpg', '<p>B&aacute;o c&aacute;o kết quả thực hiện năm vừa qua, đồng ch&iacute; V&otilde; Ho&agrave;ng Hiếu &ndash; Ph&oacute; Trưởng C&ocirc;ng an Phường cho biết: Địa b&agrave;n c&oacute; 8 Khu phố v&agrave; 62 Tổ d&acirc;n phố; tổng số hộ thực tế đang cư tr&uacute; l&agrave; 8.855 hộ với 35.844 nh&acirc;n khẩu, trong đ&oacute; thường tr&uacute; l&agrave; 6.232 hộ với 20.165 nh&acirc;n khẩu; tạm tr&uacute; 2.623 hộ với 15.679 nh&acirc;n khẩu. Đặc th&ugrave; to&agrave;n Phường n&oacute;i chung v&agrave; Khu phố 6, Khu phố 7 n&oacute;i ri&ecirc;ng c&ograve;n vướng quy hoạch, từ đ&oacute; cơ sở hạ tầng chưa được đầu tư ph&ugrave; hợp, dẫn đến tr&ecirc;n địa b&agrave;n c&ograve;n tồn tại nhiều khu đất trống, nhiều hẻm nhỏ trong địa b&agrave;n d&acirc;n cư tạo n&ecirc;n những nguy cơ tiềm ẩn phức tạp về an ninh trật tự. C&aacute;c đối tượng tội phạm, nhất l&agrave; tội phạm mua b&aacute;n, t&agrave;ng trữ tr&aacute;i ph&eacute;p chất ma t&uacute;y dễ lợi dụng giờ cao điểm vắng người để hoạt động. C&aacute;c đối tượng n&agrave;y (d&ugrave; từ nơi kh&aacute;c đến v&agrave; thường tr&uacute; tại địa b&agrave;n) đều c&oacute; tiền &aacute;n, tiền sự về ma t&uacute;y đ&atilde; t&aacute;i h&ograve;a nhập cộng đồng, trong đ&oacute; c&oacute; số đối tượng tại địa phương đ&atilde; được tư vấn, gi&uacute;p đỡ h&ograve;a nhập cộng đồng nhưng vẫn tiếp tục t&aacute;i vi phạm. Đồng thời, c&aacute;c đối tượng hoạt động ng&agrave;y c&agrave;ng hết sức tinh vi, lu&ocirc;n thay đổi thời gian, địa điểm, phương thức mua b&aacute;n v&agrave; sử dụng tr&aacute;i ph&eacute;p ma t&uacute;y&hellip;</p>\r\n\r\n<p>Trước t&igrave;nh h&igrave;nh đ&oacute;, Ban chỉ đạo 138 của Phường đ&atilde; tham mưu Đảng ủy &ndash; UBND Phường chỉ đạo thực hiện nhiều biện ph&aacute;p, đặc biệt tập trung thực hiện chuyển h&oacute;a địa b&agrave;n trọng điểm, phức tạp về an ninh trật tự - an to&agrave;n x&atilde; hội, nhất l&agrave; tệ nạn ma t&uacute;y&hellip; Cụ thể đ&atilde; t&iacute;ch cực quản l&yacute; v&agrave; gi&uacute;p đỡ c&aacute;c đối tượng t&aacute;i h&ograve;a nhập cộng đồng, đến nay Tổ c&ocirc;ng t&aacute;c m&ocirc; h&igrave;nh 5+1 ghi nhận đ&atilde; giảm 44 đối tượng do c&oacute; tiến bộ; tổ chức cai nghiện ma t&uacute;y tại gia đ&igrave;nh, tại cộng đồng 4 người (trong đ&oacute; 3 người được hỗ trợ điều trị cắt cơn, giải độc). Đồng thời thực hiện nhiều c&aacute;ch gi&uacute;p đỡ cho họ ổn định cuộc sống, như hỗ trợ 1 người vay vốn với số tiền 30.000.000 đồng v&agrave; đ&atilde; ho&agrave;n trả được vốn, chăm lo 4 suất qu&agrave; Tết với trị gi&aacute; 1.100.000 đồng v&agrave; 30kg gạo/suất. B&ecirc;n cạnh đ&oacute;, to&agrave;n Phường đẩy mạnh phong tr&agrave;o x&acirc;y dựng &ldquo;Phường l&agrave;nh mạnh kh&ocirc;ng c&oacute; tệ nạn ma t&uacute;y, mại d&acirc;m&rdquo; gắn với phong tr&agrave;o &ldquo;To&agrave;n d&acirc;n đo&agrave;n kết x&acirc;y dựng đời sống văn h&oacute;a, đ&ocirc; thị văn minh&rdquo;, ph&aacute;t triển c&aacute;c m&ocirc; h&igrave;nh quản l&yacute;, gi&uacute;p đỡ đối tượng c&oacute; hiệu quả. Ban ng&agrave;nh v&agrave; đo&agrave;n thể Phường t&iacute;ch cực tổ chức c&aacute;c hoạt động cộng đồng gi&uacute;p đỡ, vận động c&aacute;c đối tượng ho&agrave;n lương, x&acirc;y dựng cuộc sống bản th&acirc;n v&agrave; gia đ&igrave;nh ổn định, hạnh ph&uacute;c...</p>\r\n\r\n<p><img alt=\"\" src=\"/thuctap1/resources/img/images/1556072543821P15BVANTQ%20(3).jpg\" style=\"height:670px; width:1048px\" /></p>\r\n', 0, 1, 24, 'admin01'),
(26, 'Bài 1', 'sadsad', 'sadsadsa', '2019-05-30', '5.jpg', '<p>sadasdasđa</p>\r\n\r\n<p>&aacute;dasdsdads</p>\r\n\r\n<p><img alt=\"\" src=\"/thuctap1/resources/img/images/1.jpg\" style=\"height:780px; width:1040px\" /></p>\r\n', 1, 1, 25, 'admin01'),
(27, 'Bài 1', 'sadsad', 'sadsadsa', '2019-06-03', '', '<p><img alt=\"\" src=\"/thuctap1/resources/img/images/1.jpg\" style=\"height:960px; width:1280px\" /></p>\r\n', 0, 0, 25, 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `idBL` int(6) NOT NULL,
  `Ngay` date NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` int(2) NOT NULL,
  `idBV` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`idBL`, `Ngay`, `NoiDung`, `Email`, `HoTen`, `TrangThai`, `idBV`) VALUES
(1, '2019-05-27', 'sadsadsadsad', 'leanhpham2611@gmail.com', 'sadasdssadas', 1, 17),
(2, '2019-05-29', 'Hay', 'dsasad@gmail.com', 'L? V?n B', 1, 22),
(3, '2019-05-29', 'A', 'dsasad@gmail.com', 'Le VAN A', 1, 22),
(4, '2019-05-29', 'B', 'dsasad@gmail.com', 'Le VAN A', 1, 22),
(5, '2019-05-29', 'C', 'leanhpham2611@gmail.com', 'Le VAN C', 1, 22),
(6, '2019-05-30', 'Hay!!!!', 'leanhpham2611@gmail.com', 'L? V?n B', 1, 23),
(7, '2019-05-30', 'sâss', 'leanhpham2611@gmail.com', 'sadsa', 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDM` int(6) NOT NULL,
  `TenDM` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `ThuTu` int(11) NOT NULL,
  `TrangThai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`idDM`, `TenDM`, `ThuTu`, `TrangThai`) VALUES
(4, 'Trang chủ', 1, 1),
(5, 'Thủ tục hành chính', 4, 1),
(6, 'Liên hệ', 5, 1),
(7, 'Ý KIẾN NGƯỜI DÂN', 4, 1),
(8, 'THÔNG TIN CẦN THIẾT', 5, 1),
(12, 'Tin tức - Sự kiện', 3, 1),
(13, 'Giới thiệu', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mucpa`
--

CREATE TABLE `mucpa` (
  `idMuc` int(11) NOT NULL,
  `TenMuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mucpa`
--

INSERT INTO `mucpa` (`idMuc`, `TenMuc`) VALUES
(1, 'Tiếng ồn'),
(2, 'Rác thải, vệ sinh'),
(3, 'Kinh doanh'),
(4, 'Lân chiếm lòng lề đường'),
(5, 'Bạo hành gia đình'),
(6, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idNV` int(6) NOT NULL,
  `TenNV` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `TrangThai` int(2) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idNV`, `TenNV`, `DiaChi`, `TrangThai`, `TaiKhoan`) VALUES
(4, 'Lê Văn A', '23/23 LTT PHH QTP', 1, 'admin12'),
(6, 'Lê Văn B', '23/23 LTT PHH QTP', 1, 'admin01'),
(7, 'Lê Văn B', '23/23 LTT PHH QTP', 1, 'admin3');

-- --------------------------------------------------------

--
-- Table structure for table `phananh`
--

CREATE TABLE `phananh` (
  `idPA` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `HoTen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `TrangThai` int(2) NOT NULL,
  `idMuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phananh`
--

INSERT INTO `phananh` (`idPA`, `Email`, `HoTen`, `DiaChi`, `NoiDung`, `TrangThai`, `idMuc`) VALUES
(1, 'dsasad@gmail.com', 'sadsad', '2323/232', 'sadada', 1, 1),
(2, 'dsasad@gmail.com', 'Le VAN A', '2323/232', 'SADSADS', 1, 3),
(3, 'leanhpham2611@gmail.com', 'Lê Văn B', '2323/232', '123', 1, 4),
(4, 'levana@gmail.com', 'Lê Văn B', '2323/232 LTT P.TP Q.1', 'Xóm ồn quá', 1, 1),
(5, 'dsasad@gmail.com', 'Le VAN C', '2323/232', 'Lấn chiếm lề đường ', 1, 1),
(6, 'dsasad@gmail.com', 'Le VAN A', '2323/232', 'asaa', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `Quyen` int(2) NOT NULL,
  `TrangThai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TaiKhoan`, `MatKhau`, `Quyen`, `TrangThai`) VALUES
('admin', '', 0, 0),
('admin01', '202cb962ac59075b964b07152d234b70', 0, 0),
('admin12', '202cb962ac59075b964b07152d234b70', 0, 0),
('admin123', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0),
('admin3', '202cb962ac59075b964b07152d234b70', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `idTL` int(6) NOT NULL,
  `TenTL` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `NgayTao` date NOT NULL,
  `ThuTu` int(11) NOT NULL,
  `TrangThai` int(2) NOT NULL,
  `idDM` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`idTL`, `TenTL`, `NgayTao`, `ThuTu`, `TrangThai`, `idDM`) VALUES
(15, 'Tôn giáo', '2019-05-26', 1, 1, 5),
(16, 'Môi trường', '2019-05-26', 2, 1, 5),
(21, 'Kinh tế - Doanh nghiệp', '2019-05-28', 1, 1, 12),
(22, 'Văn hoá - Xã hội', '0000-00-00', 2, 1, 12),
(23, 'Quân sự - Quốc phòng', '0000-00-00', 3, 1, 12),
(24, 'An ninh trật tự', '0000-00-00', 5, 1, 12),
(25, 'Phòng cháy chữa cháy', '0000-00-00', 1, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `thutuc`
--

CREATE TABLE `thutuc` (
  `idTT` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayTao` date NOT NULL,
  `SoLanXem` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `idTL` int(11) NOT NULL,
  `TaiKhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thutuc`
--

INSERT INTO `thutuc` (`idTT`, `TieuDe`, `NoiDung`, `NgayTao`, `SoLanXem`, `TrangThai`, `idTL`, `TaiKhoan`) VALUES
(3, 'Thủ tục thu hồi đất do vi phạm', '<p><strong>Lĩnh vực:</strong></p>\r\n\r\n<p>Lĩnh vực M&ocirc;i trường</p>\r\n\r\n<p><strong>Tr&igrave;nh tự thực hiện:</strong></p>\r\n\r\n<p><strong>C&aacute;ch thức thực hiện:</strong></p>\r\n\r\n<p><strong>Hồ sơ:</strong></p>\r\n\r\n<p><strong>Thời gian giải quyết:</strong></p>\r\n\r\n<p><strong>Đối tượng:</strong></p>\r\n\r\n<p><strong>Cơ quan ban h&agrave;nh:</strong></p>\r\n\r\n<p><strong>Ủy ban nh&acirc;n d&acirc;n Quận G&ograve; Vấp</strong></p>\r\n\r\n<p><strong>Kết quả:</strong></p>\r\n\r\n<p><strong>Ph&iacute;, lệ ph&iacute;:</strong></p>\r\n\r\n<p><strong>T&ecirc;n mẫu đơn:</strong></p>\r\n\r\n<p><strong>Y&ecirc;u cầu, điều kiện thực hiện :</strong></p>\r\n\r\n<p><strong>Cơ sở ph&aacute;p l&yacute;:</strong></p>\r\n\r\n<p><strong>T&agrave;i liệu đ&iacute;nh k&egrave;m:</strong></p>\r\n\r\n<p><a href=\"/thuctap1/resources/img/files/15420963199685_Th%E1%BB%A7%20t%E1%BB%A5c%20thu%20h%E1%BB%93i%20%C4%91%E1%BA%A5t%20do%20vi%20ph%E1%BA%A1m.doc\">T&agrave;i liệu</a></p>\r\n', '2019-05-30', 0, 1, 16, 'admin01'),
(4, 'THỦ TỤC CHẤP THUẬN VIỆC GIẢNG ĐẠO, TRUYỀN ĐẠO CỦA CHỨC SẮC, NHÀ TU HÀNH NGOÀI CƠ SỞ TÔN GIÁO L', '<p><strong>Lĩnh vực:</strong></p>\r\n\r\n<p>T&ocirc;n gi&aacute;o</p>\r\n\r\n<p><strong>Tr&igrave;nh tự thực hiện:</strong></p>\r\n\r\n<p><strong>C&aacute;ch thức thực hiện:</strong></p>\r\n\r\n<p><strong>Hồ sơ:</strong></p>\r\n\r\n<p><strong>Thời gian giải quyết:</strong></p>\r\n\r\n<p><strong>Đối tượng:</strong></p>\r\n\r\n<p><strong>Cơ quan ban h&agrave;nh:</strong></p>\r\n\r\n<p><strong>Ủy ban nh&acirc;n d&acirc;n Quận G&ograve; Vấp</strong></p>\r\n\r\n<p><strong>Kết quả:</strong></p>\r\n\r\n<p><strong>Ph&iacute;, lệ ph&iacute;:</strong></p>\r\n\r\n<p><strong>T&ecirc;n mẫu đơn:</strong></p>\r\n\r\n<p><strong>Y&ecirc;u cầu, điều kiện thực hiện :</strong></p>\r\n\r\n<p><strong>Cơ sở ph&aacute;p l&yacute;:</strong></p>\r\n\r\n<p><strong>T&agrave;i liệu đ&iacute;nh k&egrave;m:</strong></p>\r\n\r\n<p><a href=\"/thuctap1/resources/img/files/15413916127378-Th%E1%BB%A7%20t%E1%BB%A5c%20ch%E1%BA%A5p%20thu%E1%BA%ADn%20vi%E1%BB%87c%20gi%E1%BA%A3ng%20%C4%91%E1%BA%A1o%2C%20truy%E1%BB%81n%20%C4%91%E1%BA%A1o%20c%E1%BB%A7a%20ch%E1%BB%A9c%20s%E1%BA%AFc%2C%20nh%C3%A0%20tu%20h%C3%A0nh%20ngo%C3%A0i%20c%C6%A1%20s%E1%BB%9F%20t%C3%B4n%20gi%C3%A1o.docx\">T&agrave;i liệu</a></p>\r\n', '2019-05-30', 0, 1, 15, 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `traloiphananh`
--

CREATE TABLE `traloiphananh` (
  `idTL` int(11) NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `NguoiTraLoi` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `idPA` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traloiphananh`
--

INSERT INTO `traloiphananh` (`idTL`, `NoiDung`, `NguoiTraLoi`, `idPA`) VALUES
(2, 'abc', 'admin01', 1),
(4, 'abcsa', 'admin01', 2),
(5, 'Đang xác minh', 'admin01', 4),
(6, 'Xóm', 'admin01', 3),
(8, 'Dang xac minh', 'admin01', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`idBV`),
  ADD KEY `idTL` (`idTL`) USING BTREE,
  ADD KEY `TaiKhoan` (`TaiKhoan`) USING BTREE;

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBL`),
  ADD KEY `idBV` (`idBV`) USING BTREE;

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`idDM`);

--
-- Indexes for table `mucpa`
--
ALTER TABLE `mucpa`
  ADD PRIMARY KEY (`idMuc`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idNV`),
  ADD UNIQUE KEY `TaiKhoan` (`TaiKhoan`);

--
-- Indexes for table `phananh`
--
ALTER TABLE `phananh`
  ADD PRIMARY KEY (`idPA`),
  ADD KEY `idMuc` (`idMuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TaiKhoan`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTL`),
  ADD KEY `idDM` (`idDM`) USING BTREE;

--
-- Indexes for table `thutuc`
--
ALTER TABLE `thutuc`
  ADD PRIMARY KEY (`idTT`),
  ADD KEY `idTL` (`idTL`),
  ADD KEY `TaiKhoan` (`TaiKhoan`);

--
-- Indexes for table `traloiphananh`
--
ALTER TABLE `traloiphananh`
  ADD PRIMARY KEY (`idTL`),
  ADD UNIQUE KEY `idPA` (`idPA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `idBV` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBL` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDM` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mucpa`
--
ALTER TABLE `mucpa`
  MODIFY `idMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idNV` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phananh`
--
ALTER TABLE `phananh`
  MODIFY `idPA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTL` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `thutuc`
--
ALTER TABLE `thutuc`
  MODIFY `idTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traloiphananh`
--
ALTER TABLE `traloiphananh`
  MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`TaiKhoan`) REFERENCES `taikhoan` (`TaiKhoan`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`idTL`) REFERENCES `theloai` (`idTL`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idBV`) REFERENCES `baiviet` (`idBV`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`TaiKhoan`) REFERENCES `taikhoan` (`TaiKhoan`);

--
-- Constraints for table `phananh`
--
ALTER TABLE `phananh`
  ADD CONSTRAINT `phananh_ibfk_1` FOREIGN KEY (`idMuc`) REFERENCES `mucpa` (`idMuc`);

--
-- Constraints for table `theloai`
--
ALTER TABLE `theloai`
  ADD CONSTRAINT `theloai_ibfk_1` FOREIGN KEY (`idDM`) REFERENCES `danhmuc` (`idDM`);

--
-- Constraints for table `thutuc`
--
ALTER TABLE `thutuc`
  ADD CONSTRAINT `thutuc_ibfk_1` FOREIGN KEY (`idTL`) REFERENCES `theloai` (`idTL`);

--
-- Constraints for table `traloiphananh`
--
ALTER TABLE `traloiphananh`
  ADD CONSTRAINT `traloiphananh_ibfk_1` FOREIGN KEY (`idPA`) REFERENCES `phananh` (`idPA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
