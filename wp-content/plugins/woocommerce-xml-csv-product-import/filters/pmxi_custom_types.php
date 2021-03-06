<?php
	
function pmwi_pmxi_custom_types($custom_types)
{
	if (class_exists('WooCommerce'))
	{
		if ( ! empty($custom_types['product']) ) $custom_types['product']->labels->name = __('WooCommerce Products','wpai_woocommerce_addon_plugin');
		if ( ! empty($custom_types['shop_order']) ) $custom_types['shop_order']->labels->name = __('WooCommerce Orders','wpai_woocommerce_addon_plugin');
		if ( ! empty($custom_types['shop_coupon'])) unset($custom_types['shop_coupon']);				
		if ( ! empty($custom_types['product_variation'])) unset($custom_types['product_variation']);				
		if ( ! empty($custom_types['shop_order_refund'])) unset($custom_types['shop_order_refund']);

		$order = array('shop_order', 'product');

		$ordered_custom_types = array();

		foreach ($order as $type) 
		{			
			if (isset($ordered_custom_types[$type])) continue;

			foreach ($custom_types as $key => $custom_type) 
			{
				if (isset($ordered_custom_types[$key])) continue;

				if (in_array($key, $order))
				{
					if ($key == $type)
					{
						$ordered_custom_types[$key] = $custom_type;
					}
				}
				else
				{
					$ordered_custom_types[$key] = $custom_type;
				}
			}			
		}				
		return $ordered_custom_types;
	}

	return $custom_types;
}
