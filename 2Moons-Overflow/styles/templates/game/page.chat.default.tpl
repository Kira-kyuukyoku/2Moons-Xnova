{block name="title" prepend}{/block}{block name="content"}<div class="row"><div class="span9"><h3 class="spec">{$LNG.lm_chat}</h3><div class="tabbable"><div class="tab-content"><div class="tab-pane fade in active" id="tab1"><iframe src="./chat/index.php?action={$smarty.get.action|default:''|escape:'html'}" style="border: 0px;width:100%;height:800px;" ALLOWTRANSPARENCY="true"></iframe></div></div>{/block}