<?php


namespace Drupal\shopify_migrate;


use Drupal\migrate_source_csv\CSVFileObject;


class ShopifyCSV extends CSVFileObject
{



  public  $name = "";
    //overriding next() for shopify csv
    public function next() {
        $row = $this->current();

        if ($this->name == '') {
            $this->name = $row['Handle'];
        }
        while (($this->name == $row['Handle'] || in_array($row['Name'], $this->importedProduct)) && !$this->eof()) {
            parent::next();
            $row = $this->current();
        }
        $this->name = $row['Name'];
        $this->importedProduct[] = $row['Name'];
    }



}