<!DOCTYPE HTML SYSTEM>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brown Shop</title>
    <?php echo link_tag('css/reset.css'); ?>
    <?php echo link_tag('css/base.css'); ?>
    <?php echo link_tag('css/mbase.css'); ?>
    <?php echo link_tag('css/slide.css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<div class="m-menu">
    <ul>
        <li class="show-m-menu">
            <span class="icon"></span>

            <div class="d-menu">
                <a href="home.html">Trang chủ</a>
                <a href="?p=sp">Sản phẩm</a>
                <a href="?p=pro">Giới thiệu</a>
                <a href="?p=lh">Liên hệ</a>
            </div>
        </li>
    </ul>
    <h4>Danh mục</h4>

</div>
<div class="bg-top">
    <div class="top">
        <div class="top-left">
            <span><i class="fa fa-phone"></i> Hotline: 0938707014</span>
        </div>
        <div class="top-right">
            <span><a href="#"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a> </span>
            <span><a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a> </span>
            <span><a href="#"><i class="fa fa-sign-in"></i> Đăng nhập</a> </span>
            <span><a href="#"><i class="fa fa-key"></i> Đăng ký</a> </span>
        </div>

    </div>
</div>
<div class="header">
    <div class="header-left">
        <div class="logo">

        </div>
        <div class="m-cart">
            <div class="m-cart-icon">
                <span>0 sp - 0đ</span>
            </div>
        </div>
    </div>
    <div class="header-right">
        <div class="block-top">
            <ul>
                <li>
                    <span class="ship icon"></span>
                    <h4>Ship hàng toàn quốc</h4>

                </li>
                <li>
                    <span class="pay icon"></span>
                    <h4>Thanh toán linh hoạt</h4>

                </li>
                <li>
                    <span class="refund icon"></span>
                    <h4>Trả hàng trong 10 ngày</h4>
                </li>
            </ul>
        </div>
        <div class="block-bottom">
            <input type="text">
            <button class="search"></button>
            <div class="cart">
                <div class="cart-icon">
                    <span>0 sp - 0đ</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-nav">
    <div class="nav">
        <div class="nav-left">
            <div class="list-product">
                <span class="icon"></span>
                <h4>Danh mục sản phẩm</h4>
            </div>
        </div>
        <div class="nav-main">
            <ul>
                <li class="active">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="show-menu">
                    <a href="#">Sản phẩm</a>
                    <div class="menu">
                        <a href="#">Đầm len</a>
                        <a href="#">Áo len</a>
                        <a href="#">Áo khoác len</a>
                        <a href="#">Sét bộ</a>
                        <a href="#">Đầm hoa</a>
                        <a href="#">Áo sơ mi</a>
                    </div>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="bg-slide">
    <div class="slide-left">
        <ul>
            <li>
                <a class="a1">Đầm len</a>
            </li>

            <li>
                <a class="a2">Áo len</a>
            </li>

            <li>
                <a class="a3">Áo khoác len</a>
            </li>

            <li>
                <a class="a4">Sét bộ</a>
            </li>

            <li>
                <a class="a5">Đầm hoa</a>
            </li>

            <li>
                <a class="a6">Áo sơ mi</a>
            </li>
        </ul>
    </div>
    <div class="slide-main">
        <div class="slideshow-container" style="display: block">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://www.w3schools.com/howto/img_fjords_wide.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

        </div>
        <div style="text-align:center; display: block">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
</div>

<div class="product">
    <div class="bg-title"><h3>Sản phẩm</h3></div>
    <div class="product-tool">
        <div class="tool-left">
            <div class="icon1">
            </div>
            <div class="icon2">
            </div>
            <span>Sản phầm/trang</span>
            <select>
                <option value="12">12</option>
            </select>
        </div>
        <div class="tool-right">
            <span>Sắp xếp</span>
            <select>
                <option value="1">Mặc định</option>
            </select>
        </div>
    </div>
    <div class="list-item">
        <div class="item">
            <div class="img-box" style="background-image: url(images/icon/product1.jpg);">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box" style="background-image: url(images/icon/product2.jpg);">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="#">Chi tiết</a>
            </div>
        </div>
    </div>
    <div class="product-paging">
        <div>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>
    </div>
</div>
<div class="bg-footer-top">
    <div class="footer-top">
        <h3>ZALO: 0938.707014</h3>
        <span class="facebook icon"></span>
        <span class="zalo icon"></span>
        <span class="phone icon"></span>
        <a href="#">Liên hệ với chúng tôi</a>
    </div>

</div>
<div class="bg-footer">
    <div class="footer">
        <div class="info">
            <div class="info-content">
                <div class="logo">
                </div>
                <h4>Brown shop chuyên cung cấp sỉ các mặt hàng VNXK</h4>
                <p><i class="fa fa-map-marker"></i> 142/17 Ngô Tất Tố P22 Quận Bình Thạnh TP Hồ Chí Minh</p>
                <p><i class="fa fa-envelope"></i>  Email: <a href="mailto:brownvnxk@gmail.com">brownvnxk@gmail.com</a></p>
                <p><i class="fa fa-phone"></i> Zalo: 0938.707014</p>
            </div>
        </div>
        <div class="intro">
            <h4>Giới thiệu</h4>
            <div><span>>></span><a href="#">Về chúng tôi</a></div>
            <div><span>>></span><a href="#">Hỏi đáp</a></div>
            <div><span>>></span><a href="#">Quy chế hoạt động</a></div>
            <div><span>>></span><a href="#">Tuyển dụng</a></div>
            <div><span>>></span><a href="#">Bảo mật thông tin</a></div>
        </div>
        <div class="help">
            <h4>Trợ giúp</h4>
            <div><span>>></span><a href="#">Hướng dẫn thanh toán</a></div>
            <div><span>>></span><a href="#">Quy định đổi trả hoàn tiền</a></div>
            <div><span>>></span><a href="#">Hướng dẫn mua hàng</a></div>
            <div><span>>></span><a href="#">Quy định thảo luận</a></div>
        </div>
        <div class="fb">
            <h4>Facebook</h4>

        </div>
    </div>
</div>


</body>
</html>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }


    $(document).ready(function(){
        var isShow = false;
        $(".m-menu").click(function(){
            if(!isShow) {
                $(".d-menu").show();
                isShow = true;
            } else {
                $(".d-menu").hide();
                isShow = false;
            }

        });
    });

</script>