<?php

class Standard_action_index_e91ccf3c171de8eae755ba04e4a91092a46b15c9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Permission';
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
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
$arguments1['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
    <div class="row row-cols-auto align-items-end g-3">
        <div class="col">
            <label for="depth" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '</label>
            <select class="form-select" id="depth" name="depth" data-global-event="change" data-action-navigate="$data=~s/$value/" data-navigate-value="';
$array6 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('depthBaseUrl', $array6)]);

$output3 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <option value="';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array11)]);

$output10 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('value', $array15);
$array14['1'] = ' == ';
$array16 = array (
);$array14['2'] = $renderingContext->getVariableProvider()->getByPath('depth', $array16);

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['then'] = 'selected';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output10 .= '>';
$array18 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('option', $array18)]);

$output10 .= '</option>
                ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('depthOptions', $array9);
$arguments7['key'] = 'value';
$arguments7['as'] = 'option';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output3 .= '
            </select>
        </div>
    </div>

    <div class="panel panel-default mt-3">
        <div class="table-fit">
            <table class="table table-striped table-hover" id="typo3-permissionList">
                <thead>
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</th>
                    <th align="center">';
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
$arguments21['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output3 .= '</th>
                    <th align="center">';
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
$arguments23['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output3 .= '</th>
                    <th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output3 .= '</th>
                </tr>
                </thead>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['route'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['query'] = NULL;
$arguments151['currentUrlParameterName'] = NULL;
$arguments151['route'] = 'system_BeuserTxPermission';
// Rendering Array
$array153 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$array159 = array (
);$arguments154['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array159);
$array160 = array (
);$arguments154['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array160);
$array153['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
$array153['action'] = 'edit';
$array161 = array (
);$array153['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array161);
$array162 = array (
);$array153['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array162);
$arguments151['arguments'] = $array153;

$output150 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                                ';
return $output150;
};
$arguments148 = array();
$arguments148['value'] = NULL;
$arguments148['name'] = NULL;
$arguments148['name'] = 'editUrl';
$renderChildrenClosure149 = ($arguments148['value'] !== null) ? function() use ($arguments148) { return $arguments148['value']; } : $renderChildrenClosure149;
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output147 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return '
                                    A "normal" page row is rendered, not the root page
                                ';
};
$arguments163 = array();

$output147 .= NULL;

$output147 .= '

                                <td align="left" class="nowrap">
                                    <a href="';
$array165 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array165)]);

$output147 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output168 = '';
$array169 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array169);
$array170 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array170);
return $output168;
};
$arguments166 = array();
$arguments166['value'] = NULL;

$output147 .= isset($arguments166['value']) ? $arguments166['value'] : $renderChildrenClosure167();

$output147 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$array173 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array173)]);
};
$arguments171 = array();
$arguments171['maxCharacters'] = NULL;
$arguments171['append'] = '&hellip;';
$arguments171['respectWordBoundaries'] = true;
$arguments171['respectHtml'] = true;
$arguments171['maxCharacters'] = 20;

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output147 .= '
                                    </a>
                                </td>

                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return '
                                        Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
                                    ';
};
$arguments174 = array();

$output147 .= NULL;

$output147 .= '
                                    <a href="';
$array176 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array176)]);

$output147 .= '"
                                        class="btn btn-default"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['languageKey'] = NULL;
$arguments177['alternativeLanguageKeys'] = NULL;
$arguments177['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';

$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output147 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['identifier'] = NULL;
$arguments179['size'] = 'small';
$arguments179['overlay'] = NULL;
$arguments179['state'] = 'default';
$arguments179['alternativeMarkupIdentifier'] = NULL;
$arguments179['identifier'] = 'actions-open';

$output147 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output147 .= '
                                    </a>
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['permission'] = NULL;
$arguments181['scope'] = NULL;
$arguments181['pageId'] = NULL;
$array183 = array (
);$arguments181['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array183);
$arguments181['scope'] = 'user';
$array184 = array (
);$arguments181['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array184);

$output147 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output147 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['section'] = NULL;
$arguments185['partial'] = NULL;
$arguments185['delegate'] = NULL;
$arguments185['renderable'] = NULL;
$arguments185['arguments'] = array (
);
$arguments185['optional'] = false;
$arguments185['default'] = NULL;
$arguments185['contentAs'] = NULL;
$arguments185['debug'] = true;
$arguments185['partial'] = 'Ownername';
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array188);
$array189 = array (
);$array187['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array189);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['array'] = NULL;
$arguments190['key'] = NULL;
$arguments190['subKey'] = '';
$array192 = array (
);$arguments190['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array192);
$array193 = array (
);$arguments190['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array193);
$arguments190['subKey'] = 'username';
$array187['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
$arguments185['arguments'] = $array187;

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output147 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['permission'] = NULL;
$arguments194['scope'] = NULL;
$arguments194['pageId'] = NULL;
$array196 = array (
);$arguments194['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array196);
$arguments194['scope'] = 'group';
$array197 = array (
);$arguments194['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array197);

$output147 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output147 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['section'] = NULL;
$arguments198['partial'] = NULL;
$arguments198['delegate'] = NULL;
$arguments198['renderable'] = NULL;
$arguments198['arguments'] = array (
);
$arguments198['optional'] = false;
$arguments198['default'] = NULL;
$arguments198['contentAs'] = NULL;
$arguments198['debug'] = true;
$arguments198['partial'] = 'Groupname';
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array201);
$array202 = array (
);$array200['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array202);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['array'] = NULL;
$arguments203['key'] = NULL;
$arguments203['subKey'] = '';
$array205 = array (
);$arguments203['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array205);
$array206 = array (
);$arguments203['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array206);
$arguments203['subKey'] = 'title';
$array200['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);
$arguments198['arguments'] = $array200;

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output147 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['permission'] = NULL;
$arguments207['scope'] = NULL;
$arguments207['pageId'] = NULL;
$array209 = array (
);$arguments207['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array209);
$arguments207['scope'] = 'everybody';
$array210 = array (
);$arguments207['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array210);

$output147 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output147 .= '
                                </td>

                                <td class="nowrap">
                                    <span id="el_';
$array211 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array211)]);

$output147 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array233 = array (
);
$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array233)]);

$output232 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['languageKey'] = NULL;
$arguments234['alternativeLanguageKeys'] = NULL;
$arguments234['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext)]);

$output232 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['identifier'] = NULL;
$arguments236['size'] = 'small';
$arguments236['overlay'] = NULL;
$arguments236['state'] = 'default';
$arguments236['alternativeMarkupIdentifier'] = NULL;
$arguments236['identifier'] = 'actions-lock';

$output232 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output232 .= '
                                                </button>
                                            ';
return $output232;
};
$arguments230 = array();

$output229 .= '';

$output229 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array241 = array (
);
$output240 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array241)]);

$output240 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['key'] = NULL;
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$arguments242['languageKey'] = NULL;
$arguments242['alternativeLanguageKeys'] = NULL;
$arguments242['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output240 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext)]);

$output240 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['identifier'] = NULL;
$arguments244['size'] = 'small';
$arguments244['overlay'] = NULL;
$arguments244['state'] = 'default';
$arguments244['alternativeMarkupIdentifier'] = NULL;
$arguments244['identifier'] = 'actions-unlock';

$output240 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output240 .= '
                                                </button>
                                            ';
return $output240;
};
$arguments238 = array();
$arguments238['if'] = NULL;

$output229 .= '';

$output229 .= '
                                        ';
return $output229;
};
$arguments212 = array();
$arguments212['then'] = NULL;
$arguments212['else'] = NULL;
$arguments212['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments212['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments212['__thenClosure'] = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array215 = array (
);
$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array215)]);

$output214 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output214 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output214 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['identifier'] = NULL;
$arguments218['size'] = 'small';
$arguments218['overlay'] = NULL;
$arguments218['state'] = 'default';
$arguments218['alternativeMarkupIdentifier'] = NULL;
$arguments218['identifier'] = 'actions-lock';

$output214 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output214 .= '
                                                </button>
                                            ';
return $output214;
};
$arguments212['__elseClosures'][] = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array221 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array221)]);

$output220 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['key'] = NULL;
$arguments222['id'] = NULL;
$arguments222['default'] = NULL;
$arguments222['arguments'] = NULL;
$arguments222['extensionName'] = NULL;
$arguments222['languageKey'] = NULL;
$arguments222['alternativeLanguageKeys'] = NULL;
$arguments222['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);

$output220 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['identifier'] = NULL;
$arguments224['size'] = 'small';
$arguments224['overlay'] = NULL;
$arguments224['state'] = 'default';
$arguments224['alternativeMarkupIdentifier'] = NULL;
$arguments224['identifier'] = 'actions-unlock';

$output220 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output220 .= '
                                                </button>
                                            ';
return $output220;
};

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output147 .= '
                                    </span>
                                </td>
                            ';
return $output147;
};
$arguments145 = array();

$output144 .= '';

$output144 .= '

                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return '
                                    Root page row is rendered
                                ';
};
$arguments249 = array();

$output248 .= NULL;

$output248 .= '
                                <td align="left" class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$array253 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array253);
};
$arguments251 = array();
$arguments251['value'] = NULL;

$output248 .= isset($arguments251['value']) ? $arguments251['value'] : $renderChildrenClosure252();

$output248 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$array256 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array256)]);
};
$arguments254 = array();
$arguments254['maxCharacters'] = NULL;
$arguments254['append'] = '&hellip;';
$arguments254['respectWordBoundaries'] = true;
$arguments254['respectHtml'] = true;
$arguments254['maxCharacters'] = 20;

$output248 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output248 .= '
                                </td>
                                <td></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                            ';
return $output248;
};
$arguments246 = array();
$arguments246['if'] = NULL;

$output144 .= '';

$output144 .= '
                        ';
return $output144;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['route'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['query'] = NULL;
$arguments37['currentUrlParameterName'] = NULL;
$arguments37['route'] = 'system_BeuserTxPermission';
// Rendering Array
$array39 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array43);

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$array45 = array (
);$arguments40['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array45);
$array46 = array (
);$arguments40['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array46);
$array39['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
$array39['action'] = 'edit';
$array47 = array (
);$array39['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array47);
$array48 = array (
);$array39['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array48);
$arguments37['arguments'] = $array39;

$output36 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
                                ';
return $output36;
};
$arguments34 = array();
$arguments34['value'] = NULL;
$arguments34['name'] = NULL;
$arguments34['name'] = 'editUrl';
$renderChildrenClosure35 = ($arguments34['value'] !== null) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35;
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return '
                                    A "normal" page row is rendered, not the root page
                                ';
};
$arguments49 = array();

$output33 .= NULL;

$output33 .= '

                                <td align="left" class="nowrap">
                                    <a href="';
$array51 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array51)]);

$output33 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';
$array55 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array55);
$array56 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array56);
return $output54;
};
$arguments52 = array();
$arguments52['value'] = NULL;

$output33 .= isset($arguments52['value']) ? $arguments52['value'] : $renderChildrenClosure53();

$output33 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array59)]);
};
$arguments57 = array();
$arguments57['maxCharacters'] = NULL;
$arguments57['append'] = '&hellip;';
$arguments57['respectWordBoundaries'] = true;
$arguments57['respectHtml'] = true;
$arguments57['maxCharacters'] = 20;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output33 .= '
                                    </a>
                                </td>

                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return '
                                        Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
                                    ';
};
$arguments60 = array();

$output33 .= NULL;

$output33 .= '
                                    <a href="';
$array62 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array62)]);

$output33 .= '"
                                        class="btn btn-default"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$arguments63['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output33 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['identifier'] = NULL;
$arguments65['size'] = 'small';
$arguments65['overlay'] = NULL;
$arguments65['state'] = 'default';
$arguments65['alternativeMarkupIdentifier'] = NULL;
$arguments65['identifier'] = 'actions-open';

$output33 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output33 .= '
                                    </a>
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['permission'] = NULL;
$arguments67['scope'] = NULL;
$arguments67['pageId'] = NULL;
$array69 = array (
);$arguments67['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array69);
$arguments67['scope'] = 'user';
$array70 = array (
);$arguments67['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array70);

$output33 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output33 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['section'] = NULL;
$arguments71['partial'] = NULL;
$arguments71['delegate'] = NULL;
$arguments71['renderable'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$arguments71['default'] = NULL;
$arguments71['contentAs'] = NULL;
$arguments71['debug'] = true;
$arguments71['partial'] = 'Ownername';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array74);
$array75 = array (
);$array73['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array75);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['array'] = NULL;
$arguments76['key'] = NULL;
$arguments76['subKey'] = '';
$array78 = array (
);$arguments76['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array78);
$array79 = array (
);$arguments76['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array79);
$arguments76['subKey'] = 'username';
$array73['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
$arguments71['arguments'] = $array73;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output33 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['permission'] = NULL;
$arguments80['scope'] = NULL;
$arguments80['pageId'] = NULL;
$array82 = array (
);$arguments80['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array82);
$arguments80['scope'] = 'group';
$array83 = array (
);$arguments80['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array83);

$output33 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output33 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['renderable'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['debug'] = true;
$arguments84['partial'] = 'Groupname';
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array87);
$array88 = array (
);$array86['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array88);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['array'] = NULL;
$arguments89['key'] = NULL;
$arguments89['subKey'] = '';
$array91 = array (
);$arguments89['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array91);
$array92 = array (
);$arguments89['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array92);
$arguments89['subKey'] = 'title';
$array86['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
$arguments84['arguments'] = $array86;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output33 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['permission'] = NULL;
$arguments93['scope'] = NULL;
$arguments93['pageId'] = NULL;
$array95 = array (
);$arguments93['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array95);
$arguments93['scope'] = 'everybody';
$array96 = array (
);$arguments93['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array96);

$output33 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output33 .= '
                                </td>

                                <td class="nowrap">
                                    <span id="el_';
$array97 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array97)]);

$output33 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array119 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array119)]);

$output118 .= '"
                                                    data-lockstate="1"
                                                    title="';
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
$arguments120['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output118 .= '"
                                                >
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
$arguments122['identifier'] = 'actions-lock';

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output118 .= '
                                                </button>
                                            ';
return $output118;
};
$arguments116 = array();

$output115 .= '';

$output115 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array127)]);

$output126 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output126 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['identifier'] = NULL;
$arguments130['size'] = 'small';
$arguments130['overlay'] = NULL;
$arguments130['state'] = 'default';
$arguments130['alternativeMarkupIdentifier'] = NULL;
$arguments130['identifier'] = 'actions-unlock';

$output126 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output126 .= '
                                                </button>
                                            ';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output115 .= '';

$output115 .= '
                                        ';
return $output115;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array101)]);

$output100 .= '"
                                                    data-lockstate="1"
                                                    title="';
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
$arguments102['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output100 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'actions-lock';

$output100 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output100 .= '
                                                </button>
                                            ';
return $output100;
};
$arguments98['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array107)]);

$output106 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['key'] = NULL;
$arguments108['id'] = NULL;
$arguments108['default'] = NULL;
$arguments108['arguments'] = NULL;
$arguments108['extensionName'] = NULL;
$arguments108['languageKey'] = NULL;
$arguments108['alternativeLanguageKeys'] = NULL;
$arguments108['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output106 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['identifier'] = NULL;
$arguments110['size'] = 'small';
$arguments110['overlay'] = NULL;
$arguments110['state'] = 'default';
$arguments110['alternativeMarkupIdentifier'] = NULL;
$arguments110['identifier'] = 'actions-unlock';

$output106 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output106 .= '
                                                </button>
                                            ';
return $output106;
};

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output33 .= '
                                    </span>
                                </td>
                            ';
return $output33;
};
$arguments31['__elseClosures'][] = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return '
                                    Root page row is rendered
                                ';
};
$arguments133 = array();

$output132 .= NULL;

$output132 .= '
                                <td align="left" class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array137);
};
$arguments135 = array();
$arguments135['value'] = NULL;

$output132 .= isset($arguments135['value']) ? $arguments135['value'] : $renderChildrenClosure136();

$output132 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array140 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array140)]);
};
$arguments138 = array();
$arguments138['maxCharacters'] = NULL;
$arguments138['append'] = '&hellip;';
$arguments138['respectWordBoundaries'] = true;
$arguments138['respectHtml'] = true;
$arguments138['maxCharacters'] = 20;

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output132 .= '
                                </td>
                                <td></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                            ';
return $output132;
};

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                    </tr>
                ';
return $output30;
};
$arguments27 = array();
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$array29 = array (
);$arguments27['each'] = $renderingContext->getVariableProvider()->getByPath('viewTree', $array29);
$arguments27['as'] = 'data';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output3 .= '
            </table>
        </div>
    </div>

    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['key'] = NULL;
$arguments257['id'] = NULL;
$arguments257['default'] = NULL;
$arguments257['arguments'] = NULL;
$arguments257['extensionName'] = NULL;
$arguments257['languageKey'] = NULL;
$arguments257['alternativeLanguageKeys'] = NULL;
$arguments257['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output3 .= ':</h3>
    <div class="access-legend">
        <table>
            <tr>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">1</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['languageKey'] = NULL;
$arguments259['alternativeLanguageKeys'] = NULL;
$arguments259['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['key'] = NULL;
$arguments261['id'] = NULL;
$arguments261['default'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['languageKey'] = NULL;
$arguments261['alternativeLanguageKeys'] = NULL;
$arguments261['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);

$output3 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">2</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['key'] = NULL;
$arguments263['id'] = NULL;
$arguments263['default'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['languageKey'] = NULL;
$arguments263['alternativeLanguageKeys'] = NULL;
$arguments263['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['key'] = NULL;
$arguments265['id'] = NULL;
$arguments265['default'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extensionName'] = NULL;
$arguments265['languageKey'] = NULL;
$arguments265['alternativeLanguageKeys'] = NULL;
$arguments265['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext)]);

$output3 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">3</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['key'] = NULL;
$arguments267['id'] = NULL;
$arguments267['default'] = NULL;
$arguments267['arguments'] = NULL;
$arguments267['extensionName'] = NULL;
$arguments267['languageKey'] = NULL;
$arguments267['alternativeLanguageKeys'] = NULL;
$arguments267['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['key'] = NULL;
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['languageKey'] = NULL;
$arguments269['alternativeLanguageKeys'] = NULL;
$arguments269['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext)]);

$output3 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">4</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['key'] = NULL;
$arguments271['id'] = NULL;
$arguments271['default'] = NULL;
$arguments271['arguments'] = NULL;
$arguments271['extensionName'] = NULL;
$arguments271['languageKey'] = NULL;
$arguments271['alternativeLanguageKeys'] = NULL;
$arguments271['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output3 .= '</td>
            </tr>
            <tr>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['identifier'] = NULL;
$arguments275['size'] = 'small';
$arguments275['overlay'] = NULL;
$arguments275['state'] = 'default';
$arguments275['alternativeMarkupIdentifier'] = NULL;
$arguments275['identifier'] = 'status-status-permission-granted';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output3 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['identifier'] = NULL;
$arguments277['size'] = 'small';
$arguments277['overlay'] = NULL;
$arguments277['state'] = 'default';
$arguments277['alternativeMarkupIdentifier'] = NULL;
$arguments277['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output3 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['identifier'] = NULL;
$arguments279['size'] = 'small';
$arguments279['overlay'] = NULL;
$arguments279['state'] = 'default';
$arguments279['alternativeMarkupIdentifier'] = NULL;
$arguments279['identifier'] = 'status-status-permission-granted';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output3 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['identifier'] = NULL;
$arguments281['size'] = 'small';
$arguments281['overlay'] = NULL;
$arguments281['state'] = 'default';
$arguments281['alternativeMarkupIdentifier'] = NULL;
$arguments281['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output3 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['identifier'] = NULL;
$arguments283['size'] = 'small';
$arguments283['overlay'] = NULL;
$arguments283['state'] = 'default';
$arguments283['alternativeMarkupIdentifier'] = NULL;
$arguments283['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output3 .= '</td>
                <td class="nowrap"><span class="number">5</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['key'] = NULL;
$arguments285['id'] = NULL;
$arguments285['default'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['languageKey'] = NULL;
$arguments285['alternativeLanguageKeys'] = NULL;
$arguments285['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);

$output3 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$arguments287['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);

$output3 .= '</td>
            </tr>
        </table>
    </div>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['key'] = NULL;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['languageKey'] = NULL;
$arguments289['alternativeLanguageKeys'] = NULL;
$arguments289['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output3 .= '</p>
    <p>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['identifier'] = NULL;
$arguments291['size'] = 'small';
$arguments291['overlay'] = NULL;
$arguments291['state'] = 'default';
$arguments291['alternativeMarkupIdentifier'] = NULL;
$arguments291['identifier'] = 'status-status-permission-granted';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output3 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['key'] = NULL;
$arguments293['id'] = NULL;
$arguments293['default'] = NULL;
$arguments293['arguments'] = NULL;
$arguments293['extensionName'] = NULL;
$arguments293['languageKey'] = NULL;
$arguments293['alternativeLanguageKeys'] = NULL;
$arguments293['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext)]);

$output3 .= '<br/>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['identifier'] = NULL;
$arguments295['size'] = 'small';
$arguments295['overlay'] = NULL;
$arguments295['state'] = 'default';
$arguments295['alternativeMarkupIdentifier'] = NULL;
$arguments295['identifier'] = 'status-status-permission-denied';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output3 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$arguments297['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output3 .= '
    </p>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output299 = '';

$output299 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['name'] = NULL;
$arguments300['name'] = 'Permission';

$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output299 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['key'] = NULL;
$arguments305['id'] = NULL;
$arguments305['default'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['languageKey'] = NULL;
$arguments305['alternativeLanguageKeys'] = NULL;
$arguments305['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';

$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext)]);

$output304 .= '</h1>
';
return $output304;
};
$arguments302 = array();
$arguments302['name'] = NULL;
$arguments302['name'] = 'headline';

$output299 .= NULL;

$output299 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
    <div class="row row-cols-auto align-items-end g-3">
        <div class="col">
            <label for="depth" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['key'] = NULL;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$arguments310['languageKey'] = NULL;
$arguments310['alternativeLanguageKeys'] = NULL;
$arguments310['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output309 .= '</label>
            <select class="form-select" id="depth" name="depth" data-global-event="change" data-action-navigate="$data=~s/$value/" data-navigate-value="';
$array312 = array (
);
$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('depthBaseUrl', $array312)]);

$output309 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                    <option value="';
$array317 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array317)]);

$output316 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('value', $array321);
$array320['1'] = ' == ';
$array322 = array (
);$array320['2'] = $renderingContext->getVariableProvider()->getByPath('depth', $array322);

$expression323 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression323(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['then'] = 'selected';

$output316 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output316 .= '>';
$array324 = array (
);
$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('option', $array324)]);

$output316 .= '</option>
                ';
return $output316;
};
$arguments313 = array();
$arguments313['each'] = NULL;
$arguments313['as'] = NULL;
$arguments313['key'] = NULL;
$arguments313['reverse'] = false;
$arguments313['iteration'] = NULL;
$array315 = array (
);$arguments313['each'] = $renderingContext->getVariableProvider()->getByPath('depthOptions', $array315);
$arguments313['key'] = 'value';
$arguments313['as'] = 'option';

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output309 .= '
            </select>
        </div>
    </div>

    <div class="panel panel-default mt-3">
        <div class="table-fit">
            <table class="table table-striped table-hover" id="typo3-permissionList">
                <thead>
                <tr>
                    <th colspan="2">&nbsp;</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output309 .= '</th>
                    <th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['key'] = NULL;
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['languageKey'] = NULL;
$arguments327['alternativeLanguageKeys'] = NULL;
$arguments327['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext)]);

$output309 .= '</th>
                    <th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['key'] = NULL;
$arguments329['id'] = NULL;
$arguments329['default'] = NULL;
$arguments329['arguments'] = NULL;
$arguments329['extensionName'] = NULL;
$arguments329['languageKey'] = NULL;
$arguments329['alternativeLanguageKeys'] = NULL;
$arguments329['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);

$output309 .= '</th>
                    <th align="center">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['key'] = NULL;
$arguments331['id'] = NULL;
$arguments331['default'] = NULL;
$arguments331['arguments'] = NULL;
$arguments331['extensionName'] = NULL;
$arguments331['languageKey'] = NULL;
$arguments331['alternativeLanguageKeys'] = NULL;
$arguments331['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext)]);

$output309 .= '</th>
                </tr>
                </thead>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
                    <tr>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['route'] = NULL;
$arguments457['arguments'] = array (
);
$arguments457['query'] = NULL;
$arguments457['currentUrlParameterName'] = NULL;
$arguments457['route'] = 'system_BeuserTxPermission';
// Rendering Array
$array459 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['then'] = NULL;
$arguments460['else'] = NULL;
$arguments460['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array463);

$expression464 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments460['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression464(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$array465 = array (
);$arguments460['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array465);
$array466 = array (
);$arguments460['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array466);
$array459['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);
$array459['action'] = 'edit';
$array467 = array (
);$array459['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array467);
$array468 = array (
);$array459['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array468);
$arguments457['arguments'] = $array459;

$output456 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output456 .= '
                                ';
return $output456;
};
$arguments454 = array();
$arguments454['value'] = NULL;
$arguments454['name'] = NULL;
$arguments454['name'] = 'editUrl';
$renderChildrenClosure455 = ($arguments454['value'] !== null) ? function() use ($arguments454) { return $arguments454['value']; } : $renderChildrenClosure455;
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext)]);

$output453 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return '
                                    A "normal" page row is rendered, not the root page
                                ';
};
$arguments469 = array();

$output453 .= NULL;

$output453 .= '

                                <td align="left" class="nowrap">
                                    <a href="';
$array471 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array471)]);

$output453 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output474 = '';
$array475 = array (
);
$output474 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array475);
$array476 = array (
);
$output474 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array476);
return $output474;
};
$arguments472 = array();
$arguments472['value'] = NULL;

$output453 .= isset($arguments472['value']) ? $arguments472['value'] : $renderChildrenClosure473();

$output453 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$array479 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array479)]);
};
$arguments477 = array();
$arguments477['maxCharacters'] = NULL;
$arguments477['append'] = '&hellip;';
$arguments477['respectWordBoundaries'] = true;
$arguments477['respectHtml'] = true;
$arguments477['maxCharacters'] = 20;

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output453 .= '
                                    </a>
                                </td>

                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return '
                                        Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
                                    ';
};
$arguments480 = array();

$output453 .= NULL;

$output453 .= '
                                    <a href="';
$array482 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array482)]);

$output453 .= '"
                                        class="btn btn-default"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['key'] = NULL;
$arguments483['id'] = NULL;
$arguments483['default'] = NULL;
$arguments483['arguments'] = NULL;
$arguments483['extensionName'] = NULL;
$arguments483['languageKey'] = NULL;
$arguments483['alternativeLanguageKeys'] = NULL;
$arguments483['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext)]);

$output453 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['identifier'] = NULL;
$arguments485['size'] = 'small';
$arguments485['overlay'] = NULL;
$arguments485['state'] = 'default';
$arguments485['alternativeMarkupIdentifier'] = NULL;
$arguments485['identifier'] = 'actions-open';

$output453 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output453 .= '
                                    </a>
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments487 = array();
$arguments487['permission'] = NULL;
$arguments487['scope'] = NULL;
$arguments487['pageId'] = NULL;
$array489 = array (
);$arguments487['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array489);
$arguments487['scope'] = 'user';
$array490 = array (
);$arguments487['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array490);

$output453 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output453 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['section'] = NULL;
$arguments491['partial'] = NULL;
$arguments491['delegate'] = NULL;
$arguments491['renderable'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['optional'] = false;
$arguments491['default'] = NULL;
$arguments491['contentAs'] = NULL;
$arguments491['debug'] = true;
$arguments491['partial'] = 'Ownername';
// Rendering Array
$array493 = array();
$array494 = array (
);$array493['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array494);
$array495 = array (
);$array493['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array495);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['array'] = NULL;
$arguments496['key'] = NULL;
$arguments496['subKey'] = '';
$array498 = array (
);$arguments496['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array498);
$array499 = array (
);$arguments496['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array499);
$arguments496['subKey'] = 'username';
$array493['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);
$arguments491['arguments'] = $array493;

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output453 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['permission'] = NULL;
$arguments500['scope'] = NULL;
$arguments500['pageId'] = NULL;
$array502 = array (
);$arguments500['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array502);
$arguments500['scope'] = 'group';
$array503 = array (
);$arguments500['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array503);

$output453 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output453 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['section'] = NULL;
$arguments504['partial'] = NULL;
$arguments504['delegate'] = NULL;
$arguments504['renderable'] = NULL;
$arguments504['arguments'] = array (
);
$arguments504['optional'] = false;
$arguments504['default'] = NULL;
$arguments504['contentAs'] = NULL;
$arguments504['debug'] = true;
$arguments504['partial'] = 'Groupname';
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array507);
$array508 = array (
);$array506['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array508);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['array'] = NULL;
$arguments509['key'] = NULL;
$arguments509['subKey'] = '';
$array511 = array (
);$arguments509['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array511);
$array512 = array (
);$arguments509['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array512);
$arguments509['subKey'] = 'title';
$array506['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);
$arguments504['arguments'] = $array506;

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output453 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['permission'] = NULL;
$arguments513['scope'] = NULL;
$arguments513['pageId'] = NULL;
$array515 = array (
);$arguments513['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array515);
$arguments513['scope'] = 'everybody';
$array516 = array (
);$arguments513['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array516);

$output453 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output453 .= '
                                </td>

                                <td class="nowrap">
                                    <span id="el_';
$array517 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array517)]);

$output453 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array539 = array (
);
$output538 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array539)]);

$output538 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['key'] = NULL;
$arguments540['id'] = NULL;
$arguments540['default'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['languageKey'] = NULL;
$arguments540['alternativeLanguageKeys'] = NULL;
$arguments540['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output538 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext)]);

$output538 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['identifier'] = NULL;
$arguments542['size'] = 'small';
$arguments542['overlay'] = NULL;
$arguments542['state'] = 'default';
$arguments542['alternativeMarkupIdentifier'] = NULL;
$arguments542['identifier'] = 'actions-lock';

$output538 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output538 .= '
                                                </button>
                                            ';
return $output538;
};
$arguments536 = array();

$output535 .= '';

$output535 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$output546 = '';

$output546 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array547 = array (
);
$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array547)]);

$output546 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments548 = array();
$arguments548['key'] = NULL;
$arguments548['id'] = NULL;
$arguments548['default'] = NULL;
$arguments548['arguments'] = NULL;
$arguments548['extensionName'] = NULL;
$arguments548['languageKey'] = NULL;
$arguments548['alternativeLanguageKeys'] = NULL;
$arguments548['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext)]);

$output546 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['identifier'] = NULL;
$arguments550['size'] = 'small';
$arguments550['overlay'] = NULL;
$arguments550['state'] = 'default';
$arguments550['alternativeMarkupIdentifier'] = NULL;
$arguments550['identifier'] = 'actions-unlock';

$output546 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output546 .= '
                                                </button>
                                            ';
return $output546;
};
$arguments544 = array();
$arguments544['if'] = NULL;

$output535 .= '';

$output535 .= '
                                        ';
return $output535;
};
$arguments518 = array();
$arguments518['then'] = NULL;
$arguments518['else'] = NULL;
$arguments518['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array533);

$expression534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments518['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$arguments518['__thenClosure'] = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array521 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array521)]);

$output520 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['languageKey'] = NULL;
$arguments522['alternativeLanguageKeys'] = NULL;
$arguments522['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output520 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['identifier'] = NULL;
$arguments524['size'] = 'small';
$arguments524['overlay'] = NULL;
$arguments524['state'] = 'default';
$arguments524['alternativeMarkupIdentifier'] = NULL;
$arguments524['identifier'] = 'actions-lock';

$output520 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output520 .= '
                                                </button>
                                            ';
return $output520;
};
$arguments518['__elseClosures'][] = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array527 = array (
);
$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array527)]);

$output526 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['key'] = NULL;
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$arguments528['languageKey'] = NULL;
$arguments528['alternativeLanguageKeys'] = NULL;
$arguments528['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext)]);

$output526 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['identifier'] = NULL;
$arguments530['size'] = 'small';
$arguments530['overlay'] = NULL;
$arguments530['state'] = 'default';
$arguments530['alternativeMarkupIdentifier'] = NULL;
$arguments530['identifier'] = 'actions-unlock';

$output526 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output526 .= '
                                                </button>
                                            ';
return $output526;
};

$output453 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output453 .= '
                                    </span>
                                </td>
                            ';
return $output453;
};
$arguments451 = array();

$output450 .= '';

$output450 .= '

                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return '
                                    Root page row is rendered
                                ';
};
$arguments555 = array();

$output554 .= NULL;

$output554 .= '
                                <td align="left" class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
$array559 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array559);
};
$arguments557 = array();
$arguments557['value'] = NULL;

$output554 .= isset($arguments557['value']) ? $arguments557['value'] : $renderChildrenClosure558();

$output554 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
$array562 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array562)]);
};
$arguments560 = array();
$arguments560['maxCharacters'] = NULL;
$arguments560['append'] = '&hellip;';
$arguments560['respectWordBoundaries'] = true;
$arguments560['respectHtml'] = true;
$arguments560['maxCharacters'] = 20;

$output554 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output554 .= '
                                </td>
                                <td></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                            ';
return $output554;
};
$arguments552 = array();
$arguments552['if'] = NULL;

$output450 .= '';

$output450 .= '
                        ';
return $output450;
};
$arguments337 = array();
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$arguments337['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array447 = array();
$array448 = array (
);$array447['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array448);

$expression449 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments337['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression449(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array447)
					),
					$renderingContext
				);
$arguments337['__thenClosure'] = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['route'] = NULL;
$arguments343['arguments'] = array (
);
$arguments343['query'] = NULL;
$arguments343['currentUrlParameterName'] = NULL;
$arguments343['route'] = 'system_BeuserTxPermission';
// Rendering Array
$array345 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = array();
$array349 = array (
);$array348['0'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array349);

$expression350 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$array351 = array (
);$arguments346['then'] = $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid', $array351);
$array352 = array (
);$arguments346['else'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array352);
$array345['id'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);
$array345['action'] = 'edit';
$array353 = array (
);$array345['depth'] = $renderingContext->getVariableProvider()->getByPath('depth', $array353);
$array354 = array (
);$array345['returnUrl'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array354);
$arguments343['arguments'] = $array345;

$output342 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output342 .= '
                                ';
return $output342;
};
$arguments340 = array();
$arguments340['value'] = NULL;
$arguments340['name'] = NULL;
$arguments340['name'] = 'editUrl';
$renderChildrenClosure341 = ($arguments340['value'] !== null) ? function() use ($arguments340) { return $arguments340['value']; } : $renderChildrenClosure341;
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext)]);

$output339 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return '
                                    A "normal" page row is rendered, not the root page
                                ';
};
$arguments355 = array();

$output339 .= NULL;

$output339 .= '

                                <td align="left" class="nowrap">
                                    <a href="';
$array357 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array357)]);

$output339 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output360 = '';
$array361 = array (
);
$output360 .= $renderingContext->getVariableProvider()->getByPath('data.depthData', $array361);
$array362 = array (
);
$output360 .= $renderingContext->getVariableProvider()->getByPath('data.HTML', $array362);
return $output360;
};
$arguments358 = array();
$arguments358['value'] = NULL;

$output339 .= isset($arguments358['value']) ? $arguments358['value'] : $renderChildrenClosure359();

$output339 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$array365 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array365)]);
};
$arguments363 = array();
$arguments363['maxCharacters'] = NULL;
$arguments363['append'] = '&hellip;';
$arguments363['respectWordBoundaries'] = true;
$arguments363['respectHtml'] = true;
$arguments363['maxCharacters'] = 20;

$output339 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output339 .= '
                                    </a>
                                </td>

                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return '
                                        Edit link is workspace aware: If in ws, link to edit the ws overlay record is rendered
                                    ';
};
$arguments366 = array();

$output339 .= NULL;

$output339 .= '
                                    <a href="';
$array368 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl', $array368)]);

$output339 .= '"
                                        class="btn btn-default"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['key'] = NULL;
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$arguments369['languageKey'] = NULL;
$arguments369['alternativeLanguageKeys'] = NULL;
$arguments369['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions';

$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext)]);

$output339 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments371 = array();
$arguments371['identifier'] = NULL;
$arguments371['size'] = 'small';
$arguments371['overlay'] = NULL;
$arguments371['state'] = 'default';
$arguments371['alternativeMarkupIdentifier'] = NULL;
$arguments371['identifier'] = 'actions-open';

$output339 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output339 .= '
                                    </a>
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['permission'] = NULL;
$arguments373['scope'] = NULL;
$arguments373['pageId'] = NULL;
$array375 = array (
);$arguments373['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_user', $array375);
$arguments373['scope'] = 'user';
$array376 = array (
);$arguments373['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array376);

$output339 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output339 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['section'] = NULL;
$arguments377['partial'] = NULL;
$arguments377['delegate'] = NULL;
$arguments377['renderable'] = NULL;
$arguments377['arguments'] = array (
);
$arguments377['optional'] = false;
$arguments377['default'] = NULL;
$arguments377['contentAs'] = NULL;
$arguments377['debug'] = true;
$arguments377['partial'] = 'Ownername';
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array380);
$array381 = array (
);$array379['userId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array381);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['array'] = NULL;
$arguments382['key'] = NULL;
$arguments382['subKey'] = '';
$array384 = array (
);$arguments382['array'] = $renderingContext->getVariableProvider()->getByPath('beUsers', $array384);
$array385 = array (
);$arguments382['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid', $array385);
$arguments382['subKey'] = 'username';
$array379['username'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);
$arguments377['arguments'] = $array379;

$output339 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output339 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['permission'] = NULL;
$arguments386['scope'] = NULL;
$arguments386['pageId'] = NULL;
$array388 = array (
);$arguments386['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_group', $array388);
$arguments386['scope'] = 'group';
$array389 = array (
);$arguments386['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array389);

$output339 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output339 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['section'] = NULL;
$arguments390['partial'] = NULL;
$arguments390['delegate'] = NULL;
$arguments390['renderable'] = NULL;
$arguments390['arguments'] = array (
);
$arguments390['optional'] = false;
$arguments390['default'] = NULL;
$arguments390['contentAs'] = NULL;
$arguments390['debug'] = true;
$arguments390['partial'] = 'Groupname';
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array393);
$array394 = array (
);$array392['groupId'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array394);
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['array'] = NULL;
$arguments395['key'] = NULL;
$arguments395['subKey'] = '';
$array397 = array (
);$arguments395['array'] = $renderingContext->getVariableProvider()->getByPath('beGroups', $array397);
$array398 = array (
);$arguments395['key'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid', $array398);
$arguments395['subKey'] = 'title';
$array392['groupname'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);
$arguments390['arguments'] = $array392;

$output339 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output339 .= '
                                </td>

                                <td class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['permission'] = NULL;
$arguments399['scope'] = NULL;
$arguments399['pageId'] = NULL;
$array401 = array (
);$arguments399['permission'] = $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody', $array401);
$arguments399['scope'] = 'everybody';
$array402 = array (
);$arguments399['pageId'] = $renderingContext->getVariableProvider()->getByPath('data.row.uid', $array402);

$output339 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output339 .= '
                                </td>

                                <td class="nowrap">
                                    <span id="el_';
$array403 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array403)]);

$output339 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array425 = array (
);
$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array425)]);

$output424 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['key'] = NULL;
$arguments426['id'] = NULL;
$arguments426['default'] = NULL;
$arguments426['arguments'] = NULL;
$arguments426['extensionName'] = NULL;
$arguments426['languageKey'] = NULL;
$arguments426['alternativeLanguageKeys'] = NULL;
$arguments426['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext)]);

$output424 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['identifier'] = NULL;
$arguments428['size'] = 'small';
$arguments428['overlay'] = NULL;
$arguments428['state'] = 'default';
$arguments428['alternativeMarkupIdentifier'] = NULL;
$arguments428['identifier'] = 'actions-lock';

$output424 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output424 .= '
                                                </button>
                                            ';
return $output424;
};
$arguments422 = array();

$output421 .= '';

$output421 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array433 = array (
);
$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array433)]);

$output432 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['languageKey'] = NULL;
$arguments434['alternativeLanguageKeys'] = NULL;
$arguments434['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output432 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['identifier'] = NULL;
$arguments436['size'] = 'small';
$arguments436['overlay'] = NULL;
$arguments436['state'] = 'default';
$arguments436['alternativeMarkupIdentifier'] = NULL;
$arguments436['identifier'] = 'actions-unlock';

$output432 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output432 .= '
                                                </button>
                                            ';
return $output432;
};
$arguments430 = array();
$arguments430['if'] = NULL;

$output421 .= '';

$output421 .= '
                                        ';
return $output421;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array418 = array();
$array419 = array (
);$array418['0'] = $renderingContext->getVariableProvider()->getByPath('data.row.editlock', $array419);

$expression420 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression420(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array418)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = function() use ($renderingContext, $self) {
$output406 = '';

$output406 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array407 = array (
);
$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array407)]);

$output406 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['key'] = NULL;
$arguments408['id'] = NULL;
$arguments408['default'] = NULL;
$arguments408['arguments'] = NULL;
$arguments408['extensionName'] = NULL;
$arguments408['languageKey'] = NULL;
$arguments408['alternativeLanguageKeys'] = NULL;
$arguments408['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr';

$output406 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext)]);

$output406 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['identifier'] = NULL;
$arguments410['size'] = 'small';
$arguments410['overlay'] = NULL;
$arguments410['state'] = 'default';
$arguments410['alternativeMarkupIdentifier'] = NULL;
$arguments410['identifier'] = 'actions-lock';

$output406 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output406 .= '
                                                </button>
                                            ';
return $output406;
};
$arguments404['__elseClosures'][] = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-default"
                                                    data-page="';
$array413 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid', $array413)]);

$output412 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['key'] = NULL;
$arguments414['id'] = NULL;
$arguments414['default'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['extensionName'] = NULL;
$arguments414['languageKey'] = NULL;
$arguments414['alternativeLanguageKeys'] = NULL;
$arguments414['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext)]);

$output412 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['identifier'] = NULL;
$arguments416['size'] = 'small';
$arguments416['overlay'] = NULL;
$arguments416['state'] = 'default';
$arguments416['alternativeMarkupIdentifier'] = NULL;
$arguments416['identifier'] = 'actions-unlock';

$output412 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output412 .= '
                                                </button>
                                            ';
return $output412;
};

$output339 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output339 .= '
                                    </span>
                                </td>
                            ';
return $output339;
};
$arguments337['__elseClosures'][] = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return '
                                    Root page row is rendered
                                ';
};
$arguments439 = array();

$output438 .= NULL;

$output438 .= '
                                <td align="left" class="nowrap">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$array443 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.HTML', $array443);
};
$arguments441 = array();
$arguments441['value'] = NULL;

$output438 .= isset($arguments441['value']) ? $arguments441['value'] : $renderChildrenClosure442();

$output438 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$array446 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title', $array446)]);
};
$arguments444 = array();
$arguments444['maxCharacters'] = NULL;
$arguments444['append'] = '&hellip;';
$arguments444['respectWordBoundaries'] = true;
$arguments444['respectHtml'] = true;
$arguments444['maxCharacters'] = 20;

$output438 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output438 .= '
                                </td>
                                <td></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                                <td class="nowrap"></td>
                            ';
return $output438;
};

$output336 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
                    </tr>
                ';
return $output336;
};
$arguments333 = array();
$arguments333['each'] = NULL;
$arguments333['as'] = NULL;
$arguments333['key'] = NULL;
$arguments333['reverse'] = false;
$arguments333['iteration'] = NULL;
$array335 = array (
);$arguments333['each'] = $renderingContext->getVariableProvider()->getByPath('viewTree', $array335);
$arguments333['as'] = 'data';

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output309 .= '
            </table>
        </div>
    </div>

    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments563 = array();
$arguments563['key'] = NULL;
$arguments563['id'] = NULL;
$arguments563['default'] = NULL;
$arguments563['arguments'] = NULL;
$arguments563['extensionName'] = NULL;
$arguments563['languageKey'] = NULL;
$arguments563['alternativeLanguageKeys'] = NULL;
$arguments563['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext)]);

$output309 .= ':</h3>
    <div class="access-legend">
        <table>
            <tr>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">1</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments565 = array();
$arguments565['key'] = NULL;
$arguments565['id'] = NULL;
$arguments565['default'] = NULL;
$arguments565['arguments'] = NULL;
$arguments565['extensionName'] = NULL;
$arguments565['languageKey'] = NULL;
$arguments565['alternativeLanguageKeys'] = NULL;
$arguments565['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext)]);

$output309 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['key'] = NULL;
$arguments567['id'] = NULL;
$arguments567['default'] = NULL;
$arguments567['arguments'] = NULL;
$arguments567['extensionName'] = NULL;
$arguments567['languageKey'] = NULL;
$arguments567['alternativeLanguageKeys'] = NULL;
$arguments567['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext)]);

$output309 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">2</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['key'] = NULL;
$arguments569['id'] = NULL;
$arguments569['default'] = NULL;
$arguments569['arguments'] = NULL;
$arguments569['extensionName'] = NULL;
$arguments569['languageKey'] = NULL;
$arguments569['alternativeLanguageKeys'] = NULL;
$arguments569['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext)]);

$output309 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['key'] = NULL;
$arguments571['id'] = NULL;
$arguments571['default'] = NULL;
$arguments571['arguments'] = NULL;
$arguments571['extensionName'] = NULL;
$arguments571['languageKey'] = NULL;
$arguments571['alternativeLanguageKeys'] = NULL;
$arguments571['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext)]);

$output309 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">3</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments573 = array();
$arguments573['key'] = NULL;
$arguments573['id'] = NULL;
$arguments573['default'] = NULL;
$arguments573['arguments'] = NULL;
$arguments573['extensionName'] = NULL;
$arguments573['languageKey'] = NULL;
$arguments573['alternativeLanguageKeys'] = NULL;
$arguments573['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext)]);

$output309 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['key'] = NULL;
$arguments575['id'] = NULL;
$arguments575['default'] = NULL;
$arguments575['arguments'] = NULL;
$arguments575['extensionName'] = NULL;
$arguments575['languageKey'] = NULL;
$arguments575['alternativeLanguageKeys'] = NULL;
$arguments575['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext)]);

$output309 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">4</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['key'] = NULL;
$arguments577['id'] = NULL;
$arguments577['default'] = NULL;
$arguments577['arguments'] = NULL;
$arguments577['extensionName'] = NULL;
$arguments577['languageKey'] = NULL;
$arguments577['alternativeLanguageKeys'] = NULL;
$arguments577['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext)]);

$output309 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments579 = array();
$arguments579['key'] = NULL;
$arguments579['id'] = NULL;
$arguments579['default'] = NULL;
$arguments579['arguments'] = NULL;
$arguments579['extensionName'] = NULL;
$arguments579['languageKey'] = NULL;
$arguments579['alternativeLanguageKeys'] = NULL;
$arguments579['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext)]);

$output309 .= '</td>
            </tr>
            <tr>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments581 = array();
$arguments581['identifier'] = NULL;
$arguments581['size'] = 'small';
$arguments581['overlay'] = NULL;
$arguments581['state'] = 'default';
$arguments581['alternativeMarkupIdentifier'] = NULL;
$arguments581['identifier'] = 'status-status-permission-granted';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output309 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments583 = array();
$arguments583['identifier'] = NULL;
$arguments583['size'] = 'small';
$arguments583['overlay'] = NULL;
$arguments583['state'] = 'default';
$arguments583['alternativeMarkupIdentifier'] = NULL;
$arguments583['identifier'] = 'status-status-permission-denied';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output309 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['identifier'] = NULL;
$arguments585['size'] = 'small';
$arguments585['overlay'] = NULL;
$arguments585['state'] = 'default';
$arguments585['alternativeMarkupIdentifier'] = NULL;
$arguments585['identifier'] = 'status-status-permission-granted';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext);

$output309 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['identifier'] = NULL;
$arguments587['size'] = 'small';
$arguments587['overlay'] = NULL;
$arguments587['state'] = 'default';
$arguments587['alternativeMarkupIdentifier'] = NULL;
$arguments587['identifier'] = 'status-status-permission-denied';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output309 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['identifier'] = NULL;
$arguments589['size'] = 'small';
$arguments589['overlay'] = NULL;
$arguments589['state'] = 'default';
$arguments589['alternativeMarkupIdentifier'] = NULL;
$arguments589['identifier'] = 'status-status-permission-denied';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);

$output309 .= '</td>
                <td class="nowrap"><span class="number">5</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments591 = array();
$arguments591['key'] = NULL;
$arguments591['id'] = NULL;
$arguments591['default'] = NULL;
$arguments591['arguments'] = NULL;
$arguments591['extensionName'] = NULL;
$arguments591['languageKey'] = NULL;
$arguments591['alternativeLanguageKeys'] = NULL;
$arguments591['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext)]);

$output309 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['key'] = NULL;
$arguments593['id'] = NULL;
$arguments593['default'] = NULL;
$arguments593['arguments'] = NULL;
$arguments593['extensionName'] = NULL;
$arguments593['languageKey'] = NULL;
$arguments593['alternativeLanguageKeys'] = NULL;
$arguments593['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext)]);

$output309 .= '</td>
            </tr>
        </table>
    </div>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments595 = array();
$arguments595['key'] = NULL;
$arguments595['id'] = NULL;
$arguments595['default'] = NULL;
$arguments595['arguments'] = NULL;
$arguments595['extensionName'] = NULL;
$arguments595['languageKey'] = NULL;
$arguments595['alternativeLanguageKeys'] = NULL;
$arguments595['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments595, $renderChildrenClosure596, $renderingContext)]);

$output309 .= '</p>
    <p>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments597 = array();
$arguments597['identifier'] = NULL;
$arguments597['size'] = 'small';
$arguments597['overlay'] = NULL;
$arguments597['state'] = 'default';
$arguments597['alternativeMarkupIdentifier'] = NULL;
$arguments597['identifier'] = 'status-status-permission-granted';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output309 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments599 = array();
$arguments599['key'] = NULL;
$arguments599['id'] = NULL;
$arguments599['default'] = NULL;
$arguments599['arguments'] = NULL;
$arguments599['extensionName'] = NULL;
$arguments599['languageKey'] = NULL;
$arguments599['alternativeLanguageKeys'] = NULL;
$arguments599['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext)]);

$output309 .= '<br/>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments601 = array();
$arguments601['identifier'] = NULL;
$arguments601['size'] = 'small';
$arguments601['overlay'] = NULL;
$arguments601['state'] = 'default';
$arguments601['alternativeMarkupIdentifier'] = NULL;
$arguments601['identifier'] = 'status-status-permission-denied';

$output309 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext);

$output309 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments603 = array();
$arguments603['key'] = NULL;
$arguments603['id'] = NULL;
$arguments603['default'] = NULL;
$arguments603['arguments'] = NULL;
$arguments603['extensionName'] = NULL;
$arguments603['languageKey'] = NULL;
$arguments603['alternativeLanguageKeys'] = NULL;
$arguments603['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied';

$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext)]);

$output309 .= '
    </p>
';
return $output309;
};
$arguments307 = array();
$arguments307['name'] = NULL;
$arguments307['name'] = 'content';

$output299 .= NULL;

$output299 .= '
';

return $output299;
}


}
#