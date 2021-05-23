<?php
declare(strict_types=1);
namespace Practice;
use Practice\Computer;

class ComputerCreate {

    /**
     * @param string computerType
     *
     * @return Computer
     */
    public function createComputer(string $computerType): array
    {
        return call_user_func([$this, 'create'.ucfirst($computerType).'Computers']);
    }

    /**
     * @return Computer
     */
    public function createAComputers(): array
    {
        $coms[] = new Computer('富士通', 'ESPRIMO', 'ノートパソコン', 4, 16, false, 2);
        $coms[] = new Computer('DELL', 'XPS', 'デスクトップパソコン', 5, 32, true, 4);
        $coms[] = new Computer('Apple', 'Mac', 'ノートパソコン', 4, 16, false, 2);

        return $coms;
    }

    /**
     * @return Computer
     */
    public function createBComputers(): array
    {
        $coms[] = new Computer('富士通', 'ESPRIMO', 'デスクトップパソコン', 4, 16, true, 3);
        $coms[] = new Computer('DELL', 'XPS', 'ノートパソコン', 4, 16, false, 1);
        $coms[] = new Computer('Apple', 'Mac', 'デスクトップパソコン', 6, 64, true, 3);

        return $coms;
    }

    /**
     * @return Computer
     */
    public function createCComputers(): array
    {
        $coms[] = new Computer('富士通', 'ESPRIMO', 'ノートパソコン', 4, 8, false, 2);
        $coms[] = new Computer('DELL', 'XPS', 'デスクトップパソコン', 8, 64, true, 4);
        $coms[] = new Computer('Apple', 'Mac', 'デスクトップパソコン', 8, 32, false, 4);

        return $coms;
    }
}