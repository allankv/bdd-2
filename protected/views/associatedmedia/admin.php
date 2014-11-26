<h2>Managing associatedmedia</h2>

<div class="actionBar">
[<?php echo CHtml::link('associatedmedia List',array('list')); ?>]
[<?php echo CHtml::link('New associatedmedia',array('create')); ?>]
</div>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idassociatedmedia'); ?></th>
    <th><?php echo $sort->link('idrecordlevelelements'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->idassociatedmedia,array('show','id'=>$model->idassociatedmedia)); ?></td>
    <td><?php echo CHtml::encode($model->idrecordlevelelements); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->idassociatedmedia)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->idassociatedmedia),
      	  'confirm'=>"Are you sure to delete #{$model->idassociatedmedia}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>