
<html>
<head>
<title>Click-to-Call</title>
</head>
<body>
<?php
$strHost = "127.0.0.1";
$strUser = "admin";
$strSecret = "amp111";
$strChannel = $_REQUEST['exten'];
$strContext = "from-internal";
$strWaitTime = "30";
$strPriority = "1";
$strMaxRetry = "2";
$numberSplit = preg_split('#(?<=.)(?=.)#s', $_REQUEST["txtphonenumber"]);
for ($i=0; $i<=count($numberSplit); $i++) {
if (preg_match("/[0-9]/", $numberSplit[$i])) { $strExten .= $numberSplit[$i]; }
}
$strCallerId = "Click2Call <$strExten>";
$length = strlen($strExten);
if (($length == 7 | $length == 10 | $length == 11) && is_numeric($strExten))
{
$oSocket = fsockopen($strHost, 5038, $errnum, $errdesc) or die("Connection to host failed");
fputs($oSocket, "Action: login\r\n");
fputs($oSocket, "Events: off\r\n");
fputs($oSocket, "Username: $strUser\r\n");
fputs($oSocket, "Secret: $strSecret\r\n\r\n");
fputs($oSocket, "Action: originate\r\n");
fputs($oSocket, "Channel: $strChannel\r\n");
fputs($oSocket, "WaitTime: $strWaitTime\r\n");
fputs($oSocket, "CallerId: $strCallerId\r\n");
fputs($oSocket, "Exten: $strExten\r\n");
fputs($oSocket, "Context: $strContext\r\n");
fputs($oSocket, "Priority: $strPriority\r\n\r\n");
fputs($oSocket, "Action: Logoff\r\n\r\n");
sleep(3);
fclose($oSocket);
?>
<table width="50%">
<tr><td>
Click2Call is now calling you.
<br><br>
Please answer to complete your call to <? echo $strExten ?>.
</td></tr>
</table>
<?php
}
else
{
?>
<table width="50%">
<tr><td>
<?php echo $strExten ?> is not a valid phone number.
<br><br>
Please highlight a 7 (555-5555), 10 (555-555-5555), or 11 (1-555-555-5555) digit phone number and press 'CTRL + D' again.
</td></tr>
</table>
<?php
}
?>
</body>
</html>