<?php

namespace Alura\Leilao\Model;

class Leilao
{
    /** @var Lance[] */
    private array  $lances;
    private string $descricao;
    private bool   $finalizado;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lances = [];
        $this->finalizado = false;
    }

    public function recebeLance(Lance $lance)
    {
        if (!empty($this->lances) && $this->ehDoUltimoUsuario($lance)) {
            throw new \DomainException('Usuário não pode propor 2 lances consecutivos');
        }

        $totalLancesUsuario = $this->qntLancesPorUsuario($lance->getUsuario());
        if ($totalLancesUsuario >= 5) {
            throw new \DomainException('Usuário não pode propor mais de 5 lances por leilão');
        }

        $this->lances[] = $lance;
    }

    public function getLances(): array
    {
        return $this->lances;
    }

    public function finaliza()
    {
        $this->finalizado = true;
    }

    public function estaFinalizado(): bool
    {
        return $this->finalizado;
    }

    private function ehDoUltimoUsuario(Lance $lance): bool
    {
        $ultimoLance = $this->lances[array_key_last($this->lances)];
        return $lance->getUsuario() === $ultimoLance->getUsuario();
    }

    private function qntLancesPorUsuario(Usuario $usuario): int
    {
        return array_reduce(
            $this->lances,
            function (int $totalLances, Lance $lance) use ($usuario) {
                if ($usuario == $lance->getUsuario()) {
                    return ++$totalLances;
                }

                return $totalLances;
            },
            0
        );
    }
}