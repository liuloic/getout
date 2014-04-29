<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ev_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evId;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_name", type="string", length=45, nullable=false)
     */
    private $evName;

    /**
     * @var string
     *
     * @ORM\Column(name="ev_description", type="string", length=255, nullable=true)
     */
    private $evDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ev_begin_date", type="datetime", nullable=false)
     */
    private $evBeginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ev_end_date", type="datetime", nullable=false)
     */
    private $evEndDate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profile", mappedBy="eventEv")
     */
    private $profilePr;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tag", mappedBy="eventEv")
     */
    private $tagTa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profilePr = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tagTa = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get evId
     *
     * @return integer 
     */
    public function getEvId()
    {
        return $this->evId;
    }

    /**
     * Set evName
     *
     * @param string $evName
     *
     * @return Event
     */
    public function setEvName($evName)
    {
        $this->evName = $evName;

        return $this;
    }

    /**
     * Get evName
     *
     * @return string 
     */
    public function getEvName()
    {
        return $this->evName;
    }

    /**
     * Set evDescription
     *
     * @param string $evDescription
     *
     * @return Event
     */
    public function setEvDescription($evDescription)
    {
        $this->evDescription = $evDescription;

        return $this;
    }

    /**
     * Get evDescription
     *
     * @return string 
     */
    public function getEvDescription()
    {
        return $this->evDescription;
    }

    /**
     * Set evBeginDate
     *
     * @param \DateTime $evBeginDate
     *
     * @return Event
     */
    public function setEvBeginDate($evBeginDate)
    {
        $this->evBeginDate = $evBeginDate;

        return $this;
    }

    /**
     * Get evBeginDate
     *
     * @return \DateTime 
     */
    public function getEvBeginDate()
    {
        return $this->evBeginDate;
    }

    /**
     * Set evEndDate
     *
     * @param \DateTime $evEndDate
     *
     * @return Event
     */
    public function setEvEndDate($evEndDate)
    {
        $this->evEndDate = $evEndDate;

        return $this;
    }

    /**
     * Get evEndDate
     *
     * @return \DateTime 
     */
    public function getEvEndDate()
    {
        return $this->evEndDate;
    }

    /**
     * Add profilePr
     *
     * @param \Acme\UserBundle\Entity\Profile $profilePr
     *
     * @return Event
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
     * Add tagTa
     *
     * @param \Acme\UserBundle\Entity\Tag $tagTa
     *
     * @return Event
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
