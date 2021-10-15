<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table(name="grade", indexes={@ORM\Index(name="idEnrollment", columns={"idEnrollment"}), @ORM\Index(name="idSubject", columns={"idSubject"})})
 * @ORM\Entity
 */
class Grade
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
     * @var float|null
     *
     * @ORM\Column(name="term1", type="float", precision=10, scale=0, nullable=true)
     */
    private $term1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="term2", type="float", precision=10, scale=0, nullable=true)
     */
    private $term2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="term3", type="float", precision=10, scale=0, nullable=true)
     */
    private $term3;

    /**
     * @var \Enrollment
     *
     * @ORM\ManyToOne(targetEntity="Enrollment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnrollment", referencedColumnName="id")
     * })
     */
    private $idenrollment;

    /**
     * @var \Subject
     *
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSubject", referencedColumnName="id")
     * })
     */
    private $idsubject;


}
