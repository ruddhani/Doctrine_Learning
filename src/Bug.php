<?php

// namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="BugRepository")
 * @ORM\Table(name="bugs")
 */
class Bug
{
    /**
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $created;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $status;

    /**
     * @ORM\Column(type="integer", length="2")
     * @var integer
     */
    private $severity;

    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $reportedBy;

    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get reportedBy
     *
     * @return User
     */
    public function getReportedBy()
    {
        return $this->reportedBy;
    }

    /**
     * Set reportedBy
     *
     * @param User $reportedBy
     *
     * @return User
     */
    public function setReportedBy(User $reportedBy = null)
    {
        $this->reportedBy = $reportedBy;
        return $this;
    }
}