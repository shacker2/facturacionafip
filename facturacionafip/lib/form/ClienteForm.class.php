<?php

/**
 * Cliente form.
 *
 * @package    facturacionafip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class ClienteForm extends BaseClienteForm
{
  public function configure()
  {
     // Deshacerse de la edicion del campo de baja logica y de las fechas de creacion y modificacion
    unset($this['created_at'], $this['updated_at'], $this['activo']);

  }
}
