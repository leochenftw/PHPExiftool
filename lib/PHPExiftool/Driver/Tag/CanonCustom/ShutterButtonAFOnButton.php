<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ShutterButtonAFOnButton extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1793;

    protected $Name = 'ShutterButtonAFOnButton';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Shutter Button AF On Button';

    protected $Index = 2;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Metering + AF start',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Metering + AF start/AF stop',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Metering start/Meter + AF start',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AE lock/Metering + AF start',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Metering + AF start/disable',
        ),
    );

}