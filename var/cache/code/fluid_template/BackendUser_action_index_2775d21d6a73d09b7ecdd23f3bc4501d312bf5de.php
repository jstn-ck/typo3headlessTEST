<?php

class BackendUser_action_index_2775d21d6a73d09b7ecdd23f3bc4501d312bf5de extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'backendUserListing';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return '
        Listing of users on compare list
    ';
};
$arguments3 = array();

$output0 .= NULL;

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
        <h3>';
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
$arguments11['key'] = 'section.compare';
$arguments11['default'] = 'Compare';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</h3>
        <div class="table-fit">
            <table id="typo3-backend-user-list-compare" class="table table-hover">
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                        <tr>
                            <td>
                                <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array17)]);

$output16 .= '" title="id=';
$array18 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array18)]);

$output16 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['backendUser'] = 0;
$arguments19['size'] = 32;
$arguments19['showIcon'] = false;
$array21 = array (
);$arguments19['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array21);
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array22['0'] = 'TRUE';

$expression23 = function($context) {return TRUE;};
$arguments19['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);

$output16 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
                                </a>
                            </td>
                            <td class="col-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                                    <b>';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.username', $array28)]);

$output27 .= '</b>
                                ';
return $output27;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['aria'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['uid'] = NULL;
$arguments24['table'] = NULL;
$arguments24['fields'] = NULL;
$arguments24['returnUrl'] = '';
$arguments24['table'] = 'be_users';
$array26 = array (
);$arguments24['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array26);
$arguments24['title'] = 'edit';

$output16 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output16 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                    <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'online';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '</span>
                                ';
return $output34;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{compareUser.uid}', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output16 .= '
                                <br />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                                        ';
$array47 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array47)]);

$output46 .= '
                                    ';
return $output46;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['aria'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['uid'] = NULL;
$arguments43['table'] = NULL;
$arguments43['fields'] = NULL;
$arguments43['returnUrl'] = '';
$arguments43['table'] = 'be_users';
$array45 = array (
);$arguments43['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array45);
$arguments43['title'] = 'edit';

$output42 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
                                ';
return $output42;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array40);

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = $renderChildrenClosure38;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output16 .= '
                            </td>
                            <td class="col-control">
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['identifier'] = NULL;
$arguments54['size'] = 'small';
$arguments54['overlay'] = NULL;
$arguments54['state'] = 'default';
$arguments54['alternativeMarkupIdentifier'] = NULL;
$arguments54['identifier'] = 'actions-open';

$output53 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                                    ';
return $output53;
};
$arguments48 = array();
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['aria'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['uid'] = NULL;
$arguments48['table'] = NULL;
$arguments48['fields'] = NULL;
$arguments48['returnUrl'] = '';
$arguments48['class'] = 'btn btn-default';
$arguments48['table'] = 'be_users';
$array50 = array (
);$arguments48['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array50);
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
$arguments51['key'] = 'edit';
$arguments48['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output16 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output16 .= '
                                </div>
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['identifier'] = NULL;
$arguments63['size'] = 'small';
$arguments63['overlay'] = NULL;
$arguments63['state'] = 'default';
$arguments63['alternativeMarkupIdentifier'] = NULL;
$arguments63['identifier'] = 'actions-remove';

$output62 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                                    ';
return $output62;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['aria'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = NULL;
$arguments56['rel'] = NULL;
$arguments56['rev'] = NULL;
$arguments56['target'] = NULL;
$arguments56['action'] = NULL;
$arguments56['controller'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['pluginName'] = NULL;
$arguments56['pageUid'] = NULL;
$arguments56['pageType'] = NULL;
$arguments56['noCache'] = NULL;
$arguments56['section'] = NULL;
$arguments56['format'] = NULL;
$arguments56['linkAccessRestrictedPages'] = NULL;
$arguments56['additionalParams'] = NULL;
$arguments56['absolute'] = NULL;
$arguments56['addQueryString'] = NULL;
$arguments56['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments56['addQueryStringMethod'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['action'] = 'removeFromCompareList';
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array59);
$arguments56['arguments'] = $array58;
$arguments56['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'remove';
$arguments56['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output16 .= '
                                </div>
                            </td>
                        </tr>
                    ';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$array15 = array (
);$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array15);
$arguments13['as'] = 'compareUser';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '
                </tbody>
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'compareUserList';
$arguments69['default'] = 'Compare user list';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['aria'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$arguments65['action'] = NULL;
$arguments65['controller'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['pluginName'] = NULL;
$arguments65['pageUid'] = NULL;
$arguments65['pageType'] = NULL;
$arguments65['noCache'] = NULL;
$arguments65['section'] = NULL;
$arguments65['format'] = NULL;
$arguments65['linkAccessRestrictedPages'] = NULL;
$arguments65['additionalParams'] = NULL;
$arguments65['absolute'] = NULL;
$arguments65['addQueryString'] = NULL;
$arguments65['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments65['addQueryStringMethod'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['action'] = 'compare';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'compareUserList';
$arguments67['default'] = 'Compare user list';
$arguments65['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
$arguments65['class'] = 'compare btn btn-default';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output10 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['identifier'] = NULL;
$arguments74['size'] = 'small';
$arguments74['overlay'] = NULL;
$arguments74['state'] = 'default';
$arguments74['alternativeMarkupIdentifier'] = NULL;
$arguments74['identifier'] = 'actions-selection-delete';

$output73 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['key'] = 'clearCompareList';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);
return $output73;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['aria'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = NULL;
$arguments71['rel'] = NULL;
$arguments71['rev'] = NULL;
$arguments71['target'] = NULL;
$arguments71['action'] = NULL;
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['pageType'] = NULL;
$arguments71['noCache'] = NULL;
$arguments71['section'] = NULL;
$arguments71['format'] = NULL;
$arguments71['linkAccessRestrictedPages'] = NULL;
$arguments71['additionalParams'] = NULL;
$arguments71['absolute'] = NULL;
$arguments71['addQueryString'] = NULL;
$arguments71['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments71['addQueryStringMethod'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['action'] = 'removeAllFromCompareList';
$arguments71['class'] = 'btn btn-default';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output10 .= '
        <hr>
    ';
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['renderable'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['debug'] = true;
$arguments78['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array81);
$array82 = array (
);$array80['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array82);
$arguments78['arguments'] = $array80;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['debug'] = true;
$arguments83['partial'] = 'BackendUser/PaginatedList';
$arguments83['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output86 = '';

$output86 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['name'] = NULL;
$arguments87['name'] = 'Default';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output86 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['key'] = 'backendUserListing';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output91 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return '
        Listing of users on compare list
    ';
};
$arguments94 = array();

$output91 .= NULL;

$output91 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
        <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'section.compare';
$arguments102['default'] = 'Compare';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '</h3>
        <div class="table-fit">
            <table id="typo3-backend-user-list-compare" class="table table-hover">
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                        <tr>
                            <td>
                                <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array108)]);

$output107 .= '" title="id=';
$array109 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array109)]);

$output107 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['backendUser'] = 0;
$arguments110['size'] = 32;
$arguments110['showIcon'] = false;
$array112 = array (
);$arguments110['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array112);
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array113['0'] = 'TRUE';

$expression114 = function($context) {return TRUE;};
$arguments110['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);

$output107 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output107 .= '
                                </a>
                            </td>
                            <td class="col-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                    <b>';
$array119 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.username', $array119)]);

$output118 .= '</b>
                                ';
return $output118;
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['aria'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['uid'] = NULL;
$arguments115['table'] = NULL;
$arguments115['fields'] = NULL;
$arguments115['returnUrl'] = '';
$arguments115['table'] = 'be_users';
$array117 = array (
);$arguments115['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array117);
$arguments115['title'] = 'edit';

$output107 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output107 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                                    <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'online';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output125 .= '</span>
                                ';
return $output125;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{compareUser.uid}', $array123);

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['__thenClosure'] = $renderChildrenClosure121;

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output107 .= '
                                <br />
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                        ';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array138)]);

$output137 .= '
                                    ';
return $output137;
};
$arguments134 = array();
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['aria'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['uid'] = NULL;
$arguments134['table'] = NULL;
$arguments134['fields'] = NULL;
$arguments134['returnUrl'] = '';
$arguments134['table'] = 'be_users';
$array136 = array (
);$arguments134['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array136);
$arguments134['title'] = 'edit';

$output133 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
                                ';
return $output133;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('compareUser.realName', $array131);

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['__thenClosure'] = $renderChildrenClosure129;

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output107 .= '
                            </td>
                            <td class="col-control">
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['identifier'] = NULL;
$arguments145['size'] = 'small';
$arguments145['overlay'] = NULL;
$arguments145['state'] = 'default';
$arguments145['alternativeMarkupIdentifier'] = NULL;
$arguments145['identifier'] = 'actions-open';

$output144 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
                                    ';
return $output144;
};
$arguments139 = array();
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['aria'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['uid'] = NULL;
$arguments139['table'] = NULL;
$arguments139['fields'] = NULL;
$arguments139['returnUrl'] = '';
$arguments139['class'] = 'btn btn-default';
$arguments139['table'] = 'be_users';
$array141 = array (
);$arguments139['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array141);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$arguments142['key'] = 'edit';
$arguments139['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output107 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output107 .= '
                                </div>
                                <div class="btn-group" role="group">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = 'actions-remove';

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                                    ';
return $output153;
};
$arguments147 = array();
$arguments147['additionalAttributes'] = NULL;
$arguments147['data'] = NULL;
$arguments147['aria'] = NULL;
$arguments147['class'] = NULL;
$arguments147['dir'] = NULL;
$arguments147['id'] = NULL;
$arguments147['lang'] = NULL;
$arguments147['style'] = NULL;
$arguments147['title'] = NULL;
$arguments147['accesskey'] = NULL;
$arguments147['tabindex'] = NULL;
$arguments147['onclick'] = NULL;
$arguments147['name'] = NULL;
$arguments147['rel'] = NULL;
$arguments147['rev'] = NULL;
$arguments147['target'] = NULL;
$arguments147['action'] = NULL;
$arguments147['controller'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['pluginName'] = NULL;
$arguments147['pageUid'] = NULL;
$arguments147['pageType'] = NULL;
$arguments147['noCache'] = NULL;
$arguments147['section'] = NULL;
$arguments147['format'] = NULL;
$arguments147['linkAccessRestrictedPages'] = NULL;
$arguments147['additionalParams'] = NULL;
$arguments147['absolute'] = NULL;
$arguments147['addQueryString'] = NULL;
$arguments147['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments147['addQueryStringMethod'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['action'] = 'removeFromCompareList';
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array150);
$arguments147['arguments'] = $array149;
$arguments147['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'remove';
$arguments147['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output107 .= '
                                </div>
                            </td>
                        </tr>
                    ';
return $output107;
};
$arguments104 = array();
$arguments104['each'] = NULL;
$arguments104['as'] = NULL;
$arguments104['key'] = NULL;
$arguments104['reverse'] = false;
$arguments104['iteration'] = NULL;
$array106 = array (
);$arguments104['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array106);
$arguments104['as'] = 'compareUser';

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
                </tbody>
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['key'] = NULL;
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['languageKey'] = NULL;
$arguments160['alternativeLanguageKeys'] = NULL;
$arguments160['key'] = 'compareUserList';
$arguments160['default'] = 'Compare user list';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);
};
$arguments156 = array();
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['aria'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['name'] = NULL;
$arguments156['rel'] = NULL;
$arguments156['rev'] = NULL;
$arguments156['target'] = NULL;
$arguments156['action'] = NULL;
$arguments156['controller'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['pluginName'] = NULL;
$arguments156['pageUid'] = NULL;
$arguments156['pageType'] = NULL;
$arguments156['noCache'] = NULL;
$arguments156['section'] = NULL;
$arguments156['format'] = NULL;
$arguments156['linkAccessRestrictedPages'] = NULL;
$arguments156['additionalParams'] = NULL;
$arguments156['absolute'] = NULL;
$arguments156['addQueryString'] = NULL;
$arguments156['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments156['addQueryStringMethod'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['action'] = 'compare';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'compareUserList';
$arguments158['default'] = 'Compare user list';
$arguments156['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
$arguments156['class'] = 'compare btn btn-default';

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output101 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output164 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['identifier'] = NULL;
$arguments165['size'] = 'small';
$arguments165['overlay'] = NULL;
$arguments165['state'] = 'default';
$arguments165['alternativeMarkupIdentifier'] = NULL;
$arguments165['identifier'] = 'actions-selection-delete';

$output164 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'clearCompareList';

$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);
return $output164;
};
$arguments162 = array();
$arguments162['additionalAttributes'] = NULL;
$arguments162['data'] = NULL;
$arguments162['aria'] = NULL;
$arguments162['class'] = NULL;
$arguments162['dir'] = NULL;
$arguments162['id'] = NULL;
$arguments162['lang'] = NULL;
$arguments162['style'] = NULL;
$arguments162['title'] = NULL;
$arguments162['accesskey'] = NULL;
$arguments162['tabindex'] = NULL;
$arguments162['onclick'] = NULL;
$arguments162['name'] = NULL;
$arguments162['rel'] = NULL;
$arguments162['rev'] = NULL;
$arguments162['target'] = NULL;
$arguments162['action'] = NULL;
$arguments162['controller'] = NULL;
$arguments162['extensionName'] = NULL;
$arguments162['pluginName'] = NULL;
$arguments162['pageUid'] = NULL;
$arguments162['pageType'] = NULL;
$arguments162['noCache'] = NULL;
$arguments162['section'] = NULL;
$arguments162['format'] = NULL;
$arguments162['linkAccessRestrictedPages'] = NULL;
$arguments162['additionalParams'] = NULL;
$arguments162['absolute'] = NULL;
$arguments162['addQueryString'] = NULL;
$arguments162['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments162['addQueryStringMethod'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['action'] = 'removeAllFromCompareList';
$arguments162['class'] = 'btn btn-default';

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output101 .= '
        <hr>
    ';
return $output101;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['__thenClosure'] = $renderChildrenClosure97;

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output91 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['section'] = NULL;
$arguments169['partial'] = NULL;
$arguments169['delegate'] = NULL;
$arguments169['renderable'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['optional'] = false;
$arguments169['default'] = NULL;
$arguments169['contentAs'] = NULL;
$arguments169['debug'] = true;
$arguments169['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array171 = array();
$array172 = array (
);$array171['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array172);
$array173 = array (
);$array171['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array173);
$arguments169['arguments'] = $array171;

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output91 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['section'] = NULL;
$arguments174['partial'] = NULL;
$arguments174['delegate'] = NULL;
$arguments174['renderable'] = NULL;
$arguments174['arguments'] = array (
);
$arguments174['optional'] = false;
$arguments174['default'] = NULL;
$arguments174['contentAs'] = NULL;
$arguments174['debug'] = true;
$arguments174['partial'] = 'BackendUser/PaginatedList';
$arguments174['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output91 .= '

';
return $output91;
};
$arguments89 = array();
$arguments89['name'] = NULL;
$arguments89['name'] = 'Content';

$output86 .= NULL;

$output86 .= '


';

return $output86;
}


}
#