@extends('homeuser.layout.master')
@section('home')
<style>
    .navbar-custom {
        background-color: rgba(10, 10, 10, 0.9) !important;
    }
    .navbar-transparent {
        padding-bottom: 0px;
        padding-top: 0px;
    }
</style>
<div class="main">
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h2 class="module-title font-alt">Chính sách bảo mật</h2>
                </div>
            </div>
            <p>Chính sách thanh toán:</p>
            <p>– Thanh toán trực tiếp tiền mặt.</p>
            <p></p>
            <p>– Thanh toán khi nhận được hàng</p>
            <p></p>
            <p>– Thanh toán bằng hình thức chuyển khoản</p>
            <p></p>
            <p>Thông tin chi tiết về số tài khoản chúng tôi sẽ gửi qua email cho quý khách</p>
            <p></p>
            <p>Lưu ý:Nội dung chuyển khoản ghi rõ họ tên hoăc công ty và chuyển cho đơn hàng nào. Sau khi chuyển khoản, chúng tôi sẽ liên hệ xác nhận và tiến hành giao hàng. Nếu sau thời gian thỏa thuận mà chúng tôi không giao hàng hoặc không phản hồi lại, quý khách có thể gửi khiếu nại trực tiếp về công ty và yêu cầu bồi thường nếu chứng minh được sự chậm trễ làm ảnh hưởng đến kinh doanh của quý khách.</p>
            <p>Đối với khách hàng có nhu cầu mua số lượng lớn để kinh doanh hoặc buôn sỉ vui lòng liên hệ trực tiếp với chúng tôi để có chính sách giá cả hợp lý. Và việc thanh toán sẽ được thực hiện theo hợp đồng.</p>
            <p></p>
            <p>Chúng tôi cam kết kinh doanh minh bạch, hợp pháp, bán hàng chất lượng, có nguồn gốc rõ ràng.</p>
            <p></p>
            <p>Chính sách vận chuyển:</p>
            <p>Thông thường sau khi nhận được thông tin đặt hàng chúng tôi sẽ xử lý đơn hàng trong vòng 24h và phản hồi lại thông tin cho khách hàng về việc thanh toán và giao nhận. Thời gian giao hàng thường trong khoảng từ 3-5 ngày kể từ ngày chốt đơn hàng hoặc theo thỏa thuận với khách khi đặt hàng. Tuy nhiên, cũng có trường hợp việc giao hàng kéo dài hơn nhưng chỉ xảy ra trong những tình huống bất khả kháng như sau:</p>
            <p></p>
            <p>Nhân viên công ty sẽliên lạc với khách hàng qua điện thoại không được nên không thể giao hàng.</p>
            <p>Địa chỉ giao hàng bạn cung cấp không chính xác hoặc khó tìm.</p>
            <p>Số lượng đơn hàng của công tytăng đột biến khiến việc xử lý đơn hàng bị chậm.</p>
            <p>Đối tác cung cấp nguyên liệu cho</p>
            <p>công</p>
            <p>tychậm hơn dự kiến khiến việc giao hàng bị chậm lại hoặc đối tác vận chuyển giao hàng bị chậm chỉ vận chuyển phân phối cho đại lý hoặc khách hàng có nhu cầu lớn, lâu dài. Vì thếcông ty đa phần sẽ hỗ trợ chi phí vận chuyển như một cách chăm sóc đại lý cua mình. Đối với khách lẻ nếu có nhu cầu sử dụng lớn vui lòng liên hệ trực tiếp để thỏa thuận hợp đồng cũng như phí vận chuyển.</p>
            <p> </p>
            <p></p>
            <p>Chính sách đổi trả/ hoàn tiền:</p>
            <p>Trong các trường hợp sau, hãy liên hệ ngay với chúng tôi để được đổi trả hàng trong thời gian sớm nhất:</p>
            <p></p>
            <p> </p>
            <p></p>
            <p>Sản phẩm bị lỗi, hỏng hoặc do vận chuyển.</p>
            <p></p>
            <p>Gửi sai sản phẩm.</p>
            <p></p>
            <p>Lỗi do nhầm lẫn của nhân viên tư vấn</p>
            <p></p>
            <p>Chính sách bảo hành</p>
            <p>Hàng lỗi hỏng do vận chuyển, phản hồi ngay khi nhận hàng: đổi mới, miễn phí vận chuyển</p>
            <p></p>
            <p>Hàng có lỗi kỹ thuật sản xuất, nhầm mặt hàng, số lượng, phản hồi ngay khi nhận hàng: đổi mới, bổ sung, miễn phí vận chuyển</p>
            <p></p>
            <p>Hàng đã mở nắp và qua sử dụng: không hỗ trợ đổi trả.</p>
            <p></p>
            <p>Khách hàng có kích ứng về da với sản phẩm: hoàn tiền và nhận lại sản phẩm.</p>
            <p></p>
            <p>Hướng dẫn mua hàng</p>
            <p>Quý Khách hàng có thể chọn một trong hai cách sau:</p>
            <p></p>
            <p>Cách thứ nhất: Gọi điện thoại đến số hotline nhân viên của công ty sẽ tư vấn và hỗ trợ cho khác hàng tất cả các thông tin về sản phẩm và dịch vụ..</p>
            <p></p>
            <p>Cách thứ hai: Đặt hàng qua website:</p>
            <p>Bước 1: Bấm vào nút “mua hàng” để đưa sản phẩm vào giỏ hàng sau khi đã lựa chọn sản phẩm mình muốn mua</p>
            <p>Bước 2: Sau khi chọn xong sản phẩm đặt mua, điền các thông tin theo yêu cầu của chúng tôi: size, màu sắc, số lượng ….</p>
            <p>Bước 3: Bấm nút “Gửi”</p>
            <p>Đơn hàng của bạn đã hoàn tất và được chuyển tới chúng tôi. Chúng tôi  sẽ xử lý và liên lạc lại với bạn để thực hiện giao dịch.</p>
        </div>
    </section>
@include('homeuser.layout.footer')

</div>
@endsection
