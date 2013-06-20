<?php
 namespace WmPChart\Library;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pImage
 *
 * @author oprokidnev
 */
class pImage extends \pImage
{
    public function __construct($XSize,$YSize,$DataSet=NULL,$TransparentBackground=FALSE)
    {
        
        $this->FontName = './data/wm-p-chart/'.$this->FontName;
        parent::pImage($XSize,$YSize,$DataSet,$TransparentBackground);
    }
}

?>
