<?php
/**
 * Created by LordAythur.
 * User: Arthur
 * Date: 21/01/2022
 * Time: 08:36
 */


if (!defined('_PS_VERSION_'))
    exit;

if (!class_exists('TupsCoreModule', false)) {
    include_once __DIR__.'/../tupsmodulehelper/TupsCoreModule.php';
}

$folderModule = __DIR__;

require_once $folderModule.'/vendor/autoload.php';

class LpmiTopBanner extends TupsCoreModule
{


    public $configDisplayName = 'La superbe bannière en haut de mon site';
    public $configDescription = "Module pour afficher un texte magnifique en haut de page";


    // Installation des hooks
    protected $_hook = array(
       'displayBanner' => array(
           'position' => 1,
       ),
    );

     // Appel du HOOK danns la module
     public function hookDisplayBanner($params)
     {
 
     // Exemple :
     // configurer les variables envoyées à la template
     $this->context->smarty->assign(array(
         'text' => self::getConfig("textBandeau"),
         'color' => self::getConfig("couleurBandeau"),
     ));
     // charger retourner la template smarty du module
     return $this->display($this->path, 'template.tpl');
     }


    // affichage de la configuration du module
    public function __construct() {
        parent::__construct();
        // Ajouter un formule sur la configuration du module
        $this->addConfigForm($this->getFormConfiguration());
    }

    // Exemple de la creation d'un formulaire pour la configuration
    // Pour connaitre tous les types de champs existant, il faut aller voir dans Prestashop :
    // /controllers/admin/AdminPatternsController.php
    public function getFormConfiguration() {
        return array(
            'form' => array(
                'tab_name' => 'config_tab',
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => 'Texte du bandeau',
                        'desc' => "Définir le texte présent dans le bandeau",
                        'name' => self::getConfigName("textBandeau")
                    ),
                    array(
                        'type' => 'color',
                        'label' => 'Couleur du fond du bandeau',
                        'desc' => "Définir la couleur présente dans le bandeau",
                        'name' => self::getConfigName("couleurBandeau")
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }
}
