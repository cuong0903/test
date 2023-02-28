<p>Chi tiết sản phẩm</p>
<?php
  $sql_chitiet = "SELECT * FROM san_pham, danh_muc WHERE   san_pham.id_sanpham = '$_GET[id]' LIMIT 1";
  $query_chitiet = mysqli_query($conn, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {

    ?>
<script>
function Phong(x) {
  x.style.height = "200px";
  x.style.width = "200px";
}

function Thu(x) {
  x.style.height = "150px";
  x.style.width = "150px";
}
</script>

<div class="baoquat_chitiet">
    <div class="hinhanh_sanpham">
    <img width="80%" src="admin/modules/quanlisp/upload/<?php echo $row_chitiet['hinhanh'] ?>" onmouseover="Phong(this)" onmouseout="Thu(this)" >
        
    </div>
    <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="post">
        <div class="chitiet_sanpham">
            <h3 style="margin: 0;">Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
            <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
            </p>Giá sản phẩm:<?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
            <p>Số lượng <?php echo $row_chitiet['soluong'] ?><p>
            <p>Danh mục sản phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></p>
            <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
        </div>
    </form>
</div>
<?php
}

?>