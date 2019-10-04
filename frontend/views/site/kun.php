<?php $this->title = "";?>
<div class="panel panel-default" style="padding: 10px">
<h4 style="text-align: center; color: rgba(65,114,246,0.77)"><b>Чек № <?=Yii::$app->request->post('dilerid')?> , stol -  <?=Yii::$app->request->post('stol')?></b></h4>
<hr>
<?php $i=0;?>
<table class="table table-bordered">
	<tr><td>Nomi</td><td>Soni</td><td>Narxi</td><td>Summasi</td><tr>
<?php foreach ($s as $so){
?>
	<tr>
	<td><?= $so['tovar_nom']?></td>
	<td><?= $so['kol']?></td>
	<td><?= $so['sotish']?></td>
	<td><?= $so['summa_all']?></td>
	</tr>

<?php }?>
</table>
<hr>
    <?php
    if($s) {
        echo "<p style='color: whitesmoke;padding: 5px;width: 200px; background-color: red'>Jami sum: " .Yii::$app->request->post('summa_ch') . "</p>";
    }?>
</div>
<div class="panel panel-default" style="padding: 10px">

<table class="table table-bordered">
	<tr><td>Naqd</td><td>Plastik</td><td>Bank</td><td>Jami</td><tr>
	<tr>
	<td><?= $so['tovar_nom']?></td>
	<td><?= $so['kol']?></td>
	<td><?= $so['sotish']?></td>
	<td><?= $so['summa_all']?></td>
	</tr>

</table>

</div>	
