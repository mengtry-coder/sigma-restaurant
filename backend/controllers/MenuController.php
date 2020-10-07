<?php

namespace backend\controllers;

use app\models\MyFunction;
use backend\models\Menu;
use backend\models\MenuSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Cookie;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'roles' => ['@'],
                ],
            ],
        ];
    }

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $current_page = Yii::$app->controller->id . "-index";
        $this->view->params['current_page'] = $current_page;

        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $total_items = $dataProvider->getTotalCount();

        $page_size = array_values(Yii::$app->params['page_size'])[0];
        $page_size_cookie = $current_page . '_page_size';
        if (isset($_REQUEST["page_size"])) {
            if (intval($_REQUEST["page_size"]) > 0) {
                $page_size = intval($_REQUEST["page_size"]);
                $set_cookies = Yii::$app->response->cookies;
                $set_cookies->add(new Cookie([
                    'name' => $page_size_cookie,
                    'value' => $page_size,
                    'expire' => time() + (86400 * 3),
                ]));
            }
        } else {
            $get_cookies = Yii::$app->request->cookies;
            if ($get_cookies->has($page_size_cookie)) {
                $page_size = $get_cookies->getValue($page_size_cookie);
            }
        }

        $page = 0;
        $page_cookie = $current_page . '_page';
        if (isset($_REQUEST["page"])) {
            if (intval($_REQUEST["page"]) > 0) {
                $page = intval($_REQUEST["page"]) - 1;
                $set_cookies = Yii::$app->response->cookies;
                $set_cookies->add(new Cookie([
                    'name' => $page_cookie,
                    'value' => $page,
                    'expire' => time() + (86400 * 3),
                ]));
            }
        } else {
            $get_cookies = Yii::$app->request->cookies;
            if ($get_cookies->has($page_cookie)) {
                $page = $get_cookies->getValue($page_cookie);
            }
        }
        $max_page = ceil($total_items / $page_size);

        $decrease_page = 0;
        while ($page + 1 > $max_page) {
            $page = $page - 1;
            $decrease_page = 1;
        }
        if ($decrease_page == 1) {
            $set_cookies = Yii::$app->response->cookies;
            $set_cookies->add(new Cookie([
                'name' => $page_cookie,
                'value' => $page,
                'expire' => time() + (86400 * 3),
            ]));
        }

        $dataProvider->pagination->pageSize = $page_size;
        $dataProvider->pagination->page = $page;

        return $this->render('index', [
            'page_size' => $page_size,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menu model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'blankLayout';

        $model = new Menu();

        $model->created_date = date('Y-m-d H:i:s');
        $model->created_by = Yii::$app->user->getId();
        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->name;
            $date = date('YmdHis');
            $base_url = Yii::$app->request->baseUrl;
            if ($model->file = UploadedFile::getInstance($model, 'file')) {
                $file = $model->file;
                $controller_name = Yii::$app->controller->id;
                $model->feature_image = MyFunction::uploadImage($file, $controller_name);
            }
            if ($model->save()) {
                Yii::$app->session->setFlash('success', "Saved successful");
                return $this->redirect(Yii::$app->request->referrer);

            } else {
                echo "MODEL NOT SAVED";
                print_r($model);

                exit;
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = 'blankLayout';

        $model = $this->findModel($id);

        $model->updated_date = date('Y-m-d H:i:s');
        $model->updated_by = Yii::$app->user->getId();
        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->name;
            $date = date('YmdHis');
            $base_url = Yii::$app->request->baseUrl;
            if ($model->file = UploadedFile::getInstance($model, 'file')) {
                $file = $model->file;
                $controller_name = Yii::$app->controller->id;
                $model->feature_image = MyFunction::uploadImage($file, $controller_name);
            }
            if ($model->save()) {
                Yii::$app->session->setFlash('success', "Saved successful");
                return $this->redirect(Yii::$app->request->referrer);

            } else {
                echo "MODEL NOT SAVED";
                print_r($model->getAttributes());
                print_r($model->getErrors());
                exit;
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // MyFunction::removeFile($this->findModel($id)->feature_image);
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionValidation($id = null)
    {
        $model = $id === null ? new Menu : Menu::findOne($id);
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return \yii\widgets\ActiveForm::validate($model);
        }
    }
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
