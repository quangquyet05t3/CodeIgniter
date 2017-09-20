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
        <?php for($i=1;$i<=8;$i++) { ?>
        <div class="item">
            <div class="img-box" style="background-image: url(images/icon/product1.jpg);">
            </div>
            <h4>Áo khoác len</h4>
            <div class="button">
                <a class="quick-show" href="#">Xem nhanh</a>
                <a href="/detail">Chi tiết</a>
            </div>
        </div>
        <?php }?>

    </div>
    <div class="product-paging">
        <div>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>
    </div>
</div>