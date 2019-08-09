<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/
	
	'accepted'              => ':attribute phải được chấp nhận.',
	'active_url'            => ':attribute không phải là một URL hợp lệ.',
	'after'                 => ':attribute phải là một ngày sau :date.',
	'after_or_equal'        => ':attribute phải là một ngày sau hoặc bằng :date.',
	'alpha'                 => ':attribute chỉ có thể chứa các chữ cái.',
	'alpha_dash'            => ':attribute chỉ có thể chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
	'alpha_num'             => ':attribute chỉ có thể chứa các chữ cái và số.',
	'array'                 => ':attribute phải là một mảng.',
	'before'                => ':attribute phải là một ngày trước :date.',
	'before_or_equal'       => ':attribute phải là một ngày trước hoặc bằng :date.',
	'between'               => [
		'numeric' => ':attribute phải ở giữa :min và :max.',
		'file'    => ':attribute phải ở giữa :min và :max kilobytes.',
		'string'  => ':attribute phải ở giữa :min và :max characters.',
		'array'   => ':attribute phải ở giữa :min và :max items.',
	],
	'boolean'               => ':attribute lĩnh vực phải đúng hoặc sai.',
	'confirmed'             => ':attribute nhận định không phù hợp.',
	'date'                  => ':attribute Không phải là ngày hợp lệ.',
	'date_equals'           => ':attribute phải là một ngày bằng :date.',
	'date_format'           => ':attribute không phù hợp với định dạng :format.',
	'different'             => ':attribute và :other phải khác',
	'digits'                => ':attribute cần phải :digits chữ số.',
	'digits_between'        => ':attribute phải ở giữa :min và :max digits.',
	'dimensions'            => ':attribute có kích thước hình ảnh không hợp lệ.',
	'distinct'              => ':attribute trường có giá trị trùng lặp.',
	'email'                 => ':attribute Phải la một địa chỉ email hợp lệ.',
	'exists'                => 'Phần được chọn :attribute không có hiệu lực.',
	'file'                  => ':attribute phải là một tập tin',
	'filled'                => ':attribute lĩnh vực phải có một giá trị.',
	'image'                 => ':attribute phải là một hình ảnh',
	'in'                    => 'Phần được chọn :attribute không có hiệu lực.',
	'in_array'              => ':attribute lĩnh vực không tồn tại trong :other.',
	'integer'               => ':attribute phải là số nguyên.',
	'ip'                    => ':attribute phải là một địa chỉ IP hợp lệ.',
	'ipv4'                  => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
	'ipv6'                  => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
	'json'                  => ':attribute phải là một chuỗi JSON hợp lệ.',
	'max'                   => [
		'numeric' => ':attribute có thể không lớn hơn :max.',
		'file'    => ':attribute có thể không lớn hơn :max kilobytes.',
		'string'  => ':attribute có thể không lớn hơn :max ký tự.',
		'array'   => ':attribute có thể không có nhiều hơn :max mục.',
	],
	'mimes'                 => ':attribute phải là một loại tệp: :values.',
	'mimetypes'             => ':attribute phải là một loại tệp: :values.',
	'min'                   => [
		'numeric' => ':attribute ít nhất phải :min.',
		'file'    => ':attribute ít nhất phải :min kilobytes.',
		'string'  => ':attribute ít nhất phải :min characters.',
		'array'   => ':attribute phải có ít nhất :min mục.',
	],
	'not_in'                => 'Phần được chọn :attribute không có hiệu lực.',
	'not_regex'             => ':attribute định dạng không hợp lệ.',
	'numeric'               => ':attribute phải là một số.',
	'present'               => ':attribute lĩnh vực phải có mặt.',
	'regex'                 => ':attribute định dạng không hợp lệ.',
	'required'              => ':attribute lĩnh vực được bắt buộc.',
	'required_if'           => ':attribute trường được yêu cầu khi :other là :value.',
	'required_unless'       => ':attribute trường là bắt buộc trừ khi :other trong :values.',
	'required_with'         => ':attribute trường được yêu cầu khi :values không phải bây giờ.',
	'required_with_all'     => ':attribute trường được yêu cầu khi :values không phải bây giờ.',
	'required_without'      => ':attribute trường được yêu cầu khi :values không phải bây giờ.',
	'required_without_all'  => ':attribute trường là bắt buộc khi không có :values có mặt',
	'same'                  => ':attribute và :other phải giống',
	'size'                  => [
		'numeric' => ':attribute cần phải :size.',
		'file'    => ':attribute cần phải :size kilobytes.',
		'string'  => ':attribute cần phải :size ký tự.',
		'array'   => ':attribute phải chứa :size mục.',
	],
	'starts_with'           => ':attribute phải bắt đầu bằng một trong những điều sau đây: :values',
	'string'                => ':attribute phải là một chuỗi.',
	'timezone'              => ':attribute phải là một khu vực hợp lệ.',
	'unique'                => ':attribute đã được thực hiện.',
	'uploaded'              => ':attribute không thể tải lên.',
	'url'                   => ':attribute định dạng không hợp lệ.',
	
	
	// Packages Rules
	'recaptcha'    => ':attribute lĩnh vực không đúng',
	'phone'        => ':attribute trường chứa một số không hợp lệ.',
	'dumbpwd'      => 'Mật khẩu này là quá phổ biến. Hãy thử cái khác!',
	'phone_number' => 'Số điện thoại của bạn không hợp lệ.',
	
	
	// Custom Rules
	'required_package_id'                     => 'Bạn phải chọn một tùy chọn quảng cáo cao cấp để tiếp tục.',
	'required_payment_method_id'              => 'Bạn phải chọn một phương thức thanh toán để tiếp tục.',
	'blacklist_email_rule'                    => 'Địa chỉ email này được liệt kê vào danh sách đen.',
	'blacklist_domain_rule'                   => 'Tên miền của địa chỉ email của bạn được liệt kê vào danh sách đen.',
	'blacklist_ip_rule'                       => ':attribute phải là một địa chỉ IP hợp lệ.',
	'blacklist_word_rule'                     => ':attribute chứa một từ hoặc cụm từ bị cấm.',
	'blacklist_title_rule'                    => ':attribute chứa một từ hoặc cụm từ bị cấm.',
	'between_rule'                            => ':attribute phải ở giữa :min và :max ký tự.',
	'username_is_valid_rule'                  => ':attribute trường phải là một chuỗi ký tự chữ và số.',
	'username_is_allowed_rule'                => ':attribute không được phép.',
	'locale_of_language_rule'                 => ':attribute lĩnh vực không hợp lệ.',
	'locale_of_country_rule'                  => ':attribute lĩnh vực không hợp lệ.',
	'currencies_codes_are_valid_rule'         => ':attribute lĩnh vực không hợp lệ.',
	'custom_field_unique_rule'                => ':field_1 có cái này :field_2 đã tồn tại',
	'custom_field_unique_rule_field'          => ':field_1 đã được gán cho cái này :field_2.',
	'custom_field_unique_children_rule'       => 'Phần con :field_1 của :field_1 có :field_2 đã được gán.',
	'custom_field_unique_children_rule_field' => ':field_1 đã được gán cho một :field_2 của :field_2.',
	'custom_field_unique_parent_rule'         => 'Phần gốc :field_1 của :field_1 có :field_2 đã được gán.',
	'custom_field_unique_parent_rule_field'   => ':field_1 đã được gán cho phần gốc :field_2 của :field_2.',
	
	
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/
	
	'custom' => [
		
		'database_connection'      => [
			'required' => 'Không thể kết nối với máy chủ MySQL',
		],
		'database_not_empty'       => [
			'required' => 'Cơ sở dữ liệu không trống',
		],
		'promo_code_not_valid'     => [
			'required' => 'Mã khuyến mãi không hợp lệ',
		],
		'smtp_valid'               => [
			'required' => 'Không thể kết nối với máy chủ SMTP',
		],
		'yaml_parse_error'         => [
			'required' => 'Không thể phân tích yaml. Vui lòng kiểm tra cú pháp',
		],
		'file_not_found'           => [
			'required' => 'Không tìm thấy tập tin.',
		],
		'not_zip_archive'          => [
			'required' => 'Các tập tin không phải là một gói zip.',
		],
		'zip_archive_unvalid'      => [
			'required' => 'Không thể đọc gói.',
		],
		'custom_criteria_empty'    => [
			'required' => 'Tiêu chí tùy chỉnh không thể để trống',
		],
		'php_bin_path_invalid'     => [
			'required' => 'Thực thi PHP không hợp lệ. Vui lòng kiểm tra lại.',
		],
		'can_not_empty_database'   => [
			'required' => 'Không thể DROP một số bảng nhất định, vui lòng dọn sạch cơ sở dữ liệu của bạn theo cách thủ công và thử lại.',
		],
		'recaptcha_invalid'        => [
			'required' => 'Kiểm tra reCAPTCHA không hợp lệ.',
		],
		'payment_method_not_valid' => [
			'required' => 'Đã xảy ra lỗi với cài đặt phương thức thanh toán. Vui lòng kiểm tra lại.',
		],
	
	],
	
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/
	
	'attributes' => [
		
		'gender'                => 'giới tính',
		'gender_id'             => 'giới tính',
		'name'                  => 'Tên',
		'first_name'            => 'tên đầu tiên',
		'last_name'             => 'họ',
		'user_type'             => 'loại người dùng',
		'user_type_id'          => 'loại người dùng',
		'country'               => 'Quốc gia',
		'country_code'          => 'Quốc gia',
		'phone'                 => 'điện thoại',
		'address'               => 'địa chỉ',
		'mobile'                => 'di động',
		'sex'                   => 'sex',
		'year'                  => 'năm',
		'month'                 => 'tháng',
		'day'                   => 'ngày',
		'hour'                  => 'giờ',
		'minute'                => 'phút',
		'second'                => 'giây',
		'username'              => 'tài khoản',
		'email'                 => 'địa chỉ email',
		'password'              => 'mật khẩu',
		'password_confirmation' => 'nhập lại mật khẩu',
		'g-recaptcha-response'  => 'captcha',
		'term'                  => 'điều kiện',
		'category'              => 'danh mục',
		'category_id'           => 'danh mục',
		'post_type'             => 'kiểu bài',
		'post_type_id'          => 'kiểu bài',
		'title'                 => 'tiêu đề',
		'body'                  => 'nội dung',
		'description'           => 'mô tả',
		'excerpt'               => 'đoạn trích',
		'date'                  => 'ngày',
		'time'                  => 'thời gian',
		'available'             => 'có sẵn',
		'size'                  => 'kích thước',
		'price'                 => 'giá',
		'salary'                => 'lương',
		'contact_name'          => 'tên',
		'location'              => 'vị trí',
		'admin_code'            => 'vị trí',
		'city'                  => 'thành phố',
		'city_id'               => 'thành phố',
		'package'               => 'gói',
		'package_id'            => 'gói',
		'payment_method'        => 'phương thức thanh toán',
		'payment_method_id'     => 'phương thức thanh toán',
		'sender_name'           => 'tên',
		'subject'               => 'chủ đề',
		'message'               => 'tin nhắn',
		'report_type'           => 'loại báo cáo',
		'report_type_id'        => 'loại báo cáo',
		'file'                  => 'file',
		'filename'              => 'tên tệp',
		'picture'               => 'hình ảnh',
		'resume'                => 'tiếp tục',
		'login'                 => 'đăng nhập',
		'code'                  => 'mã',
		'token'                 => 'token',
		'comment'               => 'bình luận',
		'rating'                => 'đánh giá',
		'locale'                => 'địa phương',
		'currencies'            => 'tiền tệ',
		
	],

];
