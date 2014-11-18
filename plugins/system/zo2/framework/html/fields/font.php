<?php
/**
 * Zo2 (http://www.zootemplate.com/zo2)
 * A powerful Joomla template framework
 *
 * @link        http://www.zootemplate.com/zo2
 * @link        https://github.com/cleversoft/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2014 CleverSoft (http://cleversoft.co/)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');
/* @var $this JFormFieldFont */
$data = null;
$enable = false;
if (!empty($this->data['value'])) {
    $data = json_decode($this->data['value'], true);
    $enable = true;
}
/**
 * Init default data
 */
if (!isset($data['type']))
    $data['type'] = 'standard';
if (!isset($data['size']))
    $data['size'] = '14';
if (!isset($data['style']))
    $data['style'] = null;
if (!isset($data['family']))
    $data['family'] = null;

$standardFonts = array(
    '\'Helvetica Neue\', Helvetica',
    'Arial',
    'Tahoma',
    'Verdana',
    '\'Myriad Pro\''
);

$fontStyles = array(
    'n' => 'Normal',
    'b' => 'Bold',
    'i' => 'Italic',
    'bi' => 'Bold Italic'
);
?>
<div class="font-container">
    <input type="hidden" value="<?php echo htmlspecialchars($this->data['value']) ?>" name="<?php echo $this->data['name'] ?>" id="<?php echo $this->data['id'] ?>" />
    <h3><?php echo $this->label['label']; ?></h3>
    <div class="font_options" <?php echo $data ? 'style="display:block"' : 'style="display:none"' ?>>
        <div class="control-group">
            <div class="control-label">
                <div class="font-label">Font type</div>
                <div class="font-desc">Choose the type of font you want to use for <?php echo $this->label['label']; ?></div>
            </div>
            <div class="controls">
                <div class="btn-group font-types" data-toggle="buttons-radio">
                    <button type="button" class="btn btnStandardFonts <?php echo $data['type'] == 'standard' ? 'active btn-success' : '' ?>">Standard Fonts</button>
                    <button type="button" class="btn btnGoogleFonts <?php echo $data['type'] == 'googlefonts' ? 'active btn-success' : '' ?>">Google Fonts</button>
                    <button type="button" class="btn btnFontDeck <?php echo $data['type'] == 'fontdeck' ? 'active btn-success' : '' ?>">FontDeck</button>
                </div>
            </div>
        </div>

        <div class="font-options-standard control-group" <?php echo $data['type'] == 'standard' ? 'style="display:block"' : '' ?>>
            <div class="control-label">
                <div class="font-label">Standard Font</div>
                <div class="font-desc">Choose the font face that is used for <?php echo $this->label['label']; ?></div>
            </div>
            <div class="controls">
                <select class="ddlStandardFont show">
                    <?php foreach ($standardFonts as $font) : ?>
                        <option <?php echo $data['family'] == $font ? 'selected' : '' ?> value="<?php echo htmlspecialchars($font) ?>"><?php echo htmlspecialchars($font) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="font-options-google hide control-group" <?php echo $data['type'] == 'googlefonts' ? 'style="display:block"' : '' ?>>
            <div class="control-label">
                <div class="font-label">Google Font</div>
                <div class="font-desc">Choose the type of font you want to use for <?php echo $this->label['label']; ?></div>
            </div>
            <div class="controls">
                <input type="text" class="txtGoogleFontSelect" value="<?php echo $data['type'] == 'googlefonts' ? $data['family'] : '' ?>" />
            </div>
        </div>

        <div class="font-options-fontdeck hide control-group" <?php echo $data['type'] == 'fontdeck' ? 'style="display:block"' : '' ?>>
            <div class="control-label">
                <div class="font-label">FontDeck Name</div>
                <div class="font-desc">Paste the font family attribute from CSS code in Step 2 of FontDeck website here</div>
            </div>
            <div class="controls">
                <textarea class="txtFontDeckCss"><?php echo $data['type'] == 'fontdeck' ? $data['family'] : '' ?></textarea>
            </div>
        </div>

        <div class="control-group">
            <div class="control-label">
                <div class="font-label">Font Size</div>
                <div class="font-desc">Specify the <?php echo $this->label['label']; ?> font properties</div>
            </div>
            <div class="controls clearfix">
                <div class="slider_font_size"></div>
                <label for="amount"><?php echo $data['size'] ?> px</label><?php echo $data['size'] ?>
                <input type="hidden" class="txtFontSize slider_font_size_value" value="<?php echo $data['size'] ?>" readonly>
            </div>

            <div class="control-label">
                <div class="font-label">Font Style</div>
                <div class="font-desc">Specify the <?php echo $this->label['label']; ?> font properties</div>
            </div>
            <div class="controls clearfix">
                <div>
                    <select class="ddlFontStyle">
                        <?php foreach ($fontStyles as $style => $title) { ?>
                            <?php $selected = trim($data['style']) == trim($style); ?>
                            <option <?php echo ($selected) ? 'selected' : '' ?> value="<?php echo $style ?>"><?php echo $title ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>