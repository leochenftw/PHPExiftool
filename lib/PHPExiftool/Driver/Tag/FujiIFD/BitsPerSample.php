<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FujiIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class BitsPerSample extends AbstractTag
{

    protected $Id = 61443;

    protected $Name = 'BitsPerSample';

    protected $FullName = 'FujiFilm::IFD';

    protected $GroupName = 'FujiIFD';

    protected $g0 = 'RAF';

    protected $g1 = 'FujiIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Bits Per Sample';
}
