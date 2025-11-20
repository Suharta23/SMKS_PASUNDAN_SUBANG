<?php
function komponenTabel($judul = "", $thead = [], $rows = []) {

    // Judul (opsional)
    $judul_html = "";
    if (!empty($judul)) {
        $judul_html = "<h4 class='teg mb-3'>$judul</h4>";
    }

    // Bangun table head
    $th_html = "";
    foreach ($thead as $th) {
        $th_html .= "<th>$th</th>";
    }

    // Bangun table rows
    $rows_html = "";
    foreach ($rows as $row) {
        $rows_html .= "<tr>";
        foreach ($row as $col) {
            $rows_html .= "<td>$col</td>";
        }
        $rows_html .= "</tr>";
    }

    // Return HTML final
    return "
    $judul_html
    <div class='table-responsive'>
        <table class='table table-bordered table-striped table-hover align-middle'>
            <thead>
                <tr>$th_html</tr>
            </thead>
            <tbody>
                $rows_html
            </tbody>
        </table>
    </div>
    ";
}
?>
