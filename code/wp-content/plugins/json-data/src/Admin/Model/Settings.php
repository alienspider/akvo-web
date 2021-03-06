<?php
namespace JsonData\Admin\Model;

use JsonData\Admin\Form as JDAdminForm;
use JsonData\Config as JDConfig;
use JsonData\Common\Model\Feed as JDFeed;
/**
 * Description of Settings
 *
 * @author Jayawi Perera
 */
class Settings {

	public function manage () {

		$oForm = new JDAdminForm\Settings(JDAdminForm\Settings::CONTEXT_CREATE);

		if (empty($_POST)) {

			$bServerCron = get_option(JDConfig::OPTION_NAME_CRON_SETTINGS);
			$sEmail = get_option(JDConfig::OPTION_NAME_DEBUG_EMAIL);
			$aPopulateData = array(
				'radioServerCron' => $bServerCron,
				'textEmail' => $sEmail,
			);
			$oForm->populate($aPopulateData);

		} else {

			if ($oForm->isValid($_POST)) {

				$aFormValues = $oForm->getValues();

				$sCron = $aFormValues['radioServerCron'];
				$sEmail = $aFormValues['textEmail'];
				update_option(JDConfig::OPTION_NAME_CRON_SETTINGS, $sCron);
				update_option(JDConfig::OPTION_NAME_DEBUG_EMAIL, $sEmail);
                $oFeed = new JDFeed();
                $oFeed->scheduleCron();
			}

		}


		$aContent = array(
			'form' => $oForm,
		);

		return $aContent;
	}

}