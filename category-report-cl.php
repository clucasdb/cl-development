<?php
  include 'utils.php';
  //Written by Charissa Lucas

  $sql = "SELECT category_name, count(*) as Total_Items,
  MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and
    Item.category='Art'";
    $items = db_query($sql);

 $sql2 = "SELECT category_name, count(*) as Total_Items,
 MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and
    Item.category='Books'";
    $items2 = db_query($sql2);

 $sql3 = "SELECT category_name, count(*) as Total_Items,
 MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and
    Item.category='Electronics'";
    $items3 = db_query($sql3);

 $sql4 = "SELECT category_name, count(*) as Total_Items,
 MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and Item.category='Home
    & Garden'";
    $items4 = db_query($sql4);

 $sql5 = "SELECT category_name, count(*) as Total_Items,
 MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and
    Item.category='Other'";
    $items5 = db_query($sql5);

 $sql6 = "SELECT category_name, count(*) as Total_Items,
 MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and
    Item.category='Sporting Goods'";
    $items6 = db_query($sql6);

 $sql7 = "SELECT category_name, count(*) as Total_Items,
 MIN(getit_now_price), MAX(getit_now_price), AVG(getit_now_price)
    FROM Item,Category
    WHERE Item.category=Category.category_name and
    Item.category='Toys'";
    $items7 = db_query($sql7);
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
  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scri
  pt>
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
 <h2>Category Report</h2>
 <table style="width: 100%">
 <tr>
 <td>Category</td>
 <td>Total Items</td>
 <td>Min Price</td>
 <td>Max Price</td>
 <td>Average Price</td>
 </tr>
 <?php
 $rows=1;
 $cols=1;
 if($row = mysqli_num_rows($items)>0){
 while($row_fpart = mysqli_fetch_assoc($items)){
  $row_fpart['category_name'];
  $row_fpart['Total_Items'];
  $row_fpart['MIN(getit_now_price)'];
  $row_fpart['MAX(getit_now_price)'];
  $row_fpart['AVG(getit_now_price)'];
  $result = join($row_fpart, " ");
  echo "<tr>";
    for($td=1;$td<=$cols;$td++){
     echo "<td>".$row_fpart['category_name']."</td>";
     echo "<td>".$row_fpart['Total_Items']."</td>";
     echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
     echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
     echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
 }
  echo "</tr>";
  }
 }
 if($row = mysqli_num_rows($items2)>0){
 while($row_fpart = mysqli_fetch_assoc($items2)){
    $row_fpart['category_name'];
    $row_fpart['Total_Items'];
    $row_fpart['MIN(getit_now_price)'];
    $row_fpart['MAX(getit_now_price)'];
    $row_fpart['AVG(getit_now_price)'];
    $result = join($row_fpart, " ");
    echo "<tr>";
      for($td=1;$td<=$cols;$td++){
        echo "<td>".$row_fpart['category_name']."</td>";
        echo "<td>".$row_fpart['Total_Items']."</td>";
        echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
        echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
        echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
      }
    echo "</tr>";
    }
 }
  if($row = mysqli_num_rows($items3)>0){
  while($row_fpart = mysqli_fetch_assoc($items3)){
    $row_fpart['category_name'];
    $row_fpart['Total_Items'];
    $row_fpart['MIN(getit_now_price)'];
    $row_fpart['MAX(getit_now_price)'];
    $row_fpart['AVG(getit_now_price)'];
    $result = join($row_fpart, " ");
    echo "<tr>";
      for($td=1;$td<=$cols;$td++){
        echo "<td>".$row_fpart['category_name']."</td>";
          echo "<td>".$row_fpart['Total_Items']."</td>";
          echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
          echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
          echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
        }
      echo "</tr>";
      }
 }

 if($row = mysqli_num_rows($items4)>0){
 while($row_fpart = mysqli_fetch_assoc($items4)){
    $row_fpart['category_name'];
    $row_fpart['Total_Items'];
    $row_fpart['MIN(getit_now_price)'];
    $row_fpart['MAX(getit_now_price)'];
    $row_fpart['AVG(getit_now_price)'];
    $result = join($row_fpart, " ");
    echo "<tr>";
      for($td=1;$td<=$cols;$td++){
        echo "<td>".$row_fpart['category_name']."</td>";
        echo "<td>".$row_fpart['Total_Items']."</td>";
        echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
        echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
        echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
      }
    echo "</tr>";
    }
 }
 if($row = mysqli_num_rows($items5)>0){
 while($row_fpart = mysqli_fetch_assoc($items5)){
   $row_fpart['category_name'];
   $row_fpart['Total_Items'];
   $row_fpart['MIN(getit_now_price)'];
   $row_fpart['MAX(getit_now_price)'];
   $row_fpart['AVG(getit_now_price)'];
   $result = join($row_fpart, " ");
 echo "<tr>";
    for($td=1;$td<=$cols;$td++){
      echo "<td>".$row_fpart['category_name']."</td>";
      echo "<td>".$row_fpart['Total_Items']."</td>";
      echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
      echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
      echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
    }
  echo "</tr>";
  }
 }
 if($row = mysqli_num_rows($items6)>0){
 while($row_fpart = mysqli_fetch_assoc($items6)){
    $row_fpart['category_name'];
    $row_fpart['Total_Items'];
    $row_fpart['MIN(getit_now_price)'];
    $row_fpart['MAX(getit_now_price)'];
    $row_fpart['AVG(getit_now_price)'];
    $result = join($row_fpart, " ");
 echo "<tr>";
  for($td=1;$td<=$cols;$td++){
    echo "<td>".$row_fpart['category_name']."</td>";
    echo "<td>".$row_fpart['Total_Items']."</td>";
    echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
    echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
    echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
    }
  echo "</tr>";
  }
 }
 if($row = mysqli_num_rows($items7)>0){
 while($row_fpart = mysqli_fetch_assoc($items7)){
    $row_fpart['category_name'];
    $row_fpart['Total_Items'];
    $row_fpart['MIN(getit_now_price)'];
    $row_fpart['MAX(getit_now_price)'];
    $row_fpart['AVG(getit_now_price)'];
    $result = join($row_fpart, " ");
  echo "<tr>";
    for($td=1;$td<=$cols;$td++){
      echo "<td>".$row_fpart['category_name']."</td>";
      echo "<td>".$row_fpart['Total_Items']."</td>";
      echo "<td>".$row_fpart['MIN(getit_now_price)']."</td>";
      echo "<td>".$row_fpart['MAX(getit_now_price)']."</td>";
      echo "<td>".$row_fpart['AVG(getit_now_price)']."</td>";
      }
    echo "</tr>";
    }
  }
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
