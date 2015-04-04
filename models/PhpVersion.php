<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "php_version".
 *
 * @property integer $id
 * @property string $branch
 * @property string $version
 * @property string $release_date
 */
class PhpVersion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'php_version';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch', 'version', 'release_date'], 'string'],
            [['release_date'], 'date'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch' => 'Branch',
            'version' => 'Version',
            'release_date' => 'Release Date',
        ];
    }
}
