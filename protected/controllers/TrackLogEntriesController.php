<?php

/**
 * @author Yura Fedoriv <yurko.fedoriv@gmail.com>
 */
class TrackLogEntriesController extends Controller {
    public function actionQuery($userId) {
        $entries = TrackLogEntry::model()->findAllByAttributes(['user_id' => $userId]);

        header('Content-Type: application/json');
        echo CJSON::encode($entries);
    }
} 