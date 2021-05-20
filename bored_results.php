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
    $result = file_get_contents($finalurl);
    $details = json_decode($result, TRUE);
    echo 'activity: ' . $details['activity'];
    echo '<BR>';
    echo 'type: ' . $details['type'];
    echo '<BR>';
    echo 'participants: ' . $details['participants'];
    echo '<BR>';
    echo 'price: ' . $details['price'];
    echo '<BR>';
    echo 'accessibility: ' . $details['accessibility'];

    ?>
    </BODY>
</HTML>