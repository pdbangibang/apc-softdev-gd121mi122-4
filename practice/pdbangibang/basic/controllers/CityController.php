<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\City;
class CityController extends City
{
public function actionIndex()
{
$query = City::find();
$pagination = new Pagination([
'defaultPageSize' => 5,
'totalCount' => $query->count(),
]);
$city = $query->orderBy('name')
->offset($pagination->offset)
->limit($pagination->limit)
->all();
return $this->render('index', [
'city' => $city,
'pagination' => $pagination,
]);
}
}