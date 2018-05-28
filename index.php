<?
// This script to open images folder and create thumbnail for every one

require_once("create_thumbnail.php");

$path = "images";
$black_list = array('.','..','.DS_Store','images');
foreach (new DirectoryIterator($path) as $file_info) {
  $image =  $file_info->getFilename();
  if (!in_array($image, $black_list)) {
    createThumbnail("images/".$image,"images/thumbs_".$image,270,200);
  }// if
}// foreach

  Echo "<a href='".$path."' target='_blank'>Thumbnails Created</a>"
?>
