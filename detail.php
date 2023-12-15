<!-- detail.php -->

<?php
// Include necessary files and initialize session/connection if required

// Get the image URL from the query parameter
$imageUrl = $_GET['image'];

// Your HTML and CSS for displaying the image in detail
?>

<!DOCTYPE html>
<html lang="en">
<!-- Include head, topbar, navbar, and other common elements if needed -->
<body>
   <div class="container mt-5">
      <img src="<?php echo $imageUrl; ?>" class="img-fluid" />
   </div>
   <!-- Include footer if needed -->
</body>
</html>
