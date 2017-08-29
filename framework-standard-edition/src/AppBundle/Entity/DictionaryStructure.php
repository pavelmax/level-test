<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DictionaryStructure
 *
 * @ORM\Table(name="DICTIONARY_STRUCTURE")
 * @ORM\Entity
 */
class DictionaryStructure
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nElementKey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nelementkey;

    /**
     * @var string
     *
     * @ORM\Column(name="cElementName", type="string", length=250, nullable=true)
     */
    private $celementname;

    /**
     * @var integer
     *
     * @ORM\Column(name="nParentKey", type="integer", nullable=true)
     */
    private $nparentkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="nLevel", type="integer", nullable=true)
     */
    private $nlevel;


}

