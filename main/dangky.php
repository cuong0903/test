<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $tendangnhap = $_POST['tendangnhap'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $matkhau = $_POST['matkhau'];
    $dienthoai = $_POST['dienthoai'];
    $sql_dangky = mysqli_query($conn, "INSERT INTO dang_ky (tenkhachhang, tendangnhap, email, diachi, matkhau, dienthoai) VALUE('".$tenkhachhang."','".$tendangnhap."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."') ");
    if ($sql_dangky) {
        echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register!</title>

    
    <script >
    //     querySelector chỉ trả lại giá trị duy nhất của 1 selector đầu tiên trong trang web
    //  trong document.querySelector chỉ chứa tên thẻ, mã id, hoặc mã class
     //addEventListener là hàm để thêm sự kiện vào một đối tượng html
      // nhưng chỉ áp dụng vs đối tượng html đó là duy nhất, và chỉ áp dụng 1 cái
      // nếu 2 đối tượng giống nhau thì sẽ thực hiện chỉ cho cái đầu tiên
      //DOMContentLoaded là cái đảm bảo document sẽ chạy khi DOM sẵn sàng

        document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#form').onsubmit = function() {
        let name = document.querySelector('#name').value;
        let username = document.querySelector('#username').value;
        let email = document.querySelector('#email').value;
        let national = document.querySelector('#national').value;
        let password = document.querySelector('#password').value;
        let re_password = document.querySelector('#re_password').value;
        let phone = document.querySelector('#phone').value;
        var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        // Hai dấu gạch chéo lên /../ chứa một regexe
        //  Biểu mẫu con \w+([.-]? \w+)* được sử dụng khớp với tên người dùng trong email, trước dấu @. nó bắt đầu ít nhất từ (az, AZ, 0-9) và dấu gạch dưới, tiếp theo đó là nhiều kí tự hơn hoặc. hoặc là -. Tuy nhiên một. haocjw -. phải theo sau một kí tự từ (az, AZ, 0-9 và dấu gạch dưới). Tức là chuỗi không được chứa "..", "--", ".-" hoặc "-. ví dự về chuối hợp lệ là a.1-2-3.@ khớp với chính nó 
        // Một lầm n biểu thức con \w+([.-]?w+) được sử dụng để hớp với email có cùng dấu tên người dùng được mô tả ở trên
        // Biểu thức con .\w[2,3] khớp với a. theo sau là hai hoặc 3 kí tự từ ví dụ".com",".edu"
        // (.\w[2,3]) + chỉ định rằng biểu thức con ở trên sẽ sảy ra một lầm hoặc nhiều lần ví dụ .com

       
        if (name == "" || username == "" ||email == "" || national == "" || password == "" || re_password == "" || phone == "") {
            alert ('Bạn chưa nhập đủ dữ liệu yêu cầu!');
            return false;
        }
        if (username.length < 8) {
            document.querySelector('#username_error').innerHTML = "*Tên đăng nhập yêu cầu tối thiểu 8 kí tự!";
            return false;
        }
        if (re_password != password) {
            document.querySelector('#re_error').innerHTML = "*Mật khẩu không khớp!";
            return false;
        }
        if (!email.match(mail_format)) {
            document.querySelector('#email_err').innerHTML = "*Email không đúng!";
            return false;
        }
    }
})
    </script>

    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>
    <p>Đăng ký thành viên</p>
    <style type="text/css">
        table.dangky tr td {
            padding: 5px;
        }
    </style>
    <form id="form" action="" method="post">
        <table class="dangky" border = "1" >
            <tr>
                <td>Họ và tên (*)</td>
                <td><input type="text" id="name" name="hovaten"  placeholder="Họ tên"><br></td>
            </tr>

            <tr>
            <!-- Một id trên thẻ <span> gán một mã định danh cho span. -->
            <!-- Thẻ <span> được sử dụng để nhóm các phần tử nội tuyến và văn bản.
            Nó hoạt động giống như một thẻ <div> nhưng nó hiển thị dưới dạng một phần tử nội tuyến mà không ngắt dòng. -->
                <td>Tên đăng nhập (*)</td>
                <td><input type="text" id="username" name="tendangnhap" placeholder="Tên đăng nhập"><span id="username_error"></span><br></td>
            </tr>

            <tr>
                <td>Email (*)</td>
                <td><input type="text" id="email" name="email"  placeholder="Email"><span id="email_err"></span><br></td>
            </tr>

            <tr>
                <td>Địa chỉ (*)</td>
                <td><input type="text" id="national" name="diachi"  placeholder="Địa chỉ"><br></td>
            </tr>

            <tr>
                <td>Password (*) </td>
                <td><input type="password" id="password" name="matkhau"  placeholder="Password"><br></td>
            </tr>

            <tr>
                <td>Nhập lại password (*)</td>
                <td><input type="password" id="re_password" placeholder="Nhập lại password"><span id="re_error"></span><br></td>
            </tr>

            <tr>
                <td> Số điện thoại (*)</td>
                <td><input type="number" id="phone" name="dienthoai" placeholder="Số điện thoại"><br></td>
            </tr>

           
         </table>
            <tr>
                <td> <input type="submit" id="register" value="Đăng ký" name="dangky"></td>
            </tr>
    </form>
</body>
</html>