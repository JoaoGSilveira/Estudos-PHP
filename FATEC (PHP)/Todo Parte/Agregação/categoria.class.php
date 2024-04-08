<?php

    class Categoria {
        public function __construct(private string $descritivo = ""){}

        public function getDescritivo()
        {
                return $this->descritivo;
        }

        public function setDescritivo($descritivo)
        {
                $this->descritivo = $descritivo;

                return $this;
        }
    }
    
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 7a03b2e631817bb23138916957a93bdc135e4180
