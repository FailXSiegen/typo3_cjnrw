<?php
namespace Failx\Cjnrw\ViewHelpers;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithContentArgumentAndRenderStatic;

/**
 * Gets a advent from a string or string-compatible value.
 *
 * Also see the `<f:format.crop>` view helper.
 */
class AdventViewHelper extends AbstractViewHelper
{
    use CompileWithContentArgumentAndRenderStatic;

    /**
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('content', 'string', 'Content string to convert for advent');
    }

    /**
     * Substrings a string or string-compatible value
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return mixed
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $coordinates = explode("\n", $arguments['content']);
        
        $result = [];
        foreach ($coordinates as $key => $value) {
            $value = trim($value);
            $day = $key + 1;
            $result[$key]['day'] = $day;
            $result[$key]['coords'] = $value;
        }
        return $result;
    }
}
