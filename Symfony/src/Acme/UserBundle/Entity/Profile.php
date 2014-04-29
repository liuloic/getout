<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile", uniqueConstraints={@ORM\UniqueConstraint(name="pr_id_UNIQUE", columns={"pr_id"})}, indexes={@ORM\Index(name="us_id", columns={"us_id"})})
 * @ORM\Entity
 */
class Profile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prId;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_name", type="string", length=30, nullable=false)
     */
    private $prName;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_first_name", type="string", length=30, nullable=false)
     */
    private $prFirstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_birthdate", type="date", nullable=false)
     */
    private $prBirthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_adress", type="string", length=255, nullable=true)
     */
    private $prAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="pr_country", type="string", length=45, nullable=true)
     */
    private $prCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="pr_phone", type="integer", nullable=true)
     */
    private $prPhone;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="us_id", referencedColumnName="id")
     * })
     */
    private $us;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Event", inversedBy="profilePr")
     * @ORM\JoinTable(name="profile_has_event",
     *   joinColumns={
     *     @ORM\JoinColumn(name="profile_pr_id", referencedColumnName="pr_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="event_ev_id", referencedColumnName="ev_id")
     *   }
     * )
     */
    private $eventEv;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="profilePr")
     * @ORM\JoinTable(name="profile_has_tag",
     *   joinColumns={
     *     @ORM\JoinColumn(name="profile_pr_id", referencedColumnName="pr_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tag_ta_id", referencedColumnName="ta_id")
     *   }
     * )
     */
    private $tagTa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventEv = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tagTa = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Get prId
     *
     * @return integer 
     */
    public function getPrId()
    {
        return $this->prId;
    }

    /**
     * Set prName
     *
     * @param string $prName
     *
     * @return Profile
     */
    public function setPrName($prName)
    {
        $this->prName = $prName;

        return $this;
    }

    /**
     * Get prName
     *
     * @return string 
     */
    public function getPrName()
    {
        return $this->prName;
    }

    /**
     * Set prFirstName
     *
     * @param string $prFirstName
     *
     * @return Profile
     */
    public function setPrFirstName($prFirstName)
    {
        $this->prFirstName = $prFirstName;

        return $this;
    }

    /**
     * Get prFirstName
     *
     * @return string 
     */
    public function getPrFirstName()
    {
        return $this->prFirstName;
    }

    /**
     * Set prBirthdate
     *
     * @param \DateTime $prBirthdate
     *
     * @return Profile
     */
    public function setPrBirthdate($prBirthdate)
    {
        $this->prBirthdate = $prBirthdate;

        return $this;
    }

    /**
     * Get prBirthdate
     *
     * @return \DateTime 
     */
    public function getPrBirthdate()
    {
        return $this->prBirthdate;
    }

    /**
     * Set prAdress
     *
     * @param string $prAdress
     *
     * @return Profile
     */
    public function setPrAdress($prAdress)
    {
        $this->prAdress = $prAdress;

        return $this;
    }

    /**
     * Get prAdress
     *
     * @return string 
     */
    public function getPrAdress()
    {
        return $this->prAdress;
    }

    /**
     * Set prCountry
     *
     * @param string $prCountry
     *
     * @return Profile
     */
    public function setPrCountry($prCountry)
    {
        $this->prCountry = $prCountry;

        return $this;
    }

    /**
     * Get prCountry
     *
     * @return string 
     */
    public function getPrCountry()
    {
        return $this->prCountry;
    }

    /**
     * Set prPhone
     *
     * @param integer $prPhone
     *
     * @return Profile
     */
    public function setPrPhone($prPhone)
    {
        $this->prPhone = $prPhone;

        return $this;
    }

    /**
     * Get prPhone
     *
     * @return integer 
     */
    public function getPrPhone()
    {
        return $this->prPhone;
    }

    /**
     * Set us
     *
     * @param \Acme\UserBundle\Entity\User $us
     *
     * @return Profile
     */
    public function setUs(\Acme\UserBundle\Entity\User $us = null)
    {
        $this->us = $us;

        return $this;
    }

    /**
     * Get us
     *
     * @return \Acme\UserBundle\Entity\User 
     */
    public function getUs()
    {
        return $this->us;
    }

    /**
     * Add eventEv
     *
     * @param \Acme\UserBundle\Entity\Event $eventEv
     *
     * @return Profile
     */
    public function addEventEv(\Acme\UserBundle\Entity\Event $eventEv)
    {
        $this->eventEv[] = $eventEv;

        return $this;
    }

    /**
     * Remove eventEv
     *
     * @param \Acme\UserBundle\Entity\Event $eventEv
     */
    public function removeEventEv(\Acme\UserBundle\Entity\Event $eventEv)
    {
        $this->eventEv->removeElement($eventEv);
    }

    /**
     * Get eventEv
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventEv()
    {
        return $this->eventEv;
    }

    /**
     * Add tagTa
     *
     * @param \Acme\UserBundle\Entity\Tag $tagTa
     *
     * @return Profile
     */
    public function addTagTum(\Acme\UserBundle\Entity\Tag $tagTa)
    {
        $this->tagTa[] = $tagTa;

        return $this;
    }

    /**
     * Remove tagTa
     *
     * @param \Acme\UserBundle\Entity\Tag $tagTa
     */
    public function removeTagTum(\Acme\UserBundle\Entity\Tag $tagTa)
    {
        $this->tagTa->removeElement($tagTa);
    }

    /**
     * Get tagTa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTagTa()
    {
        return $this->tagTa;
    }
}
