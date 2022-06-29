<table class="table">
    <thead>
    <tr>
        <th>Номер сотрудника</th>
        <th>ФИО</th>
        <th>Пол</th>
        <th>Дата рождения</th>
        <th>Должность</th>
        <th>Номер подразделения</th>
        <th>Номер дисциплины</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($workers as $item): ?>
        <tr>
            <td><?= $item->ID_WORKER + 1 ?></td>
            <td><?= $item->FULLNAME ?></td>
            <td><?= $item->SEX ?></td>
            <td><?= $item->BIRTHDAY ?></td>
            <td><?= $item->PROFESSION ?></td>
            <td><?= $item->ID_UNIT ?></td>
            <td><?= $item->ID_DISCIPLINE ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>
