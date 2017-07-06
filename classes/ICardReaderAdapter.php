<?php

interface ICardReaderAdapter
{
    public function ReadCardData();
}

class XBankPOSReader
{
    public function ReadCard()
    {
        return "X bank POS cihazı çalışıyor.";
    }
}

class XBankCardReaderAdapter implements ICardReaderAdapter
{
    public function ReadCardData()
    {
       $bank = new XBankPOSReader();
       echo $bank->ReadCard();
    }
}

class YBankPOSReader
{
    public function Read()
    {
        return "Y bank POS cihazı çalışıyor.";
    }
}

class YBankCardReaderAdapter implements ICardReaderAdapter
{
    public function ReadCardData()
    {
        $bank = new YBankPOSReader();
        echo $bank->Read();
    }
}

