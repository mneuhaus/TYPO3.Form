<?php
namespace TYPO3\Form\FormElements;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Form".            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * A date picker form element
 */
class DatePicker extends \TYPO3\Form\Core\Model\AbstractFormElement {

	/**
	 * @return void
	 */
	public function initializeFormElement() {
		$this->setDataType('DateTime');
	}

	/**
	 * @param \TYPO3\Form\Core\Runtime\FormRuntime $formRuntime
	 * @param mixed $elementValue
	 * @return void
	 */
	public function onSubmit(\TYPO3\Form\Core\Runtime\FormRuntime $formRuntime, &$elementValue) {
		if (!empty($elementValue['date']) && $elementValue['date'] !== '') {
		} else {
			$elementValue['date'] = '';
		}
	}
}
?>