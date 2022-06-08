<?php

    require('db_connection.php');

    $output ='';
    $sql = "SELECT * FROM tbl_subcategory ORDER BY sid DESC";
    $result = mysqli_query($mysqli,$sql);
    $output .= '
                  <div class="table-responsive">
                      <table class="table table-bordered">
                          <tr>
                              <th width="10%"> sid </th>
                              <th width="40%"> sub_category </th>
                              <th width="40%"> mid </th>
                              <th width="10%"> delete </th>
                          </tr> ';
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            $output .= '<td>'.$row["sid"].'</td>
                        <td class="sub_category" data-id1="'.$row["sid"].'"
                        contenteditable >'.$row["sub_category"].'</td>
                        <td class="mid" data-id2="'.$row["sid"].'"
                        contenteditable >'.$row["mid"].'</td>
                        <td><button name="btn-delete" id="btn-delete"
                        data-id3="'.$row["sid"].'">x</button></td>
            ';
        }
        $output .= '<tr>
                        <td> </td>
                        <td id="sub_category" contenteditable> </td>
                        <td id="mid" contenteditable> </td>
                        <td><button name="btn-add" id="btn-add" class="btn btn-xs btn-success">+</button></td>
                    </tr>';
    }
    else
    {
        $output .= '<tr>
                        <td colspan="4">Data not Found</td>
                    </tr>';
    }
            $output .= '</table>
                  </div>';
 ?>
