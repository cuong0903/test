</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
    <title>Web phụ kiện điện thoại</title>
</head>
<body>


<?php
  $sql_pro = "SELECT * FROM san_pham, danh_muc WHERE  san_pham.id_danhmuc = danh_muc.id_danhmuc ORDER BY san_pham.id_sanpham DESC LIMIT 25";
  $query_pro = mysqli_query($conn, $sql_pro);
 
?>

<h3>Sản phẩm mới nhất</h3>
            <ul class="product-list">
                <?php
                while($row = mysqli_fetch_array($query_pro)){
                ?>
                <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                        <img src="admin/modules/quanlisp/upload/<?php echo $row['hinhanh'] ?>" >
                        <p class="title-product">Tên sản phẩm:<?php echo $row['tensanpham'] ?></p>
                        <p class="price-product">Giá: <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
                        <p style="text-align:center; color: #d2d3d3;"><?php echo $row['tendanhmuc'] ?></p>
                    </a>
                </li>
                <?php
                }

                ?>
                
            </ul>
</body>
</html>