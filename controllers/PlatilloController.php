<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Platillo;
use app\models\PlatilloSearch;
use app\models\UploadForm;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PlatilloController implements the CRUD actions for Platillo model.
 */
class PlatilloController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Platillo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlatilloSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Platillo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpload($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->imagen = date('ymd').'-'.$model->imageFile->baseName.'.'.$model->imageFile->extension;

            if ($model->save()) {
                $model->upload();
                return $this->render('view', [
                    'model' => $this->findModel($id),
                ]);
            }
        }

        return $this->render('upload', [
            'model' => $model
        ]);
    }

    /**
     * Creates a new Platillo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Platillo();

        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->nombre;
            $model->imagen = UploadedFile::getInstance($model,'imagen');
            $model->imagen->saveAs('uploads/'.$imageName.'.'.$model->file->extension);
            $model->imagen = 'uploads/'.$imageName.'.'.$model->file->extension;
            $model->save();

            return $this->redirect(['view', 'id' => $model->platillo_id]);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Platillo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->imagen = date('ymd').'-'.$model->imageFile->baseName.'.'.$model->imageFile->extension;
            if ($model->save()) {
                $model->upload();
                return $this->render('view', [
                    'model' => $this->findModel($id),
                ]);
            }
            // return $this->redirect(['view', 'id' => $model->platillo_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Platillo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Platillo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Platillo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Platillo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
