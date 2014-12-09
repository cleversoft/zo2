<!-- Tab Fonts -->
<div class="tab-pane" id="zo2-fonts">
    <h2><?php echo JText::_('ZO2_ADMIN_FONT_OPTION'); ?></h2>
    <div class="zo2-divider"></div>

    <?php
    echo Zo2Html::field(
        'description', null, array(
            'text' => JText::_('ZO2_ADMIN_DESCRIPTION_FONTS'),
            'subtext' => '<a href="http://docs.zootemplate.com/category/zo2/fonts">Document</a>'
        ));
    ?>

    <!-- Body font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_BODY'),
    ), array(
        'name' => 'body_font',
        'id' => 'body_font',
        'value' => Zo2Factory::get('body_font')
    ));
    ?>
    <!-- Menu font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_MENU'),
    ), array(
        'name' => 'menu_font',
        'id' => 'menu_font',
        'value' => Zo2Factory::get('menu_font')
    ));
    ?>

    <!-- Heading line H1 font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_H1'),
    ), array(
        'name' => 'h1_font',
        'id' => 'h1_font',
        'value' => Zo2Factory::get('h1_font')
    ));
    ?>

    <!-- Heading line H2 font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_H2'),
    ), array(
        'name' => 'h2_font',
        'id' => 'h2_font',
        'value' => Zo2Factory::get('h2_font')
    ));
    ?>

    <!-- Heading line H3 font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_H3'),
    ), array(
        'name' => 'h3_font',
        'id' => 'h3_font',
        'value' => Zo2Factory::get('h3_font')
    ));
    ?>

    <!-- Heading line H4 font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_H4'),
    ), array(
        'name' => 'h4_font',
        'id' => 'h4_font',
        'value' => Zo2Factory::get('h4_font')
    ));
    ?>

    <!-- Heading line H5 font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_H5'),
    ), array(
        'name' => 'h5_font',
        'id' => 'h5_font',
        'value' => Zo2Factory::get('h5_font')
    ));
    ?>

    <!-- Heading line H6 font-->
    <?php
    echo Zo2Html::field(
        'font', array(
        'label' => JText::_('ZO2_ADMIN_FONT_H6'),
    ), array(
        'name' => 'h6_font',
        'id' => 'h6_font',
        'value' => Zo2Factory::get('h6_font')
    ));
    ?>
</div>
