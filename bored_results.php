<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <LINK REL="stylesheet" TYPE="text/css" HREF="./css/style.css">
    <META CHARSET="UTF-8">
    </HEAD>
    <BODY>
    <?PHP

    $finalurl = "http://www.boredapi.com/api/activity/";

    if ($_GET['type']) {
        $finalurl = $finalurl . '?type=' . $_GET['type'];
    }
    if ($_GET['participants']) {
        $finalurl = $finalurl . '?participants=' . $_GET['participants'];
    }
    if ($_GET['maxprice']) {
        $finalurl = $finalurl . '?maxprice=' . $_GET['maxprice'];
    }
    if ($_GET['maxaccessibility']) {
        $finalurl = $finalurl . '?maxaccessibility=' . $_GET['maxaccessibility'];
    }
    $result = file_get_contents($finalurl);
    var_dump($result);
    echo '<BR>';
    echo $result['activity'];
    ?>
    </BODY>
</HTML>