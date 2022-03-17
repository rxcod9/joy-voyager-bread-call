<?php

namespace Joy\VoyagerBreadCall\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'calls');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'calls',
                'display_name_singular' => __('joy-voyager-bread-call::seeders.data_types.call.singular'),
                'display_name_plural'   => __('joy-voyager-bread-call::seeders.data_types.call.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadCall\\Models\\Call',
                // 'policy_name'           => 'Joy\\VoyagerBreadCall\\Policies\\CallPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadCall\\Http\\Controllers\\VoyagerBreadCallController',
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
