<!-- detail.php -->

<?php
// Include necessary files and initialize session/connection if required

// Get the image URL from the query parameter
$imageUrl = urldecode($_GET['image']);
$photographer=urldecode($_GET['des']);

// Your HTML and CSS for displaying the image in detail
?>

<!DOCTYPE html>
<html lang="en">
<!-- Include head, topbar, navbar, and other common elements if needed -->
<body>
   <div class="container mt-5">
      <img src="<?php echo $imageUrl; ?>" class="img-fluid" />
      <p><?php echo $photographer; ?></p>
   </div>
   <!-- Include footer if needed -->
</body>
</html>
