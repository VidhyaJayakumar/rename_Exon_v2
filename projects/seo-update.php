<?php 
	//include("dbconnect.php");
	//$domain = 'exincorpprojects.com';
	//$sql = "SELECT * FROM seo WHERE s_domain = '$domain'";
	//$res = mysqli_query($conn,$sql);
	//$row = mysqli_fetch_assoc($res);	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Exincorp Projects - SEO</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>SEO - Keyword / Description and Social Links</h2>
				<?php 
					if(isset($_POST['submit']))
					{
						$title = $_POST['title'];
						$keyword = $_POST['keyword'];
						$desc = $_POST['desc'];
						$author = $_POST['author'];
						$googleanalytics = htmlspecialchars($_POST['googleanalytics']);
						$tagmanager = htmlspecialchars($_POST['tagmanager']);
						$facebook = $_POST['facebook'];
						$twitter = $_POST['twitter'];
						$googleplus = $_POST['googleplus'];
						$youtube = $_POST['youtube'];
						$linkedin = $_POST['linkedin'];
						$flickr = $_POST['flickr'];
						$person = $_POST['person'];
						$date = $_POST['date'];
						$sid = $_POST['sid'];

		/*					echo $title.'<br>';
echo $keyword.'<br>';
echo $desc.'<br>';
echo $author.'<br>';
echo $googleanalytics.'<br>';
echo $script.'<br>';
echo $tagmanager.'<br>';
echo $facebook.'<br>';
echo $twitter.'<br>';
echo $googleplus.'<br>';
echo $youtube.'<br>';
echo $linkedin.'<br>';
echo $flickr.'<br>';
echo $person.'<br>';
echo $date.'<br>';
echo $sid.'<br>'; */
						$usql = "UPDATE seo SET s_title = '".$title."', s_keyword = '".$keyword."', s_description = '".$desc."', s_author = '".$author."', s_googleanalytics = '".$googleanalytics."', s_tagmanager = '".$tagmanager."', s_facebook = '".$facebook."', s_twitter = '".$twitter."', s_googleplus = '".$googleplus."', s_youtube = '".$youtube."', s_linkedin ='".$linkedin."', s_flickr = '".$flickr."', s_addperson = '".$person."', s_date = '".$date."' WHERE s_domain = '$domain'";
						$ures = mysqli_query($conn,$usql);
						if($ures == true)
						{
							echo "<p class='text-success' align='center'> Update Successfully! Please Refresh to check updates!</p>";
						}
						else
						{
							echo "<p class='text-danger' align='center'> Failed Please Try Again!</p>";
						}
					}
				 ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="label">Title</label>
						<textarea class="form-control" name="title"><?php echo $row['s_title']; ?></textarea>
					</div>
					<div class="form-group">
						<label class="label">Keywords</label>
						<textarea class="form-control" name="keyword"><?php echo $row['s_keyword']; ?></textarea>
					</div>
					<div class="form-group">
						<label class="label">Description</label>
						<textarea class="form-control" name="desc"><?php echo $row['s_description']; ?></textarea>
					</div>
						<div class="form-group">
						<label class="label">Author</label>
						<input type="text" class="form-control"  name="author" value="<?php echo $row['s_author']; ?>" placeholder="">
					</div>
					<div class="form-group">
						<label class="label">Google Analytics</label>
						<textarea class="form-control" name="googleanalytics"><?php echo $row['s_googleanalytics']; ?></textarea>
					</div>
					<div class="form-group">
						<label class="label">Tag Manager</label>
						<textarea class="form-control" name="tagmanager"><?php echo $row['s_tagmanager']; ?></textarea>
					</div>
					<div class="form-group">
						<label class="label">Script</label>
						<textarea class="form-control" name="script"><?php echo $row['s_script']; ?></textarea>
					</div>
						<div class="form-group">
						<label class="label">Facebook</label>
						<input type="url"  class="form-control" name="facebook" value="<?php echo $row['s_facebook']; ?>" placeholder="">
					</div>
						<div class="form-group">
						<label class="label">Twitter</label>
						<input type="url" class="form-control"  name="twitter" value="<?php echo $row['s_twitter']; ?>" placeholder="">
					</div>
						<div class="form-group">
						<label class="label">Google Plus</label>
						<input type="url"  class="form-control" name="googleplus" value="<?php echo $row['s_googleplus']; ?>" placeholder="">
					</div>
						<div class="form-group">
						<label class="label">Youtube</label>
						<input type="url"  class="form-control" name="youtube" value="<?php echo $row['s_youtube']; ?>" placeholder="">
					</div>
					<div class="form-group">
						<label class="label">Linked In</label>
						<input type="url" class="form-control"  name="linkedin" value="<?php echo $row['s_linkedin']; ?>" placeholder="">
					</div>
					<div class="form-group">
						<label class="label">Flickr</label>
						<input type="url"  class="form-control" name="flickr" value="<?php echo $row['s_flickr']; ?>" placeholder="">
					</div>
					<div class="form-group">
						<label class="label">Added Person Name</label>
						<input type="text"  class="form-control" name="person" value="<?php echo $row['s_addperson']; ?>" placeholder="">
						<input type="hidden" name="date" value="<?php date_default_timezone_set('Asia/kolkata'); echo date('d-m-Y h:i:s a'); ?>">
						<input type="hidden" name="sid" value="<?php echo $row['s_id']; ?>">
					</div>
					<input type="submit" name="submit" value="Update" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>

</body>
</html>