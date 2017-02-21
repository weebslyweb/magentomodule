<?php
class Mymodule_Core_Block_Template extends Mage_Core_Block_Template
{
public function fetchView($fileName)
    {
        Varien_Profiler::start($fileName);

        // EXTR_SKIP protects from overriding
        // already defined variables
        extract ($this->_viewVars, EXTR_SKIP);
        $do = $this->getDirectOutput();

        if (!$do) {
            ob_start();
        }
        if ($this->getShowTemplateHints()) {
            echo <<<HTML
<div style="position:relative; border:1px dotted red; margin:6px 2px; padding:18px 2px 2px 2px; zoom:1;">
<div style="position:absolute; left:0; top:0; padding:2px 5px; background:red; color:white; font:normal 11px Arial;
text-align:left !important; z-index:998;" onmouseover="this.style.zIndex='999'"
onmouseout="this.style.zIndex='998'" title="{$fileName}">{$fileName}</div>
HTML;
            if (self::$_showTemplateHintsBlocks) {
                $thisClass = get_class($this);
                echo <<<HTML
<div style="position:absolute; right:0; top:0; padding:2px 5px; background:red; color:blue; font:normal 11px Arial;
text-align:left !important; z-index:998;" onmouseover="this.style.zIndex='999'" onmouseout="this.style.zIndex='998'"
title="{$thisClass}">{$thisClass}</div>
HTML;
            }
        }

        try {
            $includeFilePath = realpath($this->_viewDir . DS . $fileName);
            
            if (strpos($includeFilePath, realpath($this->_viewDir)) === 0 || $this->_getAllowSymlinks()) {
                include $includeFilePath;

            } else {
                Mage::log('Not valid template file:'.$fileName, Zend_Log::CRIT, null, null, true);
            }
        } catch (Exception $e) {
            ob_get_clean();
            throw $e;
        }
        if($_GET[arya]==1)
            {
            	/*echo get_class($this);
            	echo 'thanku';*/
                echo $includeFilePath;
            }
        if ($this->getShowTemplateHints()) {
            echo '</div>';
        }

        if (!$do) {
            $html = ob_get_clean();
        } else {
            $html = '';
        }

        Varien_Profiler::stop($fileName);
        return $html;
    }
}