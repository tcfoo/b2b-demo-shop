<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Comment;

use Spryker\Zed\Comment\CommentDependencyProvider as SprykerCommentDependencyProvider;
use Spryker\Zed\Quote\Communication\Plugins\Comment\QuoteCommentValidatorPlugin;

class CommentDependencyProvider extends SprykerCommentDependencyProvider
{
    /**
     * @return array
     */
    public function getCommentValidatorPlugins() : array
    {
        return [
            new QuoteCommentValidatorPlugin(),
        ];
    }
}