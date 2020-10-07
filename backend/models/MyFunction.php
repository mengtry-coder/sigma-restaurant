<?php 
    namespace app\models;
    use Yii;
    use yii\helpers\FileHelper;
    use yii\helpers\Inflector;

    class MyFunction extends \yii\db\ActiveRecord
    {
        public static function getLatitudeLongitude($address)
        {
            if ($address == "") {
               $address = "Cambodia, Siem Reap";
            }
            $apiKey = 'AIzaSyAIWgIKTIfzr7s5zoeBYZjIBKodEFiRJDM'; //an API key.
            $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false&key='.$apiKey);
            $geo = json_decode($geo, true);
            if (isset($geo['status']) && ($geo['status'] == 'OK')) {
                $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
                $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
                $LatitudeLongitude = $latitude.",".$longitude;
                return $LatitudeLongitude;
            }
        }

        public static function uploadImage($file, $controller_name)
        {
            $date = date('YmdHis');
            $path = Yii::getAlias('uploads') . "/$controller_name";
            $path_image = "/uploads/$controller_name";
            if (!is_dir($path)) {
            \yii\helpers\FileHelper::createDirectory($path, $mode = 0775, $recursive = true);
            }
            $file->saveAs($path.'/'  .$file->baseName.'_'.$date.'.'.$file->extension);
            return $path_image.'/'  .$file->baseName.'_'.$date. '.'.$file->extension;
        }

        //Upload Multiple Images
        public static function uploadMultipleImage($multi_files, $controller_name, $model, $new_model)
        {
            //==========In Controller==========
            // $multi_file = $model->file_img;
            // $model->feature_image = EoFunction::uploadImage($multi_file, $controller_name, $model);
            // ==============
            if ($model->validate()) {
                $path = Yii::getAlias('uploads') . "/$controller_name";
                $date = date('YmdHis');
                $file_path = "/uploads/$controller_name/";
                foreach ($multi_files as $multi_file) {
                    $new_model->id = NULL; //primary key(auto increment id) id
                    $new_model->isNewRecord = true;
                    if ($multi_file->saveAs($path.'/'.'_'.$date.'_'.$multi_file->baseName.'.'.$multi_file->extension)) 
                    {
                        $image_name = '_'.$date.'_'.$multi_file->baseName. '.'. $multi_file->extension;
                        $new_model->file_path = $file_path; 
                        $new_model->file_name = $image_name; 
                        $new_model->property_profile_id = $model->id;
                        $new_model->save();
                    }
                }
            }
                return null;
        }

        public static function getMapByLatitudeLongitude($LatitudeLongitude)
        {
            return "<iframe src='https://maps.google.com/maps?q=".$LatitudeLongitude."&hl=en&z=14&amp;output=embed' width='100%' height='400' frameborder='0' style='border:0' allowfullscreen></iframe>";
        }

        //Remove File From Directory
        public static function removeFile($feature_image)
        {
            // =========Add This To common/config/bootstrap Top Of File=========
            // Yii::setAlias('@root', realpath(dirname(__FILE__).'/../../'));
            // Yii::setAlias('@common', dirname(__DIR__));
            // ================
            // =========To Call this Function=========
             // eOFunction::removeFile($this->findModel($id)->feature_image);
            // ================
            if ($feature_image) {
                return unlink(Yii::getAlias('@root')."/admin". $feature_image);
            }
        }

        //Get Controller From Project And Get Action In Each Controller
        public function getControllersandactions()
        {
            // ======In Controller======
            // $controller = MyFunction::getControllersandactions();
            // foreach ($controller as $controller => $value) {
            //     $controller = lcfirst(str_replace("Controller","",$controller));
            //     $controller_model = new ControllerName;
            //     $controller_model->controller_name = $controller;
            //     $controller_model->status = 1;
            //     if ($controller_model->save()) {
            //         foreach ($value as $action_names) {
            //             $controller_action_model = new ControllerActionName;
            //             $controller_action_model->controller_id = $controller_model->id;
            //             $controller_action_model->action_name = $action_names;
            //             $controller_action_model->status = 1;
            //             $controller_action_model->save();
            //         }   
            //     }
            // }
            // =====
            $controllerlist = [];
            if ($handle = opendir(Yii::getAlias('@app/controllers'))) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {
                        $controllerlist[] = $file;
                    }
                }
                closedir($handle);
            }
            asort($controllerlist);
            $fulllist = [];
            foreach ($controllerlist as $controller):
                $handle = fopen(Yii::getAlias('@app/controllers/') . $controller, "r");
                if ($handle) {
                    while (($line = fgets($handle)) !== false) {
                        if (preg_match('/public function action(.*?)\(/', $line, $display)):
                            if (strlen($display[1]) > 2):
                                $fulllist[substr($controller, 0, -4)][] = strtolower($display[1]);
                            endif;
                        endif;
                    }
                }
                fclose($handle);
            endforeach;
            return $fulllist;
        }
    }
?>