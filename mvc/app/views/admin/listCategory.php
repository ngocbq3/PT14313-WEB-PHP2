<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cate = $data['cate'];
    ?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Category Name</th>
            <th>Description</th>
            <th>Created date</th>
            <th>Action</th>
        </tr>
        <?php foreach ($cate as $c) : ?>
            <tr>
                <td><?=$c->id?></td>
                <td><?=$c->cate_name?></td>
                <td><?=$c->desc?></td>
                <td><?=$c->created_at?></td>
                <td>
                    <a href="<?=BASE_URL?>category/update/<?=$c->id?>">Sửa</a> 
                    <a href="<?=BASE_URL?>category/delete/<?=$c->id?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>