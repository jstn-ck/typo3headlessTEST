<?php

class partial_SimplePagination_a8cfded02a770da178e0f9373cf89f5eee6898f5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'headless' => 
  array (
    0 => 'FriendsOfTYPO3\\Headless\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <nav class="pagination-wrap">
        <ul class="pagination">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['action'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['controller'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['pageType'] = 0;
$arguments39['noCache'] = NULL;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['linkAccessRestrictedPages'] = false;
$arguments39['additionalParams'] = array (
);
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['addQueryStringMethod'] = NULL;
// Rendering Array
$array41 = array();
$array41['currentPage'] = 1;
$arguments39['arguments'] = $array41;

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'pagination.first';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output38 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['identifier'] = NULL;
$arguments44['size'] = 'small';
$arguments44['overlay'] = NULL;
$arguments44['state'] = 'default';
$arguments44['alternativeMarkupIdentifier'] = NULL;
$arguments44['identifier'] = 'actions-view-paging-first';

$output38 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output38 .= '
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['action'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['controller'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = 0;
$arguments46['noCache'] = NULL;
$arguments46['section'] = '';
$arguments46['format'] = '';
$arguments46['linkAccessRestrictedPages'] = false;
$arguments46['additionalParams'] = array (
);
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['addQueryStringMethod'] = NULL;
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber', $array49);
$arguments46['arguments'] = $array48;

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output38 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'pagination.previous';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output38 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['identifier'] = NULL;
$arguments52['size'] = 'small';
$arguments52['overlay'] = NULL;
$arguments52['state'] = 'default';
$arguments52['alternativeMarkupIdentifier'] = NULL;
$arguments52['identifier'] = 'actions-view-paging-previous';

$output38 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output38 .= '
                        </a>
                    </li>
                ';
return $output38;
};
$arguments36 = array();

$output35 .= '';

$output35 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['identifier'] = NULL;
$arguments57['size'] = 'small';
$arguments57['overlay'] = NULL;
$arguments57['state'] = 'default';
$arguments57['alternativeMarkupIdentifier'] = NULL;
$arguments57['identifier'] = 'empty-empty';

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                        </span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['identifier'] = NULL;
$arguments59['size'] = 'small';
$arguments59['overlay'] = NULL;
$arguments59['state'] = 'default';
$arguments59['alternativeMarkupIdentifier'] = NULL;
$arguments59['identifier'] = 'empty-empty';

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output56 .= '
                        </span>
                    </li>
                ';
return $output56;
};
$arguments54 = array();
$arguments54['if'] = NULL;

$output35 .= '';

$output35 .= '
            ';
return $output35;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber', $array31);
$array30['1'] = ' && ';
$array32 = array (
);$array30['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber', $array32);
$array30['3'] = ' >= ';
$array33 = array (
);$array30['4'] = $renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber', $array33);

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) >= TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])));};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['action'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['pageType'] = 0;
$arguments10['noCache'] = NULL;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['linkAccessRestrictedPages'] = false;
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['addQueryStringMethod'] = NULL;
// Rendering Array
$array12 = array();
$array12['currentPage'] = 1;
$arguments10['arguments'] = $array12;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output9 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'pagination.first';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output9 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['identifier'] = NULL;
$arguments15['size'] = 'small';
$arguments15['overlay'] = NULL;
$arguments15['state'] = 'default';
$arguments15['alternativeMarkupIdentifier'] = NULL;
$arguments15['identifier'] = 'actions-view-paging-first';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output9 .= '
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['action'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['controller'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['pageType'] = 0;
$arguments17['noCache'] = NULL;
$arguments17['section'] = '';
$arguments17['format'] = '';
$arguments17['linkAccessRestrictedPages'] = false;
$arguments17['additionalParams'] = array (
);
$arguments17['absolute'] = false;
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['addQueryStringMethod'] = NULL;
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber', $array20);
$arguments17['arguments'] = $array19;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output9 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'pagination.previous';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output9 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['identifier'] = NULL;
$arguments23['size'] = 'small';
$arguments23['overlay'] = NULL;
$arguments23['state'] = 'default';
$arguments23['alternativeMarkupIdentifier'] = NULL;
$arguments23['identifier'] = 'actions-view-paging-previous';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output9 .= '
                        </a>
                    </li>
                ';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['identifier'] = NULL;
$arguments26['size'] = 'small';
$arguments26['overlay'] = NULL;
$arguments26['state'] = 'default';
$arguments26['alternativeMarkupIdentifier'] = NULL;
$arguments26['identifier'] = 'empty-empty';

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                        </span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['identifier'] = NULL;
$arguments28['size'] = 'small';
$arguments28['overlay'] = NULL;
$arguments28['state'] = 'default';
$arguments28['alternativeMarkupIdentifier'] = NULL;
$arguments28['identifier'] = 'empty-empty';

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
                        </span>
                    </li>
                ';
return $output25;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            <li class="page-item">
                <span class="page-link">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'pagination.records';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output6 .= ' ';
$array63 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.startRecordNumber', $array63)]);

$output6 .= ' - ';
$array64 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.endRecordNumber', $array64)]);

$output6 .= '
                </span>
            </li>
            <li class="page-item">
                <span class="page-link">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'pagination.page';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output6 .= '
                    <form style="display:inline;"
                        data-global-event="submit"
                        data-action-navigate="$form=~s/$value/"
                        data-navigate-value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['action'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['controller'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['pluginName'] = NULL;
$arguments67['pageUid'] = NULL;
$arguments67['pageType'] = 0;
$arguments67['noCache'] = NULL;
$arguments67['section'] = '';
$arguments67['format'] = '';
$arguments67['linkAccessRestrictedPages'] = false;
$arguments67['additionalParams'] = array (
);
$arguments67['absolute'] = false;
$arguments67['addQueryString'] = false;
$arguments67['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments67['addQueryStringMethod'] = NULL;
// Rendering Array
$array69 = array();
$array69['currentPage'] = '$[value]';
$arguments67['arguments'] = $array69;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output6 .= '"
                        data-value-selector="input[name=\'paginator-target-page\']">
                        <input
                            min="';
$array70 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber', $array70)]);

$output6 .= '"
                            max="';
$array71 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber', $array71)]);

$output6 .= '"
                            data-number-of-pages="';
$array72 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginator.numberOfPages', $array72)]);

$output6 .= '"
                            name="paginator-target-page"
                            class="form-control form-control-sm paginator-input"
                            size="5"
                            value="';
$array73 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginator.currentPageNumber', $array73)]);

$output6 .= '"
                            type="number"
                        />
                    </form>
                    / ';
$array74 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber', $array74)]);

$output6 .= '
                </span>
            </li>

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['action'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['controller'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['pluginName'] = NULL;
$arguments108['pageUid'] = NULL;
$arguments108['pageType'] = 0;
$arguments108['noCache'] = NULL;
$arguments108['section'] = '';
$arguments108['format'] = '';
$arguments108['linkAccessRestrictedPages'] = false;
$arguments108['additionalParams'] = array (
);
$arguments108['absolute'] = false;
$arguments108['addQueryString'] = false;
$arguments108['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments108['addQueryStringMethod'] = NULL;
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber', $array111);
$arguments108['arguments'] = $array110;

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['languageKey'] = NULL;
$arguments112['alternativeLanguageKeys'] = NULL;
$arguments112['key'] = 'pagination.next';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output107 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['identifier'] = NULL;
$arguments114['size'] = 'small';
$arguments114['overlay'] = NULL;
$arguments114['state'] = 'default';
$arguments114['alternativeMarkupIdentifier'] = NULL;
$arguments114['identifier'] = 'actions-view-paging-next';

$output107 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output107 .= '
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['action'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['controller'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['pluginName'] = NULL;
$arguments116['pageUid'] = NULL;
$arguments116['pageType'] = 0;
$arguments116['noCache'] = NULL;
$arguments116['section'] = '';
$arguments116['format'] = '';
$arguments116['linkAccessRestrictedPages'] = false;
$arguments116['additionalParams'] = array (
);
$arguments116['absolute'] = false;
$arguments116['addQueryString'] = false;
$arguments116['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments116['addQueryStringMethod'] = NULL;
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber', $array119);
$arguments116['arguments'] = $array118;

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output107 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['key'] = NULL;
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['languageKey'] = NULL;
$arguments120['alternativeLanguageKeys'] = NULL;
$arguments120['key'] = 'pagination.last';

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output107 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['identifier'] = NULL;
$arguments122['size'] = 'small';
$arguments122['overlay'] = NULL;
$arguments122['state'] = 'default';
$arguments122['alternativeMarkupIdentifier'] = NULL;
$arguments122['identifier'] = 'actions-view-paging-last';

$output107 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output107 .= '
                        </a>
                    </li>
                ';
return $output107;
};
$arguments105 = array();

$output104 .= '';

$output104 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['identifier'] = NULL;
$arguments127['size'] = 'small';
$arguments127['overlay'] = NULL;
$arguments127['state'] = 'default';
$arguments127['alternativeMarkupIdentifier'] = NULL;
$arguments127['identifier'] = 'empty-empty';

$output126 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                        </span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['identifier'] = NULL;
$arguments129['size'] = 'small';
$arguments129['overlay'] = NULL;
$arguments129['state'] = 'default';
$arguments129['alternativeMarkupIdentifier'] = NULL;
$arguments129['identifier'] = 'empty-empty';

$output126 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output126 .= '
                        </span>
                    </li>
                ';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output104 .= '';

$output104 .= '
            ';
return $output104;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber', $array100);
$array99['1'] = ' && ';
$array101 = array (
);$array99['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber', $array101);
$array99['3'] = ' <= ';
$array102 = array (
);$array99['4'] = $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber', $array102);

$expression103 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) <= TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])));};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['action'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = 0;
$arguments78['noCache'] = NULL;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber', $array81);
$arguments78['arguments'] = $array80;

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'pagination.next';

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output77 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['identifier'] = NULL;
$arguments84['size'] = 'small';
$arguments84['overlay'] = NULL;
$arguments84['state'] = 'default';
$arguments84['alternativeMarkupIdentifier'] = NULL;
$arguments84['identifier'] = 'actions-view-paging-next';

$output77 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output77 .= '
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['action'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['controller'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['pluginName'] = NULL;
$arguments86['pageUid'] = NULL;
$arguments86['pageType'] = 0;
$arguments86['noCache'] = NULL;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['linkAccessRestrictedPages'] = false;
$arguments86['additionalParams'] = array (
);
$arguments86['absolute'] = false;
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['addQueryStringMethod'] = NULL;
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber', $array89);
$arguments86['arguments'] = $array88;

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output77 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['languageKey'] = NULL;
$arguments90['alternativeLanguageKeys'] = NULL;
$arguments90['key'] = 'pagination.last';

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output77 .= '" class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'actions-view-paging-last';

$output77 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output77 .= '
                        </a>
                    </li>
                ';
return $output77;
};
$arguments75['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['identifier'] = NULL;
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['identifier'] = 'empty-empty';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                        </span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['identifier'] = NULL;
$arguments97['size'] = 'small';
$arguments97['overlay'] = NULL;
$arguments97['state'] = 'default';
$arguments97['alternativeMarkupIdentifier'] = NULL;
$arguments97['identifier'] = 'empty-empty';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output94 .= '
                        </span>
                    </li>
                ';
return $output94;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output6 .= '
            <li class="page-item">
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['action'] = NULL;
$arguments131['arguments'] = array (
);
$arguments131['controller'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['pluginName'] = NULL;
$arguments131['pageUid'] = NULL;
$arguments131['pageType'] = 0;
$arguments131['noCache'] = NULL;
$arguments131['section'] = '';
$arguments131['format'] = '';
$arguments131['linkAccessRestrictedPages'] = false;
$arguments131['additionalParams'] = array (
);
$arguments131['absolute'] = false;
$arguments131['addQueryString'] = false;
$arguments131['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments131['addQueryStringMethod'] = NULL;
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['currentPage'] = $renderingContext->getVariableProvider()->getByPath('paginator.currentPageNumber', $array134);
$arguments131['arguments'] = $array133;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output6 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['languageKey'] = NULL;
$arguments135['alternativeLanguageKeys'] = NULL;
$arguments135['key'] = 'pagination.refresh';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output6 .= '" class="page-link">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['identifier'] = NULL;
$arguments137['size'] = 'small';
$arguments137['overlay'] = NULL;
$arguments137['state'] = 'default';
$arguments137['alternativeMarkupIdentifier'] = NULL;
$arguments137['identifier'] = 'actions-refresh';

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output6 .= '
                </a>
            </li>
        </ul>
    </nav>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('paginator.numberOfPages', $array4);
$array3['1'] = ' > 1';

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#