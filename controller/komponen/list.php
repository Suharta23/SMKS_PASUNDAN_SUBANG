<?php
function komponenList($judul = "Judul", $items = []) {

    // Bangun list item
    $list_items = "";
    foreach ($items as $item) {
        $list_items .= "
        <li><i class='bi bi-check-circle-fill txt-main me-2'></i> $item</li>
        ";
    }

    // Hasil HTML
    return "
    <h4 class='teg mb-3'>$judul</h4>
    <ul class='list-unstyled'>
        $list_items
    </ul>
    ";
}
?>
