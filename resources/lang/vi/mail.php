<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Emails Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used by the Mail notifications.
	|
	*/
	
	// built-in template
	'Whoops!' => 'Rất tiếc!',
	'Hello!' => 'Xin chào!',
	'Regards' => 'Trân trọng',
	"If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser: [:actionURL](:actionURL)" => "Nếu bạn gặp sự cố khi nhấp vào nút \":actionText\", sao chép và dán URL bên dưới\nvào trình duyệt web của bạn: [:actionURL](:actionURL)",
	'All rights reserved.' => 'All rights reserved.',
	
	
	// custom mail_footer (unused)
	'mail_footer_content'            => 'Bán và mua gần bạn. Đơn giản, nhanh chóng và hiệu quả.',
	
	
	// email_verification
	'email_verification_title'       => 'Vui lòng xác nhận địa chỉ email.',
	'email_verification_action'      => 'Xác nhận địa chỉ email',
	'email_verification_content_1'   => 'Chào :userName !',
	'email_verification_content_2'   => 'Nhấp vào nút bên dưới để xác minh địa chỉ email của bạn.',
	'email_verification_content_3'   => 'Bạn đang nhận được email này vì gần đây bạn đã tạo một email mới trên :appName tài khoản hoặc thêm một địa chỉ email mới. Nếu đây không phải là bạn, xin vui lòng bỏ qua email này.',
	
	
	// post_activated (new)
	'post_activated_title'             => 'Quảng cáo của bạn đã được kích hoạt',
	'post_activated_content_1'         => 'Xin chào,',
	'post_activated_content_2'         => 'Quảng cáo của bạn <a href=":postUrl">:title</a> đã được kích hoạt.',
	'post_activated_content_3'         => 'Nó sẽ sớm được kiểm tra bởi một trong những quản trị viên của chúng tôi để xuất bản trực tuyến.',
	'post_activated_content_4'         => 'Bạn đang nhận được email này vì gần đây bạn đã tạo một quảng cáo mới trên :appName. Nếu đây không phải là bạn, xin vui lòng bỏ qua email này.',
	
	
	// post_reviewed (new)
	'post_reviewed_title'              => 'Quảng cáo của bạn hiện đang trực tuyến',
	'post_reviewed_content_1'          => 'Xin chào,',
	'post_reviewed_content_2'          => 'Quảng cáo của bạn <a href=":postUrl">:title</a> hiện đang trực tuyến.',
	'post_reviewed_content_3'          => 'Bạn đang nhận được email này vì gần đây bạn đã tạo một quảng cáo mới trên :appName. Nếu đây không phải là bạn, xin vui lòng bỏ qua email này.',
	
	
	// post_republished (new)
	'post_republished_title'              => 'Quảng cáo của bạn đã được xuất bản lại',
	'post_republished_content_1'          => 'Xin chào,',
	'post_republished_content_2'          => 'Quảng cáo của bạn <a href=":postUrl">:title</a> đã được xuất bản lại thành công.',
	'post_republished_content_3'          => 'Bạn đang nhận được email này vì gần đây bạn đã tạo một quảng cáo mới trên :appName. Nếu đây không phải là bạn, xin vui lòng bỏ qua email này.',
	
	
	// post_deleted
	'post_deleted_title'               => 'Quảng cáo của bạn đã bị xóa',
	'post_deleted_content_1'           => 'Xin chào,',
	'post_deleted_content_2'           => 'Quảng cáo của bạn ":title" đã bị xóa khỏi <a href=":appUrl">:appName</a> lúc :now.',
	'post_deleted_content_3'           => 'Cảm ơn bạn đã tin tưởng và hẹn gặp lại.',
	'post_deleted_content_4'           => 'PS: Đây là một email tự động, xin vui lòng không trả lời.',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'Quảng cáo của bạn ":title" trên :appName',
	'post_seller_contacted_content_1'  => '<strong>Thông tin liên lạc:</strong>
<br>Name: :name
<br>Email address: :email
<br>Phone number: :phone',
	'post_seller_contacted_content_2'  => 'Email này đã được gửi cho bạn về quảng cáo ":title" bạn đã nộp :appName : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_3'  => 'LƯU Ý: Người liên hệ với bạn không biết email của bạn vì bạn sẽ không trả lời.',
	'post_seller_contacted_content_4'  => 'Hãy nhớ luôn kiểm tra chi tiết về người liên hệ của bạn (tên, địa chỉ, ...) để đảm bảo bạn có liên hệ trong trường hợp tranh chấp. Nói chung, chọn giao hàng trong tay.',
	'post_seller_contacted_content_5'  => 'Coi chừng những lời mời chào hấp dẫn! Hãy cẩn thận với các yêu cầu từ nước ngoài khi bạn chỉ có một email liên hệ. Chuyển khoản ngân hàng do Western Union hoặc MoneyGram đề xuất cũng có thể là giả tạo.',
	'post_seller_contacted_content_6'  => 'Cảm ơn bạn đã tin tưởng và hẹn gặp lại.',
	'post_seller_contacted_content_7'  => 'PS: Đây là một email tự động, xin vui lòng không trả lời.',
	
	
	// user_deleted
	'user_deleted_title'             => 'Tài khoản của bạn đã bị xóa trên :appName',
	'user_deleted_content_1'         => 'Xin chào,',
	'user_deleted_content_2'         => 'Tài khoản của bạn đã bị xóa khỏi <a href=":appUrl">:appName</a> lúc :now.',
	'user_deleted_content_3'         => 'Cảm ơn bạn đã tin tưởng và hẹn gặp lại.',
	'user_deleted_content_4'         => 'PS: Đây là một email tự động, xin vui lòng không trả lời.',
	
	
	// user_activated (new)
	'user_activated_title'           => 'Chào mừng bạn đến :appName !',
	'user_activated_content_1'       => 'Chào mừng bạn đến :appName :userName !',
	'user_activated_content_2'       => 'Tài khoản của bạn đã được kích hoạt.',
	'user_activated_content_3'       => '<strong>Chú thích: :appName nhóm khuyên bạn:</strong>
<br><br>1 - Luôn luôn cẩn thận với các nhà quảng cáo từ chối làm cho bạn thấy hàng hóa được chào bán hoặc cho thuê,
<br>2 - Không bao giờ gửi tiền bởi Western Union hoặc ủy thác quốc tế khác.
<br><br>Nếu bạn có bất kỳ nghi ngờ nào về mức độ nghiêm trọng của một nhà quảng cáo, vui lòng liên hệ với chúng tôi ngay lập tức. Sau đó chúng ta có thể vô hiệu hóa càng nhanh càng tốt và ngăn chặn một người ít thông tin trở thành nạn nhân.',
	'user_activated_content_4'       => 'Bạn đang nhận được email này vì gần đây bạn đã tạo một email mới :appName tài khoản. Nếu đây không phải là bạn, xin vui lòng bỏ qua email này.',
	
	
	// reset_password
	'reset_password_title'           => 'Đặt lại mật khẩu của bạn',
	'reset_password_action'          => 'Đặt lại mật khẩu',
	'reset_password_content_1'       => 'Quên mật khẩu?',
	'reset_password_content_2'       => 'Hãy để bạn có một cái mới.',
	'reset_password_content_3'       => 'Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm hành động nào.',
	
	
	// contact_form
	'contact_form_title'             => 'Tin nhắn mới từ :appName',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'Báo cáo lạm dụng mới',
	'Post URL'                         => 'URL bài đăng',
	
	
	// post_archived
	'post_archived_title'              => 'Quảng cáo của bạn đã được lưu trữ',
	'post_archived_content_1'          => 'Xin chào,',
	'post_archived_content_2'          => 'Quảng cáo của bạn ":title" đã được lưu trữ từ :appName lúc :now.',
	'post_archived_content_3'          => 'Bạn có thể đăng lại bằng cách nhấn vào đây : <a href=":repostUrl">:repostUrl</a>',
	'post_archived_content_4'          => 'Nếu bạn không làm gì, quảng cáo của bạn sẽ bị xóa vĩnh viễn :dateDel.',
	'post_archived_content_5'          => 'Cảm ơn bạn đã tin tưởng và hẹn gặp lại.',
	'post_archived_content_6'          => 'PS: Đây là một email tự động, xin vui lòng không trả lời.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'Quảng cáo của bạn sẽ bị xóa trong :days ngày',
	'post_will_be_deleted_content_1'   => 'Xin chào,',
	'post_will_be_deleted_content_2'   => 'Quảng cáo của bạn ":title" sẽ bị xóa trong :days ngày từ :appName.',
	'post_will_be_deleted_content_3'   => 'Bạn có thể đăng lại bằng cách nhấn vào đây: <a href=":repostUrl">:repostUrl</a>',
	'post_will_be_deleted_content_4'   => 'Nếu bạn không làm gì, quảng cáo của bạn sẽ bị xóa vĩnh viễn :dateDel.',
	'post_will_be_deleted_content_5'   => 'Cảm ơn bạn đã tin tưởng và hẹn gặp lại.',
	'post_will_be_deleted_content_6'   => 'PS: Đây là một email tự động, xin vui lòng không trả lời.',
	
	
	// post_notification
	'post_notification_title'          => 'Quảng cáo mới đã được đăng',
	'post_notification_content_1'      => 'Xin chào quản trị viên,',
	'post_notification_content_2'      => 'Người dùng :advertiserName vừa đăng một quảng cáo mới.',
	'post_notification_content_3'      => 'Tiêu đề quảng cáo: <a href=":postUrl">:title</a><br>Đăng trên: :now lúc :time',
	
	
	// user_notification
	'user_notification_title'        => 'Đăng Ký Người Dùng Mới',
	'user_notification_content_1'    => 'Xin chào quản trị viên,',
	'user_notification_content_2'    => ':name vừa đăng ký.',
	'user_notification_content_3'    => 'Đắng ký trên: :now lúc :time<br>Email: <a href="mailto::email">:email</a>',
	
	
	// payment_sent
	'payment_sent_title'             => 'Cảm ơn bạn đã thanh toán!',
	'payment_sent_content_1'         => 'Xin chào,',
	'payment_sent_content_2'         => 'Chúng tôi đã nhận được khoản thanh toán của bạn cho quảng cáo "<a href=":postUrl">:title</a>".',
	'payment_sent_content_3'         => 'Cảm ơn bạn!',
	
	
	// payment_notification
	'payment_notification_title'     => 'Thanh toán mới đã được gửi',
	'payment_notification_content_1' => 'Xin chào Quản trị viên,',
	'payment_notification_content_2' => 'Người dùng :advertiserName vừa trả một gói cho quảng cáo của mình "<a href=":postUrl">:title</a>".',
	'payment_notification_content_3' => 'CHI TIẾT THANH TOÁN
<br><strong>Lý do thanh toán:</strong> Quảng cáo #:adId - :packageName
<br><strong>Số tiền:</strong> :amount :currency
<br><strong>Phương thức thanh toán:</strong> :paymentMethodName',
	
	// payment_approved (new)
	'payment_approved_title'     => 'Thanh toán của bạn đã được phê duyệt!',
	'payment_approved_content_1' => 'Xin chào,',
	'payment_approved_content_2' => 'Thanh toán của bạn cho quảng cáo "<a href=":postUrl">:title</a>" đã được chấp nhận.',
	'payment_approved_content_3' => 'Cảm ơn bạn!',
	'payment_approved_content_4' => 'CHI TIẾT THANH TOÁN
<br><strong>Lý do thanh toán:</strong> Quảng cáo #:adId - :packageName
<br><strong>Số tiền:</strong> :amount :currency
<br><strong>Phương thức thanh toán:</strong> :paymentMethodName',
	
	
	// reply_form
	'reply_form_title'               => ':subject',
	'reply_form_content_1'           => 'Xin chào,',
	'reply_form_content_2'           => '<strong>Bạn đã nhận được phản hồi từ: :senderName. Xem tin nhắn dưới đây:</strong>',
	
	
	// generated_password
	'generated_password_title'            => 'Mật khẩu của bạn',
	'generated_password_content_1'        => 'Xin chào :userName!',
	'generated_password_content_2'        => 'Tài khoản của bạn đã được tạo.',
	'generated_password_verify_content_3' => 'Nhấp vào nút bên dưới để xác minh địa chỉ email của bạn.',
	'generated_password_verify_action'    => 'Xác nhận địa chỉ email',
	'generated_password_content_4'        => 'Mật khẩu của bạn là: <strong>:randomPassword</strong>',
	'generated_password_login_action'     => 'Đăng nhập ngay bây giờ!',
	'generated_password_content_6'        => 'Bạn đang nhận được email này vì gần đây bạn đã tạo một email mới :appName tài khoản hoặc thêm một địa chỉ email mới. Nếu đây không phải là bạn, xin vui lòng bỏ qua email này.',


];
