<?php
/**
 * Created by Lord of Web.
 * User: Damien
 * Date: 02/01/2019
 * Time: 11:16
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

    const TEXT_BANDEAU = 'text';
    const COLOR_BANDEAU = 'red';

    protected $_override = array(
        //'classes/Cart.php'
    );


    // Installation des hooks
    protected $_hook = array(
//        'displayAdminOrderContentOrder' => array(
//            'position' => 1,
//        ),
    );


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
                        'desc' => "",
                        'name' => self::getConfigName(self::TEXT_BANDEAU),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
            'form' => array(
                'tab_name' => 'config_tab',
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => 'Couleur du bandeau',
                        'desc' => "",
                        'name' => self::getConfigName(self::COLOR_BANDEAU),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }



}
