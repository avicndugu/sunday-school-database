<?php
function getData()
{
    $output = '';
    $con = mysqli_connect("localhost", "root", "", "sunday_school");
    $sql = "SELECT * from students";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>
<td>' . $row["id"] . '</td>
<td>' . $row["name"] . '</td>
<td>' . $row["phone_1"] . '</td>
<td> ' . $row["phone_2"] . '</td>

</tr>
';

    }
    return $output;

}

function getData2()
{
    $output = '';
    $con = mysqli_connect("localhost", "root", "", "sunday_school");
    $sql = "SELECT * from students";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
          <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="card">
                            <img src="user.png">
                            <div class="card-text">
                                <h4>
                                    <b>'. $row["name"] .'</b>
                                </h4>
                                <p>
                                    '. $row["phone_1"] .'
                                </p>
                                <p>
                                   '. $row["phone_2"] .'
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
';

    }
    return $output;
}
