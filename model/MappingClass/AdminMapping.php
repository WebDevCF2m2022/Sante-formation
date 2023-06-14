<?php
namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class AdminMapping
{

    private int $idAdmin;
    private string  $login;
    private  string $pwd;


    /**
     * @return int
     */
    public function getIdAdmin(): int
    {
        return $this->idAdmin;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param int $idAdmin
     */
    public function setIdAdmin(int $idAdmin): void
    {
        $this->idAdmin = $idAdmin;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @param string $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = $pwd;
    }
}