<div class="container">
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
    <br>
    <h2 style="text-align: center;">Create new account</h2><br>
    <div class="row">
        
        <div class="col-md-6">

            <form class="form-group" method="post" action="<?php echo base_url(); ?>Registration/register">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <label for="sel1">Choose College</label>
                <select class="form-control" id="selectCollege" name="selectCollege">
                    
                    <?php
                    foreach($college as $row)
                    {
                        ?>
                        <option value="<?php echo $row->CollegeID; ?>"><?php echo $row->CollegeName; ?></option>
                        <?php
                    }
                 ?>

                </select>

        </div>
        <div class="col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
            <label for="selectCollege">Choose Role</label>
            <select class="form-control" id="selectRole" name="selectRole">
                 
                 <?php
                    foreach($roles as $row)
                    {
                        ?>
                        <option value="<?php echo $row->RoleID; ?>"><?php echo $row->Role; ?></option>
                        <?php
                    }
                 ?>
                 
            </select>
        </div>
        <div class="col-md-12">
            <label for="insID">Institute ID <sup>*Contact your institute for the ID</sup></label>
            <input type="Number" class="form-control" id="insID" name="insID" onkeypress="return isNumberKey(event)">
        </div>
        <div class="col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-md-6">
            <label for="confPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confPassword" name="confPassword">
        </div>
        <div class="col-md-12">
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="Register"> <br>
        </div>
    </div>
    </form>
</div>