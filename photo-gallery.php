<?php
$files = scandir("assets/img/gallery");
$imageType = "";
$count = 1;
foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        // Give Image source -- src='folder-name/$file'
        if (str_contains($file, "stairs")) {
            $imageType = "stairs";
        }
        elseif (str_contains($file, "rails")) {
            $imageType = "rails";
        }
        elseif (str_contains($file, "gates")) {
            $imageType = "gates";
        }
        elseif (str_contains($file, "custom")) {
            $imageType = "custom";
        }
        else{
            $imageType = "item";
        }

        echo "<div class=\"$imageType web col-sm-6 col-md-4 col-lg-4 mb-4\">
            <a href=#\"img$count\" class=\"item-wrap fancybox\">
              <img class=\"img-fluid\" src=\"assets/img/gallery/$file\">
            </a>
          </div>
          
          <a href=\"#\" class=\"lightbox\" id=\"img$count\">
            <span style=\"background-image: url(\"assets/img/gallery/$file\")\"></span>
        </a>
          
          ";
        $count++;
    }
}