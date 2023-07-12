<?php
namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class AdminMapping extends AbstractsMapping
{

    protected int $idAdmin;
    protected string  $login;
    protected  string $pwd;


    /**getter
     * @return int id of root crud
     */
    public function getIdAdmin(): int
    {
        return $this->idAdmin;
    }

    /**getter
     * @return string login of root crud
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**getter
     * @return string pwd of root crud
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**setter
     * @param int $idAdmin
     */
    public function setIdAdmin(int $idAdmin): void
    {
        $this->idAdmin = $idAdmin;
    }

    /**setter
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**setter
     * @param string $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = $pwd;
    }
}