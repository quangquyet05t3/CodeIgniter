<div class="bg-nav">
    <div class="nav">
        <div class="nav-left">
            <div class="list-product">
                <span class="icon"></span>
                <h4>Danh mục sản phẩm</h4>
            </div>
            <div class="menu-left">

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