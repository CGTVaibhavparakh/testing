<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $department_id
 * @property int $companies_company_id
 * @property int $branches_branch_id
 * @property string $department_address
 * @property string $department_created_date
 * @property string $department_status
 * @property string $department_name
 *
 * @property Branches $branchesBranch
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['companies_company_id', 'branches_branch_id', 'department_address', 'department_created_date', 'department_status', 'department_name'], 'required'],
            [['companies_company_id', 'branches_branch_id'], 'integer'],
            [['department_created_date'], 'safe'],
            [['department_status'], 'string'],
            [['department_address'], 'string', 'max' => 255],
            [['department_name'], 'string', 'max' => 100],
            [['branches_branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branches::className(), 'targetAttribute' => ['branches_branch_id' => 'branch_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'department_id' => 'Department ID',
            'companies_company_id' => 'Company Name',
            'branches_branch_id' => 'Branch Name',
            'department_address' => 'Department Address',
            'department_created_date' => 'Department Created Date',
            'department_status' => 'Department Status',
            'department_name' => 'Department Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompaniesCompany()
    {
        return $this->hasOne(Companies::className(), ['company_id' => 'companies_company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranchesBranch()
    {
        return $this->hasOne(Branches::className(), ['branch_id' => 'branches_branch_id']);
    }
}
