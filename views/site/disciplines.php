<table class="table">
    <thead>
    <tr>
        <th>Номер дисциплины</th>
        <th>Название дисциплины</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($disciplines as $item): ?>
        <tr>
            <td><?= $item->ID_DISCIPLINE + 1 ?></td>
            <td><?= $item->NAME ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>