<?
// This script to open images folder and create thumbnail for every one

require_once("create_thumbnail.php");

$path = "images";
$thumbnail_path = "thumbs";
$black_list = array('.','..','.DS_Store','images');
foreach (new DirectoryIterator($path) as $file_info) {
  $image =  $file_info->getFilename();
  if (!in_array($image, $black_list)) {

    // create the thumbnail
    $result =  createThumbnail("images/".$image,$thumbnail_path."/thumbs_".$image,270,200);

    // check if created or not
    if ($result != 1){
      echo "<br> Failed to create : <a href='images/".$image."' target='_blank'>$image</a>";
    }

  }// if
}// foreach

  Echo "<br> <br> <b><a href='".$thumbnail_path."' target='_blank'>Review the created thumbnails</a></b>"
?>
