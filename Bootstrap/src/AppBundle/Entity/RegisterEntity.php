<?php
/**
 * Created by PhpStorm.
 * User: Karol
 * Date: 2015-11-19
 * Time: 11:31
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="uzytkownicy")
 */


class RegisterEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idUzytkownika;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $email;
    /**
     * @ORM\Column(type="string", length=45)
     */

    protected $haslo;
    /**
     * @ORM\Column(type="string", length=45)
     */

    protected $imie;
    /**
     * @ORM\Column(type="string", length=45)
     */

    protected $nazwisko;
    /**
     * @ORM\Column(type="integer")
     */

    protected $telefon;

    /**
     * Get idUzytkownika
     *
     * @return integer
     */
    public function getIdUzytkownika()
    {
        return $this->idUzytkownika;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return RegisterEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     *
     * @return RegisterEntity
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return RegisterEntity
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return RegisterEntity
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Set telefon
     *
     * @param integer $telefon
     *
     * @return RegisterEntity
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }
}
