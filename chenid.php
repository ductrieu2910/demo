<?php
/* Cố gắng kết nối máy chủ MySQL. Giả sử bạn đang chạy MySQL
Máy chủ có cài đặt mặc định (người dùng 'root' không có mật khẩu) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Kiểm tra kết nối
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}
 
// Cố gắng thực hiện câu lệnh INSERT
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
if(mysqli_query($link, $sql)){
    // Lấy ID đã chèn cuối cùng
    $last_id = mysqli_insert_id($link);
    echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
} else{
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
 
// Đóng kết nối
mysqli_close($link);
?>