<?php
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' );

require_once('foxycart.cart_validation.php');

class plgSystemFoxycarthmacvalidation extends JPlugin {
	
	/**
	 *
	 * @access protected
	 * @param object $subject
	 *        	The object to observe
	 * @param array $config
	 *        	An array that holds the plugin configuration
	 */
	public function __construct(&$subject, $config) {
		parent::__construct ($subject, $config);
		
		// Strictly speaking Joomla doesn't really need you to load the language anymore.
		$this->loadLanguage();
	}
	
	function onBeforeRender() {
		$app = JFactory::getApplication();

		$isDebug = !!$this->params->get('debug');
		$cartUrl = $this->params->get('cartUrl');
		$secret = $this->params->get('secret');
		
		$response = JResponse::getBody();

		FoxyCart_Helper::setDebug($isDebug)
		FoxyCart_Helper::setCartUrl($cartUrl);		
		FoxyCart_Helper::setSecret($secret);
		
		$response = FoxyCart_Helper::fc_hash_html($response);
		
		JResponse::setBody($response);
		return true;
	}
}
?>