<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestsAnswers
 *
 * @ORM\Table(name="Tests_Answers")
 * @ORM\Entity
 */
class TestsAnswers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nKey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nStaffKey", type="integer", nullable=true)
     */
    private $nstaffkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nTestNumber", type="integer", nullable=true)
     */
    private $ntestnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSclaceKey", type="integer", nullable=true)
     */
    private $nsclacekey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nAnswerNum", type="integer", nullable=true)
     */
    private $nanswernum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Test_Id", type="bigint", nullable=true)
     */
    private $testId;

    /**
     * @var integer
     *
     * @ORM\Column(name="TimeLength", type="integer", nullable=true)
     */
    private $timelength;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TestTime", type="datetime", nullable=true)
     */
    private $testtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans1", type="integer", nullable=true)
     */
    private $ans1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans2", type="integer", nullable=true)
     */
    private $ans2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans3", type="integer", nullable=true)
     */
    private $ans3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans4", type="integer", nullable=true)
     */
    private $ans4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans5", type="integer", nullable=true)
     */
    private $ans5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans6", type="integer", nullable=true)
     */
    private $ans6 = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans7", type="integer", nullable=true)
     */
    private $ans7 = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans8", type="integer", nullable=true)
     */
    private $ans8 = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans9", type="integer", nullable=true)
     */
    private $ans9 = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Ans10", type="integer", nullable=true)
     */
    private $ans10 = '';


}

