<?php
  $sql_danhmuc = "SELECT * FROM danh_muc ORDER BY id_danhmuc DESC ";
  $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>



<div class="menu">
    <ul class="list-menu">
        <li><a href="index.php">Trang chủ</a></li>
        <?php
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                <?php
                    }
                ?>
                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                <li><a href="admin/login.php">Đăng nhập admin</a></li>

                
    </ul>
        <p>
            <form action="index.php?quanly=timkiem" method="post">
                <input type="text" placeholder="Tìm kiếm sản phẩm.." name="tukhoa">
                <input type="submit" name="timkiem" id="" value="Tìm kiếm">
            </form>
        </p>
    </div>