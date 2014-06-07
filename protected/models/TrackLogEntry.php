<?php

/**
 * This is the model class for table "track_log_entries".
 *
 * The followings are the available columns in table 'track_log_entries':
 * @property integer $id
 * @property integer $user_id
 * @property string $query
 * @property integer $from
 * @property string $created_at
 * @property string $updated_at
 * @property integer $parsed_serving_qty
 * @property string $parsed_serving_portion
 * @property string $parsed_brand_name
 * @property string $api_item_id
 * @property string $api_matched_at
 * @property integer $api_match_method
 *
 * The followings are the available model relations:
 * @property User $user
 */
class TrackLogEntry extends CActiveRecord {
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'track_log_entries';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('user_id, query', 'required'),
            array('user_id, from, parsed_serving_qty, api_match_method', 'numerical', 'integerOnly' => true),
            array('parsed_serving_portion, parsed_brand_name', 'length', 'max' => 100),
            array('api_item_id', 'length', 'max' => 45),
            array('created_at, updated_at, api_matched_at', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id'                     => 'ID',
            'user_id'                => 'User',
            'query'                  => 'Query',
            'from'                   => 'From',
            'created_at'             => 'Created At',
            'updated_at'             => 'Updated At',
            'parsed_serving_qty'     => 'Parsed Serving Qty',
            'parsed_serving_portion' => 'Parsed Serving Portion',
            'parsed_brand_name'      => 'Parsed Brand Name',
            'api_item_id'            => 'Api Item',
            'api_matched_at'         => 'Api Matched At',
            'api_match_method'       => 'Api Match Method',
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TrackLogEntry the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
