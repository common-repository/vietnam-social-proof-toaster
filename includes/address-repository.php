<?php

namespace Haosf_Social_Proof_Toaster;

/**
 * Class Address_Repository
 * @package Haosf_Social_Proof_Toaster
 * Thank to https://vi.wordpress.org/plugins/woo-viet/
 */
class Address_Repository {
	public static function get_provinces() {
		return array(
			'AN-GIANG'        => __( 'An Giang', 'haosf' ),
			'BA-RIA-VUNG-TAU' => __( 'Ba Rịa - Vũng Tàu', 'haosf' ),
			'BAC-LIEU'        => __( 'Bạc Liêu', 'haosf' ),
			'BAC-KAN'         => __( 'Bắc Kạn', 'haosf' ),
			'BAC-GIANG'       => __( 'Bắc Giang', 'haosf' ),
			'BAC-NINH'        => __( 'Bắc Ninh', 'haosf' ),
			'BEN-TRE'         => __( 'Bế Tre', 'haosf' ),
			'BINH-DUONG'      => __( 'Bình Dương', 'haosf' ),
			'BINH-DINH'       => __( 'Bình Định', 'haosf' ),
			'BINH-PHUOC'      => __( 'Bình Phước', 'haosf' ),
			'BINH-THUAN'      => __( 'Bình Thuận', 'haosf' ),
			'CA-MAU'          => __( 'Cà Mau', 'haosf' ),
			'CAO-BANG'        => __( 'Cao Bằng', 'haosf' ),
			'CAN-THO'         => __( 'Cần Thơ', 'haosf' ),
			'DA-NANG'         => __( 'Đà Nẵng', 'haosf' ),
			'DAK-LAK'         => __( 'Đăk Lăk', 'haosf' ),
			'DAK-NONG'        => __( 'Đăk Nông', 'haosf' ),
			'DONG-NAI'        => __( 'Đồng Nai', 'haosf' ),
			'DONG-THAP'       => __( 'Đồng Tháp', 'haosf' ),
			'DIEN-BIEN'       => __( 'Điện Biên', 'haosf' ),
			'GIA-LAI'         => __( 'Gia Lai', 'haosf' ),
			'HA-GIANG'        => __( 'Hà Giang', 'haosf' ),
			'HA-NAM'          => __( 'Hà Nam', 'haosf' ),
			'HA-NOI'          => __( 'Hà Nội', 'haosf' ),
			'HA-TINH'         => __( 'Hà Tĩnh', 'haosf' ),
			'HAI-DUONG'       => __( 'Hải Dương', 'haosf' ),
			'HAI-PHONG'       => __( 'Hải Phòng', 'haosf' ),
			'HOA-BINH'        => __( 'Hòa Bình', 'haosf' ),
			'HAU-GIANG'       => __( 'Hậu Giang', 'haosf' ),
			'HUNG-YEN'        => __( 'Hưng Yên', 'haosf' ),
			'HO-CHI-MINH'     => __( 'Hồ Chí Minh', 'haosf' ),
			'KHANH-HOA'       => __( 'Khánh Hòa', 'haosf' ),
			'KIEN-GIANG'      => __( 'Kiên Giang', 'haosf' ),
			'KON-TUM'         => __( 'Kon Tum', 'haosf' ),
			'LAI-CHAU'        => __( 'Lai Châu', 'haosf' ),
			'LAO-CAI'         => __( 'Lào Cai', 'haosf' ),
			'LANG-SON'        => __( 'Lạng Sơn', 'haosf' ),
			'LAM-DONG'        => __( 'Lâm Đồng', 'haosf' ),
			'LONG-AN'         => __( 'Long An', 'haosf' ),
			'NAM-DINH'        => __( 'Nam Định', 'haosf' ),
			'NGHE-AN'         => __( 'Nghệ An', 'haosf' ),
			'NINH-BINH'       => __( 'Ninh Bìh', 'haosf' ),
			'NINH-THUAN'      => __( 'Ninh Thuận', 'haosf' ),
			'PHU-THO'         => __( 'Phú Thọ', 'haosf' ),
			'PHU-YEN'         => __( 'Phú Yên', 'haosf' ),
			'QUANG-BINH'      => __( 'Quảng Bình', 'haosf' ),
			'QUANG-NAM'       => __( 'Quảng Nam', 'haosf' ),
			'QUANG-NGAI'      => __( 'Quảng Ngãi', 'haosf' ),
			'QUANG-NINH'      => __( 'Quảng Ninh', 'haosf' ),
			'QUANG-TRI'       => __( 'Quảng Trị', 'haosf' ),
			'SOC-TRANG'       => __( 'Sóc Trăng', 'haosf' ),
			'SON-LA'          => __( 'Sơn La', 'haosf' ),
			'TAY-NINH'        => __( 'Tây Ninh', 'haosf' ),
			'THAI-BINH'       => __( 'Thái Bình', 'haosf' ),
			'THAI-NGUYEN'     => __( 'Thái Nguyên', 'haosf' ),
			'THANH-HOA'       => __( 'Thanh Hóa', 'haosf' ),
			'THUA-THIEN-HUE'  => __( 'Thừa Thiên - Huế', 'haosf' ),
			'TIEN-GIANG'      => __( 'Tiền Giang', 'haosf' ),
			'TRA-VINH'        => __( 'Trà Vinh', 'haosf' ),
			'TUYEN-QUANG'     => __( 'Tuyên Quang', 'haosf' ),
			'VINH-LONG'       => __( 'Vĩnh Long', 'haosf' ),
			'VINH-PHUC'       => __( 'Vĩnh Phúc', 'haosf' ),
			'YEN-BAI'         => __( 'Yên Bái', 'haosf' ),
		);
	}

	public static function get_cities() {
		return array(
			'AN-GIANG'        => array(
				'An Phú',
				'Châu Phú',
				'Châu Thành',
				'Chợ Mới',
				'Phú Tân',
				'Thoại Sơn',
				'Tịnh Biên',
				'Tri Tôn',
				'TP. Châu Đốc',
				'TP. Long Xuyên',
				'TX. Tân Châu'
			),
			'BA-RIA-VUNG-TAU' => array(
				'Châu Đức',
				'Côn Đảo',
				'Đất Đỏ',
				'Long Điền',
				'Tân Thành',
				'Xuyên Mộc',
				'TP. Bà Rịa',
				'TP. Vũng Tàu'
			),
			'BAC-LIEU'        => array(
				'Đông Hải',
				'Hoà Bình',
				'Hồng Dân',
				'Phước Long',
				'Vĩnh Lợi',
				'TP. Bạc Liêu',
				'TX. Giá Rai'
			),
			'BAC-KAN'         => array(
				'Ba Bể',
				'Bạch Thông',
				'Chợ Đồn',
				'Chợ Mới',
				'Na Rì',
				'Ngân Sơn',
				'Pác Nặm',
				'TP. Bắc Kạn',
			),
			'BAC-GIANG'       => array(
				'Hiệp Hòa',
				'Lạng Giang',
				'Lục Nam',
				'Lục Ngạn',
				'Sơn Động',
				'Tân Yên',
				'Việt Yên',
				'Yên Dũng',
				'Yên Thế',
				'TP. Bắc Giang'
			),
			'BAC-NINH'        => array(
				'Gia Bình',
				'Lương Tài',
				'Quế Võ',
				'Thuận Thành',
				'Tiên Du',
				'Yên Phong',
				'TP. Bắc Ninh',
				'TX. Từ Sơn'
			),
			'BEN-TRE'         => array(
				'Ba Tri',
				'Bình Đại',
				'Châu Thành',
				'Chợ Lách',
				'Giồng Trôm',
				'Mỏ Cày Bắc',
				'Mỏ Cày Nam',
				'Thạnh Phú',
				'TP. Bến Tre'
			),
			'BINH-DUONG'      => array(
				'Bắc Tân Uyên',
				'Bàu Bàng',
				'Dầu Tiếng',
				'Phú Giáo',
				'TP. Thủ Dầu Một',
				'TX. Bến Cát',
				'TX. Dĩ An',
				'TX. Tân Uyên',
				'TX. Thuận An'
			),
			'BINH-DINH'       => array(
				'An Lão',
				'Hoài Ân',
				'Hoài Nhơn',
				'Phù Cát',
				'Phù Mỹ',
				'Tây Sơn',
				'Tuy Phước',
				'Vân Canh',
				'Vĩnh Thạnh',
				'TP. Qui Nhơn',
				'TX. An Nhơn'
			),
			'BINH-PHUOC'      => array(
				'Bù Đăng',
				'Bù Đốp',
				'Bù Gia Mập',
				'Chơn Thành',
				'Đồng Phú',
				'Hớn Quản',
				'Lộc Ninh',
				'Phú Riềng',
				'TX. Bình Long',
				'TX. Đồng Xoài',
				'TX. Phước Long'
			),
			'BINH-THUAN'      => array(
				'Bắc Bình',
				'Đức Linh',
				'Hàm Tân',
				'Hàm Thuận Bắc',
				'Hàm Thuận Nam',
				'Phú Quí',
				'Tánh Linh',
				'Tuy Phong',
				'TP. Phan Thiết',
				'TX. La Gi'
			),
			'CA-MAU'          => array(
				'Cái Nước',
				'Đầm Dơi',
				'Năm Căn',
				'Ngọc Hiển',
				'Phú Tân',
				'Thới Bình',
				'Trần Văn Thời',
				'U Minh',
				'TP. Cà Mau'
			),
			'CAO-BANG'        => array(
				'Bảo Lạc',
				'Bảo Lâm',
				'Hạ Lang',
				'Hà Quảng',
				'Hoà An',
				'Nguyên Bình',
				'Phục Hoà',
				'Quảng Uyên',
				'Thạch An',
				'Thông Nông',
				'Trà Lĩnh',
				'Trùng Khánh',
				'TP. Cao Bằng'
			),
			'CAN-THO'         => array(
				'Cờ Đỏ',
				'Phong Điền',
				'Thới Lai',
				'Vĩnh Thạnh',
				'Q. Bình Thuỷ',
				'Q. Cái Răng',
				'Q. Ninh Kiều',
				'Q. Ô Môn',
				'Q. Thốt Nốt',
			),
			'DA-NANG'         => array(
				'Hòa Vang',
				'Hoàng Sa',
				'Q. Cẩm Lệ',
				'Q. Hải Châu',
				'Q. Liên Chiểu',
				'Q. Ngũ Hành Sơn',
				'Q. Sơn Trà',
				'Q. Thanh Khê',
			),
			'DAK-LAK'         => array(
				'Buôn Đôn',
				'Cư Kuin',
				'Cư M gar',
				'Ea H leo',
				'Ea Kar',
				'Ea Súp',
				'Krông A Na',
				'Krông Bông',
				'Krông Búk',
				'Krông Năng',
				'Krông Pắc',
				'Lắk',
				'M Đrắk',
				'TP. Buôn Ma Thuột',
				'TX. Buôn Hồ'
			),
			'DAK-NONG'        => array(
				'Cư Jút',
				'Đăk Glong',
				'Đắk Mil',
				'Đắk R Lấp',
				'Đắk Song',
				'Krông Nô',
				'Tuy Đức',
				'TX. Gia Nghĩa'
			),
			'DONG-NAI'        => array(
				'Cẩm Mỹ',
				'Định Quán',
				'Long Thành',
				'Nhơn Trạch',
				'Tân Phú',
				'Thống Nhất',
				'Trảng Bom',
				'Vĩnh Cửu',
				'Xuân Lộc',
				'TP. Biên Hòa',
				'TX. Long Khánh'
			),
			'DONG-THAP'       => array(
				'Cao Lãnh',
				'Châu Thành',
				'Hồng Ngự',
				'Lai Vung',
				'Lấp Vò',
				'Tam Nông',
				'Tân Hồng',
				'Thanh Bình',
				'Tháp Mười',
				'TP. Cao Lãnh',
				'TP. Sa Đéc',
				'TX. Hồng Ngự'
			),
			'DIEN-BIEN'       => array(
				'Điện Biên',
				'Điện Biên Đông',
				'Mường Ảng',
				'Mường Chà',
				'Mường Nhé',
				'Nậm Pồ',
				'Tủa Chùa',
				'Tuần Giáo',
				'TP. Điện Biên Phủ',
				'TX. Mường Lay'
			),
			'GIA-LAI'         => array(
				'Chư Păh',
				'Chư Prông',
				'Chư Pưh',
				'Chư Sê',
				'Đăk Đoa',
				'Đăk Pơ',
				'Đức Cơ',
				'Ia Grai',
				'Ia Pa',
				'KBang',
				'Kông Chro',
				'Krông Pa',
				'Mang Yang',
				'Phú Thiện',
				'TP. Pleiku',
				'TX. An Khê',
				'TX. Ayun Pa'
			),
			'HA-GIANG'        => array(
				'Bắc Mê',
				'Bắc Quang',
				'Đồng Văn',
				'Hoàng Su Phì',
				'Mèo Vạc',
				'Quản Bạ',
				'Quang Bình',
				'Vị Xuyên',
				'Xín Mần',
				'Yên Minh',
				'TP. Hà Giang'
			),
			'HA-NAM'          => array(
				'Bình Lục',
				'Duy Tiên',
				'Kim Bảng',
				'Lý Nhân',
				'Thanh Liêm',
				'TP. Phủ Lý'
			),
			'HA-NOI'          => array(
				'Ba Vì',
				'Chương Mỹ',
				'Đan Phượng',
				'Đông Anh',
				'Gia Lâm',
				'Hoài Đức',
				'Mê Linh',
				'Mỹ Đức',
				'Phú Xuyên',
				'Phúc Thọ',
				'Quốc Oai',
				'Sóc Sơn',
				'Thạch Thất',
				'Thanh Oai',
				'Thanh Trì',
				'Thường Tín',
				'Ứng Hòa',
				'Q. Ba Đình',
				'Q. Bắc Từ Liêm',
				'Q. Cầu Giấy',
				'Q. Đống Đa',
				'Q. Hà Đông',
				'Q. Hai Bà Trưng',
				'Q. Hoàn Kiếm',
				'Q. Hoàng Mai',
				'Q. Long Biên',
				'Q. Nam Từ Liêm',
				'Q. Tây Hồ',
				'Q. Thanh Xuân',
				'TX. Sơn Tây'
			),
			'HA-TINH'         => array(
				'Cẩm Xuyên',
				'Can Lộc',
				'Đức Thọ',
				'Hương Khê',
				'Hương Sơn',
				'Kỳ Anh',
				'Lộc Hà',
				'Nghi Xuân',
				'Thạch Hà',
				'Vũ Quang',
				'TP. Hà Tĩnh',
				'TX. Hồng Lĩnh',
				'TX. Kỳ Anh'
			),
			'HAI-DUONG'       => array(
				'Bình Giang',
				'Cẩm Giàng',
				'Gia Lộc',
				'Kim Thành',
				'Kinh Môn',
				'Nam Sách',
				'Ninh Giang',
				'Thanh Hà',
				'Thanh Miện',
				'Tứ Kỳ',
				'TP. Hải Dương',
				'TX. Chí Linh'
			),
			'HAI-PHONG'       => array(
				'An Dương',
				'An Lão',
				'Bạch Long Vĩ',
				'Cát Hải',
				'Kiến Thuỵ',
				'Thuỷ Nguyên',
				'Tiên Lãng',
				'Vĩnh Bảo',
				'Q. Đồ Sơn',
				'Q. Dương Kinh',
				'Q. Hải An',
				'Q. Hồng Bàng',
				'Q. Kiến An',
				'Q. Lê Chân',
				'Q. Ngô Quyền'
			),
			'HOA-BINH'        => array(
				'Cao Phong',
				'Đà Bắc',
				'Kim Bôi',
				'Kỳ Sơn',
				'Lạc Sơn',
				'Lạc Thủy',
				'Lương Sơn',
				'Mai Châu',
				'Tân Lạc',
				'Yên Thủy',
				'TP. Hòa Bình'
			),
			'HAU-GIANG'       => array(
				'Châu Thành',
				'Châu Thành A',
				'Long Mỹ',
				'Phụng Hiệp',
				'Vị Thuỷ',
				'TP. Vị Thanh',
				'TX. Long Mỹ',
				'TX. Ngã Bảy'
			),
			'HUNG-YEN'        => array(
				'Ân Thi',
				'Khoái Châu',
				'Kim Động',
				'Mỹ Hào',
				'Phù Cừ',
				'Tiên Lữ',
				'Văn Giang',
				'Văn Lâm',
				'Yên Mỹ',
				'TP. Hưng Yên'
			),
			'HO-CHI-MINH'     => array(
				'Bình Chánh',
				'Cần Giờ',
				'Củ Chi',
				'Hóc Môn',
				'Nhà Bè',
				'Q. 1',
				'Q. 10',
				'Q. 11',
				'Q. 12',
				'Q. 2',
				'Q. 3',
				'Q. 4',
				'Q. 5',
				'Q. 6',
				'Q. 7',
				'Q. 8',
				'Q. 9',
				'Q. Bình Tân',
				'Q. Bình Thạnh',
				'Q. Gò Vấp',
				'Q. Phú Nhuận',
				'Q. Tân Bình',
				'Q. Tân Phú',
				'Q. Thủ Đức'
			),
			'KHANH-HOA'       => array(
				'Cam Lâm',
				'Diên Khánh',
				'Khánh Sơn',
				'Khánh Vĩnh',
				'Trường Sa',
				'Vạn Ninh',
				'TP. Cam Ranh',
				'TP. Nha Trang',
				'TX. Ninh Hòa'
			),
			'KIEN-GIANG'      => array(
				'An Biên',
				'An Minh',
				'Châu Thành',
				'Giang Thành',
				'Giồng Riềng',
				'Gò Quao',
				'Hòn Đất',
				'Kiên Hải',
				'Kiên Lương',
				'Phú Quốc',
				'Tân Hiệp',
				'U Minh Thượng',
				'Vĩnh Thuận',
				'TP. Rạch Giá',
				'TX. Hà Tiên'
			),
			'KON-TUM'         => array(
				'Đắk Glei',
				'Đắk Hà',
				'Đắk Tô',
				'Ia H Drai',
				'Kon Plông',
				'Kon Rẫy',
				'Ngọc Hồi',
				'Sa Thầy',
				'Tu Mơ Rông',
				'TP. Kon Tum'
			),
			'LAI-CHAU'        => array(
				'Mường Tè',
				'Nậm Nhùn',
				'Phong Thổ',
				'Sìn Hồ',
				'Tam Đường',
				'Tân Uyên',
				'Than Uyên',
				'TP. Lai Châu'
			),
			'LAO-CAI'         => array(
				'Bắc Hà',
				'Bảo Thắng',
				'Bảo Yên',
				'Bát Xát',
				'Mường Khương',
				'Sa Pa',
				'Si Ma Cai',
				'Văn Bàn',
				'TP. Lào Cai'
			),
			'LANG-SON'        => array(
				'Bắc Sơn',
				'Bình Gia',
				'Cao Lộc',
				'Chi Lăng',
				'Đình Lập',
				'Hữu Lũng',
				'Lộc Bình',
				'Tràng Định',
				'Văn Lãng',
				'Văn Quan',
				'TP. Lạng Sơn'
			),
			'LAM-DONG'        => array(
				'Bảo Lâm',
				'Cát Tiên',
				'Đạ Huoai',
				'Đạ Tẻh',
				'Đam Rông',
				'Di Linh',
				'Đơn Dương',
				'Đức Trọng',
				'Lạc Dương',
				'Lâm Hà',
				'TP. Bảo Lộc',
				'TP. Đà Lạt'
			),
			'LONG-AN'         => array(
				'Bến Lức',
				'Cần Đước',
				'Cần Giuộc',
				'Châu Thành',
				'Đức Hòa',
				'Đức Huệ',
				'Mộc Hóa',
				'Tân Hưng',
				'Tân Thạnh',
				'Tân Trụ',
				'Thạnh Hóa',
				'Thủ Thừa',
				'Vĩnh Hưng',
				'TP. Tân An',
				'TX. Kiến Tường'
			),
			'NAM-DINH'        => array(
				'Giao Thủy',
				'Hải Hậu',
				'Mỹ Lộc',
				'Nam Trực',
				'Nghĩa Hưng',
				'Trực Ninh',
				'Vụ Bản',
				'Xuân Trường',
				'Ý Yên',
				'TP. Nam Định'
			),
			'NGHE-AN'         => array(
				'Anh Sơn',
				'Con Cuông',
				'Diễn Châu',
				'Đô Lương',
				'Hưng Nguyên',
				'Kỳ Sơn',
				'Nam Đàn',
				'Nghi Lộc',
				'Nghĩa Đàn',
				'Quế Phong',
				'Quỳ Châu',
				'Quỳ Hợp',
				'Quỳnh Lưu',
				'Tân Kỳ',
				'Thanh Chương',
				'Tương Dương',
				'Yên Thành',
				'TP. Vinh',
				'TX. Cửa Lò',
				'TX. Hoàng Mai',
				'TX. Thái Hoà'
			),
			'NINH-BINH'       => array(
				'Gia Viễn',
				'Hoa Lư',
				'Kim Sơn',
				'Nho Quan',
				'Yên Khánh',
				'Yên Mô',
				'TP. Ninh Bình',
				'TP. Tam Điệp'
			),
			'NINH-THUAN'      => array(
				'Bác Ái',
				'Ninh Hải',
				'Ninh Phước',
				'Ninh Sơn',
				'Thuận Bắc',
				'Thuận Nam',
				'TP. Phan Rang-Tháp Chàm'
			),
			'PHU-THO'         => array(
				'Cẩm Khê',
				'Đoan Hùng',
				'Hạ Hoà',
				'Lâm Thao',
				'Phù Ninh',
				'Tam Nông',
				'Tân Sơn',
				'Thanh Ba',
				'Thanh Sơn',
				'Thanh Thuỷ',
				'Yên Lập',
				'TP. Việt Trì',
				'TX. Phú Thọ'
			),
			'PHU-YEN'         => array(
				'Đông Hòa',
				'Đồng Xuân',
				'Phú Hoà',
				'Sơn Hòa',
				'Sông Hinh',
				'Tây Hoà',
				'Tuy An',
				'TP. Tuy Hoà',
				'TX. Sông Cầu'
			),
			'QUANG-BINH'      => array(
				'Bố Trạch',
				'Lệ Thủy',
				'Minh Hóa',
				'Quảng Ninh',
				'Quảng Trạch',
				'Tuyên Hóa',
				'TP. Đồng Hới',
				'TX. Ba Đồn'
			),
			'QUANG-NAM'       => array(
				'Bắc Trà My',
				'Đại Lộc',
				'Đông Giang',
				'Duy Xuyên',
				'Hiệp Đức',
				'Nam Giang',
				'Nam Trà My',
				'Nông Sơn',
				'Núi Thành',
				'Phú Ninh',
				'Phước Sơn',
				'Quế Sơn',
				'Tây Giang',
				'Thăng Bình',
				'Tiên Phước',
				'TP. Hội An',
				'TP. Tam Kỳ',
				'TX. Điện Bàn'
			),
			'QUANG-NGAI'      => array(
				'Ba Tơ',
				'Bình Sơn',
				'Đức Phổ',
				'Lý Sơn',
				'Minh Long',
				'Mộ Đức',
				'Nghĩa Hành',
				'Sơn Hà',
				'Sơn Tây',
				'Sơn Tịnh',
				'Tây Trà',
				'Trà Bồng',
				'Tư Nghĩa',
				'TP. Quảng Ngãi'
			),
			'QUANG-NINH'      => array(
				'Ba Chẽ',
				'Bình Liêu',
				'Cô Tô',
				'Đầm Hà',
				'Hải Hà',
				'Hoành Bồ',
				'Tiên Yên',
				'Vân Đồn',
				'TP. Cẩm Phả',
				'TP. Hạ Long',
				'TP. Móng Cái',
				'TP. Uông Bí',
				'TX. Đông Triều',
				'TX. Quảng Yên'
			),
			'QUANG-TRI'       => array(
				'Cam Lộ',
				'Cồn Cỏ',
				'Đa Krông',
				'Gio Linh',
				'Hải Lăng',
				'Hướng Hóa',
				'Triệu Phong',
				'Vĩnh Linh',
				'TP. Đông Hà',
				'TX. Quảng Trị'
			),
			'SOC-TRANG'       => array(
				'Châu Thành',
				'Cù Lao Dung',
				'Kế Sách',
				'Long Phú',
				'Mỹ Tú',
				'Mỹ Xuyên',
				'Thạnh Trị',
				'Trần Đề',
				'TP. Sóc Trăng',
				'TX. Ngã Năm',
				'TX. Vĩnh Châu'
			),
			'SON-LA'          => array(
				'Bắc Yên',
				'Mai Sơn',
				'Mộc Châu',
				'Mường La',
				'Phù Yên',
				'Quỳnh Nhai',
				'Sông Mã',
				'Sốp Cộp',
				'Thuận Châu',
				'Vân Hồ',
				'Yên Châu',
				'TP. Sơn La'
			),
			'TAY-NINH'        => array(
				'Bến Cầu',
				'Châu Thành',
				'Dương Minh Châu',
				'Gò Dầu',
				'Hòa Thành',
				'Tân Biên',
				'Tân Châu',
				'Trảng Bàng',
				'TP. Tây Ninh'
			),
			'THAI-BINH'       => array(
				'Đông Hưng',
				'Hưng Hà',
				'Kiến Xương',
				'Quỳnh Phụ',
				'Thái Thụy',
				'Tiền Hải',
				'Vũ Thư',
				'TP. Thái Bình'
			),
			'THAI-NGUYEN'     => array(
				'Đại Từ',
				'Định Hóa',
				'Đồng Hỷ',
				'Phú Bình',
				'Phú Lương',
				'Võ Nhai',
				'TP. Sông Công',
				'TP. Thái Nguyên',
				'TX. Phổ Yên'
			),
			'THANH-HOA'       => array(
				'Bá Thước',
				'Cẩm Thủy',
				'Đông Sơn',
				'Hà Trung',
				'Hậu Lộc',
				'Hoằng Hóa',
				'Lang Chánh',
				'Mường Lát',
				'Nga Sơn',
				'Ngọc Lặc',
				'Như Thanh',
				'Như Xuân',
				'Nông Cống',
				'Quan Hóa',
				'Quan Sơn',
				'Quảng Xương',
				'Thạch Thành',
				'Thiệu Hóa',
				'Thọ Xuân',
				'Thường Xuân',
				'Tĩnh Gia',
				'Triệu Sơn',
				'Vĩnh Lộc',
				'Yên Định',
				'TP. Thanh Hóa',
				'TX. Bỉm Sơn',
				'TX. Sầm Sơn'
			),
			'THUA-THIEN-HUE'  => array(
				'A Lưới',
				'Nam Đông',
				'Phong Điền',
				'Phú Lộc',
				'Phú Vang',
				'Quảng Điền',
				'TP. Huế',
				'TX. Hương Thủy',
				'TX. Hương Trà'
			),
			'TIEN-GIANG'      => array(
				'Cái Bè',
				'Cai Lậy',
				'Châu Thành',
				'Chợ Gạo',
				'Gò Công Đông',
				'Gò Công Tây',
				'Tân Phú Đông',
				'Tân Phước',
				'TP. Mỹ Tho',
				'TX. Cai Lậy',
				'TX. Gò Công'
			),
			'TRA-VINH'        => array(
				'Càng Long',
				'Cầu Kè',
				'Cầu Ngang',
				'Châu Thành',
				'Duyên Hải',
				'Tiểu Cần',
				'Trà Cú',
				'TP. Trà Vinh',
				'TX. Duyên Hải'
			),
			'TUYEN-QUANG'     => array(
				'Chiêm Hóa',
				'Hàm Yên',
				'Lâm Bình',
				'Nà Hang',
				'Sơn Dương',
				'Yên Sơn',
				'TP. Tuyên Quang'
			),
			'VINH-LONG'       => array(
				' Vũng Liêm',
				'Bình Tân',
				'Long Hồ',
				'Mang Thít',
				'Tam Bình',
				'Trà Ôn',
				'TP. Vĩnh Long',
				'TX. Bình Minh'
			),
			'VINH-PHUC'       => array(
				'Bình Xuyên',
				'Lập Thạch',
				'Sông Lô',
				'Tam Đảo',
				'Tam Dương',
				'Vĩnh Tường',
				'Yên Lạc',
				'TP. Vĩnh Yên',
				'TX. Phúc Yên'
			),
			'YEN-BAI'         => array(
				'Lục Yên',
				'Mù Căng Chải',
				'Trạm Tấu',
				'Trấn Yên',
				'Văn Chấn',
				'Văn Yên',
				'Yên Bình',
				'TP. Yên Bái',
				'TX. Nghĩa Lộ'
			),
		);
	}

	public static function get_locations() {
		$locations = [];
		$provinces = static::get_provinces();
		foreach($provinces as $provinceAlias => $provinceName) {
			$cities    = static::get_cities()[ $provinceAlias ];
			$cities = array_map( function ($city) use ( $provinceName ) {
				return $city  . ', ' . $provinceName;
			}, $cities);
			$locations = array_merge( $locations, $cities );
		}

		return $locations;
	}
}
return Address_Repository::get_provinces();
