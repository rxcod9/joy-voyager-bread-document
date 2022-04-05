<?php

namespace Joy\VoyagerBreadDocument\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'documents');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'documents',
                'display_name_singular' => __('joy-voyager-bread-document::seeders.data_types.document.singular'),
                'display_name_plural'   => __('joy-voyager-bread-document::seeders.data_types.document.plural'),
                'icon'                  => 'voyager-bread voyager-bread-document voyager-documentation',
                'model_name'            => 'Joy\\VoyagerBreadDocument\\Models\\Document',
                // 'policy_name'           => 'Joy\\VoyagerBreadDocument\\Policies\\DocumentPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadDocument\\Http\\Controllers\\VoyagerBreadDocumentController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
