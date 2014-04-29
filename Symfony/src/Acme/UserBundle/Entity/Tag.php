<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag", uniqueConstraints={@ORM\UniqueConstraint(name="ta_id_UNIQUE", columns={"ta_id"}), @ORM\UniqueConstraint(name="ta_name_UNIQUE", columns={"ta_name"})})
 * @ORM\Entity
 */
class Tag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ta_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taId;

    /**
     * @var string
     *
     * @ORM\Column(name="ta_name", type="string", length=45, nullable=true)
     */
    private $taName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="tagTa")
     */
    private $profilePr;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Event", inversedBy="tagTa")
     * @ORM\JoinTable(name="tag_has_event",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tag_ta_id", referencedColumnName="ta_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="event_ev_id", referencedColumnName="ev_id")
     *   }
     * )
     */
    private $eventEv;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profilePr = new \Doctrine\Common\Collections\ArrayCollection();
        $this->eventEv = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get taId
     *
     * @return integer 
     */
    public function getTaId()
    {
        return $this->taId;
    }

    /**
     * Set taName
     *
     * @param string $taName
     *
     * @return Tag
     */
    public function setTaName($taName)
    {
        $this->taName = $taName;

        return $this;
    }

    /**
     * Get taName
     *
     * @return string 
     */
    public function getTaName()
    {
        return $this->taName;
    }

    /**
     * Add profilePr
     *
     * @param \Acme\UserBundle\Entity\Profile $profilePr
     *
     * @return Tag
     */
    public function addProfilePr(\Acme\UserBundle\Entity\Profile $profilePr)
    {
        $this->profilePr[] = $profilePr;

        return $this;
    }

    /**
     * Remove profilePr
     *
     * @param \Acme\UserBundle\Entity\Profile $profilePr
     */
    public function removeProfilePr(\Acme\UserBundle\Entity\Profile $profilePr)
    {
        $this->profilePr->removeElement($profilePr);
    }

    /**
     * Get profilePr
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfilePr()
    {
        return $this->profilePr;
    }

    /**
     * Add eventEv
     *
     * @param \Acme\UserBundle\Entity\Event $eventEv
     *
     * @return Tag
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
}
