<?php
foreach ($displayData as $key => $item) {
    if ($item->callstatus == true) {
?>
<?php
        include('./html-blocks/done-card.html');
?>
<?php
    }
}
?>