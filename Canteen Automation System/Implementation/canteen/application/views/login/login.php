<div class="container"><br>
    <?php 
            
            if ($this->session->flashdata('login_fail')) 
            {
                echo '<div class="alert alert-danger">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('login_fail') ;
                echo '</div>';
            }
            if ($this->session->flashdata('errors')) 
            {
                echo '<div class="alert alert-danger">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('errorsssss') ;
                echo '</div>';
            }
        ?>
   
   <div class="jumbotron">
        <h2 style="text-align: center;;">LOGIN</h2><br>
       <div class="row">
        <div class="col-md-12">
            <form class="form-group" method="post" action="<?php echo base_url();?>Login/check">
                <label for="email">Enter email or Institute ID</label>
                <input type="text" class="form-control" id="email" name="email">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"><br>
                <input type="submit" value="Login" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
   </div>
    
</div>

