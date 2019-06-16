<div class="jumbotron">
    <h1>Softwarica College Canteen</h1>
    <p>Opening Hours:</p>
    <p>Additional Service Charge:</p>
    <p>Additional Vat:</p>
</div>


<div class="container-fluid" id="searchbar">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="jumbotron">
                <input type="text" class="form-control" id="txtSearch" placeholder="Search Something">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="jumbotron">
        <h3>My favourites</h3><br>
        My favourite items <br>
        You do not have any favourite items selected yet.
    </div>
</div>




<div class="container-fluid">
    <div class="jumbotron">
        <button class="collapsible">Non Veg Items</button>
        <div class="content">
            <ul>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
            </ul>
        </div>
        <button class="collapsible">Veg Items</button>
        <div class="content">
            <ul>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
            </ul>
        </div>
        <button class="collapsible">Beverages</button>
        <div class="content">
            <ul>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
                <li>Menu <b>150 <i class="fas fa-plus-circle" data-toggle="modal" data-target="#addCartModal"></i></b></li>
            </ul>
        </div>
    </div>
</div>


<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>




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

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Add to Cart</button>
            </div>

        </div>
    </div>
</div>