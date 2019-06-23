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
                        <th>Add to Cart</th>
                    </tr>
                </thead>
                <tbody>

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
                        <td><input type="submit" class="btn btn-success btn-block" value="Add to Cart" name="btnCart"></td>
                    </tr>
                    <?php }
                    
                    ?>





                </tbody>
            </table>
        </div>
    </div>
</div>
<!--Menu table ends-->





