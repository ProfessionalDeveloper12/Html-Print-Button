

<?php
    $flag = (isset($_POST["flag"])) ? $_POST["flag"] : '';
    if($flag == 1) {
        $con = mysqli_connect("localhost", "root", "", "test_db");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM `users`");


        $out = "";
        $out .= '
         <table class="table color-table primary-table">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                  </tr>
              </thead>
              <tbody>';

        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            $out .= "<tr>";
            $out .= "<td>" . $i . "</td>";
            $out .= "<td>" . $row['first_name'] . "</td>";
            $out .= "<td>" . $row['last_name'] . "</td>";
            $out .= "<td>" . $row['email_addr'] . "</td>";
            $out .= "<td>" . $row['address'] . "</td>";
            $out .= "</tr>";

            $i++;
        }
        mysqli_close($con);

        $out .= " </tbody>
         </table>";
        die($out);
    }



