<?php

namespace Drupal\shopify_migrate\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\shopify_migrate\CustomFileObject;


/**
 * Provides route responses for the Example module.
 */
class ExampleController extends ControllerBase  {

    /**
     * Returns a simple page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function myPage() {
            $file = new CustomFileObject('/var/www/drupalvm/drupal/web/modules/custom/shopify_migrate/data/products_export.csv');
        //$file = new DemoCsv('/var/www/drupalvm/drupal/web/modules/contrib/commerce_demo/data/demo_t_shirts.csv');

        $text = "";

        $sku_prefix = '15080-009';
        $query = \Drupal::entityQuery('commerce_product_variation')
            ->condition('sku', $sku_prefix, 'STARTS_WITH');

        $values = $query->execute();

        var_dump    ( $query );



        $element = array(
            '#markup' => $text,
        );
        return $element;
    }

}

