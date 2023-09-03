<?php

echo "<h1><center>PHP HW CLASS-5</center></h1>";
echo "<h3>Validate user file using explode methods</h3>";
//Validate user file using explode methods
//accepted types are "csv", "zip"
function ext_check ($folder){
    $folderArray = explode(".",$folder);
    $folder_ext = end($folderArray);
    $accept_folder_type_ext = ["csv", "zip"];
    if (in_array ($folder_ext , $accept_folder_type_ext) == 1){
        echo "You have used the correct Extension <br><br>";
    }
    else{
        echo "please provide your right Extension <br><br>";
    }
};
ext_check("git.png");

//Create a youtube Thumbnail generator 

echo "<h3>Create a youtube Thumbnail generator</h3>";
function create_thumbnail($video_url){
    
    $youtube_api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
    $same_url = explode("?si=",$video_url)[0];
    $main_url = explode("/",$same_url);
    $video_id = end($main_url);
    $image = str_replace("<insert-youtube-video-id-here>",$video_id,$youtube_api);
    echo '<img src = "'.$image.'"<br><br><br><br>';
}
create_thumbnail("https://youtu.be/ZPM7zgAiNjg?si=YQuMZyW8PCUZy9hg");
create_thumbnail("https://youtu.be/jasYgnLgaQg?si=7Tkg9M-H0kjIfCu0");

// using empty 
echo "<h3>Practice</h3>";
$user_name = "";
if (empty($user_name)){
    echo "Please Enter your Name <br><br>";
}
else{
    echo "Welcome $user_name <br><br>";
}
// using isset
echo isset($user_name,);//output bollean
// using implode or join = Array convert to string 
$name_array= ["<br> <br>",
    "My",
    "Name",
    "is",
    "Tabassum <br><br>"
];
$string =implode(" " ,$name_array);
print_r($string);
// using Explode = String convert to Array

$add = "This is my Book";
print_r(explode(" ",$add));
$file = "<br><br> test.zip.jpeg.png.mp3.txt.mp4 <br><br>";
$last_ext = array_reverse(explode(".",$file))[0];

$folder = "read.zip.jpeg.png.mp3.txt.mp4 <br><br>";
$folderArray = explode(".",$folder);
$folder_ext = end($folderArray);
echo $folder_ext;

// youtube Thumbnail generator 
$youtube_api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
$video_url = "https://youtu.be/ZPM7zgAiNjg?si=YQuMZyW8PCUZy9hg";
$same_url = explode("?si=",$video_url)[0];
$main_url = explode("/",$same_url);
$video_id = end($main_url);

$image = str_replace("<insert-youtube-video-id-here>",$video_id,$youtube_api);
// echo '<img src = "'.$image.'" >';

//using Compact
$user = [
    'name' => "Somaya",
    'age' => "20",
    'join' => " 2 year ago"
];
$user_2 = [
    'name' => "Tabassum",
    'age' => "20",
    'join' => " 5 year ago"
];
$store_data = compact("user","user_2");
echo "<pre>";
print_r($store_data);
echo "</pre>";

// using count/sizeof
$user_3 = [
    'name' => "Somaya",
    'age' => "20",
    'join' => " 2 year ago"
];
echo count($user_3);

// using array_diff
$user = [
    'name' => "Somaya",
    'age' => "20",
    'join' => " 2 year ago"
];
$user_2 = [
    'name' => "Somaya",
    'age' => "24",
    'join' => " 2 year ago"
];
echo "<pre>";
print_r (array_diff($user,$user_2));
echo "</pre>";
