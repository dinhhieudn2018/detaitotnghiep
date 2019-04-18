@extends('pages.layouts.master')
@section('style')
    <style>
        .button-hidden{
            background: transparent;
            border: none !important;
            font-size:0;
            outline:none;
        }
        .fix-font a{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .product-f-image{
            overflow: hidden;
        }
        .single-product-widget h2{
            font-family: "Times New Roman", serif;
        }
    </style>
@stop
@section('content')
<div class="single-product-area">
        <div class="container">
            <div class="row">
                <div class="box-inner">
   <div style='color:red; font-weight:bold; text-transform: uppercase; text-align:center;font-size: 35px;' id="ctl00_Widget1139_Widget_HeaderPanel" class="box-header  _specials" style="">
      <span  id="ctl00_Widget1139_Widget_txtTitleContentPlaceHolder1Widget">Đổi trả</span>
   </div>
   <div id="ctl00_Widget1139_Widget_HeaderPanelDes" class="_panel_des _hidden">
      <span id="ctl00_Widget1139_Widget_txtDescriptionContentPlaceHolder1Widget" class="_custom_desc_html"></span>
   </div>
   <div id="ctl00_Widget1139_Widget_WidgetBodyPanel" class="box-content _nofr _nopd " style="">
      <style>
         body {background:#fff;}
      </style>
		<div class="fck_detail">
			<div id="title"><strong>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</strong></div>
		<p><strong>1. Điều kiện áp dụng</strong><br>
		<br>
		Theo các điều khoản và điều kiện được quy định trong Chính sách Trả hàng và Hoàn tiền này và tạo thành một phần của Điều khoản dịch vụ, Shopee đảm bảo quyền lợi của Người mua bằng cách cho phép gửi yêu cầu hoàn trả sản phẩm và/hoặc hoàn tiền trước khi hết hạn. Thời hạn Shopee Đảm Bảo đã được qui định trong Điều khoản Dịch vụ.
		</p>
		<p><br>
		Shopee Đảm bảo là một dịch vụ cung cấp bởi Shopee, theo yêu cầu của Người dùng, để hỗ trợ Người dùng trong việc giải quyết các xung đột có thể phát sinh trong quá trình giao dịch. Người dùng có thể liên hệ với nhau để thỏa thuận về việc giải quyết tranh chấp của họ hoặc báo cáo lên chính quyền địa phương có liên quan nhờ hỗ trợ họ trong việc giải quyết bất kỳ tranh chấp xảy ra trước, trong hoặc sau khi sử dụng Shopee Đảm bảo.
		</p>
		<p>&nbsp;</p>
		<p><strong>2. Điều kiện trả hàng</strong><br>
		<br>
		Người mua đồng ý rằng cô ấy/anh ấy chỉ có thể yêu cầu trả hàng và hoàn tiền trong các trường hợp sau:<br>
		• Người mua đã thanh toán nhưng không nhận được sản phẩm;<br>
		• Sản phẩm bị lỗi hoặc bị hư hại trong quá trình vận chuyển;<br>
		• Người bán giao sai sản phẩm cho Người mua (VD: sai kích cỡ, sai màu sắc, v.vv...);<br>
		• Sản phẩm Người mua nhận được khác biệt một cách rõ rệt so với thông tin mà Người bán cung cấp trong mục mô tả sản phẩm;<br>
		• Người bán đã tự thỏa thuận và đồng ý cho Người mua trả hàng (tuy nhiên Shopee sẽ cần Người bán xác nhận lại những thoả thuận này).
		</p>
		<p><br>
		Tất cả các yêu cầu trả hàng-hoàn tiền phải được thực hiện trên Ứng dụng Shopee.&nbsp;<br>
		Shopee luôn xem xét cẩn thận từng yêu cầu trả hàng/hoàn tiền của Người mua và có quyền đưa ra quyết định cuối cùng đối với yêu cầu đó dựa trên các quy định nêu trên và &nbsp;theo Điều khoản Dịch vụ của Shopee.
		</p>
		<p>&nbsp;</p>
		<p><strong>3. Không thay đổi ý định mua hàng</strong><br>
		<br>
		Trừ khi được đề cập trong Chính sách Trả hàng và Hoàn tiền này, các trường hợp trả hàng do Người mua thay đổi ý định mua hàng sẽ không được chấp nhận.&nbsp;
		</p>
		<p>&nbsp;</p>
		<p><strong>4. Quyền lợi của Người bán</strong><br>
		<br>
		Khi nhận được yêu cầu trả hàng và/hoặc hoàn tiền từ phía Người mua, Shopee sẽ thông báo cho Người bán qua văn bản (thông báo trên Ứng dụng và/hoặc thư điện tử và/hoặc tin nhắn điện thoại). Người bán cần phải gửi phản hồi theo hướng dẫn của Shopee trong thời gian quy định. Sau thời gian đó, nếu Shopee không nhận được bất cứ phản hồi nào từ Người bán, Shopee sẽ hiểu rằng Người bán hoàn toàn đồng ý với yêu cầu của Người mua, và tự động hoàn tiền cho Người mua mà không thông báo gì thêm.
		</p>
		<p><br>
		Shopee luôn theo dõi phản hồi của Người bán trong từng trường hợp và toàn quyền ra quyết định cuối cùng đối với &nbsp;yêu cầu trả hàng/hoàn tiền của Người mua.
		</p>
		<p>&nbsp;</p>
		<p><strong>5. Tình trạng của hàng trả lại</strong><br>
		<br>
		Để hạn chế các rắc rối phát sinh liên quan đến trả hàng, Người mua lưu ý cần phải gửi trả sản phẩm bao gồm toàn bộ phụ kiện đi kèm nếu có, và sản phẩm phải trong tình trạng nguyên vẹn như khi nhận hàng. Shopee khuyến khích Người mua chụp lại ảnh sản phẩm ngay khi nhận được để làm bằng chứng đối chiếu/khiếu nại về sau nếu cần.
		</p>
		<p>&nbsp;</p>
		<p><strong>6. Chi phí trả hàng</strong><br>
		<br>
		Người bán và Người mua cần thống nhất về việc ai sẽ là người chịu phí vận chuyển đối với hàng trả lại.<br>
		Lưu ý: Hiện tại, Shopee chưa hỗ trợ phí vận chuyển cũng&nbsp;như thương lượng phí vận chuyển trả hàng cho đơn hàng khiếu nại.
		</p>
		<p>&nbsp;</p>
		<p><strong>7. Hoàn tiền cho Hàng trả lại</strong><br>
		<br>
		Shopee sẽ chỉ hoàn tiền cho Người mua khi Người bán xác nhận đã nhận được Hàng trả lại. Trong trường hợp Người bán không phản hồi trong khoảng thời gian đã được quy định trước, Shopee sẽ tự động hoàn tiền cho Người mua mà không thông báo gì thêm. Để biết thêm thông tin về thời hạn phản hồi của Người bán, vui lòng bấm vào đây. Tùy từng trường hợp, tiền hoàn trả sẽ được chuyển vào thẻ tín dụng/tài khoản ngân hàng được chỉ định của Người mua.
		</p>
		<p><br>
		Lưu ý: Với đơn hàng COD, Người mua có trách nhiệm phải cung cấp thông tin tài khoản ngân hàng để nhận tiền hoàn trả.
		</p>
		<p>&nbsp;</p>
		<p><strong>8. Liên lạc giữa người bán và người mua</strong><br>
		<br>
		Shopee khuyến khích Người dùng liên hệ để thương lượng trước với nhau khi có bất cứ vấn đề nào phát sinh trong giao dịch. Shopee sẽ chỉ can thiệp trong trường hợp Người bán và Người mua không thể đi đến thỏa thuận cuối cùng; do vậy Người mua nên chủ động liên hệ với Người bán khi có bất cứ vấn đề nào liên quan đến đơn hàng.
		</p>
		<p>&nbsp;</p>
		<p><strong>9. Tranh chấp giữa Người mua và Người bán</strong><br>
		<br>
		Trong trường hợp Người mua và Người bán không thể đồng thuận về phương án giải quyết, Người mua và Người bán có thể khiếu nại việc này lên các Cơ quan chức năng để giải quyết.<br>
		Nếu một bên khiếu nại bên kia tới các Cơ quan chức năng, bên khiếu nại cần thông báo kịp thời với Shopee về vụ việc tranh chấp này kèm theo những thông tin yêu cầu từ phía Shopee mà Shopee cho là hợp lý, theo từng vụ việc cụ thể. Trong trường hợp đó, Người bán và Người mua cùng đồng ý rằng một khi Shopee đã nhận được thông báo và các thông tin liên quan đến vụ việc tranh chấp, khi tiền hàng vẫn chưa được thanh toán cho Người bán theo quy định của Shopee Đảm Bảo, Shopee có quyền tạm hoãn thanh toán cho Người bán cho đến khi có quyết định cuối cùng về việc giải quyết tranh chấp giữa Người bán và Người mua. Trong trường hợp khoản tiền thanh toán này đã được trả cho Người bán theo chính sách Shopee Đảm Bảo, cả Người mua và Người bán đồng ý rằng Shopee không còn trách nhiệm giải quyết khiếu nại, tranh chấp giữa hai bên hoặc không còn bất kỳ trách nhiệm nào đối với khoản tiền hàng.
		</p>
		<p><br>
		Người mua và Người bán đồng ý bồi thường và giữ cho Shopee không bị thiệt hại, hoặc chống lại bất kỳ việc khiếu nại, kiện tụng, hoặc các nghĩa vụ/trách nhiệm, thiệt hại, tuyên bố, hình phạt, tiền phạt, các chi phí và phí tổn (bao gồm, nhưng không giới hạn bất kỳ chi phí giải quyết tranh chấp nào khác) có liên quan phát sinh từ hoặc có liên quan đến bất kỳ hành động nào của Shopee theo Chính sách Trả hàng và Hoàn tiền này.
		</p>
		</div>
   </div>
</div>
            </div>
        </div>
</div>
@endsection