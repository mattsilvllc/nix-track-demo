<?php

class SiteController extends Controller {
    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            'partial' => array(
                'class'    => 'CViewAction',
                'basePath' => 'partials',
                'layout'   => false,
            ),
        );
    }

    public function actionIndex() {
        $this->renderText(null);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }
}