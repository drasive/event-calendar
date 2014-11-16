<?php

use LaravelBook\Ardent\Ardent;

class BaseModel extends Ardent {

    // Setup
    protected $primaryKey = 'Id';
    const CREATED_AT = 'CreationDate';
    const UPDATED_AT = 'ModificationDate';

}
