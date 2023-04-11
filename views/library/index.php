<?php

function panigation($number, $page, $url)
{   
    echo $page==1?'<a class=" bx bx-chevrons-left pagination-prev no" href="' . $url . '&p=' . ($page - 1) . '"></a>'
                  :'<a class="bx bx-chevrons-left pagination-prev " href="' . $url . '&p=' . ($page - 1) . '"></a>';
   
    $isFist = $isLast = false;
    $avaliblepage = [1, $page - 1, $page, $page + 1, $number];
    for ($i = 1; $i <= $number; $i++) {
        if (!in_array($i, $avaliblepage)) {
            if (!$isFist && $page > 3) {
                echo ' <a class="pagination-item" href="#">...</a>';
                $isFist = true;
            }
            if (!$isLast && $i > ($page + 1)) {
                echo ' <a class="pagination-item" href="#">...</a>';
                $isLast = true;
            }
            continue;
        }
        if ($i == $page) {
            echo ' <a class="pagination-item active" href="#">' . $i . '</a>';
        } else {
            echo ' <a class="pagination-item" href="' . $url . '&p=' . $i . '">' . $i . '</a>';
        }
    }
    echo $page==$number?'<a class="bx bx-chevrons-right pagination-next no" href="' . $url . '&p=' . ($page + 1) . '"></a>'
                        :'<a class="bx bx-chevrons-right pagination-next " href="' . $url . '&p=' . ($page + 1) . '"></a>';
};
