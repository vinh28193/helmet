<?php
namespace app\modules\manage\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Widget;
use yii\bootstrap\Modal;
/**
 * Class PreviewWidget
 * @package app\modules\manage\widgets
 */
class PreviewWidget extends Widget
{
	/**
 	* @var string $tag
 	*/
   	public $tag = 'button';

   	/**
 	* @var string $tagLabel
 	*/
   	public $tagLabel = 'Preview';

   	/**
 	* @var array $tagOptions
 	*/
   	public $tagOptions = [];

   	/**
     * @var string $modalId 
     */
   	public $modalId = 'modal-preview';

   	/**
     * @var mixed $withContent default is false,render view via Ajax
     */
   	public $withContent = false;

   	/**
     * @var array $modalOptions
     * @see yii\bootstrap\Modal
     */
   	public $modalOptions = [];

   	public $dataUrl = '#';
   	public $dataToggle ='modal';
   	public $dataTrigger = 'click';
   	public $tableForm;
   	public $modelClass;

   	public function init(){
   		parent::init();
   		$this->registerTag();
   		$this->registerModal();
   		if($this->withContent == false){
   			$this->registerScript();
   		}
   	}

   	public function run(){
   		return Html::tag($this->tag,$this->tagLabel,$this->tagOptions);
   	}

   	public function registerTag(){
   		$defaultTagOption = [
   			'type' => 'button',
   			'class'=> "btn btn-primary",
   			'data-toggle'=> "modal",
   			'data-target'=> '#'.$this->modalId,
   		];
   		$this->tagOptions = ArrayHelper::merge($defaultTagOption,$this->tagOptions);
   	}
   	public function registerModal(){
   		if(isset($this->modalOptions['id'])){
   			ArrayHelper::remove($this->modalOptions,'id');
   		}
   		if(isset($this->modalOptions['toggleButton'])){
   			ArrayHelper::remove($this->modalOptions,'toggleButton');
   		}
   		$defaultModalOption = [
   			'id' => $this->modalId,
   			'size' => 'modal-lg',
		    //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
   		];
   		$this->modalOptions = ArrayHelper::merge($defaultModalOption,$this->modalOptions);
   		Modal::begin($this->modalOptions);
   		echo $this->withContent ? $this->withContent : Html::tag('div',null,['id' => 'modalContent']);
   		Modal::end();
   	}
   	public function registerScript(){
   		$fromClass = $this->tableForm;
   		$form = $fromClass->getId();
   		$script =<<<JS

jQuery('$this->tag[data-toggle ="$this->dataToggle"]').on("$this->dataTrigger", function(e) {
   	var modal = jQuery('#{$this->modalId}');
   	var form = jQuery('#{$form}');
   	if(form == 'underfind'){

    }
    if (modal.data('bs.modal').isShown) {
		modal.find('#modalContent').load('$this->dataUrl',form.serialize());
    } else {    
        modal.modal('show').find('#modalContent').load('$this->dataUrl',form.serialize());
    }
});
JS;
	$this->view->registerJs($script);
   	}
}
