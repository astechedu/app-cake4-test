<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProductsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('products');

        //$this->hasOne('Categories');
		 $this->hasOne('Categories', [
		    'foreignKey' => 'category_id'
		]);
    }


}

