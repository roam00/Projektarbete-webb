<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <LINK REL="stylesheet" TYPE="text/css" HREF="./css/style.css">
    <META CHARSET="UTF-8">
    </HEAD>
    <BODY>
        <FORM NAME="bored" METHOD="get" ACTION="http://www.boredapi.com/api/activity/">
            <FIELDSET>
            <LEGEND>Välj akvititetsparametrar:</LEGEND>
            <LABEL FOR="type">Välj aktivitetstyp:</LABEL>
            <SELECT ID="type" NAME="type">
                <OPTION VALUE="">-</OPTION>
                <OPTION VALUE="education">Education</OPTION>
                <OPTION VALUE="recreational">Recreational</OPTION>
                <OPTION VALUE="social">Social</OPTION>
                <OPTION VALUE="diy">DIY</OPTION>
                <OPTION VALUE="charity">Charity</OPTION>
                <OPTION VALUE="cooking">Cooking</OPTION>
                <OPTION VALUE="relaxation">Relaxation</OPTION>
                <OPTION VALUE="music">Music</OPTION>
                <OPTION VALUE="busywork">Busywork</OPTION>
            </SELECT>
            <BR>
            <LABEL FOR="participants">Välj antal personer:</LABEL>
            <SELECT ID="participants" NAME="participants">
                <OPTION VALUE="">-</OPTION>
                <OPTION VALUE="1">1</OPTION>
                <OPTION VALUE="2">2</OPTION>
                <OPTION VALUE="3">3</OPTION>
                <OPTION VALUE="4">4</OPTION>
            </SELECT>
            <BR>
            <LABEL FOR="maxprice">Välj maxkostnad:</LABEL>
            <SELECT ID="maxprice" NAME="maxprice">
                <OPTION VALUE="">-</OPTION>
                <OPTION VALUE="0.1">0.1</OPTION>
                <OPTION VALUE="0.2">0.2</OPTION>
                <OPTION VALUE="0.3">0.3</OPTION>
                <OPTION VALUE="0.4">0.4</OPTION>
                <OPTION VALUE="0.5">0.5</OPTION>
                <OPTION VALUE="0.6">0.6</OPTION>
                <OPTION VALUE="0.7">0.7</OPTION>
                <OPTION VALUE="0.8">0.8</OPTION>
                <OPTION VALUE="0.9">0.9</OPTION>
                <OPTION VALUE="1">1</OPTION>
            </SELECT>
            <BR>
            <LABEL FOR="maxaccessibility">Välj tillgänglighet (lägre värde är mer tillgänglighet)</LABEL>
            <SELECT ID="maxaccessibility" NAME="maxaccessibility">
                <OPTION VALUE="">-</OPTION>
                <OPTION VALUE="0.0">0.0</OPTION>
                <OPTION VALUE="0.1">0.1</OPTION>
                <OPTION VALUE="0.2">0.2</OPTION>
                <OPTION VALUE="0.3">0.3</OPTION>
                <OPTION VALUE="0.4">0.4</OPTION>
                <OPTION VALUE="0.5">0.5</OPTION>
                <OPTION VALUE="0.6">0.6</OPTION>
                <OPTION VALUE="0.7">0.7</OPTION>
                <OPTION VALUE="0.8">0.8</OPTION>
                <OPTION VALUE="0.9">0.9</OPTION>
                <OPTION VALUE="1.0">1.0</OPTION>
            <BR>
            <INPUT TYPE="submit" VALUE="Skicka!">
            </FIELDSET>
        </FORM>            
    </BODY>
</HTML>