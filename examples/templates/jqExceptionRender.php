<?php $rendered_grid = $jq_loader->render('jqExceptionRender'); ?>

<script>

<?= $rendered_grid ?>
$grid.filterToolbar();

</script>

<div id="descr_rus">
	Пример ошибки при рендеринге таблицы.<br> 
	В этом случае таблица не отображается вовсе, а вместо неё, пользователь видит сообщение об ошибке.<br><br>
	
	Обратите внимание, что в этом случае необходимо выбрасывать исключение <b>jqGrid_Exception_Render</b>.<br>
	Это единственный стандартный случай, когда используется особое исключение.
</div>