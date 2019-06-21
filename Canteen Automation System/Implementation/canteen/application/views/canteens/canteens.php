<div class="jumbotron">
    <h1>Softwarica College Canteen</h1>
    <p>Opening Hours:</p>
    <p>Additional Service Charge:</p>
    <p>Additional Vat:</p>
</div>

<!--favourites section starts-->
<div class="container-fluid">
    <div class="jumbotron">
        <h3>My favourites</h3><br>
        My favourite items <br>
        You do not have any favourite items selected yet.
    </div>
</div>
<!--favourites section ends-->


<!--Menu table starts-->
<div class="container-fluid">
    <div class="jumbotron">
        <div class="table-responsive-lg table-bordered">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <!--<tr>
                        <td>Momo</td>
                        <td>80</td>
                        <td>
                            <div class="form-group">
                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity">
                        </div>
                        </td>
                    </tr>-->

                    <?php
                    foreach ($items as $row)
                    
                    {?>
                    <tr>
                        <td><?php echo $row->item; ?></td>
                        <td><?php echo $row->price; ?></td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity">
                        </td>
                    </tr>
                    <?php }
                    
                    ?>





                </tbody>
            </table>
        </div>
        <div class="form-group">
            <label for="instructions">Any Instructions</label>
            <input type="text" class="form-control" id="instructions" name="instructions">
        </div>
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <input type="submit" class="btn btn-success btn-block" value="Order"> <br>
            </div>
        </div>
    </div>
</div>
<!--Menu table ends-->





<div class="modal" id="addCartModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Menu</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Rs. 150.00 <br>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Add to favourites
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment">Add Instructions</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Add to Cart</button>
            </div>

        </div>
    </div>
</div>