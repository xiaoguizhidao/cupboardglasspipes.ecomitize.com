<?php class Massmediums_Cupboard_Adminhtml_ImportController extends Mage_Adminhtml_Controller_Action{ public function indexAction() {$this->getResponse()->setRedirect($this->getUrl("admi\x6e\150\164\x6d\154\x2f\163\171\x73t\145\155_\x63\x6f\156\x66i\147\x2fe\144\x69\x74\057\x73\145c\x74i\157\x6e\x2f\x75\154\x74\151\155\157/")); }public function blocksAction() {$x0b = Mage::helper('cupboard')->getCfg('install/overwrite_blocks');Mage::getSingleton('cupboard/import_cms')->importCmsItems('cms/block', 'blocks', $x0b);$this->getResponse()->setRedirect($this->getUrl("\141d\155\x69nht\155\154/sy\163\x74\145\155\137\x63\x6f\156f\151g\x2f\x65d\151\164/\163\145\x63\x74i\x6f\x6e/\165\x6c\x74im\x6f\x2f")); }public function pagesAction() {$x0b = Mage::helper('cupboard')->getCfg('install/overwrite_pages');Mage::getSingleton('cupboard/import_cms')->importCmsItems('cms/page', 'pages', $x0b);$this->getResponse()->setRedirect($this->getUrl("\x61d\155\x69\x6e\x68t\x6d\154\x2f\x73\x79\163tem\137\x63\x6fnfi\147/\x65\x64\151\x74\x2f\163\x65c\x74\151\x6f\x6e\057ulti\155\x6f\057")); }}
