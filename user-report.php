<?php 
  include 'utils.php';
  //Written by Charissa Lucas
  //2018
  $sql = "SELECT username,
  count(item_id) as Listed,
    (SELECT count(item_id) FROM item WHERE regularuser.username = item.seller
    and (NOW()>Item.auction_end)) AS Sold,
    (Select COUNT(bid.item_id)
    FROM bid
    INNER JOIN item
    ON item.item_id = bid.item_id
    WHERE regularuser.username = bid.submitter
    AND NOW()>item.auction_end
    AND item.getit_now_price != 0
    AND bid.bid_time <= item.auction_end
    AND (SELECT MAX(bid.bid_amount) FROM bid HAVING bid.bid_amount >=
    item.min_sale_price))
    AS Purchased,

    (Select count(rating.item_id) FROM item
    INNER JOIN rating
    ON item.item_id = rating.item_id
    WHERE regularuser.username = rating.submitter)
    AS Rated

    FROM regularuser, item
    WHERE regularuser.username = item.seller
    GROUP BY item.seller
    ORDER BY Listed DESC";
    $items = db_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome Icon Library -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
 <link href="gtbaystyle.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Work+Sans"
 rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Work+Sans"
 rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script></script>
</head>
<body>
  <div>
    <ul class="horizontal_ul">
      <!-- Put logo here?-->
      <li class="horizontal_li">Welcome to GTBay</li>
    </ul>
  </div>
  <div>
    <ul class="vertical_ul">
      <li><a href="menu.php">Home Page</a></li>
      <li><a href="list_item.php">List Item</a></li>
      <li><a href="item_search_view.php">Item Search</a></li>
      <li><a href="auction_results.php">Auction Results</a></li>
      <li><a href="categoryreport.php">Category Report</a></li>
      <li><a href="userreport.php">User Report</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  <div class="page_content">
  <div>
    <h2>User Report</h2>
    <table style="width:100%">
    <tr>
     <td>Username</td>
     <td>Listed</td>
     <td>Sold</td>
     <td>Purchased</td>
     <td>Rated</td>
    </tr>
<?php
  $rows=1;
  $cols=1;
  if($row = mysqli_num_rows($items)>0){
    while($row_fpart = mysqli_fetch_assoc($items)){
      $row_fpart['username'];
      $row_fpart['Listed'];
      $row_fpart['Sold'];
      $row_fpart['Purchased'];
      $row_fpart['Rated'];
      $result = join($row_fpart, " ");
      echo "<tr>";
        for($td=1;$td<=$cols;$td++){
          echo "<td>".$row_fpart['username']."</td>";
          echo "<td>".$row_fpart['Listed']."</td>";
          echo "<td>".$row_fpart['Sold']."</td>";
          echo "<td>".$row_fpart['Purchased']."</td>";
          echo "<td>".$row_fpart['Rated']."</td>";
          }
          echo "</tr>";
          }
 }
 #close db connection
 // mysqli_close($conn);
 ?>
  </table>
 </div>
 <div>
    <form action = "menu.php" method = "GET">
      <input type = "submit" value = "Done" />
    </form>
  </div>
  </div>
 </body>
</html>
