<?php

class partial_Groupname_30832de25e3c0fee22c9ec3cf3867cd9aa9fc8bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<span id="g_';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId', $array1)]);

$output0 .= '">
    <button
        type="button"
        class="ug_selector changegroup btn btn-link"
        data-page="';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId', $array2)]);

$output0 .= '"
        data-group-id="';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupId', $array3)]);

$output0 .= '"
        data-groupname="';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupname', $array4)]);

$output0 .= '"
        title="';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupname', $array5)]);

$output0 .= '"
    >
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return '
                    No group set -> [not set]
                ';
};
$arguments49 = array();

$output48 .= NULL;

$output48 .= '
                [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:notSet';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output48 .= ']
            ';
return $output48;
};
$arguments46 = array();

$output45 .= '';

$output45 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return '
                            A group name can be resolved
                        ';
};
$arguments74 = array();

$output73 .= NULL;

$output73 .= '
                        ';
$array76 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupname', $array76)]);

$output73 .= '
                    ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return '
                            Group was deleted -> [deleted]
                        ';
};
$arguments80 = array();

$output79 .= NULL;

$output79 .= '
                        [';
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
$arguments82['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:deleted';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output79 .= ']
                    ';
return $output79;
};
$arguments77 = array();
$arguments77['if'] = NULL;

$output70 .= '';

$output70 .= '
                ';
return $output70;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('groupname', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return '
                            A group name can be resolved
                        ';
};
$arguments59 = array();

$output58 .= NULL;

$output58 .= '
                        ';
$array61 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupname', $array61)]);

$output58 .= '
                    ';
return $output58;
};
$arguments56['__elseClosures'][] = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return '
                            Group was deleted -> [deleted]
                        ';
};
$arguments63 = array();

$output62 .= NULL;

$output62 .= '
                        [';
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
$arguments65['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:deleted';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output62 .= ']
                    ';
return $output62;
};

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
            ';
return $output55;
};
$arguments53 = array();
$arguments53['if'] = NULL;

$output45 .= '';

$output45 .= '
        ';
return $output45;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('groupId', $array43);
$array42['1'] = ' == 0';

$expression44 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return '
                    No group set -> [not set]
                ';
};
$arguments9 = array();

$output8 .= NULL;

$output8 .= '
                [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:notSet';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output8 .= ']
            ';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return '
                            A group name can be resolved
                        ';
};
$arguments32 = array();

$output31 .= NULL;

$output31 .= '
                        ';
$array34 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupname', $array34)]);

$output31 .= '
                    ';
return $output31;
};
$arguments29 = array();

$output28 .= '';

$output28 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return '
                            Group was deleted -> [deleted]
                        ';
};
$arguments38 = array();

$output37 .= NULL;

$output37 .= '
                        [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:deleted';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output37 .= ']
                    ';
return $output37;
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output28 .= '';

$output28 .= '
                ';
return $output28;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('groupname', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return '
                            A group name can be resolved
                        ';
};
$arguments17 = array();

$output16 .= NULL;

$output16 .= '
                        ';
$array19 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupname', $array19)]);

$output16 .= '
                    ';
return $output16;
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
                            Group was deleted -> [deleted]
                        ';
};
$arguments21 = array();

$output20 .= NULL;

$output20 .= '
                        [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:deleted';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output20 .= ']
                    ';
return $output20;
};

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            ';
return $output13;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
    </button>
</span>
';

return $output0;
}


}
#