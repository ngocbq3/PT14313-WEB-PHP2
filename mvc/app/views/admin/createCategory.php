<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <?php
                if (isset($data['thongbao'])) {
                    echo $data['thongbao'];
                }
            ?>
        </div>
        <div class="row">
            <label for="">Tên</label>
            <input type="text" name="cate_name">
        </div>
        <div class="row">
            <label for="">Mô tả</label>
            <textarea name="desc" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="row">
            <input type="submit" value="Lưu" name="addcate">
        </div>
    </form>
</body>
</html>