<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enrollment
 *
 * @ORM\Table(name="enrollment", indexes={@ORM\Index(name="idCourse", columns={"idCourse"}), @ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Enrollment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Course
     *
     * @ORM\ManyToOne(targetEntity="Course")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCourse", referencedColumnName="id")
     * })
     */
    private $idcourse;


}
