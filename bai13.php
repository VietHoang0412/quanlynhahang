
<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    {
        $mang = "";
        $socanthay = "";
        $sothay = "";
        $mangcu = "";
        $mangmoi = "";
        if(isset($_POST["mang"]) && isset($_POST["socanthay"]) && isset($_POST["sothay"])) 
        {
            $mang = $_POST["mang"];
            $socanthay = $_POST["socanthay"];
            $sothay = $_POST["sothay"];
            $b = explode(",",$mang); //chuỗi sang mảng
            $mangcu = implode(" ",$b); //mảng sang chuỗi
            for ($i = 0 ; $i < count($b) ; $i++)
            {
                if ($socanthay == $b[$i])
                {
                    $b[$i] = $sothay;
                }
            }
            $mangmoi = implode(", ",$b);
        }
    }
    ?>
    <h1>Thay thế</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Nhập các phần tử</td>
                <td><input type="text" name="mang" value="<?php echo $mang ?>" /></td>
            </tr>
            <tr>
                <td>Giá trị cần thay</td>
                <td><input type="text" name="socanthay" value="<?php echo $socanthay ?>" /></td>
            </tr>
            <tr>
                <td>Giá trị thay</td>
                <td><input type="text" name="sothay" value="<?php echo $sothay ?>" /></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button type="submit">Thay thế</button></td>
            </tr>
            <tr>
                <td>Mảng cũ</td>
                <td><input type="text" readonly="readonly" name="mangcu" value="<?php echo $mangcu ?>" /></td>
            </tr>
            <tr>
                <td>Mảng sau khi thay</td>
                <td><input type="text" readonly="readonly" name="mangmoi" value="<?php echo $mangmoi ?>" /></td>
            </tr>
        </table>
    </form>
</body>

</html>