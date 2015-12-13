<table 
    class="table table-hover table-striped table-bordered"
    id="mytable">

    <thead>
        <tr>
            <td>Reg No.</td>
            <td>School Name</td>
            <td>City</td>
            <td>District</td>
            <td>State</td>
            <td>Contact</td>
            
            <td class="noprint">Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($schools as $b) { ?>
            <tr>
                <td style="width: 150px;"><?php echo $b->reg_number; ?>
                    <a href="<?php echo site_url('Bill/single/'.$b->id); ?>" class="pull-right">
                        <span class="glyphicon glyphicon-file"></span>
                    </a>
                </td>
                
                <td><?php echo $b->school_name; ?></td>
                <td><?php echo $b->city; ?></td>
                <td><?php echo $b->district; ?></td>
                <td><?php echo $b->state; ?></td>
                <td><?php echo $b->contact_number; ?></td>
                <td class="noprint">
                    <a href="<?php echo site_url('Bill/update/' . $b->id); ?>" class="btn btn-primary btn-xs">Edit</a>
                    <a href="<?php echo site_url('Bill/delete/' . $b->id); ?>" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>