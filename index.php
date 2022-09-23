<?php

class Transformer
{
    private $state = 'car';

    public function transform($state)
    {
        $this->state = $state;

    }


    public function fire()
    {
        if ($this->state == 'car'){

            echo "dratatatata\n";

        } elseif ($this->state == 'airplane'){

            echo "puvpuvpuv\n";

        } elseif ($this->state == 'robot'){

            echo "tratatata\n";
        }

    }
    public function muve()
    {
        if ($this->state == 'car'){

            echo "dyrdyrdyr\n";

        } elseif ($this->state == 'airplane'){

            echo "gggggggg\n";

        } elseif ($this->state == 'robot'){

            echo "dgdgdgdgdd\n";
        }

    }

}

$bumblbee = new Transformer();
$bumblbee->fire();
$bumblbee->muve();
$bumblbee->transform('robot');
$bumblbee->fire();
$bumblbee->muve();

