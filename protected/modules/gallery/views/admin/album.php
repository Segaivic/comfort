<?php
    $this->breadcrumbs = array(
        'Администрирование' => '/admin',
        'Галерея' => '/gallery/admin',
        'Фотоальбом '.$model->title,
    )
?>

<h1 xmlns="http://www.w3.org/1999/html"><?php echo $model->title; ?></h1>
<a href="/gallery/admin/photos/<?php echo $model->id ?>" class="button add">Добавить фото</a>
<table class="width-100 striped">
    <thead>
    <tr>
        <th>Изображение</th>
        <th></th>
    </tr>
    </thead>
<?php foreach ($model->photos as $photo): ?>
    <tbody>
    <tr id="photos<?php echo $photo->id; ?>">
        <td><?php echo CHtml::link(CHtml::image($photo->thumb),$photo->image,array('rel'=>'gallery')); ?></td>
        <td>
            <?php echo CHtml::textArea('tt',$photo->title, array('cols'=>50 , 'rows'=>8, 'id'=>'tt'.$photo->id)); ?>
            <textarea class="embed" rows="5" cols="50">
<a href="<?php echo $photo->image ?>" rel="fbox"><img src="<?php echo $photo->thumb ?>" title="<?php echo $photo->title ?>" /></a>
            </textarea>
        </td>
        <td>
            <p>
                <a href="javascript:" id="save<?php echo $photo->id; ?>" class="button save savephoto">Сохранить</a>
            </p>
            <p>
                <a href="javascript:" id="del<?php echo $photo->id; ?>" class="button b_delete">Удалить</a>
            </p>
        </td>
    </tr>
    </tbody>
<?php endforeach; ?>
</table>

<script type="text/javascript">
    $(".embed").focus(function() {
        var $this = $(this);
        $this.select();
        // Work around Chrome's little problem
        $this.mouseup(function() {
            // Prevent further mouseup intervention
            $this.unbind("mouseup");
            return false;
        });
    });
</script>