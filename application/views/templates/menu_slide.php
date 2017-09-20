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
                    <a href="/">Trang chủ</a>
                </li>
                <li class="show-menu">
                    <a href="/product">Sản phẩm</a>
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
                    <a href="/about">Giới thiệu</a>
                </li>
                <li>
                    <a href="/contact">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="bg-slide">
    <div class="slide-left">
        <ul>
            <li>
                <a href="#" class="a1">Đầm len</a>
            </li>

            <li>
                <a href="#" class="a2">Áo len</a>
            </li>

            <li>
                <a href="#" class="a3">Áo khoác len</a>
            </li>

            <li>
                <a href="#" class="a4">Sét bộ</a>
            </li>

            <li>
                <a href="#" class="a5">Đầm hoa</a>
            </li>

            <li>
                <a href="#" class="a6">Áo sơ mi</a>
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