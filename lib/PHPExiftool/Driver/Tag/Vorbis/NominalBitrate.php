<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class NominalBitrate extends AbstractTag
{

    protected $Id = 13;

    protected $Name = 'NominalBitrate';

    protected $FullName = 'Vorbis::Identification';

    protected $GroupName = 'Vorbis';

    protected $g0 = 'Vorbis';

    protected $g1 = 'Vorbis';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Nominal Bitrate';
}
