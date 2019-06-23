<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h1 style="margin-top:-30px;">Checkout</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="jumbotron" style="padding-bottom:15px;">
        <h3 style="margin-top:-50px;">Your Cart</h3>
        <hr size="3">
        <div class="table-responsive-lg table-bordered">
            <table class="table">
                <?php 
            if ($this->session->flashdata('successful')) 
            {
                echo '<div class="alert alert-success">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('successful') ;
                echo '</div>';
            }
            if ($this->session->flashdata('errors')) 
            {
                echo '<div class="alert alert-danger">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('errors') ;
                echo '</div>';
            }
        ?>
                <thead class="thead-dark">
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        foreach ($cart as $row)
                        {
                            ?>
                            <form action="<?php echo base_url(); ?>Cart/order_payment" method="post">
                            <tr>
                                <td hidden=""><?php echo $row->cartID; ?></td>
                                <td><?php echo $row->item; ?><input type="text" class="form-control" id="item" name="item" value="<?php echo $row->item; ?>" hidden></td>
                                <td><?php echo $row->price; ?><input type="text" class="form-control" id="price" name="price" value="<?php echo $row->price; ?>" hidden></td>
                                <td><?php echo $row->quantity; ?><input type="text" class="form-control" id="qty" name="qty" value="<?php echo $row->quantity; ?>" hidden></td>
                                <td class="total"><?php echo $row->price*$row->quantity; ?><input type="text" class="form-control" id="total" name="total" value="<?php echo $row->price*$row->quantity; ?>" hidden></td>
                                <td><a href="">Remove</a></td>
                            </tr>
                            <?php
                            
                        }


                        ?>
                        
                </tbody>
                <tfoot>
                    <tr>
                        <td >Grand Total</td>
                        <td id="grandtotal"><input name="grandtotal" type="text" id="grandtotal_text" style="border: none;"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="jumbotron" style="padding-bottom:15px;">
        <h3 style="margin-top:-50px;">Table location/Room location</h3>
        <hr size="3">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="sel1">Enter Room</label>
                    <input type="text" class="form-control" id="room" name="room" placeholder="Enter your room number here">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="sel1">Enter Table</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="table" name="table" placeholder="Enter your table number here">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="jumbotron" style="padding-bottom:15px;">
        <h3 style="margin-top:-50px;">Payment Option</h3>
        <hr size="3">
        <div class="row">
            <div class="col-lg-3">
                <div class="well well-lg" style="background-color:white;">Large Well</div>
            </div>
            <div class="col-lg-3">
                <div class="well well-lg" style="background-color:white;">Large Well</div>
            </div>
            <div class="col-lg-3">
                <div class="well well-lg" style="background-color:white;">Large Well</div>
            </div>
            <div class="col-lg-3">
                <div class="well well-lg" style="background-color:white;">Large Well</div>
            </div>
        </div><br>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Cash on Delivery
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Add to credit
            </label>
        </div><br>
        <input type="submit" class="btn btn-success btn-block" value="Make Payment">

    </div>
</form>
</div>

<script>
    var sum = 0;
$('.total').each(function() {
    sum += parseFloat($(this).text());
});
document.getElementById("grandtotal_text").value = sum;
//$('#grandtotal').html(sum)


</script>
