<?php

if(isset($_POST['submit'])){

  //variables
  $projectAdress = $_POST['projectAdress'];
  $lotDp = $_POST['lotDp'];
  $mailFrom = $_POST['mail'];
  $contactName = $_POST['contactName'];
  $nrDwell = $_POST['nrDwell'];
  $windowOperability = $_POST['window'];
  $downlights = $_POST['downlights'];
  $eWallType1 = $_POST['walltype1'];
  $eWallType2 = $_POST['walltype2'];
  $eWallType3 = $_POST['walltype3'];
  $wallDesc = $_POST['wallDesc'];
  $ewinput1 = $_POST['ewinput1'];
  $ewinput2 = $_POST['ewinput2'];
  $ewinput3 = $_POST['ewinput3'];
  $party1 = $_POST['party1'];
  $party2 = $_POST['party2'];
  $party3 = $_POST['party3'];
  $party1input = $_POST['party1input'];
  $party2input = $_POST['party2input'];
  $party3input = $_POST['party3input'];
  $partyWallDesc = $_POST['partyWallDesc'];
  $groundType = $_POST['groundType'];
  $interType = $_POST['interType'];
  $internalType = $_POST['internalType'];#
  $groundTypeIn = $_POST['groundTypeIn'];
  $interTypeIn = $_POST['interTypeIn'];
  $internalTypeIn = $_POST['internalTypeIn'];
  $roofType = $_POST['roofType'];
  $roofColor = $_POST['roofColor'];
  $glazingDetails = $_POST['glazingDetails'];
  $roofTypeIn = $_POST['roofTypeIn'];
  $roofColorIn = $_POST['roofColorIn'];
  $glazingDetailsIn = $_POST['glazingDetailsIn'];
  




  $mailTo = 'vornicu.denis@gmail.com';
  $headers = 'From: '.$mail;

  //mail content
  $txt = 'You have received an e-mail from '.$contactName.'.\n\n'.$

  //mailTo, subiect
  mail($mailTo, $subject, $txt, $headers);
  header('Location: conf.php?mailsend');

}