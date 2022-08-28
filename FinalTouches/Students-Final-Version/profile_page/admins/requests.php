
<table class="edit-table">
    <thead>
        <tr>
            <th class="edit-table-th" scope="col">#</th>
            <th class="edit-table-th" scope="col">Name</th>
            <th class="edit-table-th" scope="col">Phone</th>
            <th class="edit-table-th" scope="col">Enroll Date</th>
            <th class="edit-table-th" scope="col">Birth Date</th>
            <th class="edit-table-th" scope="col">Gender</th>
            <th class="edit-table-th" scope="col">Address</th>
            <th class="edit-table-th" scope="col">Email</th>
            <th class="edit-table-th" scope="col">Password</th>
            <th class="edit-table-th" scope="col">Approve</th>
            <th class="edit-table-th" scope="col">Refuse</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "web_skills") or die("Connection failed: " . mysqli_connect_error());
            $sql = "SELECT * FROM students";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['is_active']) {
                    continue;
                }
                echo '<tr class="edit-table-tr">';
                echo '<th scope="row">' . $row['id'] . '</th>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['enroll_date'] . '</td>';
                echo '<td>' . $row['birth_date'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['password'] . '</td>';
                echo '<td><a href="accept.php?id=' . $row['id'] . '"><img src="../images/checked.png" alt="edit" class="icon-tools"></a></td>';
                echo '<td><a href="delete.php?id=' . $row['id'] . '"><img src="../images/cancel.png" alt="delete" class="icon-tools"></a></td>';
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
