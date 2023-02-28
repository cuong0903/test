<?php
    if(isset($_POST['timkiem'])){
         $tukhoa = $_POST['tukhoa'];
    }
    else {
        $tukhoa = '';
    }
    $sql_pro = "SELECT * FROM san_pham, danh_muc WHERE san_pham.id_danhmuc= danh_muc.id_danhmuc AND san_pham.tensanpham LIKE '%$tukhoa%' ";
    $query_pro = mysqli_query($conn, $sql_pro);

?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
<ul class="product-list">
    <?php
    while($row = mysqli_fetch_array($query_pro)){
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
        <img src="admin/modules/quanlisp/upload/<?php echo $row['hinhanh'] ?>" alt="">
        <p class="title-product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
        <p class="price-product">Giá: <?php echo number_format($row['giasp']) ?></p>
        <p style="text-align:center; color:#d1d1d1;"><?php echo $row['tendanhmuc'] ?></p>
        </a>
    </li>
    <?php
    }
    ?>
</ul>
