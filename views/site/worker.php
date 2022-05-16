<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Position</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($worker as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->FULLNAME ?></td>
            <td><?= $item->SEX ?></td>
            <td><?= $item->BIRTHDAY ?></td>
            <td><?= $item->PROFESSION ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>

</table>
