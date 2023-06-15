<?php

//<fileHeader>
  
//</fileHeader>

class Tipo_Servico extends TRecord
{
    const TABLENAME  = 'tipo_servico';
    const PRIMARYKEY = 'id';
    const IDPOLICY   =  'max'; // {max, serial}
    
    const DELETEDAT  = 'deleted_at';
    const CREATEDAT  = 'created_at';
    const UPDATEDAT  = 'update_at';
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL)
    {
        parent::__construct($id);
        parent::addAttribute('nome');
        parent::addAttribute('valor');
        parent::addAttribute('deleted_at');
        parent::addAttribute('created_at');
        parent::addAttribute('update_at');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }
    
}

