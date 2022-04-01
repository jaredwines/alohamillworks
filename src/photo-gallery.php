<?php
$files = scandir("asset/img/gallery/stairs");
$imageType = "";
$imageName = "";
$count = 1;
foreach ($files as $file) {
    if ($file !== "." && $file !== ".." &&  $file !== ".DS_Store") {
        if (str_contains($file, "wood")) {
            $imageType = "wood";
            $imageName = "Wood";
        } elseif (str_contains($file, "metal")) {
            $imageType = "metal";
            $imageName = "Metal";
        } elseif (str_contains($file, "glass")) {
            $imageType = "glass";
            $imageName = "Glass";
        } elseif (str_contains($file, "wire")) {
            $imageType = "wire";
            $imageName = "Wire";
        } else {
            $imageType = "other";
            $imageName = "Other";
        }

        echo "<div class=\"col-lg-4 design $imageType\">
                    <a href=\"asset/img/gallery/stairs/$file\" class=\"item-wrap fancybox\" data-lightbox=\"image-$count\" data-title=\"$imageName $count\">
                        <div class=\"portfolio-box\">
                            <div class=\"portfolio-box-img\">
                                    <img src=\"asset/img/gallery/stairs/$file\" class=\"img-fluid\" alt=\"member-image\">
                            </div>
                            <div class=\"portfolio-box-detail\">
                                <p>$imageName $count</p>
                                <h4>Aloha Millworks</h4>
                            </div>
                        </div>
                    </a>
                </div>";
        $count++;
    }
}