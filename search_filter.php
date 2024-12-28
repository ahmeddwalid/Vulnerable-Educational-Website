<p align="center">

<?php
if(isset($_GET['Search'])){
    $search = htmlspecialchars($_GET['searchinput']);
    echo "The search result for: ".$search;
    echo "<br> <br> <i> Search Result not found </i>";
}
?>