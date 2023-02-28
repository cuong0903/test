<?php
     $sql_pro = "SELECT * FROM san_pham WHERE  san_pham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC ";
     $query_pro = mysqli_query($conn, $sql_pro);
    
   
    //get tên danh mục
    $sql_cate = "SELECT * FROM  danh_muc WHERE  danh_muc.id_danhmuc = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($conn, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
   ?>
<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h3>
            <ul class="product-list">
                <?php
                while($row_pro = mysqli_fetch_array($query_pro)){

                ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                        <img src="admin/modules/quanlisp/upload/<?php echo $row_pro['hinhanh'] ?>" alt="">
                        <p class="title-product">Tên sản phẩm:<?php echo $row_pro['tensanpham'] ?></p>
                        <p class="price-product">Giá: <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
                    </a>
                </li>
                <?php
                }

                ?>

               
            </ul>