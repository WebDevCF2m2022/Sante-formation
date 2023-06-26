<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class NavbarMapping extends AbstractsMapping
{

    protected int $idNavbar ;
    protected string $navbarAsbl ;
    protected string $navbarAction ;
    protected string $navbarFormation ;
    protected string $navbarAgenda ;
    protected string $navbarContact ;
    protected string $navbarDon ;
    protected string $navbarLangue ;


    /**getter
     * @return int
     */
    public function getIdNavbar(): int
    {
        return $this->idNavbar;
    }

    /**getter
     * @return string
     */
    public function getNavbarAsbl(): string
    {
        return $this->navbarAsbl;
    }

    /**getter
     * @return string
     */
    public function getNavbarAction(): string
    {
        return $this->navbarAction;
    }

    /**getter
     * @return string
     */
    public function getNavbarFormation(): string
    {
        return $this->navbarFormation;
    }

    /**getter
     * @return string
     */
    public function getNavbarAgenda(): string
    {
        return $this->navbarAgenda;
    }

    /**getter
     * @return string
     */
    public function getNavbarContact(): string
    {
        return $this->navbarContact;
    }

    /**getter
     * @return string
     */
    public function getNavbarDon(): string
    {
        return $this->navbarDon;
    }

    /**getter
     * @return string
     */
    public function getNavbarLangue(): string
    {
        return $this->navbarLangue;
    }


    /**setter
     * @param int $idNavbar
     */
    public function setIdNavbar(int $idNavbar): void
    {
        $this->idNavbar = $idNavbar;
    }

    /**setter
     * @param string $navbarAsbl
     */
    public function setNavbarAsbl(string $navbarAsbl): void
    {
        $this->navbarAsbl = $navbarAsbl;
    }

    /**setter
     * @param string $navbarAction
     */
    public function setNavbarAction(string $navbarAction): void
    {
        $this->navbarAction = $navbarAction;
    }


    /**setter
     * @param string $navbarFormation
     */
    public function setNavbarFormation(string $navbarFormation): void
    {
        $this->navbarFormation = $navbarFormation;
    }

    /**setter
     * @param string $navbarAgenda
     */
    public function setNavbarAgenda(string $navbarAgenda): void
    {
        $this->navbarAgenda = $navbarAgenda;
    }

    /**setter
     * @param string $navbarContact
     */
    public function setNavbarContact(string $navbarContact): void
    {
        $this->navbarContact = $navbarContact;
    }

    /**setter
     * @param string $navbarDon
     */
    public function setNavbarDon(string $navbarDon): void
    {
        $this->navbarDon = $navbarDon;
    }

    /**setter
     * @param string $navbarLangue
     */
    public function setNavbarLangue(string $navbarLangue): void
    {
        $this->navbarLangue = $navbarLangue;
    }


}