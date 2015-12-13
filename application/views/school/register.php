

<h3>
    School Registration
</h3>
<hr/>


<?php if ($this->session->flashdata('message')) { ?>
    <div class="alert <?php echo $this->session->flashdata('alert_class'); ?>" role="alert">
        <span class="glyphicon <?php echo $this->session->flashdata('glyphicon_class'); ?>"></span>
        <strong><?php echo $this->session->flashdata('message'); ?></strong>
    </div>
<?php } ?>


<div ng-controller="RateController">
    <form class="form-horizontal" data-parsley-validate role="form" action="<?php echo $form_submit_url; ?>" method="POST">

        <div class="form-group">
            <label class="col-sm-2 control-label">Registration number</label>
            <div class="col-sm-4">


                <input type="text"  
                       autofocus="autofocus"
                      
                       class="form-control" 
                       required  
                       name="reg_number"
                       placeholder=""/> 

            </div>

        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">School Name</label>
            <div class="col-sm-4">


                <input type="text"  
                       autofocus="autofocus"
                      
                       class="form-control" 
                       required  
                       name="school_name"
                       placeholder=""/> 

            </div>

        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">City</label>
            <div class="col-sm-4">


                <input type="text"  
                       autofocus="autofocus"
                      
                       class="form-control" 
                       required  
                       name="city"
                       placeholder=""/> 

            </div>

        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">District</label>
            <div class="col-sm-4">


                <input type="text"  
                       autofocus="autofocus"
                      
                       class="form-control" 
                       required  
                       name="district"
                       placeholder=""/> 

            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">State</label>
            <div class="col-sm-4">


                <input type="text"  
                       autofocus="autofocus"
                       
                       class="form-control" 
                       required  
                       name="state"
                       placeholder=""/> 

            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Contact number</label>
            <div class="col-sm-4">


                <input type="text"  
                       autofocus="autofocus"
                       
                       class="form-control" 
                       required  
                       name="contact_number"
                       placeholder=""/> 

            </div>

        </div>







        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input accesskey="s" type="submit" class="btn btn-success" value="Register"/>
                <input type="reset" class="btn" value="Clear"/>
                <a accesskey="c" href="<?php echo $back_url; ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
</div> <!--controller div-->

<script>
    var app = angular.module('myapp', []);
    app.controller('RateController', ['$scope', '$http', function ($scope, $http) {


        }]);
</script>