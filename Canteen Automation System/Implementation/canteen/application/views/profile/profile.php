<?php

if ($this->session->flashdata('login_success')) 
            {
                echo '<div class="alert alert-success">';
                //echo '<a href="#" class="close" data-dissmiss="alert" aria-label="close">&times;</a>';
                echo $this->session->flashdata('login_success') ;
                echo '</div>';
            }

?>