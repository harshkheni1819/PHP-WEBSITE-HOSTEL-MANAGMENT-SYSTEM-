<?php
include('hhh.php');
include('connect.php');
?>

<!-- View -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User Query</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Messages </th>
                            <th> Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $q = mysqli_query($con, "SELECT * FROM user_query");
                        while ($row = mysqli_fetch_array($q)) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['message'] . "</td>";
                            echo "<td>" . ($row['status'] == 0 ? "<span style='color:red;'>Pending</span>" : "<span style='color:green;'>Answered</span>") . "</td>";
                            echo "<td>
                                <a href='query_answer.php?uqid=" . $row['uqid'] . "' class='btn btn-success'>Answer</a>
                            </td>";
                            $i++;
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('fff.php'); ?>
