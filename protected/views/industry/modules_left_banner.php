<?php
$criteria = new CDbCriteria;
$criteria->order = "seq asc";
$modules = Module::model()->findAll($criteria);
?>
<div class="module_table">
    <table class="col-md-12 col-sm-12 col-xs-12 table-bordered table-striped table-condensed cf">
        <tbody>
            <?php foreach($modules as $key=>$module) :?>
            <tr style="cursor:pointer;" onclick="$('#myModal<?php echo str_replace(" ","",$module->name);?>').modal('show')">
                <td class="heading_text">M<?php echo $key+1;?></td>
                <td><?php echo $module->name;?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>