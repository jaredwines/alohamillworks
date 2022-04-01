<?php
$files = scandir("img/gallery");
$imageType = "";
$count = 1;
foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        // Give Image source -- src='folder-name/$file'
        if (str_contains($file, "stairs")) {
            $imageType = "Stairs";
        } elseif (str_contains($file, "rails")) {
            $imageType = "Rails";
        } elseif (str_contains($file, "gates")) {
            $imageType = "Gates";
        } elseif (str_contains($file, "custom")) {
            $imageType = "Custom";
        } else {
            $imageType = "Item";
        }

        echo "<div class=\"col-lg-4 design $imageType\">
                    <a href=\"img/gallery/$file\" class=\"item-wrap fancybox\" data-lightbox=\"image-$count\" data-title=\"\">
                        <div class=\"portfolio-box\">
                            <div class=\"portfolio-box-img\">
                                    <img src=\"img/gallery/$file\" class=\"img-fluid\" alt=\"member-image\">
                            </div>
                            <div class=\"portfolio-box-detail\">
                                <p>$imageType</p>
                                <h4>Aloha Millworks</h4>
                            </div>
                        </div>
                    </a>
                </div>";
        $count++;
    }
}