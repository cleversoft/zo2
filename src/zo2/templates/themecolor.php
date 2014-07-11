<?php
/**
 * Zo2 (http://www.zo2framework.org)
 * A powerful Joomla template framework
 *
 * @link        http://www.zo2framework.org
 * @link        http://github.com/aploss/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2013 APL Solutions (http://apl.vn)
 * @license     GPL v2
 */
$templatePath = Zo2Factory::getUrl('templates://');

$profile = Zo2Factory::getProfile();

if($profile->theme){
    $preset_theme = $profile->theme;
    $preset_data = array(
        'name' => isset($preset_theme['name']) ? $preset_theme['name'] : '',
        'css' => isset($preset_theme['css']) ? $preset_theme['css'] : '',
        'less' => isset($preset_theme['less']) ? $preset_theme['less'] : '',
        'boxed' => isset($preset_theme['boxed']) ? $preset_theme['boxed'] : 0,
        'background' => isset($preset_theme['variables']['background']) ? $preset_theme['variables']['background'] : '',
        'header' => isset($preset_theme['variables']['header']) ? $preset_theme['variables']['header'] : '',
        'header_top' => isset($preset_theme['variables']['header_top']) ? $preset_theme['variables']['header_top'] : '',
        'text' => isset($preset_theme['variables']['text']) ? $preset_theme['variables']['text'] : '',
        'link' => isset($preset_theme['variables']['link']) ? $preset_theme['variables']['link'] : '',
        'link_hover' => isset($preset_theme['variables']['link_hover']) ? $preset_theme['variables']['link_hover'] : '',
        'bottom1' => isset($preset_theme['variables']['bottom1']) ? $preset_theme['variables']['extra'] : '',
        'bottom2' => isset($preset_theme['variables']['bottom2']) ? $preset_theme['variables']['bottom2'] : '',
        'footer' => isset($preset_theme['variables']['footer']) ? $preset_theme['variables']['footer'] : '',
        'extra' => isset($preset_theme['variables']['extra']) ? $preset_theme['variables']['extra'] : '',
        'bg_image' => isset($preset_theme['variables']['bg_image']) ? $preset_theme['variables']['bg_image'] : '',
        'bg_pattern' => isset($preset_theme['variables']['bg_pattern']) ? $preset_theme['variables']['bg_pattern'] : '',
    );
}
if (!isset($preset_data['name']))
    $preset_data['name'] = 'custom';
if (!isset($preset_data['boxed']))
    $preset_data['boxed'] = 1;
if (!isset($preset_data['bg_image']))
    $preset_data['bg_image'] = '';
?>
<div id="zo2_themes_container">
<input type="hidden" value="<?php echo htmlspecialchars($this->value) ?>" name="<?php echo $this->name ?>" id="<?php echo $this->id ?>" />
<div class="zo2_themes_row clearfix">
    <div class="zo2_themes_label">
        Select which preset style the layout should load.
    </div>
    <div class="zo2_themes_form">
        <ul id="zo2_themes">
            <?php foreach ($presets as $p) : ?>
                <li class="<?php echo $p['name'] == $preset_data['name'] ? 'active' : '' ?>"
                    data-zo2-theme="<?php echo $p['name'] ?>" data-zo2-background="<?php echo $p['variables']['background'] ?>"
                    data-zo2-header="<?php echo $p['variables']['header'] ?>"
                    data-zo2-header-top="<?php echo $p['variables']['header_top'] ?>"
                    data-zo2-link="<?php echo $p['variables']['link'] ?>"
                    data-zo2-link-hover="<?php echo $p['variables']['link_hover'] ?>"
                    data-zo2-text="<?php echo $p['variables']['text'] ?>"
                    data-zo2-bottom1="<?php echo $p['variables']['bottom1'] ?>"
                    data-zo2-bottom2="<?php echo $p['variables']['bottom2'] ?>"
                    data-zo2-footer="<?php echo $p['variables']['footer'] ?>"
                    data-zo2-css="<?php echo $p['css'] ?>" data-zo2-less="<?php echo $p['less'] ?>"
                    >
                    <div class="theme_title"><?php echo ucfirst($p['name']) ?></div>
                    <div class="theme_thumbnail">
                        <img src="<?php echo $templatePath . $p['thumbnail'] ?>">
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
<div class="zo2_themes_row clearfix">
    <div class="zo2_themes_label">
        Preset Settings
    </div>
    <div class="zo2_themes_form">
        <div class="control-group">
            <div class="control-label">
                <label for="color_background">Background</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_background" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['background'] ?>">
                    <span id="color_background_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['background']) ? 'transparent' : $preset_data['background'] ?>"></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                <label for="color_header">Header</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_header" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['header'] ?>">
                    <span id="color_header_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['header']) ? 'transparent' : $preset_data['header'] ?>"></span>
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="control-label">
                <label for="color_link_hover">Header top</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_header_top" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['header_top'] ?>">
                    <span id="color_header_top_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['header_top']) ? 'transparent' : $preset_data['header_top'] ?>"></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                <label for="color_text">Text</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_text" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['text'] ?>">
                    <span id="color_text_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['text']) ? 'transparent' : $preset_data['text'] ?>"></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                <label for="color_link">Link</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_link" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['link'] ?>">
                    <span id="color_link_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['link']) ? 'transparent' : $preset_data['link'] ?>"></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                <label for="color_link_hover">Link hover</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_link_hover" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['link_hover'] ?>">
                    <span id="color_link_hover_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['link_hover']) ? 'transparent' : $preset_data['link_hover'] ?>"></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                <label for="color_link_hover">Bottom 1</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_bottom1" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['bottom1'] ?>">
                    <span id="color_bottom1_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['bottom1']) ? 'transparent' : $preset_data['bottom1'] ?>"></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                <label for="color_link_hover">Bottom 2</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_bottom2" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['bottom2'] ?>">
                    <span id="color_bottom2_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['bottom2']) ? 'transparent' : $preset_data['bottom2'] ?>"></span>
                </div>
            </div>
        </div>

        <div class="control-group">
            <div class="control-label">
                <label for="color_footer">Footer</label>
            </div>
            <div class="controls">
                <div class="colorpicker-container">
                    <input id="color_footer" type="text" class="txtColorPicker zo2_preset_variable" value="<?php echo $preset_data['footer'] ?>">
                    <span id="color_footer_preview" class="color-preview" style="background-color: <?php echo empty($preset_data['footer']) ? 'transparent' : $preset_data['footer'] ?>"></span>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="zo2_themes_row clearfix">
    <div class="zo2_themes_label">
        Other Preset Settings
    </div>
    <div class="zo2_themes_form_container preset-setting">
        <?php
        if (!empty($preset_data['extra'])) {
            $extra = json_decode($preset_data['extra']);
            if (count($extra) > 0) {
                foreach ($extra as $element => $color) {
                    ?>
                    <div class="zo2_themes_form">
                        <div class="control-group">
                            <div class="control-label">
                                <label><input value="<?php echo $element; ?>" class="zo2_other_preset_element zo2_other_preset"></label>
                            </div>
                            <div class="controls">
                                <div class="colorpicker-container">
                                    <input id="extra_element_value" type="text" class="txtColorPicker zo2_other_preset zo2_other_preset_value" value="<?php echo $color ?>">
                                    <span id="extra_element_preview" class="color-preview" style="background-color: <?php echo empty($color) ? 'transparent' : $color ?>"></span>
                                    <input type="button" class="btn remove_preset" value="Remove" />
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
        }
        ?>
        <div class="zo2_themes_form">
            <input type="button" class="btn add_more_preset" value="Add more" />
        </div>
    </div>



    <div class="zo2_themes_row clearfix">

        <div class="zo2_themes_label">
            Layout Style and Background
        </div>
        <div class="control-group">
            <div class="control-label">
                <label class="hasTooltip">Choose layout</label>
            </div>
            <div class="controls">
                <fieldset class="radio btn-group">
                    <input type="hidden" value="<?php echo $preset_data['boxed']; ?>" name="zo2_boxed_style" id="zo2_boxed_style" />
                    <label class="btn layout_style_choose <?php if ($preset_data['boxed'] == 0) echo 'btn-success'; ?>">Full width layout</label>
                    <label class="btn layout_style_choose boxed <?php if ($preset_data['boxed'] == 1) echo 'btn-success'; ?>">Boxed layout</label>
                </fieldset>
            </div>
        </div>
        <div class="zo2_background_and_pattern" <?php if ($preset_data['boxed'] == 0) echo 'style="display:none"'; ?>>
            <div class="control-group">
                <div class="control-label">
                    <label class="">Background Image</label>
                </div>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <div class="media-preview add-on">
                            <span class="hasTipPreview" title=""><i class="icon-eye-open"></i></span>
                        </div>
                        <input type="text" name="zo2_background_image" id="zo2_background_image" value="<?php echo $preset_data['bg_image']; ?>" readonly="readonly" class="input-small">
                        <a class="modal btn" title="Select" href="index.php?option=com_media&view=images&tmpl=component&asset=com_templates&author=&fieldid=zo2_background_image&folder=" rel="{handler: 'iframe', size: {x: 800, y: 500}}">
                            Select
                        </a>
                        <a class="btn hasTooltip" title="" href="#" onclick="jInsertFieldValue('', 'zo2_background_image');
                                    return false;" data-original-title="Clear">
                            <i class="icon-remove"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr />
            <div class="zo2_themes_label">
                Pattern Background
            </div>
            <div class="zo2_themes_form">
                <ul class="options background-select">
                    <?php
                    $backgroundsDir =  Zo2Framework::getTemplatePath(). '/assets/zo2/images/background-patterns';
                    $bgPatterns =  glob($backgroundsDir.'/*.*');
                    if(count($bgPatterns) > 0) {
                        foreach($bgPatterns as $pattern ) {
                            $selected = '';
                            $pattern_src = Zo2HelperPath::toUrl($pattern);
                            $pattern_path = str_replace(JPATH_ROOT . '/', '', $pattern);
                            if( isset($preset_data['bg_pattern']) && ($pattern_path == $preset_data['bg_pattern']) )
                                $selected = 'selected';
                            echo '<li class="'.$selected.'"><img rel="'.$pattern_path.'" src="'.$pattern_src.'" /></li>';
                        }
                    }
                    ?>
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <br />
</div>
</div>