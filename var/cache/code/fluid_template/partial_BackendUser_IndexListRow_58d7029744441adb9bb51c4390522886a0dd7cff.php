<?php

class partial_BackendUser_IndexListRow_58d7029744441adb9bb51c4390522886a0dd7cff extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section list_row
 */
public function section_e490b8b1053373d1e4badbae4af5cf284c69881a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<tr>
    <td>
        <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array1)]);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.description', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$output7 = '';
$array8 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array8)]);

$output7 .= ' ';
$arguments2['then'] = $output7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '(id=';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array9)]);

$output0 .= ')">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['backendUser'] = 0;
$arguments10['size'] = 32;
$arguments10['showIcon'] = false;
$array12 = array (
);$arguments10['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array12);
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = 'TRUE';

$expression14 = function($context) {return TRUE;};
$arguments10['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </a>
    </td>
    <td class="col-title">
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
            <b>';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array19)]);

$output18 .= '</b>
        ';
return $output18;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['uid'] = NULL;
$arguments15['table'] = NULL;
$arguments15['fields'] = NULL;
$arguments15['returnUrl'] = '';
$arguments15['table'] = 'be_users';
$array17 = array (
);$arguments15['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array17);
$arguments15['title'] = 'edit';

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
            <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$arguments26['key'] = 'online';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '</span>
        ';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{backendUser.uid}', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\MfaStatusViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['userUid'] = NULL;
$array30 = array (
);$arguments28['userUid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array30);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\MfaStatusViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
        <br />
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                ';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array41)]);

$output40 .= '
            ';
return $output40;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['uid'] = NULL;
$arguments37['table'] = NULL;
$arguments37['fields'] = NULL;
$arguments37['returnUrl'] = '';
$arguments37['table'] = 'be_users';
$array39 = array (
);$arguments37['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array39);
$arguments37['title'] = 'edit';

$output36 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
        ';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array66 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array66);
};
$arguments61 = array();
$arguments61['date'] = NULL;
$arguments61['format'] = '';
$arguments61['base'] = NULL;
$output63 = '';
$array64 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array64);

$output63 .= ' ';
$array65 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array65);
$arguments61['format'] = $output63;
$renderChildrenClosure62 = ($arguments61['date'] !== null) ? function() use ($arguments61) { return $arguments61['date']; } : $renderChildrenClosure62;
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '
            ';
return $output60;
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'never';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output69 .= '
            ';
return $output69;
};
$arguments67 = array();
$arguments67['if'] = NULL;

$output57 .= '';

$output57 .= '
        ';
return $output57;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array50);
};
$arguments45 = array();
$arguments45['date'] = NULL;
$arguments45['format'] = '';
$arguments45['base'] = NULL;
$output47 = '';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array48);

$output47 .= ' ';
$array49 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array49);
$arguments45['format'] = $output47;
$renderChildrenClosure46 = ($arguments45['date'] !== null) ? function() use ($arguments45) { return $arguments45['date']; } : $renderChildrenClosure46;
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '
            ';
return $output44;
};
$arguments42['__elseClosures'][] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'never';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
            ';
return $output51;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
    </td>
    <td class="col-control">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['identifier'] = NULL;
$arguments78['size'] = 'small';
$arguments78['overlay'] = NULL;
$arguments78['state'] = 'default';
$arguments78['alternativeMarkupIdentifier'] = NULL;
$arguments78['identifier'] = 'actions-open';

$output77 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
            ';
return $output77;
};
$arguments72 = array();
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['aria'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['uid'] = NULL;
$arguments72['table'] = NULL;
$arguments72['fields'] = NULL;
$arguments72['returnUrl'] = '';
$arguments72['class'] = 'btn btn-default';
$arguments72['table'] = 'be_users';
$array74 = array (
);$arguments72['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array74);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['languageKey'] = NULL;
$arguments75['alternativeLanguageKeys'] = NULL;
$arguments75['key'] = 'edit';
$arguments72['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output0 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['identifier'] = NULL;
$arguments139['size'] = 'small';
$arguments139['overlay'] = NULL;
$arguments139['state'] = 'default';
$arguments139['alternativeMarkupIdentifier'] = NULL;
$arguments139['identifier'] = 'empty-empty';

$output138 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '</span>
                ';
return $output138;
};
$arguments136 = array();

$output135 .= '';

$output135 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['route'] = NULL;
$arguments171['arguments'] = array (
);
$arguments171['query'] = NULL;
$arguments171['currentUrlParameterName'] = NULL;
$arguments171['route'] = 'tce_db';
$output173 = '';

$output173 .= 'data[be_users][';
$array174 = array (
);
$output173 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array174);

$output173 .= '][disable]=0';
$arguments171['query'] = $output173;
$arguments171['currentUrlParameterName'] = 'redirect';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['languageKey'] = NULL;
$arguments175['alternativeLanguageKeys'] = NULL;
$arguments175['key'] = 'visibility.unhide';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output170 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['identifier'] = NULL;
$arguments177['size'] = 'small';
$arguments177['overlay'] = NULL;
$arguments177['state'] = 'default';
$arguments177['alternativeMarkupIdentifier'] = NULL;
$arguments177['identifier'] = 'actions-edit-unhide';

$output170 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output170 .= '</a>
                        ';
return $output170;
};
$arguments168 = array();

$output167 .= '';

$output167 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['route'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['query'] = NULL;
$arguments182['currentUrlParameterName'] = NULL;
$arguments182['route'] = 'tce_db';
$output184 = '';

$output184 .= 'data[be_users][';
$array185 = array (
);
$output184 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array185);

$output184 .= '][disable]=1';
$arguments182['query'] = $output184;
$arguments182['currentUrlParameterName'] = 'redirect';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output181 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'visibility.hide';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output181 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['identifier'] = NULL;
$arguments188['size'] = 'small';
$arguments188['overlay'] = NULL;
$arguments188['state'] = 'default';
$arguments188['alternativeMarkupIdentifier'] = NULL;
$arguments188['identifier'] = 'actions-edit-hide';

$output181 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output181 .= '</a>
                        ';
return $output181;
};
$arguments179 = array();
$arguments179['if'] = NULL;

$output167 .= '';

$output167 .= '
                    ';
return $output167;
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array165);
$array164['1'] = ' == 1';

$expression166 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['route'] = NULL;
$arguments147['arguments'] = array (
);
$arguments147['query'] = NULL;
$arguments147['currentUrlParameterName'] = NULL;
$arguments147['route'] = 'tce_db';
$output149 = '';

$output149 .= 'data[be_users][';
$array150 = array (
);
$output149 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array150);

$output149 .= '][disable]=0';
$arguments147['query'] = $output149;
$arguments147['currentUrlParameterName'] = 'redirect';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext)]);

$output146 .= '" title="';
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
$arguments151['key'] = 'visibility.unhide';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output146 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['identifier'] = NULL;
$arguments153['size'] = 'small';
$arguments153['overlay'] = NULL;
$arguments153['state'] = 'default';
$arguments153['alternativeMarkupIdentifier'] = NULL;
$arguments153['identifier'] = 'actions-edit-unhide';

$output146 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output146 .= '</a>
                        ';
return $output146;
};
$arguments144['__elseClosures'][] = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['route'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['query'] = NULL;
$arguments156['currentUrlParameterName'] = NULL;
$arguments156['route'] = 'tce_db';
$output158 = '';

$output158 .= 'data[be_users][';
$array159 = array (
);
$output158 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array159);

$output158 .= '][disable]=1';
$arguments156['query'] = $output158;
$arguments156['currentUrlParameterName'] = 'redirect';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output155 .= '" title="';
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
$arguments160['key'] = 'visibility.hide';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output155 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['identifier'] = NULL;
$arguments162['size'] = 'small';
$arguments162['overlay'] = NULL;
$arguments162['state'] = 'default';
$arguments162['alternativeMarkupIdentifier'] = NULL;
$arguments162['identifier'] = 'actions-edit-hide';

$output155 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output155 .= '</a>
                        ';
return $output155;
};

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output143 .= '
                ';
return $output143;
};
$arguments141 = array();
$arguments141['if'] = NULL;

$output135 .= '';

$output135 .= '
            ';
return $output135;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array133);
$array132['1'] = ' == 1';

$expression134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['identifier'] = NULL;
$arguments83['size'] = 'small';
$arguments83['overlay'] = NULL;
$arguments83['state'] = 'default';
$arguments83['alternativeMarkupIdentifier'] = NULL;
$arguments83['identifier'] = 'empty-empty';

$output82 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '</span>
                ';
return $output82;
};
$arguments80['__elseClosures'][] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['route'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['query'] = NULL;
$arguments113['currentUrlParameterName'] = NULL;
$arguments113['route'] = 'tce_db';
$output115 = '';

$output115 .= 'data[be_users][';
$array116 = array (
);
$output115 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array116);

$output115 .= '][disable]=0';
$arguments113['query'] = $output115;
$arguments113['currentUrlParameterName'] = 'redirect';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output112 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$arguments117['key'] = 'visibility.unhide';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output112 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'actions-edit-unhide';

$output112 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output112 .= '</a>
                        ';
return $output112;
};
$arguments110 = array();

$output109 .= '';

$output109 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['route'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['query'] = NULL;
$arguments124['currentUrlParameterName'] = NULL;
$arguments124['route'] = 'tce_db';
$output126 = '';

$output126 .= 'data[be_users][';
$array127 = array (
);
$output126 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array127);

$output126 .= '][disable]=1';
$arguments124['query'] = $output126;
$arguments124['currentUrlParameterName'] = 'redirect';

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output123 .= '" title="';
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
$arguments128['key'] = 'visibility.hide';

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output123 .= '">';
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
$arguments130['identifier'] = 'actions-edit-hide';

$output123 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output123 .= '</a>
                        ';
return $output123;
};
$arguments121 = array();
$arguments121['if'] = NULL;

$output109 .= '';

$output109 .= '
                    ';
return $output109;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array107);
$array106['1'] = ' == 1';

$expression108 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['route'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['query'] = NULL;
$arguments89['currentUrlParameterName'] = NULL;
$arguments89['route'] = 'tce_db';
$output91 = '';

$output91 .= 'data[be_users][';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array92);

$output91 .= '][disable]=0';
$arguments89['query'] = $output91;
$arguments89['currentUrlParameterName'] = 'redirect';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'visibility.unhide';

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output88 .= '">';
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
$arguments95['identifier'] = 'actions-edit-unhide';

$output88 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output88 .= '</a>
                        ';
return $output88;
};
$arguments86['__elseClosures'][] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['route'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['query'] = NULL;
$arguments98['currentUrlParameterName'] = NULL;
$arguments98['route'] = 'tce_db';
$output100 = '';

$output100 .= 'data[be_users][';
$array101 = array (
);
$output100 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array101);

$output100 .= '][disable]=1';
$arguments98['query'] = $output100;
$arguments98['currentUrlParameterName'] = 'redirect';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output97 .= '" title="';
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
$arguments102['key'] = 'visibility.hide';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output97 .= '">';
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
$arguments104['identifier'] = 'actions-edit-hide';

$output97 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output97 .= '</a>
                        ';
return $output97;
};

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
                ';
return $output85;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['identifier'] = NULL;
$arguments220['size'] = 'small';
$arguments220['overlay'] = NULL;
$arguments220['state'] = 'default';
$arguments220['alternativeMarkupIdentifier'] = NULL;
$arguments220['identifier'] = 'empty-empty';

$output219 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '</span>
                ';
return $output219;
};
$arguments217 = array();

$output216 .= '';

$output216 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['route'] = NULL;
$arguments225['arguments'] = array (
);
$arguments225['query'] = NULL;
$arguments225['currentUrlParameterName'] = NULL;
$arguments225['route'] = 'tce_db';
$output227 = '';

$output227 .= 'cmd[be_users][';
$array228 = array (
);
$output227 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array228);

$output227 .= '][delete]=1';
$arguments225['query'] = $output227;
$arguments225['currentUrlParameterName'] = 'redirect';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output224 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'delete';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output224 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['languageKey'] = NULL;
$arguments231['alternativeLanguageKeys'] = NULL;
$arguments231['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output224 .= '"
                        data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'confirm';
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array236);
$arguments233['arguments'] = $array235;

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output224 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output224 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['identifier'] = NULL;
$arguments239['size'] = 'small';
$arguments239['overlay'] = NULL;
$arguments239['state'] = 'default';
$arguments239['alternativeMarkupIdentifier'] = NULL;
$arguments239['identifier'] = 'actions-edit-delete';

$output224 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output224 .= '
                    </a>
                ';
return $output224;
};
$arguments222 = array();
$arguments222['if'] = NULL;

$output216 .= '';

$output216 .= '
            ';
return $output216;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('currentUserUid', $array213);
$array212['1'] = ' == ';
$array214 = array (
);$array212['2'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array214);

$expression215 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['identifier'] = NULL;
$arguments193['size'] = 'small';
$arguments193['overlay'] = NULL;
$arguments193['state'] = 'default';
$arguments193['alternativeMarkupIdentifier'] = NULL;
$arguments193['identifier'] = 'empty-empty';

$output192 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '</span>
                ';
return $output192;
};
$arguments190['__elseClosures'][] = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['route'] = NULL;
$arguments196['arguments'] = array (
);
$arguments196['query'] = NULL;
$arguments196['currentUrlParameterName'] = NULL;
$arguments196['route'] = 'tce_db';
$output198 = '';

$output198 .= 'cmd[be_users][';
$array199 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array199);

$output198 .= '][delete]=1';
$arguments196['query'] = $output198;
$arguments196['currentUrlParameterName'] = 'redirect';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output195 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['key'] = NULL;
$arguments200['id'] = NULL;
$arguments200['default'] = NULL;
$arguments200['arguments'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['languageKey'] = NULL;
$arguments200['alternativeLanguageKeys'] = NULL;
$arguments200['key'] = 'delete';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output195 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['languageKey'] = NULL;
$arguments202['alternativeLanguageKeys'] = NULL;
$arguments202['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output195 .= '"
                        data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'confirm';
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array207);
$arguments204['arguments'] = $array206;

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output195 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['key'] = NULL;
$arguments208['id'] = NULL;
$arguments208['default'] = NULL;
$arguments208['arguments'] = NULL;
$arguments208['extensionName'] = NULL;
$arguments208['languageKey'] = NULL;
$arguments208['alternativeLanguageKeys'] = NULL;
$arguments208['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output195 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['identifier'] = NULL;
$arguments210['size'] = 'small';
$arguments210['overlay'] = NULL;
$arguments210['state'] = 'default';
$arguments210['alternativeMarkupIdentifier'] = NULL;
$arguments210['identifier'] = 'actions-edit-delete';

$output195 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output195 .= '
                    </a>
                ';
return $output195;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output0 .= '
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['identifier'] = NULL;
$arguments288['size'] = 'small';
$arguments288['overlay'] = NULL;
$arguments288['state'] = 'default';
$arguments288['alternativeMarkupIdentifier'] = NULL;
$arguments288['identifier'] = 'actions-edit-undo';

$output287 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
                    ';
return $output287;
};
$arguments272 = array();
$arguments272['additionalAttributes'] = NULL;
$arguments272['data'] = NULL;
$arguments272['aria'] = NULL;
$arguments272['class'] = NULL;
$arguments272['dir'] = NULL;
$arguments272['id'] = NULL;
$arguments272['lang'] = NULL;
$arguments272['style'] = NULL;
$arguments272['title'] = NULL;
$arguments272['accesskey'] = NULL;
$arguments272['tabindex'] = NULL;
$arguments272['onclick'] = NULL;
$arguments272['name'] = NULL;
$arguments272['rel'] = NULL;
$arguments272['rev'] = NULL;
$arguments272['target'] = NULL;
$arguments272['action'] = NULL;
$arguments272['controller'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['pluginName'] = NULL;
$arguments272['pageUid'] = NULL;
$arguments272['pageType'] = NULL;
$arguments272['noCache'] = NULL;
$arguments272['section'] = NULL;
$arguments272['format'] = NULL;
$arguments272['linkAccessRestrictedPages'] = NULL;
$arguments272['additionalParams'] = NULL;
$arguments272['absolute'] = NULL;
$arguments272['addQueryString'] = NULL;
$arguments272['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments272['addQueryStringMethod'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['class'] = 'btn btn-default t3js-modal-trigger';
$arguments272['action'] = 'initiatePasswordReset';
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array275);
$arguments272['arguments'] = $array274;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['key'] = NULL;
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['languageKey'] = NULL;
$arguments276['alternativeLanguageKeys'] = NULL;
$arguments276['key'] = 'resetPassword.label';
$arguments272['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);
// Rendering Array
$array278 = array();
$array278['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$arguments279['key'] = 'resetPassword.confirmation.header';
$array278['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array284);
$arguments281['arguments'] = $array283;
$array278['bs-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);
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
$arguments285['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array278['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);
$arguments272['data'] = $array278;

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '
                ';
return $output271;
};
$arguments269 = array();

$output268 .= '';

$output268 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['identifier'] = NULL;
$arguments293['size'] = 'small';
$arguments293['overlay'] = NULL;
$arguments293['state'] = 'default';
$arguments293['alternativeMarkupIdentifier'] = NULL;
$arguments293['identifier'] = 'empty-empty';

$output292 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '</span>
                ';
return $output292;
};
$arguments290 = array();
$arguments290['if'] = NULL;

$output268 .= '';

$output268 .= '
            ';
return $output268;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.passwordResetEnabled', $array266);

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments241['__thenClosure'] = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['identifier'] = NULL;
$arguments260['size'] = 'small';
$arguments260['overlay'] = NULL;
$arguments260['state'] = 'default';
$arguments260['alternativeMarkupIdentifier'] = NULL;
$arguments260['identifier'] = 'actions-edit-undo';

$output259 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
                    ';
return $output259;
};
$arguments244 = array();
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['aria'] = NULL;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['name'] = NULL;
$arguments244['rel'] = NULL;
$arguments244['rev'] = NULL;
$arguments244['target'] = NULL;
$arguments244['action'] = NULL;
$arguments244['controller'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['pluginName'] = NULL;
$arguments244['pageUid'] = NULL;
$arguments244['pageType'] = NULL;
$arguments244['noCache'] = NULL;
$arguments244['section'] = NULL;
$arguments244['format'] = NULL;
$arguments244['linkAccessRestrictedPages'] = NULL;
$arguments244['additionalParams'] = NULL;
$arguments244['absolute'] = NULL;
$arguments244['addQueryString'] = NULL;
$arguments244['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments244['addQueryStringMethod'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['class'] = 'btn btn-default t3js-modal-trigger';
$arguments244['action'] = 'initiatePasswordReset';
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array247);
$arguments244['arguments'] = $array246;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['languageKey'] = NULL;
$arguments248['alternativeLanguageKeys'] = NULL;
$arguments248['key'] = 'resetPassword.label';
$arguments244['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);
// Rendering Array
$array250 = array();
$array250['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'resetPassword.confirmation.header';
$array250['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array256);
$arguments253['arguments'] = $array255;
$array250['bs-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);
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
$arguments257['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array250['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);
$arguments244['data'] = $array250;

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
                ';
return $output243;
};
$arguments241['__elseClosures'][] = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['identifier'] = NULL;
$arguments263['size'] = 'small';
$arguments263['overlay'] = NULL;
$arguments263['state'] = 'default';
$arguments263['alternativeMarkupIdentifier'] = NULL;
$arguments263['identifier'] = 'empty-empty';

$output262 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '</span>
                ';
return $output262;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['identifier'] = NULL;
$arguments302['size'] = 'small';
$arguments302['overlay'] = NULL;
$arguments302['state'] = 'default';
$arguments302['alternativeMarkupIdentifier'] = NULL;
$arguments302['identifier'] = 'actions-system-options-view';
$arguments302['size'] = 'small';

$output301 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '
            ';
return $output301;
};
$arguments295 = array();
$arguments295['additionalAttributes'] = NULL;
$arguments295['data'] = NULL;
$arguments295['aria'] = NULL;
$arguments295['class'] = NULL;
$arguments295['dir'] = NULL;
$arguments295['id'] = NULL;
$arguments295['lang'] = NULL;
$arguments295['style'] = NULL;
$arguments295['title'] = NULL;
$arguments295['accesskey'] = NULL;
$arguments295['tabindex'] = NULL;
$arguments295['onclick'] = NULL;
$arguments295['name'] = NULL;
$arguments295['rel'] = NULL;
$arguments295['rev'] = NULL;
$arguments295['target'] = NULL;
$arguments295['action'] = NULL;
$arguments295['controller'] = NULL;
$arguments295['extensionName'] = NULL;
$arguments295['pluginName'] = NULL;
$arguments295['pageUid'] = NULL;
$arguments295['pageType'] = NULL;
$arguments295['noCache'] = NULL;
$arguments295['section'] = NULL;
$arguments295['format'] = NULL;
$arguments295['linkAccessRestrictedPages'] = NULL;
$arguments295['additionalParams'] = NULL;
$arguments295['absolute'] = NULL;
$arguments295['addQueryString'] = NULL;
$arguments295['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments295['addQueryStringMethod'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['action'] = 'show';
// Rendering Array
$array297 = array();
$array298 = array (
);$array297['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array298);
$arguments295['arguments'] = $array297;
$arguments295['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['key'] = NULL;
$arguments299['id'] = NULL;
$arguments299['default'] = NULL;
$arguments299['arguments'] = NULL;
$arguments299['extensionName'] = NULL;
$arguments299['languageKey'] = NULL;
$arguments299['alternativeLanguageKeys'] = NULL;
$arguments299['key'] = 'details';
$arguments295['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);

$output0 .= '
            <a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'info';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output0 .= '" data-dispatch-action="TYPO3.InfoWindow.showItem" data-dispatch-args-list="be_users,';
$array306 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array306)]);

$output0 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['identifier'] = NULL;
$arguments307['size'] = 'small';
$arguments307['overlay'] = NULL;
$arguments307['state'] = 'default';
$arguments307['alternativeMarkupIdentifier'] = NULL;
$arguments307['identifier'] = 'actions-document-info';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output0 .= '
            </a>
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['identifier'] = NULL;
$arguments349['size'] = 'small';
$arguments349['overlay'] = NULL;
$arguments349['state'] = 'default';
$arguments349['alternativeMarkupIdentifier'] = NULL;
$arguments349['identifier'] = 'actions-remove';
$arguments349['size'] = 'small';

$output348 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['languageKey'] = NULL;
$arguments351['alternativeLanguageKeys'] = NULL;
$arguments351['key'] = 'compare';

$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output348 .= '
                    ';
return $output348;
};
$arguments342 = array();
$arguments342['additionalAttributes'] = NULL;
$arguments342['data'] = NULL;
$arguments342['aria'] = NULL;
$arguments342['class'] = NULL;
$arguments342['dir'] = NULL;
$arguments342['id'] = NULL;
$arguments342['lang'] = NULL;
$arguments342['style'] = NULL;
$arguments342['title'] = NULL;
$arguments342['accesskey'] = NULL;
$arguments342['tabindex'] = NULL;
$arguments342['onclick'] = NULL;
$arguments342['name'] = NULL;
$arguments342['rel'] = NULL;
$arguments342['rev'] = NULL;
$arguments342['target'] = NULL;
$arguments342['action'] = NULL;
$arguments342['controller'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['pluginName'] = NULL;
$arguments342['pageUid'] = NULL;
$arguments342['pageType'] = NULL;
$arguments342['noCache'] = NULL;
$arguments342['section'] = NULL;
$arguments342['format'] = NULL;
$arguments342['linkAccessRestrictedPages'] = NULL;
$arguments342['additionalParams'] = NULL;
$arguments342['absolute'] = NULL;
$arguments342['addQueryString'] = NULL;
$arguments342['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments342['addQueryStringMethod'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['action'] = 'removeFromCompareList';
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array345);
$arguments342['arguments'] = $array344;
$arguments342['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['key'] = NULL;
$arguments346['id'] = NULL;
$arguments346['default'] = NULL;
$arguments346['arguments'] = NULL;
$arguments346['extensionName'] = NULL;
$arguments346['languageKey'] = NULL;
$arguments346['alternativeLanguageKeys'] = NULL;
$arguments346['key'] = 'compare';
$arguments342['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output341 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output341 .= '
                ';
return $output341;
};
$arguments339 = array();

$output338 .= '';

$output338 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['identifier'] = NULL;
$arguments363['size'] = 'small';
$arguments363['overlay'] = NULL;
$arguments363['state'] = 'default';
$arguments363['alternativeMarkupIdentifier'] = NULL;
$arguments363['identifier'] = 'actions-add';
$arguments363['size'] = 'small';

$output362 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output362 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['key'] = NULL;
$arguments365['id'] = NULL;
$arguments365['default'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['languageKey'] = NULL;
$arguments365['alternativeLanguageKeys'] = NULL;
$arguments365['key'] = 'compare';

$output362 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output362 .= '
                    ';
return $output362;
};
$arguments356 = array();
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['aria'] = NULL;
$arguments356['class'] = NULL;
$arguments356['dir'] = NULL;
$arguments356['id'] = NULL;
$arguments356['lang'] = NULL;
$arguments356['style'] = NULL;
$arguments356['title'] = NULL;
$arguments356['accesskey'] = NULL;
$arguments356['tabindex'] = NULL;
$arguments356['onclick'] = NULL;
$arguments356['name'] = NULL;
$arguments356['rel'] = NULL;
$arguments356['rev'] = NULL;
$arguments356['target'] = NULL;
$arguments356['action'] = NULL;
$arguments356['controller'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['pluginName'] = NULL;
$arguments356['pageUid'] = NULL;
$arguments356['pageType'] = NULL;
$arguments356['noCache'] = NULL;
$arguments356['section'] = NULL;
$arguments356['format'] = NULL;
$arguments356['linkAccessRestrictedPages'] = NULL;
$arguments356['additionalParams'] = NULL;
$arguments356['absolute'] = NULL;
$arguments356['addQueryString'] = NULL;
$arguments356['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments356['addQueryStringMethod'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['action'] = 'addToCompareList';
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array359);
$arguments356['arguments'] = $array358;
$arguments356['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['languageKey'] = NULL;
$arguments360['alternativeLanguageKeys'] = NULL;
$arguments360['key'] = 'compare';
$arguments356['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output355 .= '
                ';
return $output355;
};
$arguments353 = array();
$arguments353['if'] = NULL;

$output338 .= '';

$output338 .= '
            ';
return $output338;
};
$arguments309 = array();
$arguments309['then'] = NULL;
$arguments309['else'] = NULL;
$arguments309['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array336);

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments309['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments309['__thenClosure'] = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['identifier'] = NULL;
$arguments319['size'] = 'small';
$arguments319['overlay'] = NULL;
$arguments319['state'] = 'default';
$arguments319['alternativeMarkupIdentifier'] = NULL;
$arguments319['identifier'] = 'actions-remove';
$arguments319['size'] = 'small';

$output318 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['key'] = NULL;
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['languageKey'] = NULL;
$arguments321['alternativeLanguageKeys'] = NULL;
$arguments321['key'] = 'compare';

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output318 .= '
                    ';
return $output318;
};
$arguments312 = array();
$arguments312['additionalAttributes'] = NULL;
$arguments312['data'] = NULL;
$arguments312['aria'] = NULL;
$arguments312['class'] = NULL;
$arguments312['dir'] = NULL;
$arguments312['id'] = NULL;
$arguments312['lang'] = NULL;
$arguments312['style'] = NULL;
$arguments312['title'] = NULL;
$arguments312['accesskey'] = NULL;
$arguments312['tabindex'] = NULL;
$arguments312['onclick'] = NULL;
$arguments312['name'] = NULL;
$arguments312['rel'] = NULL;
$arguments312['rev'] = NULL;
$arguments312['target'] = NULL;
$arguments312['action'] = NULL;
$arguments312['controller'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['pluginName'] = NULL;
$arguments312['pageUid'] = NULL;
$arguments312['pageType'] = NULL;
$arguments312['noCache'] = NULL;
$arguments312['section'] = NULL;
$arguments312['format'] = NULL;
$arguments312['linkAccessRestrictedPages'] = NULL;
$arguments312['additionalParams'] = NULL;
$arguments312['absolute'] = NULL;
$arguments312['addQueryString'] = NULL;
$arguments312['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments312['addQueryStringMethod'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['action'] = 'removeFromCompareList';
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array315);
$arguments312['arguments'] = $array314;
$arguments312['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['key'] = NULL;
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['languageKey'] = NULL;
$arguments316['alternativeLanguageKeys'] = NULL;
$arguments316['key'] = 'compare';
$arguments312['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
                ';
return $output311;
};
$arguments309['__elseClosures'][] = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['identifier'] = NULL;
$arguments331['size'] = 'small';
$arguments331['overlay'] = NULL;
$arguments331['state'] = 'default';
$arguments331['alternativeMarkupIdentifier'] = NULL;
$arguments331['identifier'] = 'actions-add';
$arguments331['size'] = 'small';

$output330 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['key'] = NULL;
$arguments333['id'] = NULL;
$arguments333['default'] = NULL;
$arguments333['arguments'] = NULL;
$arguments333['extensionName'] = NULL;
$arguments333['languageKey'] = NULL;
$arguments333['alternativeLanguageKeys'] = NULL;
$arguments333['key'] = 'compare';

$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext)]);

$output330 .= '
                    ';
return $output330;
};
$arguments324 = array();
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['aria'] = NULL;
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['title'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['name'] = NULL;
$arguments324['rel'] = NULL;
$arguments324['rev'] = NULL;
$arguments324['target'] = NULL;
$arguments324['action'] = NULL;
$arguments324['controller'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['pluginName'] = NULL;
$arguments324['pageUid'] = NULL;
$arguments324['pageType'] = NULL;
$arguments324['noCache'] = NULL;
$arguments324['section'] = NULL;
$arguments324['format'] = NULL;
$arguments324['linkAccessRestrictedPages'] = NULL;
$arguments324['additionalParams'] = NULL;
$arguments324['absolute'] = NULL;
$arguments324['addQueryString'] = NULL;
$arguments324['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments324['addQueryStringMethod'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['action'] = 'addToCompareList';
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array327);
$arguments324['arguments'] = $array326;
$arguments324['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['key'] = NULL;
$arguments328['id'] = NULL;
$arguments328['default'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['languageKey'] = NULL;
$arguments328['alternativeLanguageKeys'] = NULL;
$arguments328['key'] = 'compare';
$arguments324['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
                ';
return $output323;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['backendUser'] = NULL;
$array369 = array (
);$arguments367['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array369);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output0 .= '
        </div>
    </td>
</tr>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output370 = '';

$output370 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers"
    xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
    xmlns:bu="http://typo3.org/ns/TYPO3/CMS/Beuser/ViewHelpers">

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
<tr>
    <td>
        <a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array374 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array374)]);

$output373 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['then'] = NULL;
$arguments375['else'] = NULL;
$arguments375['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array377 = array();
$array378 = array (
);$array377['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.description', $array378);

$expression379 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments375['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression379(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array377)
					),
					$renderingContext
				);
$output380 = '';
$array381 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array381)]);

$output380 .= ' ';
$arguments375['then'] = $output380;

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output373 .= '(id=';
$array382 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array382)]);

$output373 .= ')">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['backendUser'] = 0;
$arguments383['size'] = 32;
$arguments383['showIcon'] = false;
$array385 = array (
);$arguments383['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array385);
// Rendering Boolean node
// Rendering Array
$array386 = array();
$array386['0'] = 'TRUE';

$expression387 = function($context) {return TRUE;};
$arguments383['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);

$output373 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output373 .= '
        </a>
    </td>
    <td class="col-title">
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
            <b>';
$array392 = array (
);
$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array392)]);

$output391 .= '</b>
        ';
return $output391;
};
$arguments388 = array();
$arguments388['additionalAttributes'] = NULL;
$arguments388['data'] = NULL;
$arguments388['aria'] = NULL;
$arguments388['class'] = NULL;
$arguments388['dir'] = NULL;
$arguments388['id'] = NULL;
$arguments388['lang'] = NULL;
$arguments388['style'] = NULL;
$arguments388['title'] = NULL;
$arguments388['accesskey'] = NULL;
$arguments388['tabindex'] = NULL;
$arguments388['onclick'] = NULL;
$arguments388['uid'] = NULL;
$arguments388['table'] = NULL;
$arguments388['fields'] = NULL;
$arguments388['returnUrl'] = '';
$arguments388['table'] = 'be_users';
$array390 = array (
);$arguments388['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array390);
$arguments388['title'] = 'edit';

$output373 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output373 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
            <span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['key'] = NULL;
$arguments399['id'] = NULL;
$arguments399['default'] = NULL;
$arguments399['arguments'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['languageKey'] = NULL;
$arguments399['alternativeLanguageKeys'] = NULL;
$arguments399['key'] = 'online';

$output398 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext)]);

$output398 .= '</span>
        ';
return $output398;
};
$arguments393 = array();
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$arguments393['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{backendUser.uid}', $array396);

$expression397 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments393['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments393['__thenClosure'] = $renderChildrenClosure394;

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output373 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\MfaStatusViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['additionalAttributes'] = NULL;
$arguments401['data'] = NULL;
$arguments401['aria'] = NULL;
$arguments401['class'] = NULL;
$arguments401['dir'] = NULL;
$arguments401['id'] = NULL;
$arguments401['lang'] = NULL;
$arguments401['style'] = NULL;
$arguments401['title'] = NULL;
$arguments401['accesskey'] = NULL;
$arguments401['tabindex'] = NULL;
$arguments401['onclick'] = NULL;
$arguments401['userUid'] = NULL;
$array403 = array (
);$arguments401['userUid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array403);

$output373 .= TYPO3\CMS\Beuser\ViewHelpers\MfaStatusViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output373 .= '
        <br />
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
                ';
$array414 = array (
);
$output413 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array414)]);

$output413 .= '
            ';
return $output413;
};
$arguments410 = array();
$arguments410['additionalAttributes'] = NULL;
$arguments410['data'] = NULL;
$arguments410['aria'] = NULL;
$arguments410['class'] = NULL;
$arguments410['dir'] = NULL;
$arguments410['id'] = NULL;
$arguments410['lang'] = NULL;
$arguments410['style'] = NULL;
$arguments410['title'] = NULL;
$arguments410['accesskey'] = NULL;
$arguments410['tabindex'] = NULL;
$arguments410['onclick'] = NULL;
$arguments410['uid'] = NULL;
$arguments410['table'] = NULL;
$arguments410['fields'] = NULL;
$arguments410['returnUrl'] = '';
$arguments410['table'] = 'be_users';
$array412 = array (
);$arguments410['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array412);
$arguments410['title'] = 'edit';

$output409 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
        ';
return $output409;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array407);

$expression408 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array406)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = $renderChildrenClosure405;

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output373 .= '
    </td>
    <td>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
$output433 = '';

$output433 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$array439 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array439);
};
$arguments434 = array();
$arguments434['date'] = NULL;
$arguments434['format'] = '';
$arguments434['base'] = NULL;
$output436 = '';
$array437 = array (
);
$output436 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array437);

$output436 .= ' ';
$array438 = array (
);
$output436 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array438);
$arguments434['format'] = $output436;
$renderChildrenClosure435 = ($arguments434['date'] !== null) ? function() use ($arguments434) { return $arguments434['date']; } : $renderChildrenClosure435;
$output433 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output433 .= '
            ';
return $output433;
};
$arguments431 = array();

$output430 .= '';

$output430 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
$output442 = '';

$output442 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['key'] = NULL;
$arguments443['id'] = NULL;
$arguments443['default'] = NULL;
$arguments443['arguments'] = NULL;
$arguments443['extensionName'] = NULL;
$arguments443['languageKey'] = NULL;
$arguments443['alternativeLanguageKeys'] = NULL;
$arguments443['key'] = 'never';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext)]);

$output442 .= '
            ';
return $output442;
};
$arguments440 = array();
$arguments440['if'] = NULL;

$output430 .= '';

$output430 .= '
        ';
return $output430;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array428);

$expression429 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression429(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$array423 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array423);
};
$arguments418 = array();
$arguments418['date'] = NULL;
$arguments418['format'] = '';
$arguments418['base'] = NULL;
$output420 = '';
$array421 = array (
);
$output420 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array421);

$output420 .= ' ';
$array422 = array (
);
$output420 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array422);
$arguments418['format'] = $output420;
$renderChildrenClosure419 = ($arguments418['date'] !== null) ? function() use ($arguments418) { return $arguments418['date']; } : $renderChildrenClosure419;
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output417 .= '
            ';
return $output417;
};
$arguments415['__elseClosures'][] = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['key'] = 'never';

$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output424 .= '
            ';
return $output424;
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output373 .= '
    </td>
    <td class="col-control">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['identifier'] = NULL;
$arguments451['size'] = 'small';
$arguments451['overlay'] = NULL;
$arguments451['state'] = 'default';
$arguments451['alternativeMarkupIdentifier'] = NULL;
$arguments451['identifier'] = 'actions-open';

$output450 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output450 .= '
            ';
return $output450;
};
$arguments445 = array();
$arguments445['additionalAttributes'] = NULL;
$arguments445['data'] = NULL;
$arguments445['aria'] = NULL;
$arguments445['class'] = NULL;
$arguments445['dir'] = NULL;
$arguments445['id'] = NULL;
$arguments445['lang'] = NULL;
$arguments445['style'] = NULL;
$arguments445['title'] = NULL;
$arguments445['accesskey'] = NULL;
$arguments445['tabindex'] = NULL;
$arguments445['onclick'] = NULL;
$arguments445['uid'] = NULL;
$arguments445['table'] = NULL;
$arguments445['fields'] = NULL;
$arguments445['returnUrl'] = '';
$arguments445['class'] = 'btn btn-default';
$arguments445['table'] = 'be_users';
$array447 = array (
);$arguments445['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array447);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'edit';
$arguments445['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output373 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output373 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['identifier'] = NULL;
$arguments512['size'] = 'small';
$arguments512['overlay'] = NULL;
$arguments512['state'] = 'default';
$arguments512['alternativeMarkupIdentifier'] = NULL;
$arguments512['identifier'] = 'empty-empty';

$output511 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '</span>
                ';
return $output511;
};
$arguments509 = array();

$output508 .= '';

$output508 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
$output516 = '';

$output516 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['route'] = NULL;
$arguments544['arguments'] = array (
);
$arguments544['query'] = NULL;
$arguments544['currentUrlParameterName'] = NULL;
$arguments544['route'] = 'tce_db';
$output546 = '';

$output546 .= 'data[be_users][';
$array547 = array (
);
$output546 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array547);

$output546 .= '][disable]=0';
$arguments544['query'] = $output546;
$arguments544['currentUrlParameterName'] = 'redirect';

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output543 .= '" title="';
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
$arguments548['key'] = 'visibility.unhide';

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext)]);

$output543 .= '">';
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
$arguments550['identifier'] = 'actions-edit-unhide';

$output543 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output543 .= '</a>
                        ';
return $output543;
};
$arguments541 = array();

$output540 .= '';

$output540 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['route'] = NULL;
$arguments555['arguments'] = array (
);
$arguments555['query'] = NULL;
$arguments555['currentUrlParameterName'] = NULL;
$arguments555['route'] = 'tce_db';
$output557 = '';

$output557 .= 'data[be_users][';
$array558 = array (
);
$output557 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array558);

$output557 .= '][disable]=1';
$arguments555['query'] = $output557;
$arguments555['currentUrlParameterName'] = 'redirect';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output554 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments559 = array();
$arguments559['key'] = NULL;
$arguments559['id'] = NULL;
$arguments559['default'] = NULL;
$arguments559['arguments'] = NULL;
$arguments559['extensionName'] = NULL;
$arguments559['languageKey'] = NULL;
$arguments559['alternativeLanguageKeys'] = NULL;
$arguments559['key'] = 'visibility.hide';

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext)]);

$output554 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['identifier'] = NULL;
$arguments561['size'] = 'small';
$arguments561['overlay'] = NULL;
$arguments561['state'] = 'default';
$arguments561['alternativeMarkupIdentifier'] = NULL;
$arguments561['identifier'] = 'actions-edit-hide';

$output554 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output554 .= '</a>
                        ';
return $output554;
};
$arguments552 = array();
$arguments552['if'] = NULL;

$output540 .= '';

$output540 .= '
                    ';
return $output540;
};
$arguments517 = array();
$arguments517['then'] = NULL;
$arguments517['else'] = NULL;
$arguments517['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array537 = array();
$array538 = array (
);$array537['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array538);
$array537['1'] = ' == 1';

$expression539 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments517['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression539(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array537)
					),
					$renderingContext
				);
$arguments517['__thenClosure'] = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['route'] = NULL;
$arguments520['arguments'] = array (
);
$arguments520['query'] = NULL;
$arguments520['currentUrlParameterName'] = NULL;
$arguments520['route'] = 'tce_db';
$output522 = '';

$output522 .= 'data[be_users][';
$array523 = array (
);
$output522 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array523);

$output522 .= '][disable]=0';
$arguments520['query'] = $output522;
$arguments520['currentUrlParameterName'] = 'redirect';

$output519 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext)]);

$output519 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['key'] = NULL;
$arguments524['id'] = NULL;
$arguments524['default'] = NULL;
$arguments524['arguments'] = NULL;
$arguments524['extensionName'] = NULL;
$arguments524['languageKey'] = NULL;
$arguments524['alternativeLanguageKeys'] = NULL;
$arguments524['key'] = 'visibility.unhide';

$output519 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext)]);

$output519 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['identifier'] = NULL;
$arguments526['size'] = 'small';
$arguments526['overlay'] = NULL;
$arguments526['state'] = 'default';
$arguments526['alternativeMarkupIdentifier'] = NULL;
$arguments526['identifier'] = 'actions-edit-unhide';

$output519 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output519 .= '</a>
                        ';
return $output519;
};
$arguments517['__elseClosures'][] = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['route'] = NULL;
$arguments529['arguments'] = array (
);
$arguments529['query'] = NULL;
$arguments529['currentUrlParameterName'] = NULL;
$arguments529['route'] = 'tce_db';
$output531 = '';

$output531 .= 'data[be_users][';
$array532 = array (
);
$output531 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array532);

$output531 .= '][disable]=1';
$arguments529['query'] = $output531;
$arguments529['currentUrlParameterName'] = 'redirect';

$output528 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext)]);

$output528 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['key'] = NULL;
$arguments533['id'] = NULL;
$arguments533['default'] = NULL;
$arguments533['arguments'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['languageKey'] = NULL;
$arguments533['alternativeLanguageKeys'] = NULL;
$arguments533['key'] = 'visibility.hide';

$output528 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext)]);

$output528 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['identifier'] = NULL;
$arguments535['size'] = 'small';
$arguments535['overlay'] = NULL;
$arguments535['state'] = 'default';
$arguments535['alternativeMarkupIdentifier'] = NULL;
$arguments535['identifier'] = 'actions-edit-hide';

$output528 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);

$output528 .= '</a>
                        ';
return $output528;
};

$output516 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output516 .= '
                ';
return $output516;
};
$arguments514 = array();
$arguments514['if'] = NULL;

$output508 .= '';

$output508 .= '
            ';
return $output508;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array505 = array();
$array506 = array (
);$array505['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array506);
$array505['1'] = ' == 1';

$expression507 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array505)
					),
					$renderingContext
				);
$arguments453['__thenClosure'] = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['identifier'] = NULL;
$arguments456['size'] = 'small';
$arguments456['overlay'] = NULL;
$arguments456['state'] = 'default';
$arguments456['alternativeMarkupIdentifier'] = NULL;
$arguments456['identifier'] = 'empty-empty';

$output455 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '</span>
                ';
return $output455;
};
$arguments453['__elseClosures'][] = function() use ($renderingContext, $self) {
$output458 = '';

$output458 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['route'] = NULL;
$arguments486['arguments'] = array (
);
$arguments486['query'] = NULL;
$arguments486['currentUrlParameterName'] = NULL;
$arguments486['route'] = 'tce_db';
$output488 = '';

$output488 .= 'data[be_users][';
$array489 = array (
);
$output488 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array489);

$output488 .= '][disable]=0';
$arguments486['query'] = $output488;
$arguments486['currentUrlParameterName'] = 'redirect';

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext)]);

$output485 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['key'] = NULL;
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['languageKey'] = NULL;
$arguments490['alternativeLanguageKeys'] = NULL;
$arguments490['key'] = 'visibility.unhide';

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext)]);

$output485 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['identifier'] = NULL;
$arguments492['size'] = 'small';
$arguments492['overlay'] = NULL;
$arguments492['state'] = 'default';
$arguments492['alternativeMarkupIdentifier'] = NULL;
$arguments492['identifier'] = 'actions-edit-unhide';

$output485 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output485 .= '</a>
                        ';
return $output485;
};
$arguments483 = array();

$output482 .= '';

$output482 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['route'] = NULL;
$arguments497['arguments'] = array (
);
$arguments497['query'] = NULL;
$arguments497['currentUrlParameterName'] = NULL;
$arguments497['route'] = 'tce_db';
$output499 = '';

$output499 .= 'data[be_users][';
$array500 = array (
);
$output499 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array500);

$output499 .= '][disable]=1';
$arguments497['query'] = $output499;
$arguments497['currentUrlParameterName'] = 'redirect';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext)]);

$output496 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['key'] = NULL;
$arguments501['id'] = NULL;
$arguments501['default'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['languageKey'] = NULL;
$arguments501['alternativeLanguageKeys'] = NULL;
$arguments501['key'] = 'visibility.hide';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext)]);

$output496 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['identifier'] = NULL;
$arguments503['size'] = 'small';
$arguments503['overlay'] = NULL;
$arguments503['state'] = 'default';
$arguments503['alternativeMarkupIdentifier'] = NULL;
$arguments503['identifier'] = 'actions-edit-hide';

$output496 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);

$output496 .= '</a>
                        ';
return $output496;
};
$arguments494 = array();
$arguments494['if'] = NULL;

$output482 .= '';

$output482 .= '
                    ';
return $output482;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array479 = array();
$array480 = array (
);$array479['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array480);
$array479['1'] = ' == 1';

$expression481 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression481(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array479)
					),
					$renderingContext
				);
$arguments459['__thenClosure'] = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['route'] = NULL;
$arguments462['arguments'] = array (
);
$arguments462['query'] = NULL;
$arguments462['currentUrlParameterName'] = NULL;
$arguments462['route'] = 'tce_db';
$output464 = '';

$output464 .= 'data[be_users][';
$array465 = array (
);
$output464 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array465);

$output464 .= '][disable]=0';
$arguments462['query'] = $output464;
$arguments462['currentUrlParameterName'] = 'redirect';

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output461 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['key'] = NULL;
$arguments466['id'] = NULL;
$arguments466['default'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['extensionName'] = NULL;
$arguments466['languageKey'] = NULL;
$arguments466['alternativeLanguageKeys'] = NULL;
$arguments466['key'] = 'visibility.unhide';

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext)]);

$output461 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['identifier'] = NULL;
$arguments468['size'] = 'small';
$arguments468['overlay'] = NULL;
$arguments468['state'] = 'default';
$arguments468['alternativeMarkupIdentifier'] = NULL;
$arguments468['identifier'] = 'actions-edit-unhide';

$output461 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output461 .= '</a>
                        ';
return $output461;
};
$arguments459['__elseClosures'][] = function() use ($renderingContext, $self) {
$output470 = '';

$output470 .= '
                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['route'] = NULL;
$arguments471['arguments'] = array (
);
$arguments471['query'] = NULL;
$arguments471['currentUrlParameterName'] = NULL;
$arguments471['route'] = 'tce_db';
$output473 = '';

$output473 .= 'data[be_users][';
$array474 = array (
);
$output473 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array474);

$output473 .= '][disable]=1';
$arguments471['query'] = $output473;
$arguments471['currentUrlParameterName'] = 'redirect';

$output470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext)]);

$output470 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['key'] = NULL;
$arguments475['id'] = NULL;
$arguments475['default'] = NULL;
$arguments475['arguments'] = NULL;
$arguments475['extensionName'] = NULL;
$arguments475['languageKey'] = NULL;
$arguments475['alternativeLanguageKeys'] = NULL;
$arguments475['key'] = 'visibility.hide';

$output470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext)]);

$output470 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments477 = array();
$arguments477['identifier'] = NULL;
$arguments477['size'] = 'small';
$arguments477['overlay'] = NULL;
$arguments477['state'] = 'default';
$arguments477['alternativeMarkupIdentifier'] = NULL;
$arguments477['identifier'] = 'actions-edit-hide';

$output470 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output470 .= '</a>
                        ';
return $output470;
};

$output458 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output458 .= '
                ';
return $output458;
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output373 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$output592 = '';

$output592 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['identifier'] = NULL;
$arguments593['size'] = 'small';
$arguments593['overlay'] = NULL;
$arguments593['state'] = 'default';
$arguments593['alternativeMarkupIdentifier'] = NULL;
$arguments593['identifier'] = 'empty-empty';

$output592 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output592 .= '</span>
                ';
return $output592;
};
$arguments590 = array();

$output589 .= '';

$output589 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['route'] = NULL;
$arguments598['arguments'] = array (
);
$arguments598['query'] = NULL;
$arguments598['currentUrlParameterName'] = NULL;
$arguments598['route'] = 'tce_db';
$output600 = '';

$output600 .= 'cmd[be_users][';
$array601 = array (
);
$output600 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array601);

$output600 .= '][delete]=1';
$arguments598['query'] = $output600;
$arguments598['currentUrlParameterName'] = 'redirect';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext)]);

$output597 .= '"
                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['key'] = NULL;
$arguments602['id'] = NULL;
$arguments602['default'] = NULL;
$arguments602['arguments'] = NULL;
$arguments602['extensionName'] = NULL;
$arguments602['languageKey'] = NULL;
$arguments602['alternativeLanguageKeys'] = NULL;
$arguments602['key'] = 'delete';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext)]);

$output597 .= '"
                        data-severity="warning"
                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['key'] = NULL;
$arguments604['id'] = NULL;
$arguments604['default'] = NULL;
$arguments604['arguments'] = NULL;
$arguments604['extensionName'] = NULL;
$arguments604['languageKey'] = NULL;
$arguments604['alternativeLanguageKeys'] = NULL;
$arguments604['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext)]);

$output597 .= '"
                        data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments606 = array();
$arguments606['key'] = NULL;
$arguments606['id'] = NULL;
$arguments606['default'] = NULL;
$arguments606['arguments'] = NULL;
$arguments606['extensionName'] = NULL;
$arguments606['languageKey'] = NULL;
$arguments606['alternativeLanguageKeys'] = NULL;
$arguments606['key'] = 'confirm';
// Rendering Array
$array608 = array();
$array609 = array (
);$array608['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array609);
$arguments606['arguments'] = $array608;

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext)]);

$output597 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments610 = array();
$arguments610['key'] = NULL;
$arguments610['id'] = NULL;
$arguments610['default'] = NULL;
$arguments610['arguments'] = NULL;
$arguments610['extensionName'] = NULL;
$arguments610['languageKey'] = NULL;
$arguments610['alternativeLanguageKeys'] = NULL;
$arguments610['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext)]);

$output597 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments612 = array();
$arguments612['identifier'] = NULL;
$arguments612['size'] = 'small';
$arguments612['overlay'] = NULL;
$arguments612['state'] = 'default';
$arguments612['alternativeMarkupIdentifier'] = NULL;
$arguments612['identifier'] = 'actions-edit-delete';

$output597 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output597 .= '
                    </a>
                ';
return $output597;
};
$arguments595 = array();
$arguments595['if'] = NULL;

$output589 .= '';

$output589 .= '
            ';
return $output589;
};
$arguments563 = array();
$arguments563['then'] = NULL;
$arguments563['else'] = NULL;
$arguments563['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array585 = array();
$array586 = array (
);$array585['0'] = $renderingContext->getVariableProvider()->getByPath('currentUserUid', $array586);
$array585['1'] = ' == ';
$array587 = array (
);$array585['2'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array587);

$expression588 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments563['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression588(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array585)
					),
					$renderingContext
				);
$arguments563['__thenClosure'] = function() use ($renderingContext, $self) {
$output565 = '';

$output565 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['identifier'] = NULL;
$arguments566['size'] = 'small';
$arguments566['overlay'] = NULL;
$arguments566['state'] = 'default';
$arguments566['alternativeMarkupIdentifier'] = NULL;
$arguments566['identifier'] = 'empty-empty';

$output565 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output565 .= '</span>
                ';
return $output565;
};
$arguments563['__elseClosures'][] = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
                    <a class="btn btn-default t3js-modal-trigger" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['route'] = NULL;
$arguments569['arguments'] = array (
);
$arguments569['query'] = NULL;
$arguments569['currentUrlParameterName'] = NULL;
$arguments569['route'] = 'tce_db';
$output571 = '';

$output571 .= 'cmd[be_users][';
$array572 = array (
);
$output571 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array572);

$output571 .= '][delete]=1';
$arguments569['query'] = $output571;
$arguments569['currentUrlParameterName'] = 'redirect';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext)]);

$output568 .= '"
                        title="';
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
$arguments573['key'] = 'delete';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext)]);

$output568 .= '"
                        data-severity="warning"
                        data-title="';
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
$arguments575['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext)]);

$output568 .= '"
                        data-bs-content="';
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
$arguments577['key'] = 'confirm';
// Rendering Array
$array579 = array();
$array580 = array (
);$array579['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array580);
$arguments577['arguments'] = $array579;

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext)]);

$output568 .= '"
                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments581 = array();
$arguments581['key'] = NULL;
$arguments581['id'] = NULL;
$arguments581['default'] = NULL;
$arguments581['arguments'] = NULL;
$arguments581['extensionName'] = NULL;
$arguments581['languageKey'] = NULL;
$arguments581['alternativeLanguageKeys'] = NULL;
$arguments581['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext)]);

$output568 .= '">
                        ';
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
$arguments583['identifier'] = 'actions-edit-delete';

$output568 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext);

$output568 .= '
                    </a>
                ';
return $output568;
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output373 .= '
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
$output641 = '';

$output641 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
$output660 = '';

$output660 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure662 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments661 = array();
$arguments661['identifier'] = NULL;
$arguments661['size'] = 'small';
$arguments661['overlay'] = NULL;
$arguments661['state'] = 'default';
$arguments661['alternativeMarkupIdentifier'] = NULL;
$arguments661['identifier'] = 'actions-edit-undo';

$output660 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments661, $renderChildrenClosure662, $renderingContext);

$output660 .= '
                    ';
return $output660;
};
$arguments645 = array();
$arguments645['additionalAttributes'] = NULL;
$arguments645['data'] = NULL;
$arguments645['aria'] = NULL;
$arguments645['class'] = NULL;
$arguments645['dir'] = NULL;
$arguments645['id'] = NULL;
$arguments645['lang'] = NULL;
$arguments645['style'] = NULL;
$arguments645['title'] = NULL;
$arguments645['accesskey'] = NULL;
$arguments645['tabindex'] = NULL;
$arguments645['onclick'] = NULL;
$arguments645['name'] = NULL;
$arguments645['rel'] = NULL;
$arguments645['rev'] = NULL;
$arguments645['target'] = NULL;
$arguments645['action'] = NULL;
$arguments645['controller'] = NULL;
$arguments645['extensionName'] = NULL;
$arguments645['pluginName'] = NULL;
$arguments645['pageUid'] = NULL;
$arguments645['pageType'] = NULL;
$arguments645['noCache'] = NULL;
$arguments645['section'] = NULL;
$arguments645['format'] = NULL;
$arguments645['linkAccessRestrictedPages'] = NULL;
$arguments645['additionalParams'] = NULL;
$arguments645['absolute'] = NULL;
$arguments645['addQueryString'] = NULL;
$arguments645['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments645['addQueryStringMethod'] = NULL;
$arguments645['arguments'] = NULL;
$arguments645['class'] = 'btn btn-default t3js-modal-trigger';
$arguments645['action'] = 'initiatePasswordReset';
// Rendering Array
$array647 = array();
$array648 = array (
);$array647['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array648);
$arguments645['arguments'] = $array647;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments649 = array();
$arguments649['key'] = NULL;
$arguments649['id'] = NULL;
$arguments649['default'] = NULL;
$arguments649['arguments'] = NULL;
$arguments649['extensionName'] = NULL;
$arguments649['languageKey'] = NULL;
$arguments649['alternativeLanguageKeys'] = NULL;
$arguments649['key'] = 'resetPassword.label';
$arguments645['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);
// Rendering Array
$array651 = array();
$array651['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments652 = array();
$arguments652['key'] = NULL;
$arguments652['id'] = NULL;
$arguments652['default'] = NULL;
$arguments652['arguments'] = NULL;
$arguments652['extensionName'] = NULL;
$arguments652['languageKey'] = NULL;
$arguments652['alternativeLanguageKeys'] = NULL;
$arguments652['key'] = 'resetPassword.confirmation.header';
$array651['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments654 = array();
$arguments654['key'] = NULL;
$arguments654['id'] = NULL;
$arguments654['default'] = NULL;
$arguments654['arguments'] = NULL;
$arguments654['extensionName'] = NULL;
$arguments654['languageKey'] = NULL;
$arguments654['alternativeLanguageKeys'] = NULL;
$arguments654['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array656 = array();
$array657 = array (
);$array656['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array657);
$arguments654['arguments'] = $array656;
$array651['bs-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments658 = array();
$arguments658['key'] = NULL;
$arguments658['id'] = NULL;
$arguments658['default'] = NULL;
$arguments658['arguments'] = NULL;
$arguments658['extensionName'] = NULL;
$arguments658['languageKey'] = NULL;
$arguments658['alternativeLanguageKeys'] = NULL;
$arguments658['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array651['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);
$arguments645['data'] = $array651;

$output644 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output644 .= '
                ';
return $output644;
};
$arguments642 = array();

$output641 .= '';

$output641 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments666 = array();
$arguments666['identifier'] = NULL;
$arguments666['size'] = 'small';
$arguments666['overlay'] = NULL;
$arguments666['state'] = 'default';
$arguments666['alternativeMarkupIdentifier'] = NULL;
$arguments666['identifier'] = 'empty-empty';

$output665 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output665 .= '</span>
                ';
return $output665;
};
$arguments663 = array();
$arguments663['if'] = NULL;

$output641 .= '';

$output641 .= '
            ';
return $output641;
};
$arguments614 = array();
$arguments614['then'] = NULL;
$arguments614['else'] = NULL;
$arguments614['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array638 = array();
$array639 = array (
);$array638['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.passwordResetEnabled', $array639);

$expression640 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments614['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression640(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array638)
					),
					$renderingContext
				);
$arguments614['__thenClosure'] = function() use ($renderingContext, $self) {
$output616 = '';

$output616 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
$output632 = '';

$output632 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['identifier'] = NULL;
$arguments633['size'] = 'small';
$arguments633['overlay'] = NULL;
$arguments633['state'] = 'default';
$arguments633['alternativeMarkupIdentifier'] = NULL;
$arguments633['identifier'] = 'actions-edit-undo';

$output632 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output632 .= '
                    ';
return $output632;
};
$arguments617 = array();
$arguments617['additionalAttributes'] = NULL;
$arguments617['data'] = NULL;
$arguments617['aria'] = NULL;
$arguments617['class'] = NULL;
$arguments617['dir'] = NULL;
$arguments617['id'] = NULL;
$arguments617['lang'] = NULL;
$arguments617['style'] = NULL;
$arguments617['title'] = NULL;
$arguments617['accesskey'] = NULL;
$arguments617['tabindex'] = NULL;
$arguments617['onclick'] = NULL;
$arguments617['name'] = NULL;
$arguments617['rel'] = NULL;
$arguments617['rev'] = NULL;
$arguments617['target'] = NULL;
$arguments617['action'] = NULL;
$arguments617['controller'] = NULL;
$arguments617['extensionName'] = NULL;
$arguments617['pluginName'] = NULL;
$arguments617['pageUid'] = NULL;
$arguments617['pageType'] = NULL;
$arguments617['noCache'] = NULL;
$arguments617['section'] = NULL;
$arguments617['format'] = NULL;
$arguments617['linkAccessRestrictedPages'] = NULL;
$arguments617['additionalParams'] = NULL;
$arguments617['absolute'] = NULL;
$arguments617['addQueryString'] = NULL;
$arguments617['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments617['addQueryStringMethod'] = NULL;
$arguments617['arguments'] = NULL;
$arguments617['class'] = 'btn btn-default t3js-modal-trigger';
$arguments617['action'] = 'initiatePasswordReset';
// Rendering Array
$array619 = array();
$array620 = array (
);$array619['user'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array620);
$arguments617['arguments'] = $array619;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments621 = array();
$arguments621['key'] = NULL;
$arguments621['id'] = NULL;
$arguments621['default'] = NULL;
$arguments621['arguments'] = NULL;
$arguments621['extensionName'] = NULL;
$arguments621['languageKey'] = NULL;
$arguments621['alternativeLanguageKeys'] = NULL;
$arguments621['key'] = 'resetPassword.label';
$arguments617['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);
// Rendering Array
$array623 = array();
$array623['severity'] = 'warning';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['key'] = NULL;
$arguments624['id'] = NULL;
$arguments624['default'] = NULL;
$arguments624['arguments'] = NULL;
$arguments624['extensionName'] = NULL;
$arguments624['languageKey'] = NULL;
$arguments624['alternativeLanguageKeys'] = NULL;
$arguments624['key'] = 'resetPassword.confirmation.header';
$array623['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments626 = array();
$arguments626['key'] = NULL;
$arguments626['id'] = NULL;
$arguments626['default'] = NULL;
$arguments626['arguments'] = NULL;
$arguments626['extensionName'] = NULL;
$arguments626['languageKey'] = NULL;
$arguments626['alternativeLanguageKeys'] = NULL;
$arguments626['key'] = 'resetPassword.confirmation.text';
// Rendering Array
$array628 = array();
$array629 = array (
);$array628['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.email', $array629);
$arguments626['arguments'] = $array628;
$array623['bs-content'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments630 = array();
$arguments630['key'] = NULL;
$arguments630['id'] = NULL;
$arguments630['default'] = NULL;
$arguments630['arguments'] = NULL;
$arguments630['extensionName'] = NULL;
$arguments630['languageKey'] = NULL;
$arguments630['alternativeLanguageKeys'] = NULL;
$arguments630['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel';
$array623['button-close-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);
$arguments617['data'] = $array623;

$output616 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output616 .= '
                ';
return $output616;
};
$arguments614['__elseClosures'][] = function() use ($renderingContext, $self) {
$output635 = '';

$output635 .= '
                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments636 = array();
$arguments636['identifier'] = NULL;
$arguments636['size'] = 'small';
$arguments636['overlay'] = NULL;
$arguments636['state'] = 'default';
$arguments636['alternativeMarkupIdentifier'] = NULL;
$arguments636['identifier'] = 'empty-empty';

$output635 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output635 .= '</span>
                ';
return $output635;
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext);

$output373 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
$output674 = '';

$output674 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments675 = array();
$arguments675['identifier'] = NULL;
$arguments675['size'] = 'small';
$arguments675['overlay'] = NULL;
$arguments675['state'] = 'default';
$arguments675['alternativeMarkupIdentifier'] = NULL;
$arguments675['identifier'] = 'actions-system-options-view';
$arguments675['size'] = 'small';

$output674 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);

$output674 .= '
            ';
return $output674;
};
$arguments668 = array();
$arguments668['additionalAttributes'] = NULL;
$arguments668['data'] = NULL;
$arguments668['aria'] = NULL;
$arguments668['class'] = NULL;
$arguments668['dir'] = NULL;
$arguments668['id'] = NULL;
$arguments668['lang'] = NULL;
$arguments668['style'] = NULL;
$arguments668['title'] = NULL;
$arguments668['accesskey'] = NULL;
$arguments668['tabindex'] = NULL;
$arguments668['onclick'] = NULL;
$arguments668['name'] = NULL;
$arguments668['rel'] = NULL;
$arguments668['rev'] = NULL;
$arguments668['target'] = NULL;
$arguments668['action'] = NULL;
$arguments668['controller'] = NULL;
$arguments668['extensionName'] = NULL;
$arguments668['pluginName'] = NULL;
$arguments668['pageUid'] = NULL;
$arguments668['pageType'] = NULL;
$arguments668['noCache'] = NULL;
$arguments668['section'] = NULL;
$arguments668['format'] = NULL;
$arguments668['linkAccessRestrictedPages'] = NULL;
$arguments668['additionalParams'] = NULL;
$arguments668['absolute'] = NULL;
$arguments668['addQueryString'] = NULL;
$arguments668['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments668['addQueryStringMethod'] = NULL;
$arguments668['arguments'] = NULL;
$arguments668['action'] = 'show';
// Rendering Array
$array670 = array();
$array671 = array (
);$array670['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array671);
$arguments668['arguments'] = $array670;
$arguments668['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments672 = array();
$arguments672['key'] = NULL;
$arguments672['id'] = NULL;
$arguments672['default'] = NULL;
$arguments672['arguments'] = NULL;
$arguments672['extensionName'] = NULL;
$arguments672['languageKey'] = NULL;
$arguments672['alternativeLanguageKeys'] = NULL;
$arguments672['key'] = 'details';
$arguments668['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments672, $renderChildrenClosure673, $renderingContext);

$output373 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output373 .= '
            <a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['key'] = NULL;
$arguments677['id'] = NULL;
$arguments677['default'] = NULL;
$arguments677['arguments'] = NULL;
$arguments677['extensionName'] = NULL;
$arguments677['languageKey'] = NULL;
$arguments677['alternativeLanguageKeys'] = NULL;
$arguments677['key'] = 'info';

$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext)]);

$output373 .= '" data-dispatch-action="TYPO3.InfoWindow.showItem" data-dispatch-args-list="be_users,';
$array679 = array (
);
$output373 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array679)]);

$output373 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['identifier'] = NULL;
$arguments680['size'] = 'small';
$arguments680['overlay'] = NULL;
$arguments680['state'] = 'default';
$arguments680['alternativeMarkupIdentifier'] = NULL;
$arguments680['identifier'] = 'actions-document-info';

$output373 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output373 .= '
            </a>
        </div>
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output711 = '';

$output711 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure713 = function() use ($renderingContext, $self) {
$output714 = '';

$output714 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['identifier'] = NULL;
$arguments722['size'] = 'small';
$arguments722['overlay'] = NULL;
$arguments722['state'] = 'default';
$arguments722['alternativeMarkupIdentifier'] = NULL;
$arguments722['identifier'] = 'actions-remove';
$arguments722['size'] = 'small';

$output721 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output721 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['key'] = NULL;
$arguments724['id'] = NULL;
$arguments724['default'] = NULL;
$arguments724['arguments'] = NULL;
$arguments724['extensionName'] = NULL;
$arguments724['languageKey'] = NULL;
$arguments724['alternativeLanguageKeys'] = NULL;
$arguments724['key'] = 'compare';

$output721 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext)]);

$output721 .= '
                    ';
return $output721;
};
$arguments715 = array();
$arguments715['additionalAttributes'] = NULL;
$arguments715['data'] = NULL;
$arguments715['aria'] = NULL;
$arguments715['class'] = NULL;
$arguments715['dir'] = NULL;
$arguments715['id'] = NULL;
$arguments715['lang'] = NULL;
$arguments715['style'] = NULL;
$arguments715['title'] = NULL;
$arguments715['accesskey'] = NULL;
$arguments715['tabindex'] = NULL;
$arguments715['onclick'] = NULL;
$arguments715['name'] = NULL;
$arguments715['rel'] = NULL;
$arguments715['rev'] = NULL;
$arguments715['target'] = NULL;
$arguments715['action'] = NULL;
$arguments715['controller'] = NULL;
$arguments715['extensionName'] = NULL;
$arguments715['pluginName'] = NULL;
$arguments715['pageUid'] = NULL;
$arguments715['pageType'] = NULL;
$arguments715['noCache'] = NULL;
$arguments715['section'] = NULL;
$arguments715['format'] = NULL;
$arguments715['linkAccessRestrictedPages'] = NULL;
$arguments715['additionalParams'] = NULL;
$arguments715['absolute'] = NULL;
$arguments715['addQueryString'] = NULL;
$arguments715['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments715['addQueryStringMethod'] = NULL;
$arguments715['arguments'] = NULL;
$arguments715['action'] = 'removeFromCompareList';
// Rendering Array
$array717 = array();
$array718 = array (
);$array717['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array718);
$arguments715['arguments'] = $array717;
$arguments715['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['key'] = NULL;
$arguments719['id'] = NULL;
$arguments719['default'] = NULL;
$arguments719['arguments'] = NULL;
$arguments719['extensionName'] = NULL;
$arguments719['languageKey'] = NULL;
$arguments719['alternativeLanguageKeys'] = NULL;
$arguments719['key'] = 'compare';
$arguments715['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output714 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments715, $renderChildrenClosure716, $renderingContext);

$output714 .= '
                ';
return $output714;
};
$arguments712 = array();

$output711 .= '';

$output711 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$output728 = '';

$output728 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure730 = function() use ($renderingContext, $self) {
$output735 = '';

$output735 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments736 = array();
$arguments736['identifier'] = NULL;
$arguments736['size'] = 'small';
$arguments736['overlay'] = NULL;
$arguments736['state'] = 'default';
$arguments736['alternativeMarkupIdentifier'] = NULL;
$arguments736['identifier'] = 'actions-add';
$arguments736['size'] = 'small';

$output735 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments736, $renderChildrenClosure737, $renderingContext);

$output735 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['key'] = NULL;
$arguments738['id'] = NULL;
$arguments738['default'] = NULL;
$arguments738['arguments'] = NULL;
$arguments738['extensionName'] = NULL;
$arguments738['languageKey'] = NULL;
$arguments738['alternativeLanguageKeys'] = NULL;
$arguments738['key'] = 'compare';

$output735 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext)]);

$output735 .= '
                    ';
return $output735;
};
$arguments729 = array();
$arguments729['additionalAttributes'] = NULL;
$arguments729['data'] = NULL;
$arguments729['aria'] = NULL;
$arguments729['class'] = NULL;
$arguments729['dir'] = NULL;
$arguments729['id'] = NULL;
$arguments729['lang'] = NULL;
$arguments729['style'] = NULL;
$arguments729['title'] = NULL;
$arguments729['accesskey'] = NULL;
$arguments729['tabindex'] = NULL;
$arguments729['onclick'] = NULL;
$arguments729['name'] = NULL;
$arguments729['rel'] = NULL;
$arguments729['rev'] = NULL;
$arguments729['target'] = NULL;
$arguments729['action'] = NULL;
$arguments729['controller'] = NULL;
$arguments729['extensionName'] = NULL;
$arguments729['pluginName'] = NULL;
$arguments729['pageUid'] = NULL;
$arguments729['pageType'] = NULL;
$arguments729['noCache'] = NULL;
$arguments729['section'] = NULL;
$arguments729['format'] = NULL;
$arguments729['linkAccessRestrictedPages'] = NULL;
$arguments729['additionalParams'] = NULL;
$arguments729['absolute'] = NULL;
$arguments729['addQueryString'] = NULL;
$arguments729['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments729['addQueryStringMethod'] = NULL;
$arguments729['arguments'] = NULL;
$arguments729['action'] = 'addToCompareList';
// Rendering Array
$array731 = array();
$array732 = array (
);$array731['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array732);
$arguments729['arguments'] = $array731;
$arguments729['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['key'] = NULL;
$arguments733['id'] = NULL;
$arguments733['default'] = NULL;
$arguments733['arguments'] = NULL;
$arguments733['extensionName'] = NULL;
$arguments733['languageKey'] = NULL;
$arguments733['alternativeLanguageKeys'] = NULL;
$arguments733['key'] = 'compare';
$arguments729['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);

$output728 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments729, $renderChildrenClosure730, $renderingContext);

$output728 .= '
                ';
return $output728;
};
$arguments726 = array();
$arguments726['if'] = NULL;

$output711 .= '';

$output711 .= '
            ';
return $output711;
};
$arguments682 = array();
$arguments682['then'] = NULL;
$arguments682['else'] = NULL;
$arguments682['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array708 = array();
$array709 = array (
);$array708['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array709);

$expression710 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments682['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression710(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array708)
					),
					$renderingContext
				);
$arguments682['__thenClosure'] = function() use ($renderingContext, $self) {
$output684 = '';

$output684 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
$output691 = '';

$output691 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments692 = array();
$arguments692['identifier'] = NULL;
$arguments692['size'] = 'small';
$arguments692['overlay'] = NULL;
$arguments692['state'] = 'default';
$arguments692['alternativeMarkupIdentifier'] = NULL;
$arguments692['identifier'] = 'actions-remove';
$arguments692['size'] = 'small';

$output691 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output691 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments694 = array();
$arguments694['key'] = NULL;
$arguments694['id'] = NULL;
$arguments694['default'] = NULL;
$arguments694['arguments'] = NULL;
$arguments694['extensionName'] = NULL;
$arguments694['languageKey'] = NULL;
$arguments694['alternativeLanguageKeys'] = NULL;
$arguments694['key'] = 'compare';

$output691 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext)]);

$output691 .= '
                    ';
return $output691;
};
$arguments685 = array();
$arguments685['additionalAttributes'] = NULL;
$arguments685['data'] = NULL;
$arguments685['aria'] = NULL;
$arguments685['class'] = NULL;
$arguments685['dir'] = NULL;
$arguments685['id'] = NULL;
$arguments685['lang'] = NULL;
$arguments685['style'] = NULL;
$arguments685['title'] = NULL;
$arguments685['accesskey'] = NULL;
$arguments685['tabindex'] = NULL;
$arguments685['onclick'] = NULL;
$arguments685['name'] = NULL;
$arguments685['rel'] = NULL;
$arguments685['rev'] = NULL;
$arguments685['target'] = NULL;
$arguments685['action'] = NULL;
$arguments685['controller'] = NULL;
$arguments685['extensionName'] = NULL;
$arguments685['pluginName'] = NULL;
$arguments685['pageUid'] = NULL;
$arguments685['pageType'] = NULL;
$arguments685['noCache'] = NULL;
$arguments685['section'] = NULL;
$arguments685['format'] = NULL;
$arguments685['linkAccessRestrictedPages'] = NULL;
$arguments685['additionalParams'] = NULL;
$arguments685['absolute'] = NULL;
$arguments685['addQueryString'] = NULL;
$arguments685['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments685['addQueryStringMethod'] = NULL;
$arguments685['arguments'] = NULL;
$arguments685['action'] = 'removeFromCompareList';
// Rendering Array
$array687 = array();
$array688 = array (
);$array687['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array688);
$arguments685['arguments'] = $array687;
$arguments685['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['key'] = NULL;
$arguments689['id'] = NULL;
$arguments689['default'] = NULL;
$arguments689['arguments'] = NULL;
$arguments689['extensionName'] = NULL;
$arguments689['languageKey'] = NULL;
$arguments689['alternativeLanguageKeys'] = NULL;
$arguments689['key'] = 'compare';
$arguments685['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output684 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output684 .= '
                ';
return $output684;
};
$arguments682['__elseClosures'][] = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments704 = array();
$arguments704['identifier'] = NULL;
$arguments704['size'] = 'small';
$arguments704['overlay'] = NULL;
$arguments704['state'] = 'default';
$arguments704['alternativeMarkupIdentifier'] = NULL;
$arguments704['identifier'] = 'actions-add';
$arguments704['size'] = 'small';

$output703 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments704, $renderChildrenClosure705, $renderingContext);

$output703 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments706 = array();
$arguments706['key'] = NULL;
$arguments706['id'] = NULL;
$arguments706['default'] = NULL;
$arguments706['arguments'] = NULL;
$arguments706['extensionName'] = NULL;
$arguments706['languageKey'] = NULL;
$arguments706['alternativeLanguageKeys'] = NULL;
$arguments706['key'] = 'compare';

$output703 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext)]);

$output703 .= '
                    ';
return $output703;
};
$arguments697 = array();
$arguments697['additionalAttributes'] = NULL;
$arguments697['data'] = NULL;
$arguments697['aria'] = NULL;
$arguments697['class'] = NULL;
$arguments697['dir'] = NULL;
$arguments697['id'] = NULL;
$arguments697['lang'] = NULL;
$arguments697['style'] = NULL;
$arguments697['title'] = NULL;
$arguments697['accesskey'] = NULL;
$arguments697['tabindex'] = NULL;
$arguments697['onclick'] = NULL;
$arguments697['name'] = NULL;
$arguments697['rel'] = NULL;
$arguments697['rev'] = NULL;
$arguments697['target'] = NULL;
$arguments697['action'] = NULL;
$arguments697['controller'] = NULL;
$arguments697['extensionName'] = NULL;
$arguments697['pluginName'] = NULL;
$arguments697['pageUid'] = NULL;
$arguments697['pageType'] = NULL;
$arguments697['noCache'] = NULL;
$arguments697['section'] = NULL;
$arguments697['format'] = NULL;
$arguments697['linkAccessRestrictedPages'] = NULL;
$arguments697['additionalParams'] = NULL;
$arguments697['absolute'] = NULL;
$arguments697['addQueryString'] = NULL;
$arguments697['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments697['addQueryStringMethod'] = NULL;
$arguments697['arguments'] = NULL;
$arguments697['action'] = 'addToCompareList';
// Rendering Array
$array699 = array();
$array700 = array (
);$array699['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array700);
$arguments697['arguments'] = $array699;
$arguments697['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments701 = array();
$arguments701['key'] = NULL;
$arguments701['id'] = NULL;
$arguments701['default'] = NULL;
$arguments701['arguments'] = NULL;
$arguments701['extensionName'] = NULL;
$arguments701['languageKey'] = NULL;
$arguments701['alternativeLanguageKeys'] = NULL;
$arguments701['key'] = 'compare';
$arguments697['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
                ';
return $output696;
};

$output373 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output373 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments740 = array();
$arguments740['backendUser'] = NULL;
$array742 = array (
);$arguments740['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array742);

$output373 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments740, $renderChildrenClosure741, $renderingContext);

$output373 .= '
        </div>
    </td>
</tr>
';
return $output373;
};
$arguments371 = array();
$arguments371['name'] = NULL;
$arguments371['name'] = 'list_row';

$output370 .= NULL;

$output370 .= '
</html>
';

return $output370;
}


}
#