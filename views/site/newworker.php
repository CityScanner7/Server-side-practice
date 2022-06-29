<div class="row">
    <form method="post">
        <div class="col">
            <div class="form-group">
                <label for="exampleInputEmail1">ФИО</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="FULLNAME">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Пол</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="SEX">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Дата рождения</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="BIRTHDAY">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Должность</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PROFESSION">
            </div>
            <?php var_dump($disciplines)?>
            <?php var_dump($units)?>
                <select class="mt-4" name="ID_DIVISION">
                        <?php foreach ($disciplines as $item=>$value) : ?>
                            <option value="<?= $value->ID_DISCIPLINE ?>"><?= $value->NAME ?></option>
                        <?php endforeach;?>
                </select><br>
            <select class="mt-4" name="ID_UNIT">
                    <?php foreach ($units as $item) : ?>
                        <option value="<?= $item->ID_UNIT ?>"><?= $item->NAME ?></option>
                    <?php endforeach;?>
            </select><br>
            <button type="submit" class="btn btn-primary mt-4 ">Submit</button>
        </div>
    </form>
</div>