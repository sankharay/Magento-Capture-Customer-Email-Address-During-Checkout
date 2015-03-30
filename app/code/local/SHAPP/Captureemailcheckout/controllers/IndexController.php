<?php
class SHAPP_Captureemailcheckout_IndexController extends Mage_Core_Controller_Front_Action
{
   public function indexAction ()
   {
   	$PostValues = $this->getRequest()->getParams();
   	if($PostValues['emailaddress'] != '')
   	{
      $currentQuote = Mage::getModel('checkout/cart')->getQuote();
      if($currentQuote){
      if(isset($PostValues['sfirstname']))
      $currentQuote->setcustomer_firstname($PostValues['sfirstname']);
      if(isset($PostValues['slastname']))
      $currentQuote->setcustomer_lastname($PostValues['slastname']);
   	$currentQuote->setcustomer_email($PostValues['emailaddress']);
      $currentQuote->save();
      }}
   }
}
?>