<?php
    $hoa = "fdimages/flowers";
    $bong = "fdimages/soccerballs";
    $xe = "fdimages/cars";
    $fdval = "";
    $dpval ="";

    if(isset($_POST['folder'])){
        $fdval = $_POST["folder"];
    }
    if(isset($_POST['displaysize'])){
        $dpval = $_POST["displaysize"];
    }
    if($fdval == "hoa"){
        $all_files = glob($hoa . "/*.jpg");
        if($dpval == "200x200"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:200px;height:200px;"/>'."<br /><br />";
          }
        }elseif($dpval == "400x400"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:400px;height:400px;"/>'."<br /><br />";
          }
        }elseif($dpval == "800x800"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:800px;height:800px;"/>'."<br /><br />";
          }
        }
    }elseif($fdval == "bongda"){
        $all_files = glob($bong . "/*.jpg");
        if($dpval == "200x200"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:200px;height:200px;"/>'."<br /><br />";
          }
        }elseif($dpval == "400x400"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:400px;height:400px;"/>'."<br /><br />";
          }
        }elseif($dpval == "800x800"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:800px;height:800px;"/>'."<br /><br />";
          }
        }
    }elseif($fdval == "xe"){
        $all_files = glob($xe . "/*.jpg");
        if($dpval == "200x200"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:200px;height:200px;"/>'."<br /><br />";
          }
        }elseif($dpval == "400x400"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:400px;height:400px;"/>'."<br /><br />";
          }
        }elseif($dpval == "800x800"){
            for ($i=0; $i<count($all_files); $i++)
          {
            $image_name = $all_files[$i];
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" style="width:800px;height:800px;"/>'."<br /><br />";
          }
        }
    }
?>