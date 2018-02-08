<?php
class Addiction
{
    public function substance($drug, $fate)
    {
        echo "You injected {$drug} and {$fate}";
        echo "<br>RIP";
    }
}

class DrugUser
{
    private $addiction;

    public function __construct(Addiction $addiction)
    {
        $this->addiction = $addiction;
    }

    public function applyDrug($drug, $fate)
    {
        $this->addiction->substance($drug, $fate);
    }
}


$syringe  = new DrugUser(new Addiction);
$outcome  = $syringe->applyDrug('heroin', 'overdosed');
