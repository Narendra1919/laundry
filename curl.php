<?php
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

$apiUrl = "https://api.pexels.com/v1/search?page=$currentPage&per_page=30&query=flowers";
$apiKey = "T65840apF56JhcVKmeStwXE6teWD5bmXQZDRKG6s7cC7BZsqtkyBVcVn";

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: $apiKey"]);

// Execute cURL session and fetch the response
$response = curl_exec($ch);

echo $response;

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

$data = json_decode($response, true);

?>
<?php include 'helper/session.php' ?>
<?php include 'helper/conn.php' ?>
<!DOCTYPE html>
<html lang="en">

 <!-- head Start -->
 <?php include 'view/common/head.php' ?>

<body>
    <!-- Topbar Start -->
    <?php include 'view/common/topbar.php' ?>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <?php include 'view/common/navbar.php' ?>
<section class="">
<div class="container mt-5">
        <div class="row">
            <?php
            if (isset($data["photos"]) && is_array($data["photos"])) {
             
                foreach ($data["photos"] as $photo) {
                    $imageUrl = $photo["src"]["medium"];
                    $photographer = $photo["photographer"];
            ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <a href="detail.php?image=<?php echo urlencode($photo["src"]["large"]); ?>&des=<?php echo urlencode($photographer); ?>" target="blank"> 
               <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                  <img src="<?php echo $imageUrl; ?>" class="w-100"/>
                  <p><?php echo $photographer; ?></p>
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
               </div>
            </a>
         </div>
            <?php       
                   }
                }
            else {
                     echo "No photos found.";
                 }
            ?>
        </div>
        <div class="text-center">
                <a href="?page=<?php echo $currentPage - 1; ?>" class="btn btn-primary">Previous Page</a>
                <a href="?page=<?php echo $currentPage + 1; ?>" class="btn btn-primary">Next Page</a>
        </div>
    </div>
  </section>
  <?php include 'view/common/footer.php' ?>
    <!-- footer end -->
</body>

</html>
