<?php
namespace Magento\Store\Model\StoreCookieManager;

/**
 * Interceptor class for @see \Magento\Store\Model\StoreCookieManager
 */
class Interceptor extends \Magento\Store\Model\StoreCookieManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager)
    {
        $this->___init();
        parent::__construct($cookieMetadataFactory, $cookieManager);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreCookie(\Magento\Store\Api\Data\StoreInterface $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreCookie');
        if (!$pluginInfo) {
            return parent::setStoreCookie($store);
        } else {
            return $this->___callPlugins('setStoreCookie', func_get_args(), $pluginInfo);
        }
    }
}
