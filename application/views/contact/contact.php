<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHTLSGjLU2M3HpNdXImDESsvg49HcN2oI&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="contact">
    <div class="contact-left">
        <div class="contact-head">
            <h3>THÔNG TIN LIÊN HỆ</h3>
        </div>
        <div class="contact-body">
            <div class="contact-logo">

            </div>
            <div class="contact-detail">
                <h4>BROWN CHUYÊN SỈ</h4>
                <p><i class="fa fa-map-marker"></i> <b>Địa chỉ:</b> 142/17 Ngô Tất Tố, P.22, Q.Bình Thạnh, Tp.Hồ Chí Minh</p>
                <p><i class="fa fa-mobile"></i> <b>Zalo :</b> 0938.707014</p>
                <p><i class="fa fa-facebook"></i> <b>Facebook:</b> https://www.facebook.com/si.chuyen.33671</p>
                <p><i class="fa fa-envelope"></i> <span>brownchuyensi@gmail.com</span></p>
            </div>
        </div>
        <div class="contact-send">
            <h4>GỬI THÔNG TIN LIÊN HỆ</h4>
            <p>Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!</p>
            <div class="contact-send-input">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="input-info" placeholder="Họ tên">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <input type="text" class="input-info" placeholder="Địa chỉ">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="text" class="input-info" placeholder="Email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input type="text" class="input-info" placeholder="Điện thoại">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                    <input type="text" class="input-info" placeholder="Tiêu đề">
                </div>
                <div class="input-group">
                    <textarea placeholder="Nội dung"></textarea>
                </div>
                <button type="submit">Gửi</button>
            </div>
            <div id="contact-send-map">

            </div>
            <div id="map-info" style="display: none">
                <div class="map-info-content">
                    <div class="map-info-content-logo">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-right">
        <div class="policy-guide">
            <div class="policy-guide-header">
                <h3>Hỗ trợ trục tuyến</h3>
            </div>
            <div class="policy-guide-content">
                <h4 class="zalo">ZALO</h4>
                <h3 class="number">0938.707014</h3>
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function(){
        function loadMap() {
            var center = {lat: 10.7897,  lng: 106.71510 } ;
            var map = new google.maps.Map(document.getElementById('contact-send-map'), {
                zoom: 16,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                clickableIcons: false
            });
            google.maps.event.trigger(map, 'resize');
            addMarker(center, map)
        }
        function addMarker(location, map) {
            var contentString = $('#map-info').html();
            console.log(contentString);
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                disableAutoPan: true,
                closeBoxURL: ""
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                infowindow: infowindow
            });
            infowindow.open(map, marker);

        }
        loadMap();
    });
</script>