<?php 
$title = "Calendar";
if(isset($_SESSION['user'])){
           require_once("Layout/headerforotherpages2.php");
}else{
	 	   require_once("Layout/headerforotherpages.php");
}
require_once("Config/utility.php");
//so luong result moi page 
$current_page = 1;
if(isset($_GET['page'])){
	$current_page = $_GET['page'];
}else{
	$current_page = 1;
}
$result_per_page = 8;


$index = ($current_page-1)*$result_per_page;


 $keyword = "";
  if(isset($_GET['keyword'])){
    $keyword = getGET('keyword');
    $sql ="SELECT COUNT(ID) AS number FROM product  WHERE TITLE LIKE '%$keyword%' OR CATEGORY_ID LIKE '%$keyword%' OR MANUFACTURER LIKE '%$keyword%' OR CATEGORY LIKE '%$keyword%'";
      $result = executeResult($sql, false); 
    $sql = "SELECT * FROM product  WHERE TITLE LIKE '%$keyword%' OR CATEGORY_ID LIKE '%$keyword%' OR MANUFACTURER LIKE '%$keyword%' OR CATEGORY LIKE '%$keyword%' LIMIT $index, $result_per_page";
  }
  else{
  	$sql = "SELECT COUNT(ID) AS number FROM product WHERE CATEGORY LIKE '%Calendar%'";
	$result = executeResult($sql, false);
    $sql = "SELECT * FROM product LIMIT $index,$result_per_page";
  }

  $ProductList = executeResult($sql,false);
  if ($ProductList == false) {
    echo '<h3 style="margin-left: 400px;">Không có kết quả !</h3>';
  }


   if($result !=null && count($result)>0){
        $number = $result[0]['number'];
}

$pages = ceil($number/$result_per_page);
if($current_page>$pages){
	$current_page = $pages;
}
else if($current_page<1){
	$current_page = 1;
}
?>
<div class="intro-container">
			<div class="intro-left" style="background-color: #50666d;">
				<div class="intro-content">
					<div class="intro-title">CALENDARS</div>
					<div class="intro-sub">Turn your desk into an inspiring, well-organised space with Ryana Calendar's high-quality stationery and delightful wall and desk calendars. </div>
				</div>
			</div>
			<div class="intro-right">
				<img src="../Images/Front/Thumbnail/calendar.jpg">
			</div>
		</div>
<?php 
require_once("product_display.php");
?>
<?php 
if(isset($_SESSION['user'])){
           require_once("Layout/loggedft.php");
}else{
	 	  require_once("Layout/footer.php");
}

?>