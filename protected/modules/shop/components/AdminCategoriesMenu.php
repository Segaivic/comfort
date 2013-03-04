<?php

class AdminCategoriesMenu extends CWidget
{
    public function run()
    {
        $level=0;
        $root=SCategories::model()->findByPk(1);
        $categories=$root->descendants()->findAll();
        foreach($categories as $n=>$category)
        {
            if($category->level==$level)
                echo CHtml::closeTag('li')."\n";
            else if($category->level>$level)
                echo CHtml::openTag('ul')."\n";
            else
            {
                echo CHtml::closeTag('li')."\n";

                for($i=$level-$category->level;$i;$i--)
                {
                    echo CHtml::closeTag('ul')."\n";
                    echo CHtml::closeTag('li')."\n";
                }
            }

            echo CHtml::openTag('li');
            echo CHtml::link(CHtml::encode($category->title),array('/shop/admin/categories/update' , 'id'=> $category->id));
            $level=$category->level;
        }

        for($i=$level;$i;$i--)
        {
            echo CHtml::closeTag('li')."\n";
            echo CHtml::closeTag('ul')."\n";
        }
    }

}

?>