<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Sega
 * Date: 20.09.12
 * Time: 9:02
  */
class CImageHandler {

    /**
     * Returns image.
     * @param string $img uploaded image.
     * @param string $path path to save file with name like '/uploads/images/'.$img.
     * @return void
     */
    public static function upload($img , $path) {
        $img->saveAs(Yii::getPathOfAlias('webroot').$path);
    }

    /**
     * Saves resized copy of image.
     * @param string $img (alreaady uploaded).
     * @param string $path path to save file with name like '/uploads/images/'.$img.
     * @param string $resizeType - resize to width or height. Default - width.
     * @param int $size Value to resize.
     * @return void
     */
    public static function resizeAndSave($img , $path , $resizeType = 'width' , $size) {

        $image = Yii::app()->simpleImage->load(Yii::getPathOfAlias('webroot').$img);

        if($resizeType === 'width') {
            $image->resizeToWidth($size);
        }
        elseif($resizeType === 'height') {
            $image->resizeToHeight($size);
        }
        $image->save(Yii::getPathOfAlias('webroot').$path);
    }

    /**
     * Deletes image if it exists
     * @param $img like '/uploads/images/'.$img
     */
    public static function delete($img) {
        if( is_file(Yii::getPathOfAlias('webroot').$img) ) {
            unlink(Yii::getPathOfAlias('webroot').$img);
        }
    }
}
?>

