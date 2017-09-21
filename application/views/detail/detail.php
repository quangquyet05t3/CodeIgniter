<?php
    $image1 = '../'.$path_image.'/'.$product['image1'];
    $name = $product['product_name'];
    $description = $product['description'];
    $size = $product['size'];
    $list_small_image = [];
    for($i=1;$i<=6;$i++){
        $key = 'image'.$i;
        if(isset($product[$key])) {
            $image = '../'.$path_image.'/'.$product[$key];
            $list_small_image[] = $image;
        }
    }

?>

<div class="detail">
    <div class="img-bg">
        <div class="img-box" style="background-image: url(<?php echo $image1; ?>);"></div>
        <div class="img-nav">
            <ul>
                <?php
                    foreach($list_small_image as $item) {
                        ?>
                        <li>
                            <div class="small-img" style="background-image: url(<?php echo $item ?>);"></div>
                        </li>
                        <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="detail-content">
        <div class="content">
            <h2><?php echo $name; ?></h2>
            <div class="description">
                <p>
                    Size: <?php echo $size; ?>
                </p>
                <p>
                    <?php echo $description; ?>
                </p>
            </div>
            <div class="share">

            </div>
            <div class="put-info">
                <h4>ĐỂ LẠI SỐ ĐIỆN THOẠI, CHÚNG TÔI SẼ TƯ VẤN NGAY SAU TỪ 5 › 10 PHÚT</h4>
                <div class="input-group">
                    <input type="text" class="call-me">
                        <span>
                            <button>
                                <i class="fa fa-phone"></i>
                                Gọi lại cho tôi
                            </button>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-right">
        <div class="policy-guide">
            <div class="policy-guide-header">
                <h3>Chính sách bán hàng</h3>
            </div>
            <div class="policy-guide-content">
                <ul>
                    <li>
                        <span>1</span>
                        Giao hàng toàn quốc
                    </li>
                    <li>
                        <span>2</span>
                        Thanh toán bằng chuyển khoản
                    </li>
                    <li>
                        <span>3</span>
                        Đổi trả trong vòng 10 ngày
                    </li>
                    <li>
                        <span>4</span>
                        Hoàn tiền cho hàng lỗi
                    </li>
                    <li>
                        <span>5</span>
                        Chất lượng đảm bảo
                    </li>
                    <li>
                        <span>6</span>
                        Ship toàn quốc
                    </li>
                </ul>
            </div>

        </div>
        <div class="policy-guide">
            <div class="policy-guide-header">
                <h3>Hướng dẫn mua hàng</h3>
            </div>
            <div class="policy-guide-content">
                <p><b class="number">1.</b> Mua hàng ở facebook <b class="link">https://www.facebook.com/si.chuyen.33671</b></p>
                <p><b class="number">2.</b> Mua hàng ở zalo <b class="phone">0938.707014</b></p>
                <p><b class="number">3.</b> Inbox Zalo, Messager để được hổ trợ</p>
            </div>
        </div>
    </div>
</div>