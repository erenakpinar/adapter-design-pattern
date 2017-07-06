<?php

require  "classes/ICardReaderAdapter.php";
$reader = new \XBankCardReaderAdapter();
$reader->ReadCardData();
echo "<br>";
$reader = new \YBankCardReaderAdapter();
$reader->ReadCardData();