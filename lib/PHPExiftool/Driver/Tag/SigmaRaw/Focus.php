<?php

namespace PHPExiftool\Driver\Tag\SigmaRaw;

class Focus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FOCUS';

    protected $Name = 'Focus';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Focus';

    protected $Values = array(
        'AF' => array(
            'Id' => 'AF',
            'Label' => 'Auto-focus Locked',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Manual',
        ),
        'NO LOCK' => array(
            'Id' => 'NO LOCK',
            'Label' => 'Auto-focus Didn\'t Lock',
        ),
    );

}