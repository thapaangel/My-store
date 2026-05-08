<?php
include('../includes/connect.php');

$select_query = "SELECT * FROM categories";
$result = mysqli_query($con, $select_query);
?>

<h2 class="text-center">View Categories</h2>

<?php if(mysqli_num_rows($result) > 0){ ?>
<table class="table table-bordered table-striped">
    <thead class="table-info">
        <tr>
            <th>ID</th>
            <th>Category Title</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['category_title']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php } else { ?>
    <p class="text-center text-danger">No categories found in the database.</p>
<?php } ?>