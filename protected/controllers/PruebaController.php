<?php

	class PruebaController extends Controller{

		public function actionIndex() {

		$saludo = "Hola nuevo mundo, bienvenido a yii";

		$this->render("index",array("saludo"=>$saludo));

 }

}
