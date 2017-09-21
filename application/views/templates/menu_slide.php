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
                        <?php
                        $i=1;
                        foreach($types as $type) {
                            $id = $type['type_id'];
                            $name = $type['type_name'];
                            echo '<a href="/product/'.$id.'">'.$name.'</a>';
                        }
                        ?>
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
            <?php
            $i=1;
            foreach($types as $type) {
                $class = 'a'.$i;

                $id = $type['type_id'];
                $name = $type['type_name'];
                echo '<li><a href="/product/'.$id.'" class="'.$class.'">'.$name.'</a></li>';
                $i++;
            }
            ?>
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