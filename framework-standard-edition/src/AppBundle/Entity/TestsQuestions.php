<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestsQuestions
 *
 * @ORM\Table(name="Tests_Questions")
 * @ORM\Entity
 */
class TestsQuestions
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
     * @ORM\Column(name="nTestNumber", type="integer", nullable=true)
     */
    private $ntestnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cQuestion", type="string", length=1000, nullable=true)
     */
    private $cquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="nAnswerNum", type="integer", nullable=true)
     */
    private $nanswernum;

    /**
     * @var integer
     *
     * @ORM\Column(name="nUse", type="integer", nullable=true)
     */
    private $nuse;

    /**
     * @var integer
     *
     * @ORM\Column(name="nRandom", type="integer", nullable=true)
     */
    private $nrandom;

    /**
     * @var integer
     *
     * @ORM\Column(name="nScale", type="integer", nullable=true)
     */
    private $nscale;

    /**
     * @var string
     *
     * @ORM\Column(name="cPathPicture", type="string", length=500, nullable=true)
     */
    private $cpathpicture;

    /**
     * @var string
     *
     * @ORM\Column(name="cMessage", type="string", length=2000, nullable=true)
     */
    private $cmessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nPerec", type="integer", nullable=true)
     */
    private $nperec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bDostup", type="boolean", nullable=true)
     */
    private $bdostup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cPerecNumber", type="string", length=500, nullable=true)
     */
    private $cperecnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer1", type="string", length=500, nullable=true)
     */
    private $canswer1;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer2", type="string", length=500, nullable=true)
     */
    private $canswer2;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer3", type="string", length=500, nullable=true)
     */
    private $canswer3;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer4", type="string", length=500, nullable=true)
     */
    private $canswer4;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer5", type="string", length=500, nullable=true)
     */
    private $canswer5;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer6", type="string", length=500, nullable=true)
     */
    private $canswer6;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer7", type="string", length=500, nullable=true)
     */
    private $canswer7;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer8", type="string", length=500, nullable=true)
     */
    private $canswer8;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer9", type="string", length=500, nullable=true)
     */
    private $canswer9;

    /**
     * @var string
     *
     * @ORM\Column(name="cAnswer10", type="string", length=500, nullable=true)
     */
    private $canswer10;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW1", type="integer", nullable=true)
     */
    private $nw1;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW2", type="integer", nullable=true)
     */
    private $nw2;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW3", type="integer", nullable=true)
     */
    private $nw3;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW4", type="integer", nullable=true)
     */
    private $nw4;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW5", type="integer", nullable=true)
     */
    private $nw5;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW6", type="integer", nullable=true)
     */
    private $nw6;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW7", type="integer", nullable=true)
     */
    private $nw7;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW8", type="integer", nullable=true)
     */
    private $nw8;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW9", type="integer", nullable=true)
     */
    private $nw9;

    /**
     * @var integer
     *
     * @ORM\Column(name="nW10", type="integer", nullable=true)
     */
    private $nw10;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc1", type="integer", nullable=true)
     */
    private $nsc1;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc2", type="integer", nullable=true)
     */
    private $nsc2;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc3", type="integer", nullable=true)
     */
    private $nsc3;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc4", type="integer", nullable=true)
     */
    private $nsc4;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc5", type="integer", nullable=true)
     */
    private $nsc5;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc6", type="integer", nullable=true)
     */
    private $nsc6;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc7", type="integer", nullable=true)
     */
    private $nsc7;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc8", type="integer", nullable=true)
     */
    private $nsc8;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc9", type="integer", nullable=true)
     */
    private $nsc9;

    /**
     * @var integer
     *
     * @ORM\Column(name="nSc10", type="integer", nullable=true)
     */
    private $nsc10;


}

