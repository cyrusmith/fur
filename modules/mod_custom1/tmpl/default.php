<?php
/**
 * @package        Joomla.Site
 * @subpackage    mod_custom
 * @copyright    Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$tplPath = JURI::base(true) . '/templates/' . $app->getTemplate() . '/';

?>
<div
    class="triggers<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')): ?> style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"<?php endif;?> >

    <img src="<?php echo $tplPath; ?>images/descriptor_img1.jpg" class="descriptor_img"/>

    <div class="descriptor_text">
        <h1>Фурминатор - инновационное устройство для избавления от пуха и шерсти домашних животных</h1>
        <ul class="features">
            <li>
                <strong>Безопасно.</strong> Легко убирает до 90% отмершего подшерстка, не повреждая остевой волос
            </li>
            <li>
                <strong>Легко.</strong> 2-3 чистки в месяц достаточно, чтобы навсегда забыть о проблемах с пухом
                домашних
                жывотных
            </li>
            <li>
                <strong>Удобно.</strong> Особенности конструкции позволяют быстро и без вреда для вашего питомца
                провести
                процедуру очистки от подшерстка.
            </li>
        </ul>
    </div>

    <div class="howitworks">

        <h2>Как работает фурминатор?</h2>

        <blockquote>
            <span>«</span>Подшерсток не срезается, а просто подцепляется и поднимается на поверхность, не задевая остевой волос,
            специально сконструированными зубочками. Расстояние между этими зубочками достаточное для того, чтобы
            гладенькие и толстые остевые ворсинки просто между ними проскальзывали во время вычесывания<span>»</span>.
        </blockquote>
        <a href="#" class="knowmore"><span>Узнать больше о фурминаторах</span></a>

    </div>

    <div class="compare">

        <table>
            <tr>
                <th class="col1"><img src="<?php echo $tplPath; ?>images/puhoderka.jpg"/><span>Пуходерка</span></th>
                <th class="sep"><span>или</span></th>
                <th class="col2"><img src="<?php echo $tplPath; ?>images/furm.jpg"/><span>Фурминатор</span></th>
            </tr>
        </table>

    </div>

</div>
