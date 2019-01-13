<?php


?>
<div id="container">
    <h1>Наиболее затратные операции за квартал </h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Оперция</th>
            <th scope="col">Дата</th>
            <th scope="col">Финансовый квартал</th>
            <th scope="col">Направление движение средств</th>
            <th scope="col">Сумма</th>

            <th scope="col">Документ</th>
        </tr>
        </thead>
        <tbody>
		<?php /** @var \frontend\modules\reports\entities\ActionEntity $categoryItem */
		foreach($inPeriodWorst as $key => $periodItem):?>
            <tr>
                <th scope="row">1</th>
                <td><?= $periodItem['operation']['name'] ?> </td>
                <td><?= $periodItem['created_at'] ?></td>
                <td><?= $periodItem['period'] ?></td>
                <td><?= ($periodItem['operation']['isIncome']) ? 'Дебит': 'Кредит' ?></td>
                <td><?= $periodItem['amount'] ?></td>
                <td><?= $periodItem['document']['name'] ?></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>

    <h1>Худшие показатели за всю деятельность, в разрезе конкретных операций</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Оперция</th>
            <th scope="col">Дата</th>
            <th scope="col">Финансовый квартал</th>
            <th scope="col">Направление движение средств</th>
            <th scope="col">Сумма</th>

            <th scope="col">Документ</th>
        </tr>
        </thead>
        <tbody>
		<?php /** @var \frontend\modules\reports\entities\ActionEntity $categoryItem */
		foreach($inCategoryWorst as $key => $categoryItem):?>
            <tr>
                <th scope="row">1</th>
                <td><?= $categoryItem['operation']['name'] ?> </td>
                <td><?= $categoryItem['created_at'] ?></td>
                <td><?= $categoryItem['period'] ?></td>
                <td><?= ($categoryItem['operation']['isIncome']) ? 'Дебит': 'Кредит' ?></td>
                <td><?= $categoryItem['amount'] ?></td>
                <td><?= $categoryItem['document']['name'] ?></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>


</div>


