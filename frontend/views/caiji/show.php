<?php 
		use yii\helpers\Html;




 ?>

 <table border="10px">
 	<tr>
 		<td>期号</td>
 		<td>日期</td>
 		<td>号码</td>
 	</tr>
 	<?php foreach($result as $k=>$v){ ?>
 	<tr>
 		<td><?php echo $v['qihao'] ?></td>
 		<td><?php echo $v['add_time'] ?></td>
 		<td><?php echo $v['number'] ?></td>
 	</tr>
 	<?php } ?>
 </table>