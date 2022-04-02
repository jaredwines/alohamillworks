<?php
function photoGalleryImport($srcPath)
{
    $folders = scandir($srcPath);
    foreach ($folders as $folder) {
        if (is_dir("$srcPath/$folder")) {
            $imageType = $folder;
            $imageName = "";
            if (str_contains($folder, "-")) {
                $imageName  = str_replace("-", " ", $folder);
            }
            else{
                $imageName = ucfirst($folder);
            }
            $count = 1;
            $files = scandir("$srcPath/$folder");
            foreach ($files as $file) {
                if ($file !== "." && !str_contains($file, ".thumb.jpg") && $file !== ".." && $file !== ".DS_Store" && !is_dir("$srcPath/$folder/$file")) {


                    echo "<div class=\"col-lg-4 design $imageType\">
                    <a href=\"$srcPath/$folder/$file\" class=\"item-wrap fancybox\" data-lightbox=\"image\" data-title=\"$imageName $count\">
                        <div class=\"portfolio-box\">
                            <div class=\"portfolio-box-img\">
                                    <img src=\"$srcPath/$folder/$file.thumb.jpg\" class=\"img-fluid\" alt=\"member-image\">
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
        }
    }
}

function photoGalleryFilter($srcPath)
{
    $folders = scandir($srcPath);
    echo("<a href=\"#\" data-filter=\"*\" class=\"current waves-effect waves-success\">All</a>");
    foreach ($folders as $folder) {
        if (is_dir("$srcPath/$folder") && $folder !== "." && $folder !== "..") {
            $folderName = ucfirst($folder);
            if (str_contains($folderName, "-")) {
                $folderName = str_replace("-", " ", $folderName);
            }

            echo("<a href=\"#\" data-filter=\".$folder\" class=\"current waves-effect waves-success\">$folderName</a>");
        }
    }
}