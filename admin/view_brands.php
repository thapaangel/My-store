<?php
include('../includes/connect.php');

$select_query = "SELECT * FROM brands";
$result = mysqli_query($con, $select_query);
?>

<h2 class="text-center">View Brands</h2>

<?php if(mysqli_num_rows($result) > 0){ ?>
<table class="table table-bordered table-striped">
    <thead class="table-info">
        <tr>
            <th>ID</th>
            <th>Brand Title</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['brand_id']; ?></td>
                <td><?php echo $row['brand_title']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php } else { ?>
    <p class="text-center text-danger">No brands found in the database.</p>
<?php } ?>