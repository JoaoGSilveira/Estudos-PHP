<?php

class Avaliacao {
    private DateTime $dataAvaliacao;
    private float $nota;

    public function __construct(string $dataAvaliacao, float $nota) {
        $this->dataAvaliacao = DateTime::createFromFormat('d/m/Y', $dataAvaliacao);
        if ($this->dataAvaliacao === false) {
            throw new InvalidArgumentException('Formado de data inválido. Formato Válido: dd/mm/yyyy');
        }
        $this->nota = $nota;
    }

    public function getDataAvaliacao()
    {
        return $this->dataAvaliacao;
    }

    public function setDataAvaliacao($dataAvaliacao)
    {
        $this->dataAvaliacao = $dataAvaliacao;

        return $this;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }
}

?>
