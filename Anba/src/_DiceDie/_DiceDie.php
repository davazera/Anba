 <?php
/**
 * A class to hold a Die
 *
 */
 
Class _DiceDie
{
    private $value;
    private $faces;
    
    public function __construct($faces=6)
    {
        $this->value = 0;
        $this->faces = $faces;
    }
    
    public function Roll()
    {
        $this->value = rand(1, $this->faces);
        return $this->value;
    }
    
    public function GetDiceValue()
    {
        return $this->value;
    }
} 