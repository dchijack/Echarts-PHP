<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\ParallelAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    Set this to false to prevent the axis label from appearing.
 *
 * @property int|callable $interval Default: 'auto'
 *    
 *
 * @property boolean $inside Default: false
 *    Set this to true so the axis labels face the inside direction.
 *
 * @property int $rotate Default: 0
 *    Rotation degree of axis label, which is especially useful when there is no enough space for category axis.
 *     Rotation degree is from -90 to 90.
 *
 * @property int $margin Default: 8
 *    The margin between the axis label and the axis line.
 *
 * @property string|callable $formatter
 *    Formatter of axis label, which supports string template and callback function.
 *     Example:
 *     // Use string template; template variable is the default label of axis {value}
 *     formatter: {value} kg
 *     
 *     // Use callback function; function parameters are axis index
 *     formatter: function (value, index) {
 *         // Formatted to be month/day; display year only in the first label
 *         var date = new Date(value);
 *         var texts = [(date.getMonth() + 1), date.getDate()];
 *         if (idx === 0) {
 *             texts.unshift(date.getYear());
 *         }
 *         return texts.join(/);
 *     }
 *
 * @property boolean $showMinLabel
 *    Whether to show the label of the min tick. Optional values: true, false, null. It is auto determined by default, that is, if labels are overlapped, the label of the min tick will not be displayed.
 *
 * @property boolean $showMaxLabel
 *    Whether to show the label of the max tick. Optional values: true, false, null. It is auto determined by default, that is, if labels are overlapped, the label of the max tick will not be displayed.
 *
 * @property string|callable $color
 *    Color of axis label is set to be axisLine.lineStyle.color by default. Callback function is supported, in the following format:
 *     (val: string) =&gt; Color
 *     
 *     Parameter is the text of label, and return value is the color. See the following example:
 *     textStyle: {
 *         color: function (value, index) {
 *             return value &gt;= 0 ? green : red;
 *         }
 *     }
 *
 * @property string $fontStyle Default: 'normal'
 *     font style
 *     Options are:
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string $fontWeight Default: 'normal'
 *     font thick weight
 *     Options are:
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *     font family
 *     Can also be serif , monospace, ...
 *
 * @property int $fontSize Default: 12
 *     font size
 *
 * @property string $align
 *    Horizontal alignment of text, automatic by default.
 *     Options are:
 *     
 *     left
 *     center
 *     right
 *     
 *     If align is not set in rich, align in parent level will be used. For example:
 *     {
 *         align: right,
 *         rich: {
 *             a: {
 *                 // `align` is not set, then it will be right
 *             }
 *         }
 *     }
 *
 * @property string $verticalAlign
 *    Vertical alignment of text, automatic by default.
 *     Options are:
 *     
 *     top
 *     middle
 *     bottom
 *     
 *     If verticalAlign is not set in rich, verticalAlign in parent level will be used. For example:
 *     {
 *         verticalAlign: bottom,
 *         rich: {
 *             a: {
 *                 // `verticalAlign` is not set, then it will be bottom
 *             }
 *         }
 *     }
 *
 * @property int $lineHeight
 *    Line height of the text fregment.
 *     If lineHeight is not set in rich, lineHeight in parent level will be used. For example:
 *     {
 *         lineHeight: 56,
 *         rich: {
 *             a: {
 *                 // `lineHeight` is not set, then it will be 56
 *             }
 *         }
 *     }
 *
 * @property string|array $backgroundColor Default: 'transparent'
 *    Background color of the text fregment.
 *     Can be color string, like #123234, red, rgba(0,23,11,0.3).
 *     Or image can be used, for example:
 *     backgroundColor: {
 *         image: xxx/xxx.png
 *         // It can be URL of a image,
 *         // or dataURI,
 *         // or HTMLImageElement,
 *         // or HTMLCanvasElement.
 *     }
 *     
 *     width or height can be specified when using background image, or
 *     auto adapted by default.
 *
 * @property string $borderColor Default: 'transparent'
 *    Border color of the text fregment.
 *
 * @property int $borderWidth Default: 0
 *    Border width of the text fregment.
 *
 * @property int $borderRadius Default: 0
 *    Border radius of the text fregment.
 *
 * @property int|array $padding Default: 0
 *    Padding of the text fregment, for example:
 *     
 *     padding: [3, 4, 5, 6]: represents padding of [top, right, bottom, left].
 *     padding: 4: represents padding: [4, 4, 4, 4].
 *     padding: [3, 4]: represents padding: [3, 4, 3, 4].
 *     
 *     Notice, width and height specifies the width and height of the content, without padding.
 *
 * @property string $shadowColor Default: 'transparent'
 *    Shadow color of the text block.
 *
 * @property int $shadowBlur Default: 0
 *    Show blur of the text block.
 *
 * @property int $shadowOffsetX Default: 0
 *    Shadow X offset of the text block.
 *
 * @property int $shadowOffsetY Default: 0
 *    Shadow Y offset of the text block.
 *
 * @property int|string $width
 *    Width of the text block. It is the width of the text by default. In most cases, there is no need to specify it. You may want to use it in some cases like make simple table or using background image (see backgroundColor).
 *     Notice, width and height specifies the width and height of the content, without padding.
 *     width can also be percent string, like 100%, which represents the percent of contentWidth (that is, the width without padding) of its container box. It is based on contentWidth because that each text fregment is layout based on the content box, where it makes no sense that calculating width based on outerWith in prectice.
 *     Notice, width and height only work when rich specified.
 *
 * @property int|string $height
 *    Height of the text block. It is the width of the text by default. You may want to use it in some cases like using background image (see backgroundColor).
 *     Notice, width and height specifies the width and height of the content, without padding.
 *     Notice, width and height only work when rich specified.
 *
 * @property string $textBorderColor Default: 'transparent'
 *    Storke color of the text.
 *
 * @property int $textBorderWidth Default: 0
 *    Storke line width of the text.
 *
 * @property string $textShadowColor Default: 'transparent'
 *    Shadow color of the text itself.
 *
 * @property int $textShadowBlur Default: 0
 *    Shadow blue of the text itself.
 *
 * @property int $textShadowOffsetX Default: 0
 *    Shadow X offset of the text itself.
 *
 * @property int $textShadowOffsetY Default: 0
 *    Shadow Y offset of the text itself.
 *
 * @property AxisLabel\Rich $rich
 *    Rich text styles can be defined in this rich property. For example:
 *     label: {
 *         // Styles defined in rich can be applied to some fregments
 *         // of text by adding some markers to those fregment, like
 *         // `{styleName|text content text content}`.
 *         // `\n` is the newline character.
 *         formatter: [
 *             {a|Style a is applied to this snippet}
 *             {b|Style b is applied to this snippet}This snippet use default style{x|use style x}
 *         ].join(\n),
 *     
 *         rich: {
 *             a: {
 *                 color: red,
 *                 lineHeight: 10
 *             },
 *             b: {
 *                 backgroundColor: {
 *                     image: xxx/xxx.jpg
 *                 },
 *                 height: 40
 *             },
 *             x: {
 *                 fontSize: 18,
 *                 fontFamily: Microsoft YaHei,
 *                 borderColor: #449933,
 *                 borderRadius: 4
 *             },
 *             ...
 *         }
 *     }
 *     
 *     For more details, see Rich Text please.
 *
 * {_more_}
 */
class AxisLabel extends Property {}