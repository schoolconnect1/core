<div class="row well">
    <form action="<?php echo $form_submit_url; ?>" method="post">

        City : <input type="text" name="city"/>
        Search Term : <input type="text" name="search_term" />
        <input type="submit" value="Search"/>
    </form>
</div>
<div class="row">
    <?php if(isset($search_results) && sizeof($search_results)>0 ){ ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>School ID</td>
                <td>Name</td>
                <td>City</td>
                <td>District</td>
                <td>State</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($search_results as $s){ ?>
            <tr>
                <td><?php echo $s->reg_number; ?></td>
                <td><?php echo $s->school_name; ?></td>
                <td><?php echo $s->city; ?></td>
                <td><?php echo $s->district; ?></td>
                <td><?php echo $s->state; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{ ?>
    <p>No Results</p>
    <a href="<?php echo $back_url; ?>">Back</a>
    <?php } ?>
</div>