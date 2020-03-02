<form action="">
    <select name="cate_id" id="">
        <?php foreach($data['cate'] as $c) : ?>
            <option value="<?=$c->id?>"><?=$c->cate_name?></option>
        <?php endforeach ?>
    </select>
</form>