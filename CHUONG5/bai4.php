<?php
// Khởi tạo biến lưu giá trị để hiển thị lại trên form
$so1 = isset($_POST['so1']) ? $_POST['so1'] : '';
$so2 = isset($_POST['so2']) ? $_POST['so2'] : '';
$ket_qua = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem dữ liệu nhập vào có phải là số không
    if (is_numeric($so1) && is_numeric($so2)) {
        $num1 = floatval($so1);
        $num2 = floatval($so2);

        if (isset($_POST['cong'])) {
            $ket_qua = $num1 + $num2;
        } elseif (isset($_POST['tru'])) {
            $ket_qua = $num1 - $num2;
        } elseif (isset($_POST['nhan'])) {
            $ket_qua = $num1 * $num2;
        } elseif (isset($_POST['chia'])) {
            if ($num2 != 0) {
                $ket_qua = $num1 / $num2;
            } else {
                $ket_qua = "Lỗi: Không thể chia cho 0";
            }
        } elseif (isset($_POST['mod'])) {
            if ($num2 != 0) {

                $ket_qua = intval($num1) % intval($num2);
            } else {
                $ket_qua = "Lỗi: Không thể chia cho 0";
            }
        }
    } else {
        $ket_qua = "Vui lòng nhập số hợp lệ!";
    }
}
?>
<div class="container">
    <h2>TÍNH TOÁN SỐ HỌC</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="so1">Số thứ 1:</label>
            <input type="text" id="so1" name="so1" value="<?php echo htmlspecialchars($so1); ?>">
        </div>
        
        <div class="form-group">
            <label for="so2">Số thứ 2:</label>
            <input type="text" id="so2" name="so2" value="<?php echo htmlspecialchars($so2); ?>">
        </div>
        
        <div class="form-group">
            <label for="ketqua">Kết quả:</label>
            <input type="text" id="ketqua" name="ketqua" value="<?php echo htmlspecialchars($ket_qua); ?>" readonly style="background-color: #eee;">
        </div>
        
        <div class="button-group">
            <input type="submit" name="cong" value="Cộng">
            <input type="submit" name="tru" value="Trừ">
            <input type="submit" name="nhan" value="Nhân">
            <input type="submit" name="chia" value="Chia">
            <input type="submit" name="mod" value="Mod">
        </div>
    </form>
</div>


