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
        <?php
        foreach($products as $product) {
            $image = $path_image.'/'.$product['image1'];
            $name = $product['product_name'];
            $id = $product['product_id'];
            ?>
            <div class="item">
                <div class="img-box" style="background-image: url(<?php echo $image; ?>);">
                </div>
                <h4><?php echo $name; ?></h4>
                <div class="button">
                    <a class="quick-show" href="#">Xem nhanh</a>
                    <a href="/product/<?php echo $id; ?>">Chi tiết</a>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <div class="product-paging">
        <div>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>
    </div>
</div>