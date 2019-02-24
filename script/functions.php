<?php 
function upload_file($filename) {
$parts = explode('.', $filename);
$filename = array_shift($parts);
$extension = array_pop($parts);
foreach ( (array) $parts as $part)
$filename .= '.' . $part;
 
if(preg_match('/[一-龥]/u', $filename)){
$filename = md5($filename);
}
$filename .= '.' . $extension;
return $filename ;
}
add_filter('sanitize_file_name', 'upload_file', 5,1);
?>
<?php @ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>