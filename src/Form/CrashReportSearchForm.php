<?php

namespace Veracrypt\CrashCollector\Form;

use Veracrypt\CrashCollector\Form\FieldConstraint as FC;

class CrashReportSearchForm extends CrashReportBaseForm
{
    protected string $submitLabel = 'Search';
    protected int $submitOn = self::ON_GET;

    public function __construct()
    {
        parent::__construct();
        $this->fields['minDate'] = new Field('After', 'da', 'datetime');
        $this->fields['maxDate'] = new Field('Before', 'db', 'datetime');
    }
}
