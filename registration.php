<?php

/**
 * @package   Zarkiewicz\ZeroDowntimeDeployment
 * @author    Siergiej Żarkiewicz <siergiej.zarkiewicz@gmail.com>
 * @copyright Siergiej Żarkiewicz
 * @license   See LICENSE.txt for license details.
 */

declare(strict_types=1);

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Zarkiewicz_ZeroDowntimeDeployment', __DIR__);
