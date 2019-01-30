<?php
$this->breadcrumbs=array(
	'Customer Orders'=>array('customerOrder/admin/status/'.$model->status),
	'Details',
);

?>

<h1>Order Details</h1>

<table class="table">
    <thead>
    <tr>
        <?php
        $new = new Products();

        foreach($model as $key=>$mod){?>
            <th><?php echo $new->getAttributeLabel($key);?></th>

        <?php }?>
        <th>
            User Email
        </th>
        <th>
            User Mobile Number
        </th>
    </tr>
    </thead>
    <tr>
        <?php foreach($model as $key=>$mod){?>
        <td>
            <?php
                switch ($key){
                    case "status":
                            if($mod == 2){
                                echo "Order Successfull";
                            } else if($mod == 3){
                                echo "Order Failed";
                            }
                        break;
                    case "payment_gateway":
                        if($mod == 1){
                            echo "Paytm";
                        } else if($mod == 2){
                            echo "Payu";
                        }
                        break;
                    case "user_id":
                        echo $model->user->full_name."(".$mod.")";
                        break;
                    default:
                        echo $mod;
                        break;
                }
            ?>
        </td>
        <?php }?>
        <td>
            <?php echo $model->user->email;?>
        </td>
        <td>
            <?php echo $model->user->mobile_number;?>
        </td>
    </tr>
</table>
    <br />
    <h1>Order Items</h1>
    <table class="table">
        <thead>
            <tr>
                <th> Product Name </th>
                <th> Product Price </th>
            </tr>

        </thead>

            <?php foreach($model->carts as $item){?>
             <tr>
                <td>
                    <?php echo $item->product->title;?>
                </td>
                <td>
                    <?php echo $item->product->price;?>
                </td>
            </tr>
            <?php }?>

    </table>