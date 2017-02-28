<?php

namespace Drupal\shopify_migrate\Controller;

use Drupal\commerce_demo\DemoCsv;
use Drupal\Core\Controller\ControllerBase;
use Drupal\migrate_source_csv\CSVFileObject;

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

        $file = new DemoCsv('/var/www/drupalvm/drupal/web/modules/custom/shopify_migrate/data/products_export.csv');
        //$file = new DemoCsv('/var/www/drupalvm/drupal/web/modules/contrib/commerce_demo/data/demo_t_shirts.csv');

        $text = "";

//        $file->setHeaderRowCount(1);
//
//        $file->rewind();

        $file->seek(0);
        $row = $file->current();

//        foreach ($row as $header) {
//            $header = trim($header);
//            $column_names[] = [$header => $header];
//        }
//        $file->setColumnNames($column_names);



//        while($file->valid()) {
//            $file->next();
//            var_dump($file->current());
//        }

        dpm($row);

        $element = array(
            '#markup' => $text,
        );
        return $element;
    }

}

