<?php
class TransporatationMethod{
    public $Type;
    Public $TransportationMethodName;
    function __Construct(){
        
    }
}
class boardingCard{
    public $ID;
    public $Destination;
    public $transportationMethod = new TransporatationMethod();
    
    public $SeatNumber;
    public $TransportationNumber;
    public $Source;
    function __construct($trasMethod,$Type){
        $this->transportationMethod->Type = $Type;
        $this->transportationMethod->TransportationMethodName = $transMethod;
    }
    
}
class CardsSet{
    public $Boardingcards = array() ;
    function __construct(array() $boardingcarding)
    {
        $i = 0;
        foreach($boardingcarding as $boardingcard)
        {
            
            $this->Boardingcards[$i] = $boardingcard;
            $i++;
        }
        
    }

}
class Journey{

    public $PassengerName;
    Public $SourceCard;
    public $FinalDestination;
    public $Usedboardingcards = array();
    private function FindSource($listofcards,$Srce){
        foreach($listofcards as $boardingCard)
        {
            if($boardingCard->Source == $Srce)
            {
                return $boardingCard;
            }
        }
        
    }
    private function FindSource($listofcards,$Srce){
        foreach($listofcards as $boardingCard)
        {
            if($boardingCard->Destination == $Srce)
            {
                return $boardingCard;
            }
        }
        
    }
    function FindJourney(array() $listofCards,$Source,$Dest){
        $this->SourceCard = FindSource($listofCards,$Source);
        $this->FinalDestination = FindFinal($listofCards,$Dest);
        
        do{
            $Destina = $this->SourceCard->Destination;
            Print 'Take $this->SourceCard->Source on Seat $this->SourceCard->Seat by $this->SourceCard->transportationMethod->Type :: $this-.SourceCard->TransportationMethod->TransportationMethodName To $this->SourceCard->Destination';
            $this->SourceCard = FindSource($listofCards,$Destina);
            
        
        }while($Destina <> $this->FinalDestination->Destination)
        
    }    
    

}
class UnitTest extends PHPUnit_Framework_TestCase {
 
    function testCorrectSourceAndDestination($Src,$dest) {
        $Journey1 = new Journey();
        //.to do the unit test to confirm the correct path
    }
 
}

?>
